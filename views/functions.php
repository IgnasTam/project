<?php

if (function_exists('getComments') == FALSE) {
    function getComments() {
        $data = [];

        if (file_exists(COMMENTS_FILE)) {
            $data = file_get_contents(COMMENTS_FILE);
            $data = json_decode($data, TRUE) ?? [];
        }

        return $data;
    }
}

if (function_exists('dd') == FALSE) {
    function dd() {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die(1);
    }
}