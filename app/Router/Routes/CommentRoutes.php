<?php 

final readonly class CommentRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "comment_get",
        "url" => "/comments",
        "controller" => "Comment/CommentGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "comments_get",
        "url" => "/comments",
        "controller" => "Comment/CommentsGetController.php",
        "method" => "GET"
      ]
    ];
  }
}
