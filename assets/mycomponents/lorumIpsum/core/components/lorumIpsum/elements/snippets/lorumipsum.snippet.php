<?php
/**
 * lorumIpsum snippet for lorumIpsum extra
 *
 * Copyright 2013 by JM Addington jm@jmaddington.com
 * Created on 05-28-2013
 *
 * lorumIpsum is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * lorumIpsum is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * lorumIpsum; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package lorumIpsum
 */

/**
 * Description
 * -----------
 * Lorum Ipsum generator for MODX
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package lorumIpsum
 **/

$sp = $scriptProperties;

$class = 'lorumIpsum';
$debug = $modx -> getOption('debug', $sp, false);
$output = '';

$corePath = $modx->getOption('core_path');
$classPath = $modx->getOption("$class.core_path", $sp, "$corePath/components/$class/model/$class");

//if (!$modx->loadClass($class, $classPath ,true,true)) {
//    $modx->log(modX::LOG_LEVEL_ERROR,"[$class] Could not load $class class.");
//
//    if ($debug){
//        $output .= print_r($sp);
//        $output .= "Class path: $classPath";
//    }
//
//    return $output;
//}

//$modelPath = $modx->getOption("$class.core_path",null,$modx->getOption('core_path')."components/$class/").'model/';
//require_once $modelPath."$class/$class.class.php";

require_once("$classPath/$class.class.php");

$li = new LorumIpsum($modx, $sp);

return $li->run();