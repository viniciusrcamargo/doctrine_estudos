<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Student
{
    #[Id]//como banco que vai gerar id não precisa estar no construtor
    #[GeneratedValue]//valor gerado automaticamente para id
    #[Column]
    public readonly int $id;

    public function __construct(
        #[Column]
        public readonly string $nome)
    {

    }
}