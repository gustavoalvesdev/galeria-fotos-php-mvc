<?php

class HomeController extends Controller {

    public function index() {
        
        $dados = array();

        $fotos = new Fotos();

        $fotos->saveFotos();


        $this->loadView('template_parts/header');

        $dados['fotos'] = $fotos->getFotos();

        $this->loadView('home', $dados); 

        $this->loadView('template_parts/footer');

    }

}
