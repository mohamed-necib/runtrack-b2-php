<?php

// Déclaration de la class Student qui comporte 
// - id, int
// - grade_id, int
// - email, string
// - fullname, string
// - birthdate, datetime
// - gender, string

class Student {
    private ?int $id;
    private ?int $grade_id;
    private ?string $email;
    private ?string $fullname;
    private ?DateTime $birthdate;
    private ?string $gender;

    // constructeur
    function __construct(?int $id = null, ?int $grade_id = null , ?string $email = null, ?string $fullname = null, ?Datetime $birthdate = null, ?string $gender = null)
    {
      $this->id = $id;
      $this->grade_id = $grade_id;
      $this->email = $email;
      $this->fullname = $fullname;
      $this->birthdate = $birthdate;
      $this->gender = $gender;
    }

    // Création Setters et Getters pour chaques propriétés
    
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setGradeId(int $grade_id) {
      $this->grade_id = $grade_id;
    }
    
    public function getGradeId(int $grade_id) {
        $this->grade_id = $grade_id;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setFullname(string $fullname) {
        $this->fullname = $fullname;
    }

    public function getFullname(): ?string {
        return $this->fullname;
    }

    public function setBirthdate(DateTime $birthdate) {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate(): ?DateTime {
        return $this->birthdate;
    }

    public function setGender(string $gender) {
      $this->gender = $gender;
    }

    public function getGender(): ?string {
      return $this->gender;
    }

}
