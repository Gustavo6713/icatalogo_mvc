<?php

use App\Core\Controller;

class Produtos extends Controller {

    //listagem 
    public function index(){


        $produtoModel = $this->model("Produto");

        $dados = $produtoModel->listarTodos();

        $this->view("produtos/index", $dados);

    }

    //buscar pelo id

    //retornar a view de edição

    //salvar a edição

    //retornar a view de inserção

    //salvar a inserção

    //deletar 


}