<?php

final readonly class PlatformRoutes
{
  public static function getRoutes(): array
  {
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
      ],
      [
        "name" => "platforms_get_create",
        "url" => "/admin/platforms/create",
        "controller" => "Platform/PlatformCreateController.php",
        "method" => "GET"
      ],
      [
        "name" => "platforms_create",
        "url" => "/platforms",
        "controller" => "Platform/PlatformPostController.php",
        "method" => "POST"
      ],
      [
        "name" => "platforms_get_update",
        "url" => "/admin/platforms/update",
        "controller" => "Platform/PlatformUpdateController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "platforms_update",
        "url" => "/platforms",
        "controller" => "Platform/PlatformPutController.php",
        "method" => "POST",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
    ];
  }
}
