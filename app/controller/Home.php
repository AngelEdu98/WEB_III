<?php


class Home extends Controller{

    public function __construct(){
        //$this->fd = $this->model('ejemplo');
    }
    public function index() {
        /*$privilegios=$this->fd->get_Priv();

        $datos =[
            'privilegios'=> $privilegios
        ];
        $this->view('pages/ver', $datos);*/

        //$this->view('pages/login');
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){

        }else{
            $this->view('pages/login');
        }
    }

    public function registro(){
        if($_SERVER['REQUEST_METHOD']=='POST'){

        }else{
            $this->view('pages/registro');
        }
    }
}
