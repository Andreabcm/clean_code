<?php

// Evitar

use Illuminate\Support\Arr;
use Nette\Utils\Arrays;
use PhpParser\Node\Expr\Cast\Array_;

$name = "Mohamed"; // Customer name

class Customer{
    private $name;

    //get customer age
    public function getAge() {
        //
    }

    /**
     * Misleading Comments
     * El comentario indica que la función devuelve un String,
     * pero la función en realidad devuelve un array
     */
    // Returns data as String
    public function getPersonalData(): array {
        return [
            "name" => "Mohamed",
            "email" => "example@mail.com"
        ];
    }

    // Buenas practicas de comentar código
    /**
     * @param Name $name
     * @return void
     */
    public function setName(string $name) : void {
        $this->name = $name;
    }

}