<?php

require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';

//TEST STUDENT

// $student = new Student(1, 1, 'email@laposte.net', 'Jean Dupont', new Datetime("2000-01-01"), 'Male');
// $student = new Student();


// $student;

//TEST GRADE

$grade = new Grade(1, 8, 'Bachelor 1', new Datetime("2023-01-09"));

$grade = new Grade();

$room = new Room(1, 1, 'RDC Food and Drinks', 90);

$room = new Room();

$floor = new Floor(1, 'Rez-de-chaussée', 0);

$floor = new Floor();

$grade;
$room;
$floor;