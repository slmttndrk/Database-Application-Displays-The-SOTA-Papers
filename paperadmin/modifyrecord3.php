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

                // Update the record
                $sql = "UPDATE ta SET Title = '" . $_POST['Title'] . "', Authors = '" . $_POST['Authors'] . "' WHERE Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    echo "Record was updated successfully <br />";
                    echo "<a href = 'home.php'>Go Homepage</a> <br />";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "UPDATE tt SET Title = '" . $_POST['Title'] . "', Topics = '" . $_POST['Topics'] . "' WHERE Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was updated successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "UPDATE tar SET Title = '" . $_POST['Title'] . "', Abstract = '" . $_POST['Abstract'] .
                    "', Result = '" . $_POST['Result'] . "' WHERE Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                     // echo "Record was updated successfully  tar <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "UPDATE author SET Authorname =  '" . $_POST['Authors'] . "' WHERE Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was updated successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "UPDATE topic SET SOTA = '" . $_POST['Result'] . "', Name = '" . $_POST['Topics'] . "' WHERE Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was updated successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>