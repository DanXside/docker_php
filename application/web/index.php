<?php

$dsn = "host=localhost port=5432 dbname=docker_php user=docker-dan password=docker-dan options='--client_encoding=UTF8'";
$dbConn = pg_connect($dsn);
$result = pg_query($dbConn, "select * from pg_stat_activity");

var_dump(pg_fetch_all($result));