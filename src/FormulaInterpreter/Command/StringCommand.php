<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormulaInterpreter\Command;

/**
 * Description of FunctionParser
 *
 * @author mathieu
 */
class StringCommand implements CommandInterface {
    
    /**
     * @var integer
     */
    protected $value;
    
    function __construct($value) {
        if (!is_string($value)) {
            $message = sprintf(
                'Parameter $value of method __construct() of class %s must be an string. Got %s type instead.', 
                get_class($this), 
                gettype($value)
            );
            throw new \InvalidArgumentException($message);
        }
        
        $this->value = $value;
    }
    
    public function run() {
        return $this->value;
    }
    
    static function create($options) {
        
    }
    
}

?>
