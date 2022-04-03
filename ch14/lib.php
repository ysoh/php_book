<?php
define("DBHOST", "localhost");
define("DBUSER", "dbuser");
define("DBPASS", "dbpass");
define("DBNAME", "webdb_book");

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

session_start();

function err_message($msg, $uri=null) {
    if (isset($uri)) {
        echo "<html><head><script>
              alert(\"{$msg}\");
              location.href='{$uri}';
              </script></head></html>";
    } else {
        echo "<html><head><script>
              alert(\"{$msg}\");
              history.go(-1);
              </script></head></html>";
    }
    exit();
}
?>
