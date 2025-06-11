<?php

namespace Src\Entity\Platform;

final readonly class Platform{

    public function __construct(
        private int $id,
        private string $name
    ){}

    public function id():int {
        return $this->id;
    }

    public function name():string{
        return $this->name;
    }
}