<?php

namespace Src\Entity\Comment;

use DateTime;

final readonly class Comment{

    public function __construct(
        private int $id,
        private int $qualification,
        private DateTime $date_of_comment,
        private string $message
    ) {}

    public function id(): int{
        return $this->id;
    }

    public function qualification(): int{
        return $this->qualification;
    }
    
    public function date_of_comment(): DateTime{
        return $this->date_of_comment;
    }

    public function message(): string {
        return $this->message;
    }
}