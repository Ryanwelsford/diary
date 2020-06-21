<?php
//db connection, creation of pdo var using schema for joes jobs
$pdo = new \PDO('mysql:dbname=woodlands;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);