<?php

declare(strict_types=1);

class SuperHero
{
  public function __construct(
    private string $name,
    private array $powers,
    private string $planet
  ) {
  }

  public function attack()
  {
    return "!$this->name attack with their powers!";
  }

  public function description()
  {
    $powers = implode(", ", $this->powers);
    return "$this->name is a superhero who comes from
    $this->planet and has the next powers: $powers";
  }

  public static function random()
  {
    $names = ["Gon", "Killua", "Shivago", "Goku", "Boyi"];
    $powers = [
      ["Super strength", "fly", "electricity", "Gyo"],
      ["Regeneration", "Bungie glu", "Ultra instint"],
      ["Run", "Smart", "Super power", "Ultra vision"],
      ["Fly", "Hiding", "Regeneration", "Kyo"],
    ];
    $planets = ["Green Island", "Blue whale", "Earth", "Kripton", "Namekusei"];

    $name = $names[array_rand($names)];
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    return new self($name, $power, $planet);
  }
}

$hero = new SuperHero(
  "Superman",
  ["Superfuerza", "super calzones rojos", "super vision"],
  "kriptonia"
);
// echo $hero->description();
$hero2 = SuperHero::random();
echo $hero2->description();
