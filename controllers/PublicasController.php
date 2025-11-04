<?php

namespace Controllers;

use Classes\Email;
use Model\Contacto;
use MVC\Router;

class PublicasController {
    public static function inicio(Router $router) {
        $alertas = [];

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $contacto = new Contacto();
            $contacto->sincronizar($_POST);

            $alertas = $contacto->validar_contacto();
            if(empty($alertas)){
                //Enviar el email
                $correo = new Email($contacto->email, $contacto->nombre, $contacto->mensaje);
                $correo->enviar_mail_de_contacto();

                //Guardar el contacto
                $contacto->guardar();

                //Mensaje de exito
                Contacto::setAlerta('exito', 'Mensaje enviado correctamente');
            }
            $alertas = Contacto::getAlertas();
        }

        $router->render('publicas/index', [
            'titulo' => 'Inicio',
            'alertas' => $alertas,
            "contacto" => $contacto ?? null
        ]);
    }

    public static function sobre_mi(Router $router) {
        $router->render('publicas/sobremi', [
            'titulo' => 'Sobre Mi'
        ]);
    }

    public static function portafolio(Router $router) {
        $router->render('publicas/portafolio', [
            'titulo' => 'Portafolio'
        ]);
    }

    public static function contacto(Router $router) {
        $alertas = [];

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $contacto = new Contacto();
            $contacto->sincronizar($_POST);

            $alertas = $contacto->validar_contacto_dos();
            if(empty($alertas)){
                $contacto->nombre = $contacto->nombre . " " . $contacto->apellido;

                //Enviar el email
                $correo = new Email($contacto);
                $correo->enviar_mail_de_contacto();

                //Guardar el contacto
                $contacto->guardar();

                //Mensaje de exito
                Contacto::setAlerta('exito', 'Mensaje enviado correctamente');
            }
            $alertas = Contacto::getAlertas();
        }

        $router->render('publicas/contacto', [
            'titulo' => 'Contacto',
            'alertas' => $alertas,
            "contacto" => $contacto ?? null
        ]);
    }

    public static function error_404(Router $router) {

        $router->render('publicas/error_404', [
            'titulo' => 'Error 404'
        ]);
    }
}