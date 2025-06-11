<?php 

declare(strict_types = 1);

namespace Src\Service\Entertainment;

use Src\Model\Entertainment\EntertainmentModel;

use DateTime;

final readonly class EntertainmentUpdaterService{
    private EntertainmentModel $model;

    private EntertainmentFinderService $finder;

    public function __construct(){
        $this->finder = new EntertainmentFinderService();
        $this->model = new EntertainmentModel();
    }

    public function update (int $id,int $type,DateTime $relase_date,string $ending,string $name,string $description,int $qualification, string $image): void{

        $entertainment = $this->finder->find($id);
        $entertainment->modify($type,$relase_date,$ending,$image,$name,$description,$qualification);
        $this->model->update($entertainment);
    }
}