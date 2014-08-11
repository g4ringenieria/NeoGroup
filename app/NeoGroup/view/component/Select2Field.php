<?php

namespace NeoGroup\view\component;

use NeoPHP\web\html\HTMLComponent;
use NeoPHP\web\html\HTMLView;
use NeoPHP\web\html\Tag;
use stdClass;

class Select2Field extends HTMLComponent
{
    const SOURCETYPE_LOCAL = "local";
    const SOURCETYPE_REMOTE = "remote";
    
    private $id;
    private $name;
    private $view;
    private $source;
    
    public function __construct(HTMLView $view)
    {
        static $idCounter = 0;
        $this->id = "selectField_" . ($idCounter++);
        $this->name = $this->id;
        $this->view = $view;
        $this->source = new stdClass();
        $this->source->type = self::SOURCETYPE_LOCAL;
        $this->source->valueField = "id";
        $this->source->displayField = "description";
        $this->source->data = array();
    }
    
    public function setSourceType ($sourceType)
    {
        $this->source->type = $sourceType;
    }
    
    public function setValueField ($valueField)
    {
        $this->source->valueField = $valueField;
    }
    
    public function setDisplayField ($displayField)
    {
        $this->source->displayField = $displayField;
    }
    
    public function setDisplayTemplate ($displayTemplate)
    {
        $this->source->displayTemplate = $displayTemplate;
    }
    
    public function setRemoteUrl ($remoteUrl)
    {
        $this->source->url = $remoteUrl;
    }
    
    public function setName ($name)
    {
        $this->name = $name;
    }
    
    public function setOptions (array $options)
    {
        foreach ($options as $id=>$option)
        {
            if ($option instanceof stdClass)
                $this->addOption($option);
            else
                $this->addOption($id, $option);
        }
    }
    
    public function addOption ($option, $optionValue=null)
    {
        if ($option instanceof stdClass)
        {
            $this->source->data[] = $option;
        }
        else
        {
            $valueField = $this->source->valueField;
            $displayField = $this->source->displayField;
            $newOption = new stdClass();
            $newOption->$valueField = $option;
            $newOption->$displayField = $optionValue;
            $this->source->data[] = $newOption;
        }
    }
    
