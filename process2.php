<?php
    $checkbox = $_POST['rest'];

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $visitor = test_input($_POST['visitor']);
    $groupNum = test_input($_POST['groupNum']);
    $vdate = test_input($_POST['vdate']);
    $place = test_input($_POST['fplace']);
    $rating = test_input($_POST['rating']);
    $destination_email = "RITISTprofessor@gmail.com", "ttpache@gmail.com";


    $email_subject = "Quebec City --- Visitor Information";
    $email_body = "Visitor Name $visitor\n";
    $email_body .= "Group size $groupNum\n";
    $email_body .= "Date visited $vdate\n";
    $email_body .= "Favorite place $place\n";
    $email_body .= "Rating $rating\n";
    if(!empty($checkbox)) {
        $n = count($checkbox);
        for($i=0; $i<$n; $i++) {
            $restaurants[] = $checkbox[$i];
            //echo($restaurants. " ");
        }
        $email_body .= "Restaurants visited: " .implode(", ", $restaurants) ."\n";
    }    

    mail($destination_email, $email_subject, $email_body);
    echo("Data sent successfully")

?>

<?php
    $path = './';
require $path.'../../../dbConnect.inc';
    $page = 'Thank you for your feedback';
    include $path.'assets/inc/header.php';
?>

<body>

    <?php
	   $path = './';
	   $page = 'Thank you for your feedback';
	   include $path.'assets/inc/navbar.php';
       ?>
    </head>

    <body>
        <?php 
        $sql = "SELECT content FROM modsite where page = '$page'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->FETCH_ASSOC()){
            echo $row['content'];
        }
    }
    else {
        echo "Something went wrong";
    }
    ?>
        <footer>
            <?php
            $filename = 'process2.php';
    $path = './';
    require $path.'assets/inc/footer.php';
        ?>
        </footer>
        <script src="assets/js/hamburger.js"> </script>
    </body>
    <html>
