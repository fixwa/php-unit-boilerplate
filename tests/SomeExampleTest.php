<?php
/**
 * User: pablo <fixwah@gmail.com>
 * Date: 15/02/2018
 * Time: 02:03 PM
 */

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Project\SomeExample;

class SomeExampleTest extends TestCase
{

    public function testSumNumbers()
    {
        $example = new SomeExample();

        $this->assertEquals(5, $example->sumNumbers(2, 3));
    }
}
