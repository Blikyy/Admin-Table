<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "WAP_SUPL";

    $db = new mysqli($servername, $username, $password, $database);

    $sql = "SELECT * FROM admin_table";

    //insert

    if(isset($_POST['insert_submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        
        $insert_sql = "INSERT INTO `admin_table`(`id`, `name`, `email`, `age`) VALUES (NULL,'$name','$email','$age')";
    
        $insert_result = mysqli_query($db, $insert_sql);
        header("Location: index.php");
        mysqli_close($db);
    }

    //update

    if(isset($_POST['update_submit'])){

        $id = $_POST['id'];
        $update_name = $_POST['name'];
        $update_email = $_POST['email'];
        $update_age = $_POST['age'];

        $update_sql = "UPDATE `admin_table` SET";

        if(!empty($update_name)){
            $update_sql .= "`name`='$update_name'";
        }
        else if(!empty($update_email)){
            $update_sql .= "`email`='$update_email'";
        }
        else if(!empty($update_age)){
            $update_sql .= "`age`='$update_age'";
        }
        else if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['age'])){
            header("Location: index.php");
        }

        $update_sql .= " WHERE `id`='$id'";
    
        $update_result = mysqli_query($db, $update_sql);
        
        mysqli_close($db);
        header("Location: index.php");
    }

    //delete

    if(isset($_POST['delete_submit'])){

        $id_to_delete = $_POST['id'];
        
        $delete_sql = "DELETE FROM `admin_table` WHERE `id`=$id_to_delete";
    
        $delete_result = mysqli_query($db, $delete_sql);
        header("Location: index.php");
        mysqli_close($db);
    }

    $result = mysqli_query($db, $sql);
?>