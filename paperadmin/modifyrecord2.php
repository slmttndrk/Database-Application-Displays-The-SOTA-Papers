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

                // Fetch the record
                // $sql = "SELECT a.Id, a.Title, a.Authors, b.Topics, c.Abstract, c.Result FROM ta a, tt b, tar c WHERE a.Id=b.Id AND a.Id=c.Id AND a.Id =" . $_GET['Id'];

                 $sql = "SELECT a.Id, a.Title, a.Authors, b.Title, b.Topics, c.Title, c.Abstract, c.Result FROM ta a, tt b, tar c WHERE a.Title=b.Title AND a.Title=c.Title AND a.Id =" . $_GET['Id'];
                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <form action="modifyrecord3.php" method="post">


                    <?php

                    // Get the data
                    $row = $result->fetch_assoc();
                    ?>
                        <p>ID: <input type="text" name="Id" value = "<?php echo $row["Id"] ?>" readonly /></p>
                        <p>Title: <input type="text" name="Title" value = "<?php echo $row["Title"] ?>" /></p>
                        <p>Abstract: <input type="text" name="Abstract" value = "<?php echo $row["Abstract"] ?>" /></p>
                        <p>Result: <input type="text" name="Result" value = "<?php echo $row["Result"] ?>" /></p>
                        <p>Authors: <input type="text" name="Authors" value = "<?php echo $row["Authors"] ?>" /></p>
                        <p>Topics: <input type="text" name="Topics" value = "<?php echo $row["Topics"] ?>" /></p>
                        <p><input type="submit" value = "Modify Record" /></p>
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
