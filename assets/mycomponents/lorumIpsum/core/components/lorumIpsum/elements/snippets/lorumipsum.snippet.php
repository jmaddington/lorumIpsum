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
$classPath = "$corePath/components/$class/model/$class/";

//So, I'd really rather use $modx->loadClass but I can't get that working on a production 2.2.4 so this will have to do for now
//The strtolower is needed because MC seems to lowercase the filename :-\
require_once($classPath . strtolower($class) . '.class.php');
//
//if (!$modx->loadClass($class, $classPath ,true,true)) {
//
//    $modx->log(modX::LOG_LEVEL_ERROR,"[$class] Could not load $class class. Will try require");
//
//    require($classPath . strtolower($class) . '.class.php');
//
//    if (!class_exits($class)) {
//        $modx->log(modX::LOG_LEVEL_ERROR,"[$class] Could not load $class class with require_once, exiting.");
//        if ($debug){
//            $output .= print_r($sp);
//            $output .= "Class path: $classPath";
//        }
//
//        return $output;
//
//    }
//}

$li = new lorumIpsum($modx, $sp);

return $li->run();