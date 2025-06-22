<?php

namespace Src\Model\Category;

use Src\Model\DatabaseModel;
use Src\Entity\Category\Category;

final readonly class CategoryModel extends DatabaseModel{
    public function find(int $id): ?Category
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        C.id,
                        C.name
                    FROM
                        category C
                    WHERE
                        C.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toCategory($result[0] ?? null);
    }

    /** @return Category[] */
    public function search(): array{
        $query = <<<SELECT_QUERY
                    SELECT
                        C.id,
                        C.name
                    FROM
                        category C
                SELECT_QUERY;
            $primity_result = $this->primitiveQuery($query);

            $objest=[];
        
            foreach ($primity_result as $primity_objet) {
                $objest[] = $this->toCategory($primity_objet);
            }

            return $objest;
    }

    public function searchByCriterial(int $limit, int $ofset): array
    {
        #falta hacer xd
        return array();
    }

    public function insert(Category $category) : void {
        $query= <<<INSERT_QUERY
                        INSERT INTO
                            category
                        (name)
                            VALUES
                        (:name)
                    INSERT_QUERY;
    
        $parameters=[
            "name" => $category->name()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    public function update(Category $category): void{
        $query = <<< UPDATE_QUERY
                        UPDATE
                            category
                        SET
                            name= :name
                        WHERE
                            id = :id
                        UPDATE_QUERY;
        $parameters = [
            "name" => $category->name(),
            "id" => $category->id()
        ];

        $this->primitiveQuery($query,$parameters);
    }

    public function delete(int $id):void{
        $query = <<< DELETE_QUERY
                        DELETE FROM
                            category
                        WHERE
                            id = :id
                        DELETE_QUERY;
        $parameters = [
            "id" => $id
        ];

        $this->primitiveQuery($query,$parameters);
    }

    private function toCategory(?array $primitive): ?Category
    {
        if ($primitive === null) {
            return null;
        }

        return new Category(
            $primitive['id'],
            $primitive['name'],
        );
    }
}