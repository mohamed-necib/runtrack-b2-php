<?php

// Déclaration de la class Room qui comporte
// - id, int
// - floor_id, int
// - name, string
// - capacity, int


class Room {
  public ?int $id;
  public ?int $floor_id;
  public ?string $name;
  public ?int $capacity;


  // constructeur
  function __construct(?int $id = null, ?int $floor_id = null , ?string $name = null, ?int $capacity = null)
  {
    $this->id = $id;
    $this->floor_id = $floor_id;
    $this->name = $name;
    $this->capacity = $capacity;
  }
}