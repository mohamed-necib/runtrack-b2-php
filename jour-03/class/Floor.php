<?php

// Déclaration de la class Floor qui comporte
// - id, int
// - name, string
// - level, int

class Floor {
  private ?int $id;
  private ?string $name;
  private ?int $level;

  //constructeur

  function __construct(?int $id = null, ?string $name = null, ?int $level = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
  }

  // Création Setters et Getters pour chaques propriétés

  public function setId(int $id) {
    $this->id = $id;
  }

  public function getId(): ?int {
    return $this->id;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName(): ?string {
    return $this->name;
  }

  public function setLevel(int $level) {
    $this->level = $level;
  }

  public function getLevel(): ?int {
    return $this->level;
  }

  
}

?>