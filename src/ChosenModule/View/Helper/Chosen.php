<?php
namespace ChosenModule\View\Helper;

use Zend\View\Helper\AbstractHelper
;

class Chosen
{
    public function __invoke()
    {

        /**
         * TODO: append chosen js and css
         */

//         $this->view->headScript()->appendFile('/assets/SoliantNav/js/superfish/hoverIntent.js');
//         $this->view->headLink()->appendStylesheet('/assets/SoliantNav/css/superfish/superfish-ate-localized.css');

        return $this;
    }

}
