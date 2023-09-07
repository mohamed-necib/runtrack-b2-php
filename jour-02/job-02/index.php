<?php

function connect_db()
{
  $pdo = new PDO('mysql:host=localhost;dbname=lp_official', 'root', 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $pdo;
}

function find_one_student(string $email): array
{
  $sql = "SELECT * FROM student WHERE email = :email";
  $pdo = connect_db();
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['email' => $email]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jour-02/Job02</title>
</head>

<body>
  <!-- Formulaire permettant de récupérer les informations d'un élève à partir de son email -->

  <h1>Rechercher un élève</h1>
  <form action="index.php" method="get">
    <label for="email">Email</label>
    <input type="email" name="input-email-student" id="email" placeholder="Email de l'élève">
    <input type="submit" value="Rechercher">
  </form>

  <!-- Affichage des informations de l'élève recherché : -->

  <h1>Informations de l'élève recherché</h1>
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
      <?php
      if (isset($_GET['input-email-student'])) {

        $student = find_one_student($_GET['input-email-student']);
        foreach ($student as $information) : ?>
          <tr>
            <td><?= $information['id'] ?></td>
            <td><?= $information['grade_id'] ?></td>
            <td><?= $information['email'] ?></td>
            <td><?= $information['fullname'] ?></td>
            <td><?= $information['birthdate'] ?></td>
            <td><?= $information['gender'] ?></td>
          </tr>
        <?php endforeach; 
      }
      ?>
      
    </tbody>






</body>

</html>