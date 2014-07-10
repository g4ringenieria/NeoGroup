<?php

namespace NeoGroup\view;

use NeoPHP\web\html\HTMLView;
use NeoPHP\web\html\Tag;

class MainView extends HTMLView
{
    private $defaultAction = null;
    private $tools = array();

    public function setDefaultAction($defaultAction)
    {
        $this->defaultAction = $defaultAction;
    }

    public function setTools(array $tools)
    {
        $this->tools = $tools;
    }

    protected function build()
    {
        parent::build();
        $this->setTitle($this->getApplication()->getName());
        $this->addMeta(array("charset" => "utf-8"));
        $this->addMeta(array("name" => "viewport", "content" => "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"));
        $this->addStyleFile($this->getBaseUrl() . "assets/bootstrap-3.1.0/css/bootstrap.min.css");
        $this->addStyleFile($this->getBaseUrl() . "assets/font-awesome-4.1.0/css/font-awesome.min.css");
        $this->addScriptFile("//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js");
        $this->addScriptFile($this->getBaseUrl() . "assets/bootstrap-3.1.0/js/bootstrap.min.js");
        $this->addScriptFile($this->getBaseUrl() . "js/main.js");
        $this->addStyleFile($this->getBaseUrl() . "css/main.css");
        $this->buildBody();
    }

    protected function buildBody()
    {
        $this->getBodyTag()->add($this->createHeader());
        $this->getBodyTag()->add($this->createSidebar());
        $this->getBodyTag()->add($this->createContent());
    }

    
    protected function createHeader ()
    {   
        return '
        <nav id="header" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <a href="#" onclick="toggleSidebar();" class="navbar-brand"><i class="fa fa-bars"></i>&nbsp;&nbsp;' . $this->getApplication()->getName() . '</a>
                <ul class="nav navbar-nav pull-right hidden-xs">
                    <li class="dropdown">            
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> ' . $this->getSession()->firstName . ' ' . $this->getSession()->lastName . ' <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="loadUrl(\'' . $this->getUrl("site/account/") . '\')"><i class="fa fa-user"></i> Mi Cuenta</a></li>
                            <li><a href="#" onclick="loadUrl(\'' . $this->getUrl("site/settings/") . '\')"><i class="fa fa-gear"></i> Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="' . $this->getUrl("site/main/logout") . '"><i class="fa fa-power-off"></i> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>';
    }
    
    protected function createSidebar()
    {        
        $list = new Tag("ul", array("class"=>"nav nav-sidebar"));
        foreach ($this->tools as $tool)
        {
            $anchor = new Tag("a", array("href"=>$this->getUrl($tool->getAction())));
            $anchor->add (new Tag("i", array("class"=>"fa fa-" . $tool->getIcon()),""));
            $anchor->add ("&nbsp;" . $tool->getDescription());
            $listItem = new Tag("li", $anchor);
            if (empty($this->defaultAction))
            {
                $this->defaultAction = $tool->getAction();
                $listItem->setAttribute("class", "active");
            }
            $list->add ($listItem);
        }
        $sidebar = new Tag("div", array("id"=>"sidebar"), $list);
        return new Tag("div", array("id"=>"side-container"), $sidebar);
    }
    
    protected function createContent()
    {
        return '<div id="main-container"><iframe id="iframe" src="' . $this->getUrl($this->defaultAction) . '"></iframe></div>';
    }
}

?>