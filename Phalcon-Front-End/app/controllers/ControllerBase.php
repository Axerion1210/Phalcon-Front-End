<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function onConstruct()
    {
        $this->assets->addCss("css/bootstrap.min.css", true);

        $this->assets->addCss('css/style1.css');


        $this->assets->addJs("vendor/jquery/jquery-3.2.1.min.js");
        $this->assets->addJs("vendor/bootstrap/js/popper.js");
        $this->assets->addJs("vendor/bootstrap/js/bootstrap.min.js");
        $this->assets->addJs("js/js1.js");
    }
}
