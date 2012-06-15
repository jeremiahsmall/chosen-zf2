<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        ),
        'helper_map' => array(
            'chosen' => 'ChosenModule\View\Helper\Chosen',
        ),
    ),
    'controller' => array(
        'classes' => array(
            'chosen-example' => 'ChosenModule\Controller\ChosenExampleController',
        ),
    ),
    'di' => array(
        'instance' => array(
            'alias' => array(
            ),
        ),
    ),
);
