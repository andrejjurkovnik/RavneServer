<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $db = new SQLite3('test1.db');
        $db->exec('CREATE TABLE foo (bar STRING)');
        $db->exec("INSERT INTO foo (bar) VALUES ('This is a test3')");
        $db->exec("INSERT INTO foo (bar) VALUES ('This is a test2')");
        // put your code here
        ?>
    </body>
</html>
