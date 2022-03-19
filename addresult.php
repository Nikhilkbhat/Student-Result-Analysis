<?php

    session_start();

    $mysqli = new mysqli('localhost', 'root', '','result_analysis') or die(mysqli_error($mysqli));

    if (isset($_POST['addresult'])) {

        $regno = $_POST['regno'];
        $sname = $_POST['sname'];
        $sdob  = $_POST['sdob'];
        $mark1 = $_POST['mark1'];
        $mark2 = $_POST['mark2'];
        $mark3 = $_POST['mark3'];
        $mark4 = $_POST['mark4'];
        $mark5 = $_POST['mark5'];
        $mark6 = $_POST['mark6'];
        $mark7 = $_POST['mark7'];
        $mark8 = $_POST['mark8'];
        $mark9 = $_POST['mark9'];
        
        $Total = ($mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8+$mark9);

        if ($mark1 >= 35) {
            $srstatus1 = "P"; 
        } else {
            $srstatus1 = "F";
        }

        if ($mark2 >= 35) {
            $srstatus2 = "P"; 
        } else {
            $srstatus2 = "F";
        }

        if ($mark3 >= 35) {
            $srstatus3 = "P"; 
        } else {
            $srstatus3 = "P";
        }

        if ($mark4 >= 35) {
            $srstatus4 = "P"; 
        } else {
            $srstatus4 = "F";
        }

        if ($mark5 >= 35) {
            $srstatus5 = "P"; 
        } else {
            $srstatus5 = "F";
        }
        if ($mark6 >= 35) {
            $srstatus6 = "P"; 
        } else {
            $srstatus6 = "F";
        }
        if ($mark7 >= 35) {
            $srstatus7 = "P"; 
        } else {
            $srstatus7 = "F";
        }
         if ($mark8 >= 35) {
            $srstatus8 = "P"; 
        } else {
            $srstatus8 = "F";
        }
         if ($mark9 >= 35) {
            $srstatus9 = "P"; 
        } else {
            $srstatus9 = "F";
        }

        $mysqli->query("INSERT INTO studentsresults 
        (regno, sname, sdob, mark1, mark2, mark3, mark4, mark5,mark6,mark7,mark8,mark9,Total, srstatus1, srstatus2, srstatus3, srstatus4, srstatus5,srstatus6,srstatus7,srstatus8,srstatus9)
        VALUES('$regno', '$sname', '$sdob', '$mark1', '$mark2', '$mark3', '$mark4', '$mark5','$mark6','$mark7','$mark8','$mark9','$Total','$srstatus1', '$srstatus2', '$srstatus3', '$srstatus4', '$srstatus5','$srstatus6','$srstatus7','$srstatus8','$srstatus9')")
        or die($mysqli->error);

        $_SESSION['message'] = "Result has been added successfully!";
        $_SESSION['msg_type'] = "primary";
        $_SESSION['msg_icon'] = "fa-check-circle";

        header("location: adminpanel.php");
    }

?>