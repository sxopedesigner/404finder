<?php
// Include the library
include('simplehtmldom/simple_html_dom.php');
 
 $url = $_POST['url'];
// Retrieve the DOM from a given URL
$url = file_get_html($url);

// Find all "A" tags and print their HREFs
echo '<h1>Links</h1><hr>';
foreach($url->find('a') as $e) 
    echo $e->href . '<br>';
    
// Retrieve all images and print their SRCs
echo '<h1>Images</h1><hr>';
foreach($url->find('img') as $e)
    echo $e->src . '<br>';

echo '<h1>Check if URL exists or not</h1><hr>';

// Initializing new session
$ch = curl_init($url);

// Request method is set
curl_setopt($ch, CURLOPT_NOBODY, true);

// Executing cURL session
curl_exec($ch);

// Getting information about HTTP Code
$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Testing for 404 Error
if($retcode != 200) {
    echo "Specified URL does not exist";
}
else {
    echo "Specified URL exists";
}

curl_close($ch);
?>