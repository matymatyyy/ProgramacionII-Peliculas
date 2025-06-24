<?php 

final readonly class AdminRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "admin_login_view",
        "url" => "/admin",
        "controller" => "Admin/AdminLoginViewController.php",
        "method" => "GET"
      ],
      [
        "name" => "admin_login",
        "url" => "/admin/login",
        "controller" => "Admin/AdminLoginController.php",
        "method" => "POST"
      ],
      [
        "name" => "admin_logout",
        "url" => "/admin/logout",
        "controller" => "Admin/AdminLogoutController.php",
        "method" => "GET"
      ],
      [
        "name" => "admin_panel_view",
        "url" => "/admin/panel",
        "controller" => "Admin/AdminPanelViewController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "page",
            "type" => "int"
          ]
        ]
          ],
          [
        "name" => "admin_panelCategory_view",
        "url" => "/admin/panelCategory",
        "controller" => "Admin/AdminPanelCategoryViewController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "page",
            "type" => "int"
          ]
        ]
          ],
          [
        "name" => "admin_panelPlatform_view",
        "url" => "/admin/panelPlatform",
        "controller" => "Admin/AdminPanelPlatformViewController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "page",
            "type" => "int"
          ]
        ]
          ]
    ];
  }
}
