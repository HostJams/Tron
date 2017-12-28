<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/21/17
 * Time: 6:38 PM
 */

namespace Tron\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Tron\Model\LeapYear;

class LeapYearController
{
    /**
     * @Route("/")
     * @Route("/index")
     */
    public function indexAction(Request $request, $year)
    {
        $leapyear = new LeapYear();
        if ($leapyear->isLeapYear($year)) {
            $response = new Response('Yep, this is a leap year!');
        } else {
            $response = new Response('Nope, this is not a leap year.');
        }

        $response->setTtl(10);

        return $response;
    }
}