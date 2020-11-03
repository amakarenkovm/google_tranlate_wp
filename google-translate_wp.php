<?php
/*
 * Plugin Name: Google translate for wp
 * Author: Arkadyy Makarenko
 * Version: 1.0
 * Description: Translate all your posts offline
 */
require_once ('vendor/autoload.php');
use \Dejurin\GoogleTranslateForFree;

function filter_translate ()
{

    $source = 'ru';
    $target = 'en';
    $attempts = 5;
    $content = get_the_content();
    $text =  $content;

    $tr = new GoogleTranslateForFree();
    $result = $tr->translate($source, $target, $text, $attempts);

 echo $result;


}
add_filter( 'the_content', 'filter_translate');
