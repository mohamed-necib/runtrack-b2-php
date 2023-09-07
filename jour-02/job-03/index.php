<?php

function connect_db()
{
  $pdo = new PDO('mysql:host=localhost;dbname=lp_official', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $pdo;
}

function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $gradeId): array
{
  // requete permettant d'insérer un nouvel élève dans la base de données avec toutes ses informations
  $sql = "INSERT INTO student (email, fullname, gender, birthdate, grade_id) values (:email, :fullname, :gender, :birthdate, :gradeId)";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'email' => $email,
    'fullname' => $fullname,
    'gender' => $gender,
    'birthdate' => $birthdate->format("Y-m-d"),
    'gradeId' => $gradeId
  ]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour02/Job-03</title>
</head>

<body>
  <!-- Mise en place d'un formulaire permettant d'ajouter un nouvel élève dans la base de données avec toutes ses informations -->

  <h1>Ajouter un nouvel élève</h1>

  <form action="index.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="input-email" placeholder="Email de l'élève">
    <label for="fullname">Nom complet</label>
    <input type="text" name="input-fullname" placeholder="Nom complet de l'élève">
    <label for="gender">Genre</label>
    <select name="input-gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <label for="birthdate">Date de naissance</label>
    <input type="date" name="input-birthdate" id="birthdate">
    <label for="gradeId">Grade</label>
    <input type="number" name="input-grade-id" id="gradeId" placeholder="grade-Id">
    <input type="submit" value="Ajouter" name="Ajouter">

  </form>

  <?php
  // Ajout de l'élève dans la base de données
  if (isset($_POST['Ajouter'])) {
    $email = $_POST['input-email'];
    $fullname = $_POST['input-fullname'];
    $gender = $_POST['input-gender'];
    $birthdate = new DateTime($_POST['input-birthdate']);
    $gradeId = $_POST['input-grade-id'];
    insert_student($email, $fullname, $gender, $birthdate, $gradeId);
  }
  ?>


</body>

</html>