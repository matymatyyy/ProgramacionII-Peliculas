<?php 

final readonly class PlatformRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "platform_get",
        "url" => "/platforms",
        "controller" => "Platform/PlatformGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "platforms_get",
        "url" => "/platforms",
        "controller" => "Platform/PlatformsGetController.php",
        "method" => "GET"
      ]
    ];
  }
}
