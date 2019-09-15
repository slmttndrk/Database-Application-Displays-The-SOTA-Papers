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
                $sql = "SELECT * FROM tar";
                //$sql = "SELECT a.Id, a.Title, a.Authors, b.Title, b.Topics, c.Title, c.Abstract, c.Result FROM ta a, tt b, tar c WHERE a.Title=b.Title AND a.Title=c.Title ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo $result->num_rows;
                    ?>
                    <table border = 1>
                        <tr>
                            <th>Operation</th>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Abstract</th>
                            <th>Result</th>
                            
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <a href = "deleterecord2.php?Id=<?php echo $row["Id"]; ?>">Delete</a>
                            </td>
                            <td><?php echo $row["Id"]; ?></td>
                            <td><?php echo $row["Title"]; ?></td>
                            <td><?php echo $row["Abstract"]; ?></td>
                            <td><?php echo $row["Result"]; ?></td>
                            
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
                    <?php
                } else {
                    echo "0 results";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
