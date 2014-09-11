<?php

namespace Mamba\view\component;

use NeoPHP\mvc\MVCApplication;
use NeoPHP\web\html\HTMLView;

class MapOL_Default extends MapOL
{
    public function __construct(HTMLView $view, array $attributes = array())
    {
        parent::__construct($view, $attributes);
        $this->addIconsSupport();
        $this->addPopupSupport();
        $this->addLayer((object)array("type"=>"tile", "source"=>(object)array("type"=>"mapQuest", "layerType"=>"osm")));
    }
    
    public function adjustViewOnLayer ($layerName, $buffer=200)
    {
        $this->addPostConfigScript('
            var layers = map.getLayers();
            layers.forEach(function (layer)
            {
                if (layer.getProperties().name == "' . $layerName . '")
                {
                    var extent = layer.getSource().getExtent();
                    map.getView().fitExtent(ol.extent.buffer(extent, ' . $buffer . '), map.getSize());
                }
            });
        ');
    }
    
    public function addIconsSupport ($featureIconAttribute = "iconId")
    {
        $this->view->addScript('
            function getIconStyle (iconId)
            {
                if (!document.iconStyles)
                    document.iconStyles = [];
                if (!document.iconStyles[iconId])
                {
                    document.iconStyles[iconId] = new ol.style.Style(
                    {
                        image: new ol.style.Icon(
                        {
                            src: "' . MVCApplication::getInstance()->getBaseUrl() . 'images/map/icons/" + iconId + ".png",
                            anchor: [16, 36],
                            anchorXUnits: "pixels",
                            anchorYUnits: "pixels"
                        })
                    });
                }
                return document.iconStyles[iconId];
            }
            
            var iconStyle = function(feature, resolution) 
            {
                var iconId = feature.get("' . $featureIconAttribute . '");
                return [getIconStyle(iconId)];
            }
        ');
    }
    
    public function addPopupSupport ($featureDescriptionAttribute = "description")
    {
        $this->addPostConfigScript('
            map.on("click", function(evt) 
            {
                if (map.popupElement == null)
                {
                    map.popupElement = $("<div id=\"popup\"></div>");
                    $(map.getTarget()).append(map.popupElement);

                    map.popupOverlay = new ol.Overlay(
                    {
                        element: map.popupElement.get(0),
                        positioning: "bottom-center",
                        stopEvent: false
                    });
                    map.addOverlay(map.popupOverlay);
                }
                map.popupElement.popover("destroy");
                var featureFound = map.forEachFeatureAtPixel(evt.pixel, function(feature, layer) 
                {
                    var popupOffset = 0;
                    var style = feature.getStyle() || layer.getStyle();
                    if (style != null)
                    {
                        if ((typeof style === "function"))
                        {
                            style = style(feature);
                            style = style[0];
                        }
                        if ((typeof style === "object"))
                        {
                            var image = style.getImage();
                            if (image != null)
                            {
                                var imageAnchor = image.getAnchor();
                                if (imageAnchor != null)
                                    popupOffset = imageAnchor[1] + 2;
                            }
                        }
                    }
                    map.popupElement.css("padding-bottom", popupOffset);

                    var geometry = feature.getGeometry();
                    var coord = geometry.getCoordinates();
                    map.popupOverlay.setPosition(coord);
                    map.popupElement.popover(
                    {
                        "placement": "top",
                        "html": true,
                        "content": feature.get("' . $featureDescriptionAttribute . '")
                    });
                    map.popupElement.popover("show");
                    return true; 
                });
            });

            $(map.getViewport()).on("mousemove", function(e) 
            {
                var pixel = map.getEventPixel(e.originalEvent);
                var hit = map.forEachFeatureAtPixel(pixel, function(feature, layer) { return true; });
                map.getTarget().style.cursor = (hit)? "pointer" : "";
            });
        ');
        $this->view->addStyle('
            .popover { max-width: 400px; }
            .popover-content { white-space: nowrap; }
        ');
    }
}

?>