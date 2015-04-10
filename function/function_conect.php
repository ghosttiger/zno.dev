<?

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "zno");

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die ("Нет соединения с БД");

?>