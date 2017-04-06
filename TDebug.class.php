<?php
/**
 * Debuging CLass
 * @author  Rodrigo Moglia
 * @version 3.0, 2015-13-11
 * Copyright (c) 2015-2020 Rodrigo Moglia
 * <moglia@interatia.com>. All rights reserved.
 */
class TDebug
{
 
    
  public static function  debug($var)
    {
        $retorno = var_export($var, TRUE);
        new TMessage('info', $retorno);        
    }
    
  public static  function  raw($var)
    {
        $retorno = var_export($var, TRUE);
        echo "<pre>$retorno</pre>";        
    }
    
  public static function  box($var)
    {
        $retorno = var_export($var, TRUE);
        echo "<textarea cols='100' rows='20'>$retorno</textarea>";        
    }
}
?>