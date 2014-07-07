<?php

namespace NeoGroup\controller\site;

use NeoGroup\view\ErrorView;
use NeoGroup\view\NoSessionView;
use NeoPHP\web\WebController;

abstract class SiteController extends WebController
{
    public function onBeforeActionExecution ($action)
    {
        $this->getSession()->start();
        $executeAction = $this->getSession()->isStarted() && isset($this->getSession()->sessionId);
        if (!$executeAction)
        {
            $view = new NoSessionView();
            $view->render();
        }
        return $executeAction;
    }
    
    public function onActionError ($action, $error)
    {
        $errorView = new ErrorView(); 
        $errorView->setException ($error);
        $errorView->render();
    }
}

?>