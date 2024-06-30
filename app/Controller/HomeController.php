<?php

namespace fahmi_arzalega\belajar\PHP\MVC\Controller;

use fahmi_arzalega\belajar\PHP\MVC\App\View;

class HomeController
{

    function index() : void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari PZN"
        ];

       View::render("Home/index", $model);
    }

    function hello() : void
    {
        echo "HomeController.hello()";
    }

    function world() : void
    {
        echo "HomeController.world()";
    }

    function about() : void
    {
        echo "Author : Fahmi Arzalega";
    }
}