<?php
namespace CC\QuakeParser\Type;

/**
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
class ServerTimeType extends Type
{

    protected function parse($data)
    {
        $data = explode(" ", $data);
        
        //print_r($data);
    }
}