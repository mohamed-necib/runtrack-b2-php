<?php

// Déclaration de la class Room qui comporte
// - id, int
// - floor_id, int
// - name, string
// - capacity, int


class Room {
  private ?int $id;
  private ?int $floor_id;
  private ?string $name;
  private ?int $capacity;


  // constructeur
  function __construct(?int $id = null, ?int $floor_id = null , ?string $name = null, ?int $capacity = null)
  {
    $this->id = $id;
    $this->floor_id = $floor_id;
    $this->name = $name;
    $this->capacity = $capacity;
  }

  // Création Setters et Getters pour chaques propriétés

  public function setId(int $id) {
    $this->id = $id;
  }

  public function getId(): ?int {
    return $this->id;
  }

  public function setFloorId(int $floor_id) {
    $this->floor_id = $floor_id;
  }

  public function getFloorId(): ?int {
    return $this->floor_id;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName(): ?string {
    return $this->name;
  }

  public function setCapacity(int $capacity) {
    $this->capacity = $capacity;
  }

  public function getCapacity(): ?int {
    return $this->capacity;
  }
  
}