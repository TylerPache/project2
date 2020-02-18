<?php
    $path = './';
require $path.'../../../dbConnect.inc';
    $page = 'Summer Activities';
    include $path.'assets/inc/header.php';
?>

    <?php
	   $path = './';
	   $page = 'Summer Activities';
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
            $filename = 'summeractivities.php';
    $path = './';
    require $path.'assets/inc/footer.php';
        ?>
        </footer>
    <script src="assets/js/hamburger.js"> </script>
</body>

</html>
