<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 14/3/18
 */

namespace Robot;

use Exception;


/**
 * Class Executor
 * @package Robot
 */
class Executor
{

    /**
     * Valid Commands
     */
    const COMMAND_PLACE = 'PLACE';
    const COMMAND_MOVE = 'MOVE';
    const COMMAND_LEFT = 'LEFT';
    const COMMAND_RIGHT = 'RIGHT';
    const COMMAND_REPORT = 'REPORT';

    /**
     * @var Robot
     */
    private $robot;

    public function parse(string $command): void
    {
        $args = preg_split("/\s+/", $command);
        switch ($args[0]) {
            case static::COMMAND_PLACE:
                $pos = explode(',', $args[1]);

                if (count($pos) < 3) {
                    throw new Exception("Invalid arguments");
                }

                $x = intval($pos[0]);
                $y = intval($pos[1]);
                $direction = $pos[2];
                $this->place(new Robot(new Position($x, $y, $direction)));
                break;
            case static::COMMAND_MOVE:

                if ($this->robot) {
                    $this->robot->moveNext();
                }

                break;
            case static::COMMAND_LEFT:

                if ($this->robot) {
                    $this->robot->rotate('LEFT');
                }

                break;
            case static::COMMAND_RIGHT:

                if ($this->robot) {
                    $this->robot->rotate('RIGHT');
                }

                break;
            case static::COMMAND_REPORT:

                if ($this->robot) {
                    echo 'REPORT: ' . $this->robot->report() . "\n";
                }

                break;
            default:
                throw new Exception("Invalid Command");
                break;
        }
    }

    public function place(Robot $robot): void
    {
        $this->robot = $robot;
    }

}