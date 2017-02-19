<?php

namespace Coff\DataSource;

/**
 * StatefulDataSource
 *
 * @package Coff\DataSource
 */
abstract class StatefulDataSource extends DataSource
{
    use StatefulTrait;
}
