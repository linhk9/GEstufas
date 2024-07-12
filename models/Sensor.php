<?php

class Sensor extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('numserie'),
        array('designacao'),
        array('tempmedia'),
        array('greenhouse_id')
    );

    static $has_many = array(
        array('reading')
    );
}