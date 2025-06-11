<?php 

namespace src\Service\People;

use Src\Entity\People\People;
use Src\Model\People\PeopleModel;

final readonly class PeoplesSearcherService {
    private PeopleModel $peopleModel;

    public function __construct() {
        $this->peopleModel = new PeopleModel();
    }

    /** @return People[] */
    public function search(): array
    {
        return $this->peopleModel->search();
    }
}