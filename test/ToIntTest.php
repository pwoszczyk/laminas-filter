<?php

/**
 * @see       https://github.com/laminas/laminas-filter for the canonical source repository
 * @copyright https://github.com/laminas/laminas-filter/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-filter/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Filter;

use Laminas\Filter\ToInt as ToIntFilter;
use PHPUnit\Framework\TestCase;

class ToIntTest extends TestCase
{
    /**
     * Ensures that the filter follows expected behavior
     *
     * @return void
     */
    public function testBasic()
    {
        $filter = new ToIntFilter();

        $valuesExpected = [
            'string' => 0,
            '1'      => 1,
            '-1'     => -1,
            '1.1'    => 1,
            '-1.1'   => -1,
            '0.9'    => 0,
            '-0.9'   => 0
            ];
        foreach ($valuesExpected as $input => $output) {
            $this->assertEquals($output, $filter($input));
        }
    }

    public function returnUnfilteredDataProvider()
    {
        return [
            [null],
            [new \stdClass()],
            [[
                '1',
                -1
            ]]
        ];
    }

    /**
     * @dataProvider returnUnfilteredDataProvider
     * @return void
     */
    public function testReturnUnfiltered($input)
    {
        $filter = new ToIntFilter();

        $this->assertEquals($input, $filter($input));
    }
}
