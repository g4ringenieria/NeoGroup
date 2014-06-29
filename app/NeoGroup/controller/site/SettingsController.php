<?php

namespace NeoGroup\controller\site;

use NeoGroup\controller\SiteController;
use NeoGroup\view\site\SettingsView;

class SettingsController extends SiteController
{
    public function indexAction ()
    {
        $settingsView = new SettingsView();
        $settingsView->render();
    }
}

?>