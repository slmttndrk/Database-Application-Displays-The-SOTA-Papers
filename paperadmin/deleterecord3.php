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
                $sql = "DELETE FROM ta WHERE Title = '" . $_POST['Title'] . "'  ";

                if ($conn->query($sql) === TRUE) {
                    echo "Record was deleted successfully <br />";
                    echo "<a href = 'home.php'>Go Homepage </a> <br />";
                } else {
                    echo "Error updating record: " . $conn->error;
                }


                $sql = "DELETE FROM tt WHERE Title = '" . $_POST['Title'] . "'  ";

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was deleted successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                $sql = "DELETE FROM tar WHERE Title = '" . $_POST['Title'] . "'  ";

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was deleted successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }

                
                $sql = "DELETE FROM author WHERE Authorname = ' " . $_POST['Authors'] . " ' AND Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was deleted successfully autttttt <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                
                
                $sql = "DELETE FROM topic WHERE Name = ' " . $_POST['Topics'] . " ' AND Id = " . $_POST['Id'];

                if ($conn->query($sql) === TRUE) {
                    // echo "Record was deleted successfully <br />";
                    // echo "<a href = 'home.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                
            }
            $conn->close();
        ?>

    </body>
</html>