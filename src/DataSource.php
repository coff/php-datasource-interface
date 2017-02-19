<?php

namespace Coff\DataSource;

use Coff\DataSource\Exception\DataSourceException;

/**
 * DataSource
 *
 * Basic getters and setters
 * @package Coff\DataSource
 */
abstract class DataSource implements DataSourceInterface
{
    protected $value;
    protected $stamp;
    protected $exception;
    protected $errorState=false;

    /**
     * Initiates this data source
     *
     * @return $this
     */
    public function init()
    {
        // default behavior is to do nothing here

        return $this;
    }

    /**
     * Returns value read via update() method
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns last value read timestamp
     *
     * @return int
     */
    public function getStamp()
    {
        return $this->stamp;
    }
}
