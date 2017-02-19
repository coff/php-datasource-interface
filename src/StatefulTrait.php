<?php

namespace Coff\DataSource;

use Coff\DataSource\Exception\DataSourceException;

/**
 * StatefulTrait
 *
 * Implements standard stateful methods for DataSource classes
 *
 * @package Coff\DataSource
 */
trait StatefulTrait
{
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
