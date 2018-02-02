<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FormulaInterpreter\Command\CommandFactory;

use FormulaInterpreter\Command\StringCommand;

/**
 * Description of FunctionParser
 *
 * @author mathieu
 */
class StringCommandFactory implements CommandFactoryInterface {
    
    public function create($options) {
        if (!isset($options['value'])) {
            throw new CommandFactoryException();
        }
        
        return new StringCommand($options['value']);
        
    }
    
}

?>
