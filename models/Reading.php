<?php


class Reading extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('valor'),
        array('sensors_id'),
        array('periods_id'),
    );

    static $has_many = array(
        array('sensor')
    );

}