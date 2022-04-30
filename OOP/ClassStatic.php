<?php

Class ClassStatic {
    public static $modelName = 'Class Static';

    public $id;
    public $name;

    public static function changeModelName($name) {
        self::$modelName = $name;
    }

    public function insert() {
        echo 'insert';
    }
}

echo ClassStatic::$modelName;
ClassStatic::changeModelName('NewName');
echo '<hr>';
echo ClassStatic::$modelName;
echo '<hr>';
$class = new ClassStatic();
$class->insert();