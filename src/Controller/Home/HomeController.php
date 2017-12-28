<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 10:52 PM
 */

namespace Tron\Controller\Home;


use Tron\Core\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $msg = "Welcome to Tron. The possibilities are limitless";
        $name = "Kemoy";

        return $this->render_template($request,array('name'=>$name,'msg'=>$msg));
    }
}