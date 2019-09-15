<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paperikidb";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$sql = "CREATE TABLE `paperikidb`.`ta`(`Id` INT NOT NULL AUTO_INCREMENT , `Title` VARCHAR(255) NOT NULL, `Authors` VARCHAR(255), PRIMARY KEY(`Id`, `Title`))  ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
   //  echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `paperikidb`.`tt`(`Id` INT NOT NULL AUTO_INCREMENT , `Title` VARCHAR(255) NOT NULL, `Topics` VARCHAR(255), PRIMARY KEY(`Id`, `Title`))  ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    // echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `paperikidb`.`tar`(`Id` INT NOT NULL AUTO_INCREMENT , `Title` VARCHAR(255) NOT NULL, `Abstract` VARCHAR(255), `Result` VARCHAR(255), PRIMARY KEY(`Id`, `Title`))  ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    // echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `paperikidb`.`author` ( `Id` INT NOT NULL AUTO_INCREMENT , `Authorname` VARCHAR(255) NOT NULL , PRIMARY KEY (`Id`, `Authorname`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    // echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE `paperikidb`.`topic` ( `Id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(255) NOT NULL , `SOTA` INT NOT NULL , PRIMARY KEY (`Id`, `Name`, `SOTA`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    // echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE DEFINER=`root`@`localhost` PROCEDURE `Getcoauthor`(IN `newtitle` VARCHAR(255))
SELECT  a.Authors , a.Title, b.Title, b.Authors FROM ta a, ta b WHERE a.Authors= `newtitle` AND a.Title=b.Title AND a.Id < b.Id;";

if ($conn->query($sql) === TRUE) {
    // echo "Procedure created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

echo "<a href = 'home.php'>Go Homepage</a>";

?>
