<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/28/17
 * Time: 4:06 PM
 */

namespace Tron\Controller\Error;


use Symfony\Component\HttpFoundation\Request;
use Tron\Core\Controller;

class TronError extends Controller
{
    public function error404(Request $request)
    {

        return $this->render_template($request,array('page'=>$request->getPathInfo()));
    }

    public function allExceptions(Request $request)
    {
        return $this->render_template($request);
    }
}