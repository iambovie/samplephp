<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate and sanetize name
    if (isPresent($name)) {
        $name = sanitizeItem($name, 'string');    
    } else {
        goBack("Name is required");
    }

    
    // validate and sanetize email
    if (isPresent($email)) {
        $email = sanitizeItem($email, 'email');    
    } else {
        goBack("Email is required");
    }
    
   
   
    // validate and sanetize password
    if (isPresent($password)) {

        // Check if password is strong
        $has_capital_letter = preg_match('@[A-Z]@', $password);
        $has_simple_letter = preg_match('@[a-z]@', $password);
        $has_number = preg_match('@[0-9]@', $password);
        $has_special_letter = preg_match('@[^\w]@', $password);
        $password_is_long = strlen($password) > 8;

        if ($has_capital_letter && $has_simple_letter && $has_number && $has_special_letter && $password_is_long) {
            // user passs is strong
        } else {
            goBack("Password is must contain Captal Letter, Simple Letter, Number and Special Character and must be atleast 9 character long");
        }  
        } else {
            goBack("Password is required");
        }