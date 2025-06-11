<?php

namespace Src\Model\User;

use Src\Entity\User\User;
use Src\Model\DatabaseModel;

final readonly class UserModel extends DatabaseModel{
    public function find(int $id): ?User{
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.username,
                        U.email,
                        U.password
                    FROM
                        user U
                    WHERE
                        U.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toUser($result[0] ?? null);
    }

    /**
     * Summary of search
     * @return User[]
     */
    public function search(): array{
        $query = $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.username,
                        U.email,
                        U.password
                    FROM
                        user U
                SELECT_QUERY;

        $result = $this->primitiveQuery($query);

        $resultObjets=[];

        foreach ($result as $objets) {
            $resultObjets[]=$this->toUser($objets);
        }

        return $resultObjets;
    }

    private function toUser(array $primitive): ?User{
        if ($primitive === null) {
            return null;
        }

        return new User(
          $primitive["id"],
          $primitive["username"],
          $primitive["email"],
          $primitive["password"]  
        );
    }
}