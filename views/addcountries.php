<?php
// Saving data from form in text file in JSON format
require_once 'bootstrap.php';
// check if all form data are submited, else output error message
if (isset($_POST['title2']) && isset($_POST['text2'])) {
    // if form fields are empty, outputs message, else, gets their data
    if (empty($_POST['title2']) || empty($_POST['text2'])) {
        echo 'All fields are required';
    } else {
        // adds form data into an array
        $data = array(
            'title' => $_POST['title2'],
            'text' => $_POST['text2'],
            'time' => date("Y-m-d H:i:s"),
        );

        $filetxt = 'Countries.txt';

        $arr_data = array();        // to store all form data

        // check if the file exists
        if (file_exists($filetxt)) {
            // gets json-data from file
            $jsondata = file_get_contents($filetxt);

            // converts json string into array
            $arr_data = json_decode($jsondata, true);
        }

        // appends the array with new form data
        $arr_data[] = $data;

        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        // saves the json string in "formdata.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if (file_put_contents('Countries.txt', $jsondata)) {
            echo 'Data successfully saved';
        } else {
            echo 'Unable to save data in "comment.txt"';
        }
    }
} else {
    echo 'Form fields not submited';
}
header('location:Home.php');