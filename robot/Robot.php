<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 14/3/18
 */

namespace Robot;


/**
 * Class Robot
 * @package Robot
 */
class Robot
{
    /**
     * @var Position
     */
    private $position;

    /**
     * Robot constructor.
     * @param $position
     */
    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    /**
     * @return Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @param Position $position
     */
    public function setPosition(Position $position)
    {
        $this->position = $position;
    }

    public function moveNext(): void
    {
        $this->getPosition()->move();
    }

    public function report(): string
    {
        return $this->getPosition()->getX() . "," . $this->getPosition()->getY() . "," . $this->getPosition()->getDirection();
    }

    public function rotate(string $direction): void
    {
        $directions = [
            Position::DIRECTION_NORTH,
            Position::DIRECTION_EAST,
            Position::DIRECTION_SOUTH,
            Position::DIRECTION_WEST
        ];
        $delta = $direction == 'LEFT' ? -1 : 1;
        $directionIndex = array_search($this->getPosition()->getDirection(), $directions);
        $newDirection = $directions[($directionIndex + $delta) < 0 ? 3 : $directionIndex + $delta % 4];
        $this->getPosition()->setDirection($newDirection);
    }

}