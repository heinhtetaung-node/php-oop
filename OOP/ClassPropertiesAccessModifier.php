<?php

Class Students {

    protected $id;
    public $name;

    public $students = [
        [ "id" => 1, "name" => "Ye" ],
        [ "id" => 2, "name" => "Myat" ]
    ];

    public function getAll () {
        // $students = // get from database
        
        return $this->students;
    }

    public function getOne ($id) {
        $student = [];
        foreach ($this->students as $stu) {
            if ($stu['id'] == $id) {
                $student = $stu;
            }
        }
        return $student;
    }

    public function create ($student) {
        array_push($this->students, $student);
    }

    public function edit ($id, $updStudent) {
        foreach ($this->students as $index => $stu) {
            if ($id == $stu['id']) {
                $this->students[$index] = $updStudent;
            }
        }
    }

    private function delete ($id) {
        foreach ($this->students as $index => $stu) {
            if ($id == $stu['id']) {
                array_splice($this->students, $index, 1);
            }
        }
        return true;
    }

}

$class = new Students();
var_dump($class->students);

$class->name = 'abc';
echo $class->name;

$class->create([ 'id' => 3, 'name' => 'Pg']);
echo '<pre>';
var_dump($class->students);