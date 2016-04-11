<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * helpers/common_helper.php
 *
 * Functions extracted through refactoring
 *
 * @package		GICC Backend
 * @author		JLP
 * @copyright           Copyright (c) 2009-2012, Galiano Island Chamber of Commerce
 * @since		Version 3.15
 * Updated              v3.18.6: Added extractChanges method
 * Updated              v3.18.6: Switch text/html properties - we need text for mailouts,
 *                          html for all others
 * Updated              v4.0.0: Port to CI2.0
 * ------------------------------------------------------------------------
 */
//-------------------------------------------------------------------------
//  Object/array manipulation
/**
 * Extract cells from an array into corresponding properties in an object
 * @param <type> $source An associative array state representation of an object
 * @param <type> $target The corresponding object
 * @param <type> $fields The names of the object properties
 */
function fieldExtract($source, $target, $fields) {
    foreach ($fields as $prop) {
        if (isset($source[$prop])) {
            $target->$prop = html_entity_decode($source[$prop]);
        }
    }
}

/**
 * Inject cells into an array from corresponding properties in an object
 * @param <type> $source The original object
 * @param <type> $target An associative array state representation of that object
 * @param <type> $fields The names of the object properties
 */
function fieldInject($source, $target, $fields) {
    foreach ($fields as $prop) {
        if (isset($source->$prop)) {
            $target[$prop] = $source->html_entity_decode($prop);
        }
    }
}

/**
 * Does a string end with a specific substring
 * 
 * @param (string) $string  The target of our search
 * @param (string) $ending  The ending substring we are looking for
 * @return (boolean) True if the first string ends with the second
 */
function endsWith($string, $ending) {
    $piece = strlen($ending); // Get the length of the ending string
    // Look at the end of the original string, just the right amount
    $ourEnd = substr($string, strlen($string) - $piece);
    return $ourEnd == $ending;
}

/**
 * Build an unordered list of linked items, such as used for a menu bar.
 * Assumption: that the URL helper has been loaded.
 * @param type $choices Array of name=>link pairs
 */
function build_menu_bar($choices, $this_page) {
    $result = '';
    foreach($choices as $name=>$link) {
        if (strcmp($name, "GAMES") == 0){
            $result .= 
                '<li>
                    <a class="more" href="#">GAMES</a>
                    <ul>
                        <li class="children" style="text-align: right;"><a href="http://www.kaijudo.com/" target="_blank" >KAIJUDO</a></li>
                        <li class="children" style="text-align: right;"><a href="http://magic.wizards.com/" target="_blank" >MAGIC: THE GATHERING</a></li>
                        <li class="children" style="text-align: right;"><a href="http://dnd.wizards.com/" target="_blank" >DUNGEONS &amp; DRAGONS</a></li>
                    </ul>
                 </li>';
        } else {
            $result .= '<li>'.anchor($link,$name).'</li>';
        }
    }
    
    return $result;
}

function build_foot_bar($choices){
        $result = '';
        foreach($choices as $name=>$link)
            $result .= '| '.anchor($link,$name).' ';
        $result .= '|';
        
        return $result;
}
    
/* End of file common_helper.php */
/* Location: application/helpers/common_helper.php */