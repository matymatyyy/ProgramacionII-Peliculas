<?php

namespace Src\Entity\User;

final readonly class User{
    public function __construct(
        private int $id,
        private string $username,
        private string $email,
        private string $password
    ){}

    public function id(): int{
        return $this->id;
    }

    public function username(): string{
        return $this->username;
    }

    public function email(): string{
        return $this->email;
    }

    public function password(): string{
        return $this->password;
    }
}