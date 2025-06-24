<?php

namespace Src\Model\Comment;

use Src\Entity\Comment\Comment;
use Src\Model\DatabaseModel;
use DateTime;

final readonly class CommentModel extends DatabaseModel
{
    public function find(int $id): ?Comment
    {
        $query = <<<SELECT_QUERY
                        SELECT
                            C.id,
                            C.qualification,
                            C.date_of_comment,
                            C.message
                        FROM
                            comment C
                        WHERE
                            C.id = :id
                    SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);

        return $this->toComment($result[0] ?? null);
    }

    /**
     * Summary of search
     * @return Comment[]
     */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                        SELECT
                            C.id,
                            C.qualification,
                            C.date_of_comment,
                            C.message
                        FROM
                            comment C
                    SELECT_QUERY;

        $result = $this->primitiveQuery($query);

        $arrayObjets = [];

        foreach ($result as $objets) {
            $arrayObjets[] = $this->toComment($objets);
        }

        return $arrayObjets;
    }

    private function toComment(?array $primity): ?Comment
    {
        if ($primity === null) {
            return null;
        }

        return new Comment(
            $primity["id"],
            $primity["qualification"],
            new DateTime($primity["date_of_comment"] ?? "now"),
            $primity["message"]
        );
    }
}

