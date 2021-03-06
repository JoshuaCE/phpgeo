<?php

namespace Location\Formatter;

use Location\Coordinate;

class DecimalDegreesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DecimalDegrees
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new DecimalDegrees;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Location\Formatter\DecimalDegrees::format
     */
    public function testFormatDefaultSeparator()
    {
        $coordinate = new Coordinate(52.5, 13.5);

        $formatter = new DecimalDegrees();

        $this->assertEquals("52.50000 13.50000", $formatter->format($coordinate));
    }

    /**
     * @covers Location\Formatter\DecimalDegrees::format
     */
    public function testFormatCustomSeparator()
    {
        $coordinate = new Coordinate(52.5, 13.5);

        $formatter = new DecimalDegrees(", ");

        $this->assertEquals("52.50000, 13.50000", $formatter->format($coordinate));
    }
}
