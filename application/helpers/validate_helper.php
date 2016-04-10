<?php

    // validates phone number. Returns true iff the $number is a valid phone number
    function check_phone($number) {
        if ($number == null) return false;
        
        // Source: Jon Stephens, http://regexlib.com/REDetails.aspx?regexp_id=478
        $regex = '/^(\(?\d\d\d\)?)?( |-|\.)?\d\d\d( |-|\.)?\d{4,4}(( |-|\.)?[ext\.]+ ?\d+)?$/';
        
        $result = preg_match($regex, $number);
        return ($result != 0); // returns true if $number validates as a phone number
    }
    
    // validates email address. Returns true iff the $address is a valid email address
    function check_email($address) {
        if ($address == null) return false;
        
        // Source: David Huyck, http://regexlib.com/REDetails.aspx?regexp_id=140
        $regex = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))$/';
        
        $result = preg_match($regex, $address);
        return ($result != 0); // returns true if $address validates as an email address
    }
?>
