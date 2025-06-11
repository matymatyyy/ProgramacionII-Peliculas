<?php

namespace Src\Model\Entertainment;
use Src\Entity\Entertainment\Entertainment;
use Src\Model\DatabaseModel;
use DateTime;

final readonly class EntertainmentModel extends DatabaseModel{

    public function find(int $id): ? Entertainment{
        $query= <<<SELECT_QUERY
                        SELECT
                            E.id,
                            E.type,
                            E.release_date,
                            E.ending,
                            E.name,
                            E.description,
                            E.qualification,
                            E.image
                        FROM
                            entertainment E
                        WHERE E.id =:id
                        SELECT_QUERY;
    
        $parameters=[
            "id" => $id
        ];

        $result = $this->primitiveQuery($query,$parameters);

        return $this->toEntertainment($result[0] ?? null);
    }

    public function search(): array{
        $query = <<<SELECT_QUERY
                    SELECT
                            E.id,
                            E.type,
                            E.release_date,
                            E.ending,
                            E.name,
                            E.description,
                            E.qualification,
                            E.image
                        FROM
                            entertainment E
                SELECT_QUERY;

            $primity_result = $this->primitiveQuery($query);

            $objest=[];
        
            foreach ($primity_result as $primity_objet) {
                $objest[] = $this->toEntertainment($primity_objet);
            }

            return $objest;
    }

    public function insert(Entertainment $entretainment): void{
        $query= <<<INSERT_QUERY
                        INSERT INTO
                            entertainment
                        (type,release_date,ending,name,description,qualification,id_category,id_platform,image)
                            VALUES
                        (:type, :release_date, :ending, :name, :description, :qualification, :id_category, :id_platform,:image)
                        INSERT_QUERY;
    
        $parameters=[
            "type" =>$entretainment->type(),
            "release_date" => $entretainment->release_date()->format("Y-m-d H:i:s"),
            "ending" => $entretainment->ending(),
            "name" => $entretainment->name(),
            "description" => $entretainment->description(),
            "qualification" => $entretainment->qualification(),
            "id_category"  => $entretainment->id_category(),
            "id_platform" => $entretainment->id_platform(),
            "image" => $entretainment->image()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    public function update(Entertainment $entertainment) : void {
        $query = <<< UPDATE_QUERY
                        UPDATE
                            entertainment
                        SET
                            type= :type, release_date= :release_date, ending= :ending, name= :name, description= :description, qualification= :qualification, id_category= :id_category, id_platform= :id_platform, image= :image
                        WHERE
                            id = :id
                        UPDATE_QUERY;
        $parameters = [
            "name" => $entertainment->name(),
            "type" => $entertainment->type(),
            "release_date" => $entertainment->release_date()->format("Y-m-d H:i:s"),
            "ending" => $entertainment->ending(),
            "description" => $entertainment->description(),
            "qualification" => $entertainment->qualification(),
            "id_category" => $entertainment->id_category(),
            "id_platform" => $entertainment->id_platform(),
            "image" => $entertainment->image(),
            "id" => $entertainment->id()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    private function toEntertainment(?array $primitive): ?Entertainment{
        if($primitive === null){
            return null;
        }

        return new Entertainment(
            $primitive["id"] ?? 0,
            $primitive["type"] ?? 0,
            new DateTime($primitive["release_date"] ?? "now"),
            $primitive["ending"] ?? "",
            $primitive["image"] ?? "",
            $primitive["name"] ?? "",
            $primitive["description"] ?? "",
            $primitive["qualification"] ?? 0,
            $primitive["id_category"] ?? 0,
            $primitive["id_platform"] ?? 0,
        );
    }
}