<?php
namespace CC\QuakeParser;

/**
 *
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
class Parser extends \ArrayObject
{

    public function __construct($file)
    {
        if (! file_exists($file)) {
            throw new \Exception('File ' . $file . ' does not exist');
        }
        $file = file($file);
        
        foreach ($file as $line) {
            $line = trim($line, " \r\n");
            if (empty($line)) {
                continue;
            }
            $data = [];
            $count = preg_match("/^(\d+:\d+)[\s]?(\w+):(.+)$/i", $line, $data);
            
            if (sizeof($data) === 4 && ctype_alpha($data[2])) {
                $this[] = TypeFactory::createType($data);
            }
        }
    }
}