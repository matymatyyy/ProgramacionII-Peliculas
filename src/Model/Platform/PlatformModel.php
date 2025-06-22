<?php

namespace Src\Model\Platform;

use Src\Entity\Platform\Platform;
use Src\Model\DatabaseModel;

final readonly class PlatformModel extends DatabaseModel{
    public function find(int $id): Platform{
        $query = <<<SELECT_QUERY
                    SELECT
                        P.id,
                        P.name,
                        P.logo,
                        P.website
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
                        P.name,
                        P.logo,
                        P.website
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

    public function searchByCriterial(int $limit, int $ofset): array
    {
        #falta hacer xd
        return array();
    }

    public function insert(Platform $platform): void{
        $query = <<<INSERT_QUERY
                    INSERT INTO
                        platform
                    (name, logo, website)
                    VALUES
                        (:name, :logo, :website)
                INSERT_QUERY;

        $parameters=[
            "name" => $platform->name(),
            "logo" => $platform->logo(),
            "website" => $platform->website()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    public function update(Platform $platform): void{
        $query =<<< UPDATE_QUERY
                        UPDATE
                            platform
                        SET
                            name= :name, logo= :logo, website= :website
                        WHERE
                            id = :id
                        UPDATE_QUERY;

        $parameters=[
            "name" => $platform->name(),
            "logo" => $platform->logo(),
            "website" => $platform->website(),
            "id" => $platform->id()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    public function delete(int $id):void{
        $query = <<< DELETE_QUERY
                        DELETE FROM
                            platform
                        WHERE
                            id = :id
                        DELETE_QUERY;
        $parameters = [
            "id" => $id
        ];

        $this->primitiveQuery($query,$parameters);
    }
    public function toPlatform(array $primitive): ?Platform{
        if ($primitive === null) {
            return null;
        }

        return new Platform(
            $primitive["id"],
            $primitive["name"],
            $primitive["logo"],
            $primitive["website"]
        );
    }
}