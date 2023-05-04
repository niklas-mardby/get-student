<?php

    $students = [
        [
            "id" => 1,
            "name" => "Lisa Svensson",
            "mobile" => "070 - 123 123 123"
        ],
        [
            "id" => 2,
            "name" => "Stefan Hansson",
            "mobile" => "070 - 345 345 345"
        ],
        [
            "id" => 13,
            "name" => "Mio Andersson",
            "mobile" => "070 - 567 567 567"
        ]
    ];

    $chosen_student = [
        "name" => "-",
        "mobile" => "-"
    ];

    if(isset($_GET['id'])){
        $sanitized_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $chosen_id = filter_var($sanitized_id, FILTER_VALIDATE_INT);

        foreach($students as $find_student){
            if($find_student['id'] === $chosen_id){
                $chosen_student = $find_student;
            }
        }
    }

    include "view.php";
?>