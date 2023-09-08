<?php

// Déclaration de la class Grade qui comporte
// - id, int
// -room_id, int
// - name, string
// - year, Datetime

class Grade {
  private ?int $id;
  private ?int $room_id;
  private ?string $name;
  private ?DateTime $year;

  // constructeur

  function __construct(?int $id = null, ?int $room_id = null , ?string $name = null, ?Datetime $year = null)
  {
    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year;
  }

  // Création Setters et Getters pour chaques propriétés

  public function setId(int $id) {
    $this->id = $id;
  }

  public function getId(): ?int {
    return $this->id;
  }

  public function setRoomId(int $room_id) {
    $this->room_id = $room_id;
  }

  public function getRoomId(): ?int {
    return $this->room_id;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName(): ?string {
    return $this->name;
  }

  public function setYear(Datetime $year) {
    $this->year = $year;
  }

  public function getYear(): ?Datetime {
    return $this->year;
  }

}
?>