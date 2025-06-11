<?php

namespace Src\Model\Platform;

use Src\Entity\Platform\Platform;
use Src\Model\DatabaseModel;

final readonly class PlatformModel extends DatabaseModel{
    public function find(int $id): Platform{
        $query = <<<SELECT_QUERY
                    SELECT
                        P.id,
                        P.name
                    FROM
                        platform P
                    WHERE
                        P.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toPlatform($result[0] ?? null);
    }

    /**
     * Summary of Search
     * @return Platform[]
     */
    public function Search(): ?array{
        $query = <<<SELECT_QUERY
                    SELECT
                        P.id,
                        P.name
                    FROM
                        platform P
                SELECT_QUERY;

        $result = $this->primitiveQuery($query);
        
        $objetsResult= [];

        foreach ($result as $objets) {
            $objetsResult[]= $this->toPlatform($objets);
        }

        return $objetsResult;
    }
    public function toPlatform(array $primitive): ?Platform{
        if ($primitive === null) {
            return null;
        }

        return new Platform(
            $primitive["id"],
            $primitive["name"]
        );
    }
}