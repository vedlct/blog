<?php

if(isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];

    $email = $_POST['email'];
    $manu = $_POST['manue'];


    $insert ="INSERT into catagory (fullname,email,manu) VALUES( $fullname,$email,$manu)";

    if ($insert==true)
    {

        echo"<script>alert('all information   has been added sucessfully')</script>";
    }

    else
        {
            echo"<script>alert('this is not yet all ')</script>";

    }


    }
?>