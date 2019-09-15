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

                // Insert the record
                $sql = "INSERT INTO ta(Title,Authors) " .
                    "VALUES('" . $_POST['Title'] . "', '" . $_POST['Authors'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'home.php'>Go Homepage</a> <br />";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                /*
                $sql = "INSERT INTO tt(Title, Topics) " .
                    "VALUES('" . $_POST['Title'] . "', '" . $_POST['Topics'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "INSERT INTO tar(Title, Abstract, Result) " .
                    "VALUES('" . $_POST['Title'] . "', '" . $_POST['Abstract'] .
                    "', '" . $_POST['Result'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                */

                $sql = "INSERT INTO author(Authorname) " .
                    "VALUES('" . $_POST['Authors'] . "')";

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was created successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                /*

                $sql = "INSERT INTO topic(Name, SOTA) " .
                    "VALUES('" . $_POST['Topics'] . "', '" . $_POST['Result'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                */

                ?>

                
                <br>
                <p>Add More Author</p>
                <form action="createrecord3.php" method="post">
                    <p>Title: <input type="text" name="Title" value = "<?php echo $_POST['Title'] ?>" readonly /></p>
                    <p>Authors: <input type="text" name="Authors" value = "" /></p>
                    <p><input type="submit" value = "Submit"/></p>
                </form>

                <?php
            }
            $conn->close();
        ?>

    </body>
</html>
