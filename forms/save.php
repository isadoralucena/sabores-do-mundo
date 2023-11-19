<?php

include __DIR__ . '/Form.php';

Model::createConnection(new SQLite3(__DIR__ . '/database.sqlite'));

Model::createModel(
    'CREATE TABLE IF NOT EXISTS forms
    (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        age TEXT,
        clear_objective TEXT,
        understanding_objective TEXT,
        culinary_diversity TEXT,
        understandable_language TEXT,
        proposal TEXT,
        pleasant_visual_identity TEXT,
        culinary_visual_identity TEXT,
        color_pattern TEXT,
        coherent_logo TEXT,
        suggestion TEXT
    );'
);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty ($_POST['understanding_objective'])){
        $form = new Form(
            $_POST['age'],
            $_POST['clear_objective'],
            $_POST['understanding_objective'],
            $_POST['culinary_diversity'],
            $_POST['understandable_language'],
            $_POST['proposal'],
            $_POST['pleasant_visual_identity'],
            $_POST['culinary_visual_identity'],
            $_POST['color_pattern'],
            $_POST['coherent_logo'],
            $_POST['suggestion']
        );

        $form->save();

        header('Location: /index.html', true, 302);

        exit;
    }
}
