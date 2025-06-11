<?php 

declare(strict_types = 1);

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;
use Src\Entity\Entertainment\Entertainment;
use DateTime;

final readonly class EntertainmentCreatorService {

    private EntertainmentModel $model;

    public function __construct() 
    {
        $this->model = new EntertainmentModel();
    }

    public function create(int $type, DateTime $relase_date, string $ending, string $name, string $description, int $qualification, string $image): void 
    {
        $entertainment = Entertainment::create($type,$relase_date,$ending,$image,$name,$description,$qualification);
        $this->model->insert($entertainment);
    }

}

