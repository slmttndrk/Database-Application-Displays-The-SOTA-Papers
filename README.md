# Database Application Displays The SOTA Papers

## Introduction

  * In this repository, I implemented a UI that displays state of the art (SOTA) results in
computer science. There are authors, papers and topics in the system. These entities
have the following properties:

    * Author: Name and surname. They are not necessarily unique independently but
I assumed there exists only one author with a name and surname couple.

    * Paper: Author, title, abstract, topic and result. Each paper can have multiple
authors, yet it has only one result. Moreover, titles are unique though a paper can
have multiple topics.

    * Topic: Name and SOTA result and both are unique.

  * Moreover, there are two types of people using the system: Admins and users. I
did not implement an authentication mechanism. I just provide two
options for being user or admin and the person can choose what he/she is.


## Execution

  * I implemented this application using XAMPP and PHP language. So, in order to run this UI, 
you should install the XAMPP. After installation, run the APACHE server and MYSQL database 
from XAMPP Control Panel. Then, you can run the UI on the browser pressing the 
`http://localhost/paperdbhomepage.php`(You have to put these files into htdocs folder in XAMPP)

  * I also export the stored procedure "Getcoauthor()" into a file.
