<?php

namespace Src\Model\Admins;

use Src\Entity\Admins\Admins;
use Src\Model\DatabaseModel;

final readonly class AdminsModel extends DatabaseModel{
    public function find(string $username, string $password): ?Admins{
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.username,
                        U.password,
                        U.email
                    FROM
                        admins U
                    WHERE
                        U.username = :username AND U.password = :password
                SELECT_QUERY;

        $parameters = [
            'username' => $username,
            'password' => $password
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toAdmins($result[0] ?? null);
    }

    private function toAdmins(?array $primitive): ?Admins{
        if ($primitive === null) {
            return null;
        }

        return new Admins(
          $primitive["id"],
          $primitive["username"],
          $primitive["email"],
          $primitive["password"]  
        );
    }
}