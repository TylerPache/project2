<?php
    $path = './';
    require $path.'../../../dbConnect.inc';   
    if ($mysqli) {
        if (isset($_POST['name']) && isset($_POST['comment'])) {
            if( $_POST['name']!='' && $_POST['comment']!='' ){

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }   
           
$stmt = $mysqli->prepare("INSERT INTO feedback(name, comment) VALUES(?,?)");
            $stmt->bind_param("ss", $fullname, $comment);
                
            $fullname = test_input($_POST['name']);
            $comment = test_input($_POST['comment']);
            $submit = $_POST['submitform'];
            
            $stmt->execute();
            $stmt->close();
            }//end of if to make sure data is sent using $_POST
        }//end of isset
    }

?>

<?php
    $path = './';
    $page = 'Comments';
    include $path.'assets/inc/header.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/comments.css" />
</head>

<body>
    <?php
	   $path = './';
	   $page = 'Comments';
	   include $path.'assets/inc/navbar.php';
    
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
    <div id="table">
        <?php
    if($mysqli){    
    //get contents of table and send back
        $sql = 'select name, comment from feedback';
        $res=$mysqli->query($sql);
        if($res->num_rows > 0){
            echo "<table><tr><th>Name</th><th>Comment</th></tr>";
            while($row = $res->fetch_assoc()){
                echo "<tr><td>".$row["name"] . "</td><td>".$row["comment"] . "</td></tr>"; 
            }
            echo "</table>";
        }
    }
    ?>
    </div>
    <footer>
        <?php
            $filename = 'comments.php';
    $path = './';
    require $path.'assets/inc/footer.php';
        ?>
    </footer>
    <script src="assets/js/hamburger.js"> </script>
</body>

</html>
