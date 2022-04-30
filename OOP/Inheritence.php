<?php

Class Husband {

    protected $home = 'Big home';

    protected $money = '1Million';

    protected function doJob() {
        return 1000;
    }

}

$husband = new Husband();
var_dump($husband);
echo '<hr>';

Class Wife extends Husband {
    
    public function showHome() {
        return $this->home;
    }

    public function changeHome($home) {
        $this->home = $home;
    }

}
$wife = new Wife();
var_dump($wife);
echo '<hr>';
$home = $wife->showHome();
echo $home; 

echo '<hr>';
$wife->changeHome('small');
echo $wife->showHome();