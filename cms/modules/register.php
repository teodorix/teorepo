<?include "config.php";?>

<?
$login = $_GET['l'];
$pass = md5($_GET['p']);

$query = "SELECT * FROM users WHERE login='$login' AND pass='$pass'";

$result = mysql_query($query) or die("Query failed : " . mysql_error());
$x=0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        #print_r($row);
		$x=1;
    }

echo $x;






?>