<!-- author Tyler Pache
     date 2/17/2019
	 description survey page for midterm project on Quebec
-->

<?php
    $path = './';
require $path.'../../../dbConnect.inc';
    $page = 'Survey';
    require $path.'assets/inc/header.php';
?>

    <?php
	   $path = './';
	   $page = 'Survey';
	   require $path.'assets/inc/navbar.php';
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
            $filename = 'survey.php';
    $path = './';
    require $path.'assets/inc/footer.php';
        ?>
        </footer>
    <script src="assets/js/hamburger.js"> </script>
</body>

</html>
