<?php

namespace NeoGroup\controller\site;

use NeoGroup\view\site\ErrorView;
use NeoPHP\web\WebController;
use NeoPHP\web\WebScriptView;

class PortalController extends WebController
{   
    public function onBeforeActionExecution ($action)
    {
        $this->executeAction("session/deleteResource");
        return true;
    }
    
    public function indexAction ()
    {
        $view = new WebScriptView("scripts/site/Portal");
        $view->render();
    }
    
    public function onActionError ($action, $error)
    {
        $errorView = new ErrorView();
        $errorView->setException ($error);
        $errorView->render();
    }
}

?>