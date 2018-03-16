<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 16/3/18
 */

namespace Tests;

use Robot\Position;
use Robot\Robot;
use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase
{
    /**
     * @dataProvider rotateDataProvider
     */
    public function testRotate($origin, $leftOrRight, $expected)
    {
        $robot = new Robot(new Position(0, 0, $origin));
        $robot->rotate($leftOrRight);
        $this->assertEquals($expected, $robot->getPosition()->getDirection());
    }

    public function rotateDataProvider()
    {
        return [
            [
                "NORTH",
                "LEFT",
                "WEST"
            ],

            [
                "EAST",
                "LEFT",
                "NORTH"
            ],
            [
                "EAST",
                "RIGHT",
                "SOUTH"
            ],
        ];
    }
    
}
