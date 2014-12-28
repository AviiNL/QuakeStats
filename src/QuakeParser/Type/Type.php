<?php
namespace CC\QuakeParser\Type;

/**
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
abstract class Type
{
    private $time;
    private $type;
    private $arguments;

    public function __construct($data)
    {
        $this->time = $data[1];
        $this->type = $data[2];
        $this->arguments = $data[3];
        $this->arguments = trim($this->arguments, " \\\r\n");
        
        $this->parse($this->arguments);
    }
    
    abstract protected function parse($data);

    public function getTime()
    {
        return $this->time;
    }

    public function getType()
    {
        return $this->type;
    }
}