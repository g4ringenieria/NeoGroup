<?php

namespace Mamba;

class CLIApplication extends \NeoPHP\cli\CLIApplication
{
    protected function initialize ()
    {
        parent::initialize();
        $this->setName ("Mamba Solutions");
    }
}

?>