<?PHP

namespace Application\Controllers;
use Application\Views\View;

class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

}


