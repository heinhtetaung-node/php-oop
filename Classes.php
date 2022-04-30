<?php

Class Students {

    public $students = [
        [
            "id" => 1,
            "name" => "ye"
        ],
        [
            "id" => 2,
            "name" => "Myat"
        ]
    ];


    function getAll () {
        // $students = // get from database
        
        return $this->students;
    }

    function getOne ($id) {
        $student = [];
        foreach ($this->students as $stu) {
            if ($stu['id'] == $id) {
                $student = $stu;
            }
        }
        return $student;
    }

    function create ($student) {
        array_push($this->students, $student);
    }

    function edit ($id, $updStudent) {
        foreach ($this->students as $index => $stu) {
            if ($id == $stu['id']) {
                $this->students[$index] = $updStudent;
            }
        }
    }

    function delete ($id) {
        foreach ($this->students as $index => $stu) {
            if ($id == $stu['id']) {
                array_splice($this->students, $index, 1);
            }
        }
        return true;
    }
}

$Students = new Students();
$students = $Students->getAll();

echo '<pre>';
var_dump($students);
echo '</pre>';

$stuOne = $Students->getOne(0);
echo '<pre>';
var_dump($stuOne);
echo '</pre>';

$Students->create([
    "id" => 3,
    "name" => "Pg"
]);
$students = $Students->getAll();
echo '<pre>';
var_dump($students);
echo '</pre>';

$Students->edit(3, [
    "id" => 3,
    "name" => "Paing"  
]);
$students = $Students->getAll();
echo '<pre>';
var_dump($students);
echo '</pre>';


$res = $Students->delete(3);
$students = $Students->getAll();
echo '<pre>';
var_dump($students);
echo '</pre>';