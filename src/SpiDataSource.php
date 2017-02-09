<?php

namespace Coff\DataSource;

/**
 * SpiDataSource
 *
 * Abstract class for SPI based DataSources.
 */
abstract class SpiDataSource extends DataSource
{

    /**
     * @var int $cableSelect 0 or 1 for RPi
     */
    protected $cableSelect;

    /**
     * @var int $busNumber always 0 for RPi
     */
    protected $busNumber;

    /**
     * @var int $speed frequency in Hz
     */
    protected $speed;

    /**
     * @var  \Spi $spi Spi object (see https://github.com/frak/php_spi)
     */
    protected $spi;


    public function __construct($busNumber=0, $cableSelect=0, $speed = 10000)
    {
        $this->setBusNumber($busNumber);
        $this->setCableSelect($cableSelect);
        $this->setSpeed($speed);
    }

    /**
     * @param int $cableSelect
     * @return $this
     */
    public function setCableSelect($cableSelect=0) {
        $this->cableSelect = $cableSelect;

        return $this;
    }

    /**
     * @param int $busNumber
     * @return $this
     */
    public function setBusNumber($busNumber=0) {
        $this->busNumber = $busNumber;

        return $this;
    }

    /**
     * @param int $speed
     * @return $this
     */
    public function setSpeed($speed=10000) {
        $this->speed = $speed;

        return $this;
    }

}
