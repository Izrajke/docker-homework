<?php

$host        = "host = postgres";
$port        = "port = 5432";
$dbname      = "dbname = docker_homework";
$credentials = "user = postgres password = postgres";

$db = pg_connect("$host $port $dbname $credentials");
if ($db === false) {
    exit('Error : Unable to open database');
}

$sql = <<<EOF
      SELECT * FROM "comments";
EOF;

$query = pg_query($db, $sql);
if ($query === false) {
    echo pg_last_error($db);
}
while ($row = pg_fetch_assoc($query)) {
    echo "<tr>
            <td>" . $row['text'] . "</td><br>
            <td>" . $row['created_at'] . "</td>
        </tr>";
}
pg_close($db);
