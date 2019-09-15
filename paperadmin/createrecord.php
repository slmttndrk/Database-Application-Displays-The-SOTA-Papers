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
                <form action="createrecord2.php" method="post">
                    <p>Title: <input type="text" name="Title" value = "" /></p>
                    <p>Abstract: <input type="text" name="Abstract" value = "" /></p>
                    <p>Result: <input type="text" name="Result" value = "" /></p>
                    <p>Authors: <input type="text" name="Authors" value = "" /></p>
                    <p>Topics: <input type="text" name="Topics" value = "" /></p>
                    <p><input type="submit" value = "Create Record"/></p>
                </form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
