<?php
return array(
    'view_manager' => array(
            'template_path_stack' => array(
                    __DIR__ . '/../view'
            ),
    ),
    'di' => array(
        'instance' => array(
            'alias' => array(
                'chosen-example' => 'ChosenModule\Controller\ChosenExampleController',
            ),
        ),
    ),
);
