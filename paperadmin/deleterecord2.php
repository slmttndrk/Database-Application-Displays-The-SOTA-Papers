<html>
    <head>
        <title>CMPE Students</title>
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

                $sql = "SELECT c.Id, c.Title, a.Title, a.Authors, b.Title, b.Topics FROM tar c, ta a, tt b WHERE c.Title=a.Title AND c.Title=b.Title AND c.Id =" . $_GET['Id'];
                $result = $conn->query($sql);


                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <form action="deleterecord3.php" method="post">

                    <?php

                    // Get the data
                    $row = $result->fetch_assoc();
                    ?>
                        <p>Id: <input type="text" name="Id" value = "<?php echo $row["Id"] ?>" readonly /></p>
                        <p>Title: <input type="text" name="Title" value = "<?php echo $row["Title"] ?>" readonly /></p>
                        <p>Authors: <input type="text" name="Authors" value = "<?php echo $row["Authors"] ?>" readonly /></p>
                        <p>Topics: <input type="text" name="Topics" value = "<?php echo $row["Topics"] ?>" readonly /></p>
                        <p><input type="submit" value = "Delete Record" /></p>
                    </form>
                    <?php
                } else {
                    echo "Record does not exist";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
