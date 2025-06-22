<?php 

final readonly class CategoryRoutes {
  public static function getRoutes(): array {
    return [
      [
        "name" => "category_get", 
        "url" => "/categorys",
        "controller" => "Category/CategoryGetController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "categorys_get",
        "url" => "/categorys",
        "controller" => "Category/CategorysGetController.php",
        "method" => "GET"
      ],
      [
        "name" => "category_get_creater",
        "url" => "/admin/categorys/create",
        "controller" => "Category/CategoryCreateController.php",
        "method" => "GET"
      ],
      [
        "name" => "category_post",
        "url" => "/categorys",
        "controller" => "Category/CategoryPostController.php",
        "method" => "POST"
      ],
      [
        "name" => "category_get_updater",
        "url" => "/admin/categorys/update",
        "controller" => "Category/CategoryUpdateController.php",
        "method" => "GET",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
      ],
      [
        "name" => "category_put",
        "url" => "/categorys",
        "controller" => "Category/CategoryPutController.php",
        "method" => "POST",
        "parameters" => [
          [
            "name" => "id",
            "type" => "int"
          ]
        ]
          ],          
          [
          "name" => "category_delete",
          "url" => "/categorys/delete",
          "controller" => "Category/CategoryDeleteController.php",
          "method" => "POST"
          ]
    ];
  }
}
