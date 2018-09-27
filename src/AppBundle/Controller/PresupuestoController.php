<?php
/**
 * Created by PhpStorm.
 * User: jmromero
 * Date: 19/09/2018
 * Time: 19:55
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PresupuestoController extends Controller
{
    /**
     * @Route("/presupuesto", name="presupuesto")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('pages/presupuesto.html.twig');
    }
}