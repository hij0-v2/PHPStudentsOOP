<?php
namespace StudentsApp;

class Students
{

    private $class;
    private $key;
    private $firstName;
    private $lastName;
    private $average;
    private $date;

    public function __construct($class, $key, $firstName, $lastName, $average, $date)
    {
        $this->class = $class;
        $this->key = $key;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->average = $average;
        $this->date = $date;
    }

    public function showStudents()
    {
        return [
            $this->class,
            $this->key,
            $this->firstName,
            $this->lastName,
            $this->average,
            $this->date
        ];
    }
}