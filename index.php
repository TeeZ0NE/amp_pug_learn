<?php

// use Pug\Facade as PugFacade;

include 'vendor/autoload.php';
$pug = new Pug(array('pretty' => true, ));
$var_arr = array('title' => 'amp project',
    'some_text' => 'lorem Ipsum Dolor',
);
// $html = PugFacade::renderFile('t-pug.pug');
// print_r($html);
$pug->displayFile('t-pug.pug', $var_arr);
