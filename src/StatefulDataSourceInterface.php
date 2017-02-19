<?php

namespace Coff\DataSource;

use Coff\DataSource\Exception\DataSourceException;

/**
 * Interface StatefulDataSourceInterface
 *
 * Stateful interface for DataSource classes.
 *
 * @package Coff\DataSource
 */
interface StatefulDataSourceInterface extends DataSourceInterface
{
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
