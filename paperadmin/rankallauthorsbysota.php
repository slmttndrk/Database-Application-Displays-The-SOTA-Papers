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

                // List records
                $sql = "SELECT a.Title, a.Authors,b.Title, b.Abstract, SUM(b.Result) AS Result FROM ta a, tar b WHERE a.Title=b.Title GROUP BY Authors ORDER BY Result DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
                            <th>Authors</th>
                            <th>SOTA</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["Authors"]; ?></td>
                            <td><?php echo $row["Result"]; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
                    <?php echo "<br /><a href = 'home.php'>Go Homepage</a>"; ?>
                    <?php
                } else {
                    echo "0 results";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
