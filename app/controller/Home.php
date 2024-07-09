<?php


class Home extends Controller
{

    public function __construct()
    {
        //$this->fd = $this->model('ejemplo');
        $this->usuario = $this->model('usuario');
    }
    public function index() {
        /*if(isset($_SESSION['logueado'])){
            $this->view('/pages/home');
        }else{
            redirection('/home/login');
        }*/
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosSesion = [
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena'])
            ];

            $datosLogin = $this->usuario->getUsuario($datosSesion);

            if (password_verify($datosSesion['contrasena'], $datosLogin->contrasena)) {
                //$_SESSION['logeado'] = $datosLogin->usuario;
                redirection('/pages/principal');
            } else {
                $_SESSION['errorLogin'] = 'El usuario o la contraseña son incorrectos';
                redirection('/home');
            }

        } else {
            $this->view('pages/login');
        }
    }

    public function registro()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosRegistro = [
                'privilegio' => '3',
                'email' => trim($_POST['email']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT)
            ];

            if ($this->usuario->verificarUsuario($datosRegistro)) {
                if ($this->usuario->register($datosRegistro)) {
                    //$_SESSION['usuario'] = $datosRegistro['usuario'];
                    $_SESSION['loginComplete'] = 'Tu registro se a completado sastifactoriamente, ahora puedes iniciar sesion';
                    redirection('/home');
                } else {
                    // $this->view('/pages/login');
                }
            } else {
                $_SESSION['usuarioError'] = 'El usuario no esta disponible, intente con otro usuario';
                $this->view('/pages/registro');
            }
        } else {
            $this->view('pages/registro');
        }
    }

    public function logout(){
        session_start();

        $_SESSION = [];

        session_destroy();

        redirection('/home');
    }
}
