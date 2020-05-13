<?php
namespace App\Controllers\PublicControllers;

use RobinTheHood\PhpFramework\Controllers\Controller;
use App\Views\StandardPublicView;

class IndexController extends Controller
{
    public function invokeIndex()
    {
        echo new StandardPublicView('Public/Index/Index.html.twig');
    }

    public function invokeImprint()
    {
        echo new StandardPublicView('Public/Index/Imprint.html.twig');
    }

    public function invokePrivacy()
    {
        echo new StandardPublicView('Public/Index/Privacy.html.twig');
    }
}
