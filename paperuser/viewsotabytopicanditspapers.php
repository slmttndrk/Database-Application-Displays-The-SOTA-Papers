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
                // echo $_GET['Name'];
                // Fetch the record
                // $sql = "SELECT Title, Name FROM paper WHERE Name = '" . $_GET["Name"] . "' GROUP BY Title ORDER BY Result DESC";
                //$sql = "SELECT a.Topics, a.Title, b.Title, b.Abstract, b.Result FROM tt a, tar b WHERE a.Topics='" . $_GET['Name'] . "' AND a.Title=b.Title ";

                $sql = "SELECT a.Name, b.Topics, b.Title, c.Title FROM topic a, tt b, tar c WHERE a.Name='" . $_GET['Name'] . "' AND a.Name=b.Topics AND  b.Title=c.Title";


                $result = $conn->query($sql);

                // If the record actually exists
                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                     <table border = 1>
                        <tr>
                            <th>Title</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["Title"]; ?></td>
                         </tr>
                        <?php
                    }

                    ?>
                    </table>
                    <?php echo "<br /><a href = 'home.php'>Go Homepage</a>"; ?>
                    <?php
                } else {
                    echo "Record does not exist";
                    echo "<br /><a href = 'home.php'>Go Homepage</a>";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