    protected function onBeforeBuild ()
    {
        $this->view->addScript('$("#' . $this->id . '")[0].source = ' . json_encode($this->source));
        $this->view->addScript('
            
            function selectSetValue (id, value, displayValue, focus)
            {
                var $selectField = $("#" + id);
                var $hiddenField = $selectField.find("input[type=hidden]");
                var $searchField = $selectField.find("input[type=text]");
                $hiddenField.val(value);
                $searchField.val(displayValue);
                $searchField.attr("readonly", true);
                if (focus != null)
                    $searchField.focus();
            }
            
            function selectClearValue (id)
            {
                var $selectField = $("#" + id);
                var $hiddenField = $selectField.find("input[type=hidden]");
                var $searchField = $selectField.find("input[type=text]");
                $searchField.attr("readonly", false);
                $hiddenField.val("");
                $searchField.val("");
            }

            function selectClearResults (id)
            {
                var $selectField = $("#" + id);
                var $selectDropdown = $selectField.find(".dropdown-menu");
                $selectDropdown.removeClass("show");
            }

            function selectSetResults (id, data, query)
            {
                var $selectField = $("#" + id);
                var $selectDropdown = $selectField.find(".dropdown-menu");
                var $selectSearchList = $selectField.find(".list-group");
                var source = $selectField[0].source;
                var showDropdown = false;

                $selectDropdown.removeClass("show");
                $selectSearchList.empty();
                for (var i in data)
                {
                    var dataItem = data[i];
                    var description = "";
                    if (source.displayTemplate)
                    {
                        description = source.displayTemplate;
                        for (var i in dataItem)
                            description = description.replace(new RegExp("{" + i + "}", "g"), dataItem[i]);
                    }
                    else
                    {
                        description = dataItem[source.displayField];
                    }
                    if (query == null || description.indexOf(query) >= 0)
                    {
                        var $searchItem = $("<a href=\"#\" class=\"list-group-item\" value=\"" + dataItem[source.valueField] + "\">" + description + "</a>");
                        $searchItem.click(function () 
                        {
                            var $searchItem = $(this);
                            var value = $searchItem.attr("value");
                            var displayValue = $searchItem[0].innerHTML;
                            selectSetValue (id, value, displayValue, true);
                            $selectDropdown.removeClass("show");
                        });
                        $selectSearchList.append($searchItem);
                        showDropdown = true;
                    }
                }
                if (showDropdown)
                    $selectDropdown.addClass("show");
            }

            function selectSearchResults (id)
            {
                var $selectField = $("#" + id);
                var $searchField = $selectField.find("input[type=text]");
                var searchQuery = $searchField[0].value;
                var source = $selectField[0].source;
                $searchField.focus();

                if (source.type == "local")
                {
                    selectSetResults(id, source.data, searchQuery);
                }
                else if (source.type == "remote")
                {
                    clearTimeout($selectField[0].searchProcess);
                    $selectField[0].searchProcess = setTimeout(function()
                    {
                        $.ajax(
                        {
                            url: source.url,
                            method: "GET",
                            data: { query: searchQuery },
                            success: function (data, status, xhr) { if (data && data.success == true && data.results) selectSetResults(id, data.results, null); },
                            error: function () {},
                            timeout: function () {}
                        });
                    }, 500);
                }
            }
            

            $(document).ready(function() 
            {
                $button = $(".selectField .btn");
                $button.click(function () 
                {
                    var $selectField = $(this).closest(".selectField");
                    var $hiddenField = $selectField.find("input[type=hidden]");
                    var id = $selectField.attr("id");
                    if ($hiddenField.val())
                    {
                        selectClearValue (id);
                    }
                    selectSearchResults (id);
                });
                $input = $(".selectField input[type=text]");
                $input.keyup(function(event)
                {
                    var $selectField = $(this).closest(".selectField");
                    var $hiddenField = $selectField.find("input[type=hidden]");
                    var $searchField = $selectField.find("input[type=text]");
                    var id = $selectField.attr("id");
                    if ($hiddenField.val())
                    {
                        if (event.which == 8 || event.which == 46)
                        {
                            selectClearValue (id);
                        }
                    }
                    else
                    {
                        selectSearchResults (id);
                    }
                });
                $input.focusin(function() 
                {
                    $input = $(this);
                    clearTimeout($input[0].focusTimeout);
                });
                $input.focusout(function() 
                {
                    var $selectField = $(this).closest(".selectField");
                    var id = $selectField.attr("id");
                    $input = $(this);
                    $input[0].focusTimeout = setTimeout(function() { selectClearResults(id); }, 200);
                });
            });
        '); 
        $this->view->addStyle('
            .selectField .dropdown-menu
            {
                width: 100%;
                padding: 5px;
                margin: 0px;
            }
            
            .selectField .list-group
            {
                max-height: 100px;
                margin: 0px;
                padding: 0px;
                overflow-x: hidden;
                overflow-y: auto;
            }
            
            .selectField .list-group .list-group-item
            {
                padding: 0px;
                margin: 0px;
                border: none;
            }
        ');
        $this->view->addScript('$("#' . $this->id . '")[0].source = ' . json_encode($this->source));
    }
    
    protected function createContent ()
    {
        $inputGroup = new Tag("div", array("class"=>"input-group"));
        $inputGroup->add (new Tag("input", array("type"=>"text", "name"=>$this->name . "_text", "class"=>"form-control")));
        $inputGroup->add (new Tag("span", array("class"=>"input-group-btn"), new Tag("button", array("class"=>"btn btn-default", "type"=>"button"), "<span class=\"glyphicon glyphicon-search\"></span>")));
        $hiddenField = new Tag("input", array("type"=>"hidden", "name"=>$this->name));
        $dropdownList = new Tag("div", array("class"=>"list-group"));
        $dropdown = new Tag("ul", array("class"=>"dropdown-menu"));
        $dropdown->add (new Tag("li", $dropdownList));
        $container = new Tag("div", array("id"=>$this->id, "class"=>"dropdown selectField"));
        $container->add ($inputGroup);
        $container->add ($dropdown);
        $container->add ($hiddenField);
        return $container;
    }
}

?>