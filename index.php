<?php 
include 'config/conn.php';

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ($result = $mysqli->query("SELECT * FROM employees LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    $result->close();
}
?>
<html>
<link rel="stylesheet" type="text/css" href="styles/text.css">
<h1>Hello World</h1>


</html>
<?php ?>