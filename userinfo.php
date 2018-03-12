<?php
    include_once('db.php');

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];

    if(mysql_query("INSERT INTO user VALUES('$Name','$Age')"))
        echo "Successfully Inserted";
    else
        echo "Insertion Failed";
?>