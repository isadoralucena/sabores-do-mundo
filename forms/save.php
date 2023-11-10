<?php

include __DIR__ . '/Form.php';

Model::createConnection(new SQLite3(__DIR__ . '/database.sqlite'));

Model::createModel(
    'CREATE TABLE IF NOT EXISTS forms
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        objective TEXT,
        visual_identity TEXT
    );'
);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['objective'])) {
        $form = new Form(
            $_POST['objective'],
            $_POST['visual_identity']
        );

        $form->save();

        header('Location: /index.html', true, 302);

        exit;
    }
}
