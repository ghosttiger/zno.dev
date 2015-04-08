<?php

/**
 * @author Denis
 * @copyright 2015
 */

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "vnz");

$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die ("Нет соединения с БД");

mysqli_set_charset($connection, "utf-8") or die ("Не установлена кодировка БД");


?>