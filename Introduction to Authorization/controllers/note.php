<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currUserID = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

if (! $note) {
    abort();
}

if ($note['id'] !== $currUserID) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";