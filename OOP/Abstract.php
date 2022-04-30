<?php

abstract class Husband {

    protected $home;

    protected $money;

    abstract public function doJob($id) : string;

}

class Wife extends Husband {
    public function doJob($id) : string {
        return '1000 per month';
    }   
}

$wife = new Wife();
echo $wife->doJob(1);