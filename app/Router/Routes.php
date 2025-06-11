<?php 

include_once "Route.php";
include_once "Router.php";

function startRouter(): Router 
{
    $routes = [];

    include_once "Routes/DomainRoutes.php";
    include_once "Routes/PeopleRoutes.php";
    include_once "Routes/EntertainmentRoutes.php";
    include_once "Routes/CategoryRoutes.php";
    include_once "Routes/CommentRoutes.php";
    include_once "Routes/UserRoutes.php";
    include_once "Routes/PlatformRoutes.php";
    include_once "Routes/AdminRoutes.php";
    $routes = array_merge($routes, DomainRoutes::getRoutes(),PeopleRoutes::getRoutes(), EntertainmentRoutes::getRoutes(),CategoryRoutes::getRoutes(),CommentRoutes::getRoutes(),UserRoutes::getRoutes(),PlatformRoutes::getRoutes(),AdminRoutes::getRoutes());

    $routesClass = [];
    foreach ($routes as $route) {
        $routesClass[] = Route::fromArray($route);
    }

    return new Router($routesClass);
}