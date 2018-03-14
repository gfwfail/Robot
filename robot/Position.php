<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 14/3/18
 */

namespace Robot;


/**
 * Class Position
 * @package Robot
 */
class Position
{
    /**
     * @var int
     */
    private $x;
    /**
     * @var int
     */
    private $y;

    /**
     * Position constructor.
     * @param $x
     * @param $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
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

    public function move(Direction $direction): bool
    {
        if (!isMoveable($direction)) {
            return false;
        }
        $this->x = this . x + x;
        $this->y = this . y + y;
    }

}