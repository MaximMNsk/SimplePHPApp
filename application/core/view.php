<?PHP

namespace Application\Views;

class View
{

    function generate($viewContent, $viewTemplate, $data = null)
    {
        include 'application/views/'.$viewTemplate.'.php';
    }

}

