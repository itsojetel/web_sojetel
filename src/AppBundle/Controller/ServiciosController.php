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

class ServiciosController extends Controller
{
    /**
     * @Route("/servicios/{page}", name="servicios")
     */
    public function indexAction(Request $request, $page)
    {
        if($page == 1){
            $titulo = "Creación de Plataformas";
            $descripcion = "¿No posee un contact center propio? Nosotros se lo creamos";
            $imagen = "creaciondeplataformas-e1427708135321.jpg";
            $body = "<p>Si usted necesita un Conctact Center propio para su empresa, ya sea bien para recepción, 
                    emisión de llamadas o alguna otra función que cree conveniente tener dentro de sus servicios. 
                    Sojetel le facilita todo lo necesario.</p>
           
                    <p>Podemos instalar una plataforma en cualquier parte del territorio nacional en un plazo de alrededor de 2 meses. 
                    Para proyectos internacionales el plazo se determinaría según la ubicación de la misma.</p>
                    
                    <p>Este servicio que le ofrecemos le puede suponer un gran beneficio y ahorro, 
                    ya que nosotros le proporcionamos el material y lo instalamos, 
                    de forma que usted no realiza inversión alguna ni corre con el riesgo económico que se pudiera ocasionar</p>";
        }
        else if ($page == 2){
            $titulo = "Alquiler de Posiciones";
            $descripcion = "¿Quiere crecer sin invertir en estructura? Alquile las nuestras";
            $imagen = "alquilerdeposiciones-e1427708199162.jpg";
            $body = "<p>Por otro lado, se puede beneficiar de nuestras infraestructuras de contact center ya instaladas, 
                    sin realizar ninguna inversión en material. En nuestras sedes usted puede encontrar todo lo necesario para que su personal pueda llevar 
                    a cabo las actividades de call center que usted estime.</p>

                    <p>Nosotros le proporcionamos el puesto, el software y la formación para que usted solo se tenga que preocuparse de enviarnos a su personal. 
                    Todos nuestros puestos bases incluyen:</p>
                    
                    <ul>
                        <li>Mesas de 110 cm.</li>
                        <li>Sillas ergonómicas</li>
                        <li>Ordenador según requerimientos del cliente.</li>
                        <li>Disponibilidad de aulas de formación en régimen compartido y bajo demanda.</li>
                        <li>Impresora en sala. Consumibles no incluidos.</li>
                        <li>Teléfono virtual con licencia gratuita.</li>
                    </ul>
                    <p>Líneas de teléfono con dispositivo físico para personal de estructura, tarificadas según consumo.</p>";

        }
        else if ($page == 3){
            $titulo = "Alquiler de Despachos";
            $descripcion = "";
            $imagen = "";
            $body = "<iframe width=\"1000\" height=\"563\" src=\"https://www.youtube.com/embed/091jj4vLKmc\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>
                    
                    <p>Su empresa transmitirá la mejor imagen. Estará ubicada en un edificio de primera categoría en la mejor dirección de negocios. 
                    Le proporcionamos un despacho de alquiler, amueblado, con todos los servicios incluidos y que se adapta a las necesidades de su empresa.</p>

                    <p>Principales ventajas:</p>
                    
                    <ul>
                        <li>Una sola factura con todos los cargos.</li>
                        <li>Un espacio de trabajo privado, diáfano con acceso seguro las 24 horas del día.</li>
                        <li>Alquiler de oficinas totalmente equipadas y personalizables con las últimas tecnologías listas para empezar a trabajar.</li>
                        <li>Equipos de asistencia dedicada y especializada en todos los centros.</li>
                        <li>Salas de reuniones, formación y salas de juntas disponibles bajo solicitud.</li>
                        <li>Podrá crecer, reducir y adaptar su espacio a sus necesidades rápidamente.</li>
                    </ul>
                    
                    <p>El precio de los despachos incluye:</p>
                    
                    <ul>
                        <li>Alquiler del despacho en cuestión amueblado según plano.</li>
                        <li>Fotocopiadora con código personal (pago estipulado por impresión).</li>
                        <li>Luz y Agua.</li>
                        <li>Internet 100 Megas.</li>
                        <li>Disposición de zonas comunes (office propio del centro de negocios, baños, salas de reuniones…).</li>
                        <li>Servicio de limpieza y mantenimiento.</li>
                    </ul>
                    
                    <p>Horario Atención Telefónica:</p>
                    
                    <ul>
                        <li>8:00 a 20:00 h L-J</li>
                        <li>8:00 a 15:00 V</li>
                    </ul>
                    
                    <p>Horario de acceso al Centro de Negocio 24×7</p>";

        }
        else if ($page == 4){
            $titulo = "Servicios complementarios";
            $descripcion = "Siempre ofrecemos más";
            $imagen = "extrascallcenter-e1427708330313.jpg";
            $body = "<p>Algunos servicios complementarios que podemos ofrecer junto con el servicio de alquiler de posiciones son:</p>

                    <ul>
                        <li>Formación: le podemos dar a su personal de contact center y supervisión una formación y asesoramiento sobre atención al cliente, 
                            técnicas de venta, etc</li>
                        <li>Creación de informes y ayuda en la creación de procedimientos.</li>
                        <li>Control de calidad.</li>
                    </ul>
                    
                    <p>Además de los servicios anteriormente expuestos, Sojetel también le puede ofrecer los siguientes servicios complementarios:</p>
                    
                    <ul>
                        <li>Mantenimiento: Realizamos mantenimiento y revisión de su infraestructura de contact center ya montada.</li>
                        <li>Soporte de tecnología IT.</li>
                        <li>Acondicionamiento del espacio dedicado a contact center: Creamos y acondicionamos estancias para el contact center y despachos, 
                            separándolas con paneles de pladur para su fácil sectorización.</li>
                        <li>Otros servicios de mantenimiento: También se realizan servicios generales de electricidad, electrónica, limpieza, etc…</li>
                    </ul>";

        }

        $page_params = ['page' => $page,
                        'titulo' => $titulo,
                        'descripcion' => $descripcion,
                        'imagen' => $imagen,
                        'body' => $body];

        // replace this example code with whatever you need
        return $this->render('pages/servicios.html.twig', $page_params);
    }
}