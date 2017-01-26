<?php
    $bestphone = $_POST['phone_radio'];
    var_dump($_POST['last'], $_POST['first'], $_POST['email'], $_POST[$bestphone]);
    $connect = mysqli_connect("localhost", "root", "AleksandR24", "conactmanager");
    $query = "INSERT INTO contacts 
      (last, first, email, bestphone, home, work, cell, address1, address2, city, state, zip, country, birthday)
      VALUES ('".$_POST['last']."', '"
        .$_POST['first']."', '"
        .$_POST['email']."', '"
        .$_POST[$bestphone]."', '"
        .$_POST['home']."', '"
        .$_POST['work']."', '"
        .$_POST['cell']."', '"
        .$_POST['address_1']."', '"
        .$_POST['address_2']."', '"
        .$_POST['city']."', '"
        .$_POST['state']."', '"
        .$_POST['zip']."', '"
        .$_POST['country']."', '"
        .$_POST['birthday']."')";
    $query_low = "INSERT INTO contacts (last, first, email, bestphone) VALUES (".$_POST['last'].", ".$_POST['first'].", ".$_POST['email'].", ".$_POST[$bestphone].")";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        echo "<br>".$query;
        die();
    }else{
        echo "new record";
        header("location: index.php");
    }
    mysqli_close($connect);