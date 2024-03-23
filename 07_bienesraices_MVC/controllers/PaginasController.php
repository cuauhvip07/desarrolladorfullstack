<?php 

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController{

    public static function index(Router $router){
        $propiedades = Propiedad::get(3);
        $inicio = true;
        $router->view('/paginas/index',[
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }

    public static function propiedades(Router $router){
        $propiedades = Propiedad::all();
        $router->view('paginas/propiedades',[
            'propiedades' => $propiedades
        ]);
    }

    public static function nosotros(Router $router){
        $router->view('paginas/nosotros');
    }

    public static function propiedad(Router $router){
       $id = validarRedireccionar('/propiedades');

       // Buscar la propiedad por el id
       $propiedad = Propiedad::find($id);

        $router->view('paginas/propiedad',[
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router){
        $router->view('paginas/blog');
    }

    public static function entrada(Router $router){
        $router->view('paginas/entrada');
    }

    public static function contacto(Router $router){

        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
            $respuestas = $_POST['contacto'];
            
            
            // Crea una instancia de phpmailer
            $mail = new PHPMailer();
            // Configurar SMTP (Protocolo de envio de email (como el http de paginas web))
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = 'b132f41e5f5517';
            $mail->Password = 'b57e2673462fdc';
            $mail->SMTPSecure = 'tls'; // Emails por un tunel seguro
            
            // Configurar el contenido del email
            $mail->setFrom('admin@bienesraices.com'); // Correo quien envia el email
            $mail->addAddress('admin@bienesraices.com', 'Bienesraices.com'); // A quien le va a llegar el correo
            // Mensaje que va a llegar
            $mail->Subject = 'Tienes un nuevo mensaje desde el subject';

            // Habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido 
            $contenido = '<html>';
            $contenido.='<p>Tienes un nuevo mensaje</p>';
            $contenido.='<p>Nombre: '.$respuestas['nombre'] .'</p>';
            
            // Enviar de forma condicional algunos campos de email o telefono
            if($respuestas['contacto'] === 'telefono'){
                $contenido.= '<p>Eligio ser contactado por telefono</p>';
                $contenido.='<p>Telefono: '.$respuestas['telefono'] .'</p>';
                $contenido.='<p>Fecha contacto: '.$respuestas['fecha'] .'</p>';
                $contenido.='<p>Hora: '.$respuestas['hora'] .'</p>';
            }else{
                // Es email
                $contenido.= '<p>Eligio ser contactado por email</p>';
                $contenido.='<p>Email: '.$respuestas['email'] .'</p>';
            }
            
            $contenido.='<p>Mensaje: '.$respuestas['mensaje'] .'</p>';
            $contenido.='<p>Vende o compra: '.$respuestas['tipo'] .'</p>';
            $contenido.='<p>Precio o presupuesto: $'.$respuestas['precio'] .'</p>';
            $contenido.= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin html';

            //Enviar el email
            if($mail->send()){
                $mensaje = "Mensaje enviado correctamente";
            }else{
                $mensaje =  "El mensaje no se pudo enviar";
            }

        }

        $router->view('paginas/contacto',[
            'mensaje' => $mensaje
        ]);
    }

   

    
}