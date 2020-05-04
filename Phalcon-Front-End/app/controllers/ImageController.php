<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Image\ImageFactory;
use Phalcon\Image\Adapter\Gd;
use Phalcon\Image\Exception;
use Phalcon\Image\Enum;

class ImageController extends ControllerBase
{

    public function indexAction()
    {
        // getter from image file on /public/images/
        $dir = 'images/';
        $filepath = 'jon-bellion-front-cover-the_human_condition.jpg';
        $image = new Gd($dir.$filepath);
        $height = $image->getHeight();          // int
        $images = $image->getImage();           // mixed
        $mime = $image->getMime();              // str
        $realpath = $image->getRealpath();      // str
        $type = $image->getType();              // int
        $width = $image->getWidth();            // int
        $this->view->setVars([
            'height' => $height,
            'images' => $images,
            'mime' => $mime,
            'realpath' => $realpath,
            'type' => $type,
            'width' => $width,
            'filepath' => $dir.$filepath
        ]);

        // blur, radius int
        $image = new Gd($dir.$filepath);
        $image->blur(70);
        $image->save($dir."blur_".$filepath);
        $this->view->setVar('blur',$dir."blur_".$filepath);

        // crop, width int, height int, offsetX int, offsetT int
        $image = new Gd($dir.$filepath);
        $w = 150;
        $h = $w;
        $offsetX = ($width-$w)/2;
        $offsetY = ($height-$h)/2;
        $image->crop($w, $h, $offsetX, $offsetY);
        $image->save($dir."crop_".$filepath);
        $this->view->setVar('crop',$dir."crop_".$filepath);    
        
        // flip, const ENUM
        $image = new Gd($dir.$filepath);
        $image->flip(Enum::HORIZONTAL);
        $image->save($dir."flip_".$filepath);
        $this->view->setVar('flip',$dir."flip_".$filepath);

        // pixelate, pixel int
        $image = new Gd($dir.$filepath);
        $image->pixelate(20);
        $image->save($dir."pixel_".$filepath);
        $this->view->setVar('pixel',$dir."pixel_".$filepath);

        // reflection, height int, opacity int, fadeIn bool
        $image = new Gd($dir.$filepath);
        $image->reflection(100,75,true);
        $image->save($dir."reflection_".$filepath);
        $this->view->setVar('reflection',$dir."reflection_".$filepath);

        // render, ext str, quality int
        $image = new Gd($dir.$filepath);
        $render = $image->render('jpg',90);
        $this->view->setVar('render',$render);

        // resize, width int, height int, master int (const ENUM) default auto
        // const HEIGHT
        $image = new Gd($dir.$filepath);
        $image->resize(null,200,Enum::HEIGHT);
        $image->save($dir."resize_h_".$filepath);
        $this->view->setVar('resize_h',$dir."resize_h_".$filepath);        

        // const WIDTH
        $image = new Gd($dir.$filepath);
        $image->resize(150,null,Enum::WIDTH);
        $image->save($dir."resize_w_".$filepath);
        $this->view->setVar('resize_w',$dir."resize_w_".$filepath);

        // rotasi, degree int
        $image = new Gd($dir.$filepath);
        $image->rotate(90);
        // save, filename str, quality int
        $image->save($dir."rotate_".$filepath, 90);
        $this->view->setVar('rotate',$dir."rotate_".$filepath);                

        // sharpen, radius int
        $image = new Gd($dir.$filepath);
        $image->sharpen(70);
        $image->save($dir."sharpen_".$filepath);
        $this->view->setVar('sharpen',$dir."sharpen_".$filepath);

        // text, text str, offsetX int, offsetY int, opacity int
        // color str, size int, fontfile str
        $image = new Gd($dir.$filepath);
        $image->text(
            'Human Condition',
            80,                // false to disable
            150,                // false to disable
            65,
            'ffffff',           // hexdec   
            20,
            null
        );
        $image->save($dir."text_".$filepath);
        $this->view->setVar('text',$dir."text_".$filepath);            

        // watermark, watermark obj Gd, offsetX int, offsetY int, opacity int
        $image = new Gd($dir.$filepath);
        $watermark = new Gd($dir."twitter.png");
        $watermark->resize(100,100);
        $offsetX = ($width-$watermark->getWidth()-10);
        $offsetY = ($height-$watermark->getHeight()-10);
        $image->watermark(
            $watermark,
            $offsetX,
            $offsetY,
            60
        );
        $image->save($dir."watermark_".$filepath);
        $this->view->setVar('watermark',$dir."watermark_".$filepath); 
        
        // factory
        // new instance, name str, file str, width int, height int
        $factory = new ImageFactory();
        $image = $factory->newInstance('gd', $dir.$filepath);
        $this->view->setVar('factory',$image->getRealpath()); 

        // load, adapter ai, file str, width int, height int
        $factory = new ImageFactory();
        $opt = [
            'adapter' => 'gd',
            'file' => $dir.$filepath,
            'width' => 200,
            'height' => 200,
        ];
        $image = $factory->load($opt);
        $this->view->setVars([
            'w_load' => $image->getWidth(),
            'h_load' => $image->getHeight()
        ]); 

        // exception
        try {
            $image = new Gd('salah_filepath');
        } catch (Exception $ex) {
            $this->flashSession->error($ex->getMessage());
        }
    }
}

