<?php 

final readonly class PeopleRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "people_get",
        "url" => "/peoples",
        "controller" => "People/PeopleGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "peoples_get",
        "url" => "/peoples",
        "controller" => "People/PeoplesGetController.php",
        "method" => "GET"
      ]
    ];
  }
}
