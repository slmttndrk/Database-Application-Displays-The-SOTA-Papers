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
                
                // Fetch the record
                $sql = "SELECT Title, Topics FROM tt WHERE Topics='" . $_POST["Topic"] . "' ";
                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                     <table border = 1>
                        <tr>
                            <th>Topics</th>
                            <th>Title</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["Topics"]; ?></td>
                            <td><?php echo $row["Title"]; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
                    <?php echo "<br /><a href = 'home.php'>Go Homepage</a>"; ?>
                    <?php
                } else {
                    echo "Paper does not exist";
                    echo "<br /><a href = 'home.php'>Go Homepage</a>";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
