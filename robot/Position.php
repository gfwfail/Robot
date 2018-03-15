<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 14/3/18
 */

namespace Robot;

use Exception;


/**
 * Class Position
 * @package Robot
 */
class Position
{
    const MAX_X = 4;
    const MAX_Y = 4;

    const DIRECTION_NORTH = 'NORTH';
    const DIRECTION_SOUTH = 'SOUTH';
    const DIRECTION_WEST = 'WEST';
    const DIRECTION_EAST = 'EAST';

    /**
     * @var int
     */
    private $x;
    /**
     * @var int
     */
    private $y;
    private $direction;

    /**
     * Position constructor.
     * @param $x
     * @param $y
     */
    public function __construct(int $x, int $y, string $direction)
    {
        if (!in_array($direction,
            [
                static::DIRECTION_NORTH,
                static::DIRECTION_SOUTH,
                static::DIRECTION_WEST,
                static::DIRECTION_EAST,
            ]
        )) {
            throw new Exception("Invalid direction.");
        }

        $this->direction = $direction;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     */
    public function setDirection(string $direction)
    {
        $this->direction = $direction;
    }


    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    public function move(): void
    {
        switch ($this->direction) {
            case static::DIRECTION_NORTH:
                $this->moveXY(0, 1);
                break;
            case static::DIRECTION_SOUTH:
                $this->moveXY(0, -1);
                break;
            case static::DIRECTION_WEST:
                $this->moveXY(-1, 0);
                break;
            case static::DIRECTION_EAST:
                $this->moveXY(1, 0);
                break;
        }
    }

    private function moveXY(int $x, int $y): void
    {
        if (!$this->isMoveable($x, $y)) {
            return;
        }

        $this->x = $this->x + $x;
        $this->y = $this->y + $y;
    }

    private function isMoveable(int $x, int $y): bool
    {
        if ((($this->x + $x) > static::MAX_X) || (($this->y + $y) > static::MAX_Y)) {
            return false;
        }

        if ((($this->x + $x) < 0) || (($this->y + $y) < 0)) {
            return false;
        }

        return true;
    }

}