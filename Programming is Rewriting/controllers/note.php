<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currUserID = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['id'] === $currUserID);

require "views/note.view.php";