DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Getcoauthor`(IN `newtitle` VARCHAR(255))
SELECT  a.Authors , a.Title, b.Title, b.Authors FROM ta a, ta b WHERE a.Authors= `newtitle` AND a.Title=b.Title AND a.Id < b.Id$$
DELIMITER ;