<?php 

namespace Controllers;
use MVC\Router;

Class CitaController {
    public static function index(Router $router) {

        // if (!isset($_SESSION['nombre'])){
        //     header('Location: /');
        // } 

        if(!isset($_SESSION)) {//evitar error de 'ignorar session'
            session_start();//se inicia session y se puede acceder a $_SESSION
        }; 
        
        isAuth();
        // session_start();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}