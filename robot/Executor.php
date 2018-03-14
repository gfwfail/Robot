<?php
/**
 * Author: Lu Ye <i@gfw.fail>
 * Date: 14/3/18
 */

namespace Robot;


/**
 * Class Executor
 * @package Robot
 */
class Executor
{
    /**
     * @var Table
     */
    private $table;

    /**
     * Executor constructor.
     * @param $table
     */
    public function __construct(Table $table)
    {
        $this->table = $table;
    }


}