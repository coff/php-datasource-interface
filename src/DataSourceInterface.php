<?php

namespace Coff\DataSource;

use Coff\DataSource\Exception\DataSourceException;

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
}
