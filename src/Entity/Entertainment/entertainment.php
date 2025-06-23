<?php 

namespace Src\Entity\Entertainment;

use DateTime;

final class Entertainment{
    
    public function __construct(
        private ?int $id,
        private int $type,
        private DateTime $release_date,
        private string $ending,
        private string $image,
        private string $name,
        private string $description,
        private int $qualification,
        private int $id_category,
        private int $id_platform 
    ){}

    public static function create(
        int $type, 
        DateTime $relase_date, 
        string $ending,
        string $image, 
        string $name, 
        string $description, 
        int $qualification, 
        int $id_category=1, 
        int $id_platform=1
        ): self{
            
        return new self(
            null,
            $type,
            $relase_date,
            $ending,
            $image,
            $name,
            $description,
            $qualification,
            $id_category,
            $id_platform
        );
    }

    public function modify(
        int $type, 
        DateTime $release_date, 
        string $ending,
        string $image, 
        string $name, 
        string $description, 
        int $qualification, 
        int $id_category=1, 
        int $id_platform=1
        ): void{
            
        $this->name= $name;
        $this->type= $type;
        $this->release_date= $release_date ;
        $this->ending= $ending ;
        $this->description= $description ;
        $this->qualification= $qualification ;
        $this->id_category= $id_category;
        $this->id_platform = $id_platform;
        $this->image= $image;
    }

    public function id(): ?int{
        return $this->id;
    }
    public function type(): int{
        return $this->type;
    }
    public function release_date(): DateTime{
        return $this->release_date;
    }
    public function ending(): string{
        return $this->ending;
    }
    public function name(): string{
        return $this->name;
    }
    public function description(): string{
        return $this->description;
    }
    public function qualification(): int{
        return $this->qualification;
    }
    public function id_category(): int{
        return $this->id_category;
    }
    public function id_platform(): int{
        return $this->id_platform;
    }
    public function image(): string{
        return $this->image;
    }
}