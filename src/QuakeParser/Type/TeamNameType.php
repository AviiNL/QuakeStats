<?php
namespace CC\QuakeParser\Type;

/**
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
class TeamNameType extends Type
{
    private $teamid;
    private $teamname;
    
    protected function parse($data)
    {
        $data = explode(" ", $data);
        
        $this->teamid = $data[0];
        $this->teamname = $data[1];
    }
}