<?php

    function returnJson()
    {
        // Make Array Object
        $myBio = array(
            "name"              => "Rizki Syaban Aryanto",
            "age"               => 21,
            "address"           => "Jl. Ibu Ganirah RT 01 RW 03 No.76, Cibeber, Cimahi Selatan",
            "hobbies"           => array("Read", "Sport"),
            "is_married"        => false,
            "list_school"       => array("name" => "SMK Negeri 1 Cimahi", "year_in" => 2014, "year_out" => 2018, "major" => "Network Computer & Networking"),
            "skills"            => array("skill_name" => "Network", "level" => "advanced"),
            "interest_coding"   => true,
        );

        // Convert to Json Format and return
        return $myJson = json_encode($myBio, JSON_PRETTY_PRINT);
    }

    echo returnJson();
