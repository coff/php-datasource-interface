<?php

namespace Coff\DataSource;

/**
 * AsyncDataSource
 *
 * @package Coff\DataSource
 */
abstract class AsyncDataSource extends DataSource implements AsyncDataSourceInterface
{
    /**
     * @var resource
     */
    protected $stream;

    /**
     * @var int
     */
    protected $awaitTime;

    /**
     * Returns asynchronous resource this DataSource works on
     *
     * @return resource
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * Sets time to wait for reply
     *
     * @param $uSecs
     * @return $this
     */
    public function setAwaitTime($uSecs)
    {
        $this->awaitTime = $uSecs;

        return $this;
    }

    /**
     * Checks whether resource data is already available and updates when it does
     *
     * @return bool|null
     */
    public function awaitReply()
    {
        $a=array($this->stream);
        $w=null;
        $o=null;

        $res = stream_select($a, $w, $o, 0, $this->awaitTime);
        if (false === $res) {
            return false;
        }

        if ($a) {
            $this->update();
            return true;
        }

        return null;
    }

}
