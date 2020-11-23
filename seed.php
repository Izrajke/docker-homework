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
      CREATE TABLE comments
      (ID INT PRIMARY KEY     NOT NULL,
      text           TEXT    NOT NULL,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
EOF;

$ret = pg_query($db, $sql);
if ($ret === false) {
    echo pg_last_error($db);
}

$sql = <<<EOF
      INSERT INTO comments(id, text) VALUES(1, 'Hello, Docker Homework!');
EOF;

$ret = pg_query($db, $sql);
if ($ret === false) {
    echo pg_last_error($db);
}
pg_close($db);
