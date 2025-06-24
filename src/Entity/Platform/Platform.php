<?php

namespace Src\Entity\Platform;

final class Platform{

    public function __construct(
        private ?int $id,
        private string $name,
        private string $logo,
        private string $website
    ){}

    public static function create(string $name, string $logo, string $website, $id=null):self{
        return new self(null, $name, $logo, $website);
    }

    public function modify(int $id, string $name, string $logo, string $website): void{
        $this->id = $id;
        $this->name = $name;
        $this->logo = $logo;
        $this->website = $website;
    }
    public function id():int {
        return $this->id;
    }

    public function name():string{
        return $this->name;
    }

    public function logo(): string{
        return $this->logo;
    }

    public function website() : string {
        return $this->website;
    }
}