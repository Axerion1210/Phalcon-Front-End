<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;
// use Phalcon\Assets\Asset;
use Phalcon\Assets\Inline;

class AssetsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->assets->addCss('css/style1.css');

        $this->assets->addJs("js/js1.js");
    }
    public function test1Action()
    {
        $this->assets->addCss('css/style2.css');

        $this->assets->addJs("js/js2.js");
    }
    public function test2Action()
    {
        $cssgroup = $this->assets->collection('cssGroup');

        $cssgroup->addCss('css/style1.css');
        $cssgroup->addCss('css/style2.css');
    }
    public function test3Action()
    {
        $css1 = 'h1 {color:green;}';
        $js1 = 'alert("javascript inline")';
        $assetCss = new Inline('css', $css1);
        $assetJs  = new Inline('js', $js1);

        $this
            ->assets
            ->addInlineCss($css1)
            ->addInlineJs($js1)
        ;

        // $this->assets->addInlineCss($css1);
        // $this->assets->addInlineJs($js1);
    }
}

