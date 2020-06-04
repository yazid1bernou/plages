
var key = 'pk.eyJ1IjoieWF6aWQxYmVybm91IiwiYSI6ImNrMDJjZDkzMzBtYmczaWxjOXg4eHgzcTcifQ.5m8D3g8N3CfVzfHDgDejVA';


// une partie pour popup ---------------------------------------------------
var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');

var overlay = new ol.Overlay({
  element: container,
  autoPan: true,
  autoPanAnimation: {
    duration: 250
  }
});


closer.onclick = function() {
  overlay.setPosition(undefined);
  closer.blur();
  return false;
};
//---------------------------------------------------------------------------------------------------

//  font OpenStreetMap -----------------------------------------
var osm =    new ol.source.OSM() ;
//---- font Bing -------------------------------------------------
var bing =   new ol.source.BingMaps({
    imagerySet: 'Aerial',
    key: 'AtmXhaDRnHrqgTyvFqGFhfBBE0npllp4H012veoitcidPAKqpzPllx71kUtPoB88'

});

var font =  new ol.layer.Tile({
  source : sourceActual
 }) ;

 // choix font openstreetmap ou bing ------------------------------------------
 var sourceActual  =  bing ;
 var sourceSelect =  document.getElementById('source') ;
 var sourceOption =  '' ;

function choix_source () {

   sourceOption = sourceSelect.value;
    switch (sourceOption) {
    case 'osm' :
      sourceActual  =  osm  ;
    break ;
     case 'bing' :
      sourceActual  =  bing ;
     break ;

  }
  font.setSource(sourceActual) ;
 }
  sourceSelect.addEventListener('change', choix_source );






//-----recuperer la couche limite medea ------------------------------------------------------------
var limite_medea  =   new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://localhost:8080/geoserver/projet_medea/wms',
    params: {'LAYERS':'projet_medea:LIMITE_WILAYA' },


  })
}) ;

// couche pour  recuperer  chemin fer algerie --------------------------------
var chemin_fer_algerie  =   new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://localhost:8080/geoserver/projet_sig/wms',
    params: {'LAYERS':'projet_sig:chemin_fer_algerie' },


  })
}) ;
// couche pour  recuperer  autoroute est ouest  --------------------------------
var autoroute_est_ouest_bouira  =   new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://localhost:8080/geoserver/projet_sig/wms',
    params: {'LAYERS':'projet_sig:AUTOROUTE_EST-OUEST' },


  })
}) ;

// couche pour recuperer communes bouira -----------------------------------
var  communes_bouira =  new ol.layer.Image({
  source: new ol.source.ImageWMS({
    url: 'http://localhost:8080/geoserver/projet_sig/wms',
    params: {'LAYERS':'projet_sig:commune_bouira' },

  })
}) ;
// la declaration des variables pour les wilaya -----------------------
var algerie = ol.proj.fromLonLat([1.967, 34.823]);
var bouira = ol.proj.fromLonLat([4.0128, 36.0380]);
var medea = ol.proj.fromLonLat([35.9758, 2.8839]);
var alger = ol.proj.fromLonLat([4.0128, 36.0380]);


//------la variable  view ---------------------------------------------------------------

var view = new ol.View({
  center: algerie,
  zoom: 7 ,
});

//---------une partie pour measure distance et surface ----------------------------------------------
//----------------------------------------------------------------------------------------------------

var source = new ol.source.Vector();

var vector = new ol.layer.Vector({
  source: source,
  style: new ol.style.Style({
    fill: new ol.style.Fill({
      color: 'rgba(255, 255, 255, 0.2)'
    }),
    stroke: new ol.style.Stroke({
      color: '#ffcc33',
      width: 2
    }),
    image: new ol.style.Circle({
      radius: 7,
      fill: new ol.style.Fill({
        color: '#ffcc33'
      })
    })
  })
});

var sketch;

var helpTooltipElement;

var helpTooltip;

var measureTooltipElement;

var measureTooltip;

var continuePolygonMsg = ' ';

var continueLineMsg = ' ';
var pointerMoveHandler = function(evt) {
  if (evt.dragging) {
    return;
  }
  /** @type {string} */
  var helpMsg = 'Click ici pour commencer ';

  if (sketch) {
    var geom = sketch.getGeometry();
    if (geom instanceof ol.geom.Polygon) {
      helpMsg = continuePolygonMsg;
    } else if (geom instanceof ol.geom.LineString) {
      helpMsg = continueLineMsg;
    }
  }

  helpTooltipElement.innerHTML = helpMsg;
  helpTooltip.setPosition(evt.coordinate);

  helpTooltipElement.classList.remove('hidden');
};





// la variable principale map --------------------------------------
var   map = new ol.Map({

       overlays: [overlay],
        target: 'map',
      
        layers: [
          font
           ,
          new ol.layer.Group({
       layers: [
       limite_medea
       ,
       chemin_fer_algerie ,
       autoroute_est_ouest_bouira ,
       communes_bouira ,
         new  ol.layer.Tile({
           source: new ol.source.TileJSON({
             url: 'https://api.tiles.mapbox.com/v4/mapbox.world-borders-light.json?secure&access_token=' + key,
             crossOrigin: 'anonymous'
           })
         })
       ]
     }) ,
     vector
        ],
        view: view
      });



//---------une partie pour measure distance et surface -----------------------------
map.on('pointermove', pointerMoveHandler);

map.getViewport().addEventListener('mouseout', function() {
  helpTooltipElement.classList.add('hidden');
});

var typeSelect = document.getElementById('type');

var draw; // global so we can remove it later


/**
 * Format length output.
 * @param {LineString} line The line.
 * @return {string} The formatted length.
 */
