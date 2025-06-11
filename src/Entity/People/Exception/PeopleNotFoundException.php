<?php 

namespace Src\Entity\People\Exception;

use Exception;

final class PeopleNotFoundException extends Exception {
    public function __construct(int $id) {
        parent::__construct("No se encontro el dominio correspondiente. Id: ".$id);
    }
}