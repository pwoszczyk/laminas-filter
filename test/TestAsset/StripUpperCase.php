<?php

/**
 * @see       https://github.com/laminas/laminas-filter for the canonical source repository
 * @copyright https://github.com/laminas/laminas-filter/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-filter/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Filter\TestAsset;

use Laminas\Filter\AbstractFilter;

class StripUpperCase extends AbstractFilter
{
    public function filter($value)
    {
        return preg_replace('/[A-Z]/', '', $value);
    }
}
