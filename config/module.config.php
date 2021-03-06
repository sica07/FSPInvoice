<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'FspInvoice\Controller\Invoice' => 'FspInvoice\Controller\InvoiceController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'mvitinvoice' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/invoice[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'FspInvoice\Controller\Invoice',
                        'action'     => 'index',
                    ),
                ),
            ),
            'paginator' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/invoice/[page/:page]',
                    'defaults' => array(
                        'page' => 1,
                        'controller' => 'FspInvoice\Controller\Invoice',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'mvit-invoice' => __DIR__ . '/../view',
        ),
    ),
);
