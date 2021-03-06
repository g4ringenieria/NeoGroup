<?php

namespace Mamba\controller\site;

use Mamba\model\ToolPeer;
use Mamba\view\ErrorView;
use Mamba\view\MainView;
use NeoPHP\web\WebController;

class MainController extends WebController
{   
    public function onBeforeActionExecution ($action, $params)
    {
        $this->getSession()->start();
        $executeAction = ($action == "logout" || ($this->getSession()->isStarted() && isset($this->getSession()->sessionId)));
        if (!$executeAction)
            $this->redirectAction("site/portal/");
        return $executeAction;
    }
    
    public function indexAction ()
    {
        $mainView = new MainView();
        $mainView->setTools(ToolPeer::getToolsForProfileId($this->getSession()->profileId));
        $mainView->render();
    }
    
    public function logoutAction ()
    {
        $this->getSession()->destroy();
        $this->redirectAction("site/portal/");
    }
    
    public function onActionError ($action, $error)
    {
        $errorView = new ErrorView(); 
        $errorView->setException ($error);
        $errorView->render();
    }
}

?>
