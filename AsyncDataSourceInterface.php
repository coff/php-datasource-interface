<?php

namespace Coff\DataSource;

/**
 * Interface AsyncDataSourceInterface
 *
 * Basic interface for asynchronous data source
 *
 * @package Coff\DataSource
 */
interface AsyncDataSourceInterface extends DataSourceInterface
{
    /**
     * Returns asynchronous resource this DataSource works on
     *
     * @return resource
     */
    public function getStream();

    /**
     * Performs a request for data
     *
     * @return $this
     */
    public function request();

    /**
     * Checks whether resource data is already available and updates when it does
     *
     * @return bool|null
     */
    public function awaitReply();

    /**
     * Sets time to wait for reply
     *
     * @param $uSecs
     * @return $this
     */
    public function setAwaitTime($uSecs);

}
