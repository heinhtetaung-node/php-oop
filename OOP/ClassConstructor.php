<?php

Class Students {

    protected $id;
    public $name;

    public $students = [];

    public function __construct($id, $name) {
        $this->create(['id' => $id, 'name' => $name]);
    }

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

$class = new Students(5, 'Hein');
var_dump($class);