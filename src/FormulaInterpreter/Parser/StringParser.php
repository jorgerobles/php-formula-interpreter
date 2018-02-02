<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormulaInterpreter\Parser;

/**
 * Description of FunctionParser
 *
 * @author mathieu
 */
class StringParser implements ParserInterface  {
    
    function parse($expression) {
        
        $expression = trim($expression);
        
        if (!preg_match_all('/^["]([^"]+)["]$/', $expression,$matches)) {
            throw new ParserException($expression);
        }
        
        return $infos = array(
            'type' => 'string',
            'value' => $matches[1][0],
        );
    }
    
}

?>
