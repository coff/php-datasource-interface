<?php

namespace Coff\DataSource;

use Coff\Exception\DataSourceException;

/**
 * Interface DataSourceInterface
 *
 * Basic interface
 *
 * @package Coff\DataSource
 */
interface DataSourceInterface
{
    /**
     * Performs any initial actions if needed
     *
     * @return $this
     */
    public function init();

    /**
     * Performs actions to update value stored within object
     *
     * @return $this
     */
    public function update();

    /**
     * Returns value read via update() method
     *
     * @return int
     */
    public function getValue();

    /**
     * Returns last value read timestamp
     *
     * @return int
     */
    public function getStamp();

    /**
     * Resets error state to no error
     *
     * @return $this
     */
    public function resetErrorState();

    /**
     * Sets error state and exception
     * @param DataSourceException $exception
     *
     * @return $this
     */
    public function setErrorState(DataSourceException $exception);

    /**
     * Returns true if DataSource is in error state
     *
     * @return boolean
     */
    public function isErrorState();

    /**
     * Returns error Exception object if set
     *
     * @return string
     */
    public function getException();
}
