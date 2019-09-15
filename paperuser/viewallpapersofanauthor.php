<html>
    <head>
        <title>Papers</title>
    </head>
    <body>
        <?php
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "paperikidb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {

                die("Connection failed: " . $conn->connect_error);
            }else{
            ?>
                <form action="viewallpapersofanauthor2.php" method="post">
                    <p>Authors: <input type="text" name="Authors" value = "" /></p>
                    <p><input type="submit" value = "Search By Author"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
