<?php
    // require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else {
        // get id val
        $id = $_GET['id'];
        // call delete fun
        $result = $crud->deleteAttendee($id);
        // redirect to list
        if($result){
            header("Location: viewrecords.php");
        }else {
            include 'includes/errormessage.php';
        }
    }
?>