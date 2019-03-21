<?php

App::uses('appController', 'Controller');


class  ProdutosController extends AppController {


    public function index() {

        $produtos = $this->Produto->find('all');

        $this->set('produtos', $produtos);
        //Pega informações e encaminha para View
    }
}
?>