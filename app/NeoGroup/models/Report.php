<?php

namespace NeoGroup\models;

use NeoPHP\mvc\Model;

/**
 * @Table (tableName="report")
 */
abstract class Report extends Model
{
    const CLASSTYPE_POSITION = 1;
    
    /**
     * @Column (columnName="reportid", id=true)
     */
    protected $id;
    
    /**
     * @Column (columnName="reporttypeid", relatedTableName="reporttype")
     */
    protected $reportType;
    
    /**
     * @Column (columnName="inputdate")
     */
    protected $inputDate;
    
    /**
     * @Column (columnName="date")
     */
    protected $date;
    
    /**
     * @Column (columnName="holderid", relatedTableName="holder")
     */
    protected $holder;
    
    /**
     * @Column (columnName="deviceid", relatedTableName="device")
     */
    protected $device;
    
    public function getId ()
    {
        return $this->id;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getReportType ()
    {
        return $this->reportType;
    }

    public function setReportType (ReportType $reportType)
    {
        $this->reportType = $reportType;
    }
    
    public function getInputDate ()
    {
        return $this->inputDate;
    }

    public function setInputDate ($inputDate)
    {
        $this->inputDate = $inputDate;
    }

    public function getDate ()
    {
        return $this->date;
    }

    public function setDate ($date)
    {
        $this->date = $date;
    }

    public function getHolder ()
    {
        return $this->holder;
    }

    public function setHolder (Holder $holder)
    {
        $this->holder = $holder;
    }

    public function getDevice ()
    {
        return $this->device;
    }

    public function setDevice (Device $device)
    {
        $this->device = $device;
    }    
}

?>
