<?php

/*
    Get all sigml file in this folder
    convert them into json and dump them

    This will be loaded by the ui when the 
    avatar will play hello sign

    use gzip for json to make the file size
    small
*/

$files = glob("*.sigml");

$result = array();

foreach ($files as $file) {
    // Check if the file is not empty
    if (filesize($file) > 0) {
        $output = file_get_contents($file);
        // Remove tabs, newlines, and carriage returns
        $output = str_replace(array("\t", "\n", "\r"), '', $output);
    } else {
        $output = ''; // Handle empty file case
    }

    $filearr = explode(".", $file);
    $newarr = array('w' => $filearr[0], 's' => $output ?: ''); // Default to empty string if null

    array_push($result, $newarr);
}

echo json_encode($result);

?>