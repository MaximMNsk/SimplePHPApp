<?php


namespace Application\Controllers;
// use application\models\ModelMain;

class ControllerMain extends Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->model = new ModelMain;
    }

    function actionIndex(){
        return $this->view->generate('ViewMain', 'ViewTemplate'); 
    }

}