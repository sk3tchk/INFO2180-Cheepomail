<?php
     $db_con=mysqli_connect("localhost","root", "" ,"cheapo");

    if($db_con->connect_errno) {
        printf("Connect Falied: %s\n", $db_con->connect_error);
        exit();
    }

    if ($db_con->ping()) {
        printf ("Our connection is ok!\n");
    } else {
    printf ("Error: %s\n", $db_con->error);
    }
?>
