<?php

require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';

//Connexion à la base de données

function connect_db()
{
  $pdo = new PDO('mysql:host=localhost;dbname=lp_official', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $pdo;
}

function findOneStudent(int $id)
{
  $sql = "SELECT * FROM student WHERE id = :id";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return (new Student($result['id'], $result['grade_id'], $result['email'], $result['fullname'], new Datetime($result['birthdate']), $result['gender']));
}

function findOneGrade(int $id)
{
  $sql = "SELECT * FROM grade WHERE id = :id";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return (new Grade($result['id'], $result['room_id'], $result['name'], new Datetime($result['year'])));
}

function findOneFloor(int $id)
{
  $sql = "SELECT * FROM floor WHERE id = :id";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return (new Floor($result['id'], $result['name'], $result['level']));
}

function findOneRoom(int $id)
{
  $sql = "SELECT * FROM room WHERE id = :id";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  return (new Room($result['id'], $result['floor_id'], $result['name'], $result['capacity']));
}

$student = findOneStudent(18);
$room = findOneRoom(5);
$grade = findOneGrade(1);
$floor = findOneFloor(1);

$student;
$room;
$grade;
$floor;
