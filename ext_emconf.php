<?php

$EM_CONF[$_EXTKEY] = array(
    'title'          => 'FAQ - Frequently Asked Questions',
    'description'    => 'Basic FAQ (Frequently Asked Questions) extension in a clean extbase/fluid structure. Questions and Question categroies with a smart plugin structure.',
    'category'       => 'fe',
    'version'        => '1.0.1',
    'state'          => 'stable',
    'author'         => 'Tim Spiekerkötter, Tim Lochmüller',
    'author_email'   => 'tl@hdnet.de',
    'author_company' => 'hdnet.de',
    'constraints'    => array(
        'depends'   => array(
            'autoloader' => '1.10.0-1.99.99',
            'typo3'      => '6.2.0-7.99.99',
        ),
        'conflicts' => array(),
        'suggests'  => array(),
    ),
);
