<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Image\Adapter\Gd as Gd;
use Phalcon\Image\Enum;

class ImageController extends ControllerBase
{

    public function indexAction()
    {
        // getter
        $image = new Gd('/images/jon-bellion-front-cover-the_human_condition.jpg');
        // $height = $image->getHeight();          // int
        // // $image = $image->getImage();            // mixed
        // $mime = $image->getMime();              // str
        // $realpath = $image->getRealpath();      // str
        // $type = $image->getType();              // int
        // $width = $image->getWidth();            // int
        // $this->view->setVars([
        //     'height' => $height,
        //     // 'image' => $image,
        //     'mime' => $mime,
        //     'realpath' => $realpath,
        //     'type' => $type,
        //     'width' => $width
        // ]);
    }
}

