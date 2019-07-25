<?php
// Include the library
include('simplehtmldom/simple_html_dom.php');
 
// Retrieve the DOM from a given URL
$url = file_get_html('https://cypherox.com/');

// Find all "A" tags and print their HREFs
echo '<h1>Links</h1><hr>';
foreach($url->find('a') as $e) 
    echo $e->href . '<br>';
    
// Retrieve all images and print their SRCs
echo '<h1>Images</h1><hr>';
foreach($url->find('img') as $e)
    echo $e->src . '<br>';
?>