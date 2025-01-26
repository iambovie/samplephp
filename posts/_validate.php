<?php

$title = $_POST['title'];
    $content = $_POST['content'];
    $published_date = $_POST['published_date'] ?: date('Y-m-d');

    // validate and sanetize title
    if (isPresent($title)) {
        $title = sanitizeItem($title, 'string');    
    } else {
        goBack("Title is required");
    }

    
    // validate and sanetize content
    if (isPresent($content)) {
        $content = sanitizeText($content);    
    } else {
        goBack("content is required");
    } 