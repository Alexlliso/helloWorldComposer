<?php

namespace Com\Iesbere\Dam2\alexlliso\helloworldcomposer;



use Faker\Factory;
/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 6/10/15
 * Time: 19:31
 */
class Hello
{

    public $faker;


    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function sayHello()
    {
        echo "Hola " . $this->faker->name . " aquesta es la v0.2\n";
    }
}