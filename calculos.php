<?php
/**
 * Created by PhpStorm.
 * User: edgardoacosta
 * Date: 25/01/17
 */


/**
* Codigo obtenido de http:\//php.net/manual/es/function.eval.php
* @param $equation
* @return string
 * */
function calc($equation)
{
    // Remove whitespaces
    $equation = preg_replace('/\s+/', '', $equation);
    //echo "$equation\n";

    $number = '((?:0|[1-9]\d*)(?:\.\d*)?(?:[eE][+\-]?\d+)?|pi|π)'; // What is a number

    $functions = '(?:sinh?|cosh?|tanh?|acosh?|asinh?|atanh?|exp|log(10)?|deg2rad|rad2deg
|sqrt|pow|abs|intval|ceil|floor|round|(mt_)?rand|gmp_fact)'; // Allowed PHP functions
    $operators = '[\/*\^\+-,]'; // Allowed math operators
    $regexp = '/^([+-]?('.$number.'|'.$functions.'\s*\((?1)+\)|\((?1)+\))(?:'.$operators.'(?1))?)+$/'; // Final regexp, heavily using recursive patterns

    if (preg_match($regexp, $equation))
    {
        $equation = preg_replace('!pi|π!', 'pi()', $equation); // Replace pi with pi function
        //echo "$equation\n";
        eval('$result = '.$equation.';');
    }
    else
    {
        $result = false;
    }
    return $result;
}

$equacion = '';


if(isset($_POST['equacion']) && $_POST['equacion'] != ''){
    $return = calc($_POST['equacion']);
}
else{
    $return = false;
}
echo $return;

