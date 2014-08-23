<?php

namespace NeoGroup\controller\device;

use Exception;
use NeoPHP\mvc\Controller;

abstract class DeviceController extends Controller
{
    public function notifyPackageAction ($datagram)
    {
        $tokens = $this->parseControllerDatagram($datagram);
        $deviceId = $tokens[1];
        $data = $tokens[2];
        try
        {
            $responseData = $this->notifyPackageReceived($data, $deviceId);
            print ($this->createControllerDatagram(array(true, $deviceId, $responseData)));
        }
        catch (Exception $ex)
        {
            $this->getLogger()->warning("Error processing datagram from \"" . ($deviceId > 0? $deviceId : "?") . "\": " . $data);
            print ($this->createControllerDatagram(array(false, $deviceId, $ex->getMessage())));
        }
    }
    
    public abstract function notifyPackageReceived ($data, &$deviceId);
    
    private function parseControllerDatagram ($datagram)
    {
        $tokens = array();
        $tokens[0] = true;
        $tokens[1] = hexdec(substr($deviceId, 0, 4));
        $tokens[2] = hex2bin(substr($deviceId, 4));
        return $tokens;
    }
    
    private function createControllerDatagram (array $tokens)
    {
        return str_pad(dechex($tokens[1]), 4, "0", STR_PAD_LEFT) . bin2hex($tokens[2]);
    }
}

?>