<?php

namespace Robot;

/**
 * Class Table
 * @package Robot
 */
class Table
{
    /**
     * @var int
     */
    private $width;
    /**
     * @var int
     */
    private $height;


    /**
     * Table constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function isMoveable(Position $position): bool
    {

    }


}