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

    /**
     * Resets errorState status
     * @return $this
     */
    public function resetErrorState() {
        $this->errorState = false;
        $this->exception = null;

        return $this;
    }

    /**
     * Remote exception injection to throw at the right moment?
     * @param DataSourceException $exception
     *
     * @return $this
     */
    public function setErrorState(DataSourceException $exception)
    {
        $this->errorState = true;
        $this->exception = $exception;

        return $this;
    }

    /**
     * Returns errorState status
     * @return bool
     */
    public function isErrorState()
    {
        return $this->errorState;
    }

    /**
     * Returns Exception if in error state
     * @return \Exception|null
     */
    public function getException()
    {
        return $this->errorState ? $this->exception : null;
    }
}
