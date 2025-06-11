<?php 

namespace Src\Model\People;

use Src\Model\DatabaseModel;
use Src\Entity\People\People;

final readonly class PeopleModel extends DatabaseModel {

    public function find(int $id): ?People
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        P.id,
                        P.name,
                        P.age,
                        P.gender
                    FROM
                        people P
                    WHERE
                        P.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toDomain($result[0] ?? null);
    }

    /** @return People[] */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        P.id,
                        P.name,
                        P.age,
                        P.gender
                    FROM
                        people P
                SELECT_QUERY;

        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];
        
        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toDomain($primitiveResult);
        }

        return $objectResults;
    }

    private function toDomain(?array $primitive): ? People
    {
        if ($primitive === null) {
            return null;
        }

        return new People(
            $primitive['id'],
            $primitive['name'],
            $primitive['age'],
            $primitive['gender'],
        );
    }
}