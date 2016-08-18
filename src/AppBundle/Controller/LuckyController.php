<?php
/**
 * Created by PhpStorm.
 * User: fhernandez
 * Date: 17/08/2016
 * Time: 04:10 PM
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LuckyController
{
    /**
     * @Route("/")
     * @Template("AppBundle:Lucky:number.html.twig")
     *
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return ['number' => $number];
//        new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }
}