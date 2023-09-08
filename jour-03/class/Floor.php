<?php

// Déclaration de la class Floor qui comporte
// - id, int
// - name, string
// - level, int

class Floor {
  public ?int $id;
  public ?string $name;
  public ?int $level;

  //constructeur

  function __construct(?int $id = null, ?string $name = null, ?int $level = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
  }
}

?>