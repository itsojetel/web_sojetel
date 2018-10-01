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

class ContactoController extends Controller
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('pages/contacto.html.twig');
    }

    /**
     * @Route("/send-mail", name="send-mail")
     */
    public function sendMail(Request $request)
    {
        $nombre = $request->get('nombre');
        $email = $request->get('email');
        $asunto = $request->get('asunto');
        $mensaje = $request->get('mensaje');

        $body = "";
        $body .= "Nombre: {$nombre} .\n\n";
        $body .= "Mensaje: {$mensaje} ";

        $message = \Swift_Message::newInstance()
            ->setSubject($asunto)
            ->setFrom($email)
            ->setTo('soporte@sojetel.com')
            ->setBody($body);

        ;
        $this->get('mailer')->send($message);

        // replace this example code with whatever you need
        return $this->render('pages/contacto.html.twig', ['enviado' => 1]);
    }
}