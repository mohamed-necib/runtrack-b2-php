<?php

// Déclaration de la class Grade qui comporte
// - id, int
// -room_id, int
// - name, string
// - year, Datetime

class Grade {
  public ?int $id;
  public ?int $room_id;
  public ?string $name;
  public ?DateTime $year;

  // constructeur

  function __construct(?int $id = null, ?int $room_id = null , ?string $name = null, ?Datetime $year = null)
  {
    $this->id = $id;
    $this->room_id = $room_id;
    $this->name = $name;
    $this->year = $year;
  }
}
?>