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
                <form action="searchkeywordontitleorabstract2.php" method="post">
                    <p>Keyword: <input type="text" name="Keyword" value = "" /></p>
                    <p><input type="submit" value = "Search By Keyword"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
