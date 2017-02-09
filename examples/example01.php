#!/usr/bin/php
<?php

namespace Coff\DataSource\Examples;

use Coff\DataSource\DataSource;

include (__DIR__ . '/../vendor/autoload.php');

/**
 * CertainDataSource
 *
 * Nice little DataSource implementation.
 */
class CertainDataSource extends DataSource {
    public function update()
    {
        // TODO: Implement update() method.
        $this->value = 'x';

        return $this;
    }
}

$dataSource = new CertainDataSource();

echo $dataSource->update()->getValue();
