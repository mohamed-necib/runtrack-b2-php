<?php

function connect_db() {
  $pdo = new PDO('mysql:host=localhost;dbname=lp_official', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $pdo;
}

function find_all_students() : array {
  $sql = "SELECT * FROM student";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$students = find_all_students();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour-02/Job-01</title>
</head>
<body>
  <!-- Tableau d'élèves avec leurs informations -->
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Grade</th>
        <th>Email</th>
        <th>FullName</th>
        <th>Date de Naissance</th>
        <th>Genre</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student) : ?>
        <tr>
          <td><?= $student['id'] ?></td>
          <td><?= $student['grade_id'] ?></td>
          <td><?= $student['email'] ?></td>
          <td><?= $student['fullname'] ?></td>
          <td><?= $student['birthdate'] ?></td>
          <td><?= $student['gender'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>


  
</body>
</html>