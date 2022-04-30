<?php

interface Husband {
    public function needJob();
    public function deptReturn($money);
    public function babySitter(); 
}


class Wife implements Husband {
    public function needJob() {
        return '1000 per month';
    }
    public function deptReturn($money) {
        return $money;
    }
    public function babySitter() {
        return 'watching baby';
    }
}

$wife = new Wife();
echo $wife->deptReturn(1000);