var formatLength = function(line) {
  var length = ol.sphere.getLength(line);
  var output;
  if (length > 100) {
    output = (Math.round(length / 1000 * 100) / 100) +
        ' ' + 'km';
  } else {
    output = (Math.round(length * 100) / 100) +
        ' ' + 'm';
  }
  return output;
};


/**
 * Format area output.
 * @param {Polygon} polygon The polygon.
 * @return {string} Formatted area.
 */
var formatArea = function(polygon) {
  var area = ol.sphere.getArea(polygon);
  var output;
  if (area > 10000) {
    output = (Math.round(area / 1000000 * 100) / 100) +
        ' ' + 'km<sup>2</sup>';
  } else {
    output = (Math.round(area * 100) / 100) +
        ' ' + 'm<sup>2</sup>';
  }
  return output;
};

function addInteraction() {
  if (typeSelect.value != 'none') {


  var type = (typeSelect.value == 'area' ? 'Polygon' : 'LineString');
  draw = new ol.interaction.Draw({
    source: source,
    type: type,
    style: new ol.style.Style({
      fill: new ol.style.Fill({
        color: 'rgba(255, 255, 255, 0.2)'
      }),
      stroke: new ol.style.Stroke({
        color: 'rgba(0, 0, 0, 0.5)',
        lineDash: [10, 10],
        width: 2
      }),
      image: new ol.style.Circle({
        radius: 5,
        stroke: new ol.style.Stroke({
          color: 'rgba(0, 0, 0, 0.7)'
        }),
        fill: new ol.style.Fill({
          color: 'rgba(255, 255, 255, 0.2)'
        })
      })
    })
  });
  map.addInteraction(draw);

  createMeasureTooltip();
  createHelpTooltip();

  var listener;
  draw.on('drawstart',
    function(evt) {
      // set sketch
      sketch = evt.feature;


      var tooltipCoord = evt.coordinate;

      listener = sketch.getGeometry().on('change', function(evt) {
        var geom = evt.target;
        var output;
        if (geom instanceof ol.geom.Polygon) {
          output = formatArea(geom);
          tooltipCoord = geom.getInteriorPoint().getCoordinates();
        } else if (geom instanceof ol.geom.LineString) {
          output = formatLength(geom);
          tooltipCoord = geom.getLastCoordinate();
        }
        measureTooltipElement.innerHTML = output;
        measureTooltip.setPosition(tooltipCoord);
      });
    });

  draw.on('drawend',
    function() {
      measureTooltipElement.className = 'ol-tooltip ol-tooltip-static';
      measureTooltip.setOffset([0, -7]);
      // unset sketch
      sketch = null;
      // unset tooltip so that a new one can be created
      measureTooltipElement = null;
      createMeasureTooltip();
      ol.Observable.unByKey(listener);
    });

  }
}


/**
 * Creates a new help tooltip
 */
function createHelpTooltip() {
  if (helpTooltipElement) {
    helpTooltipElement.parentNode.removeChild(helpTooltipElement);
  }
  helpTooltipElement = document.createElement('div');
  helpTooltipElement.className = 'ol-tooltip hidden';
  helpTooltip = new ol.Overlay({
    element: helpTooltipElement,
    offset: [15, 0],
    positioning: 'center-left'
  });
  map.addOverlay(helpTooltip);
}


/**
 * Creates a new measure tooltip
 */
function createMeasureTooltip() {
  if (measureTooltipElement) {
    measureTooltipElement.parentNode.removeChild(measureTooltipElement);
  }
  measureTooltipElement = document.createElement('div');
  measureTooltipElement.className = 'ol-tooltip ol-tooltip-measure';
  measureTooltip = new ol.Overlay({
    element: measureTooltipElement,
    offset: [0, -15],
    positioning: 'bottom-center'
  });
  map.addOverlay(measureTooltip);
}


/**
 * Let user change the geometry type.
 */
typeSelect.onchange = function() {
  map.removeInteraction(draw);
  addInteraction();
};

addInteraction();

//---------------une partie pour le choix des couches ---------------------------
//  une fonction pour le choix des  couches -------------------------------------


      function bindInputs(layerid, layer) {
        var visibilityInput = $(layerid + ' input.visible');
        visibilityInput.on('change', function() {
          layer.setVisible(this.checked);
        });
        visibilityInput.prop('checked', layer.getVisible());

        var opacityInput = $(layerid + ' input.opacity');
        opacityInput.on('input change', function() {
          layer.setOpacity(parseFloat(this.value));
        });
        opacityInput.val(String(layer.getOpacity()));
      }
      map.getLayers().forEach(function(layer, i) {
        bindInputs('#layer' + i, layer);
        if (layer instanceof ol.layer.Group) {
          layer.getLayers().forEach(function(sublayer, j) {
            bindInputs('#layer' + i + j, sublayer);
          });
        }
      });

      $('#layertree li > span').click(function() {
        $(this).siblings('fieldset').toggle();
      }).siblings('fieldset').hide();
//-----------------------------------------------------------------------------------------------------------

// une partie pour la recherche d'une zone ( zoom sur une zone par des coordonnes) ----------------------------------------

function onClick(id, callback) {
  document.getElementById(id).addEventListener('click', callback);
}

onClick('algerie', function() {
  view.animate({
    center: algerie,
    duration: 2000 ,
    zoom : 5
  });
});

onClick('bouira', function() {
  view.animate({
    center: bouira,
    duration: 2000 ,
    zoom : 9
  });
});

onClick('medea', function() {
  view.animate({
    center: medea,
    duration: 2000 ,
    zoom : 9
  });
});

//-----------------------------------------------------------------------------------------
