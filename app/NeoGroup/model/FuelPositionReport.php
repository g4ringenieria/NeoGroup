<?php

namespace NeoGroup\model;

class FuelPositionReport extends PositionReport
{
    /**
     * @Column (columnName="data", dataIndex=20)
     */
    private $fuelTank;
    
    /**
     * @Column (columnName="data", dataIndex=21)
     */
    private $fuelLevel;
    
    /**
     * @Column (columnName="data", dataIndex=22)
     */
    private $fuelTemperature;
    
    public function getFuelTank()
    {
        return $this->fuelTank;
    }

    public function setFuelTank($fuelTank)
    {
        $this->fuelTank = $fuelTank;
    }
    
    public function getFuelLevel()
    {
        return $this->fuelLevel;
    }

    public function getFuelTemperature()
    {
        return $this->fuelTemperature;
    }

    public function setFuelLevel($fuelLevel)
    {
        $this->fuelLevel = $fuelLevel;
    }

    public function setFuelTemperature($fuelTemperature)
    {
        $this->fuelTemperature = $fuelTemperature;
    }
}