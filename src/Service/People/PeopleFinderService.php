<?php 

declare(strict_types = 1);

namespace Src\Service\People;

use Src\Model\People\PeopleModel;
use Src\Entity\People\People;
use Src\Entity\People\Exception\PeopleNotFoundException;

final readonly class PeopleFinderService {

    private PeopleModel $model;

    public function __construct() 
    {
        $this->model = new PeopleModel();
    }

    public function find(int $id): People 
    {
        $people = $this->model->find($id); #cuidado con este paseje de datos, puede dar erorr por un cambio

        if ($people === null) {
            throw new PeopleNotFoundException($id);
        }

        return $people;
    }

}

