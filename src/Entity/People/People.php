<?php 

namespace Src\Entity\People;

final readonly class People {

    public function __construct(
        private int $id,
        private string $name,
        private int $age,
        private string $gender
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function gender(): string
    {
        return $this->gender;
    }

    public function age(): int{
        return $this->age;
    }
}