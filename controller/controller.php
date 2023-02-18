<?php

require_once('C:\xampp\htdocs\mvcphp\model\model.php');
require_once('C:\xampp\htdocs\mvcphp\actions\read.php');//se eu comentar isso o delete/edite nao funciona. Se eu deixar, o filtro exibe tb a lista toda...

class Controller{
    private $model;
    private $view;

    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;
    }

    public function create($name){
        $result = $this->model->createData($name);
        if($result){
            header('location: http://localhost/mvcphp/view/view.php');
        }
        else{
            echo "erro".$this->model->PDO->error;
        }
    }
    // read
    public function read(){
        $result = $this->model->readData();
        if($result){
            return $this->view->render($result);
        }
        else{
        // header('location: http://localhost/mvcphp/action/read.php');
            echo 'No data found sorry';
        }
    }

    public function filter($filtered){
        $result = $this->model->filterData($filtered);
        if($result){
            return $this->view->filters($result);
        }
        else{
            echo "No data found";
        }
    }

    public function delete($id){
        $result  = $this->model->deleteData($id);
        if($result){
            return true;
        }
        else{
            echo 'No data has been deleted';
        }
    }

    public function edit($id){
        $result = $this->model->editData($id);
        if($result){
            return true;
        }
        else{
            echo "No data has been edited";
        }
    }


    
    // public function update(){
    //     $this->model->create();
    //     $this->view->render("update method");
    // }
    
    // public function delete(){
    //     $this->model->create();
    //     $this->view->render("delete method");
    // }



}

?>