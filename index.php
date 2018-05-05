<?php

// use Pug\Facade as PugFacade;

include 'vendor/autoload.php';
$pug = new Pug(array('pretty' => true, ));
$var_arr = array(
    'title' => 'amp project',
    'some_text' => 'eram fugiat sint anim multos duis dolor anim quae aliqua',
    'is_true' => !true,
);
// $html = PugFacade::renderFile('t-pug.pug');
// print_r($html);
$pug->displayFile('t-pug.pug', $var_arr);
