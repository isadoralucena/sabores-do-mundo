<?php

include __DIR__ . '/Model.php';

class Form extends Model
{
   public function __construct(
        private $age,
        private $clear_objective,
        private $understanding_objective,
        private $culinary_diversity,
        private $understandable_language,
        private $proposal,
        private $pleasant_visual_identity,
        private $culinary_visual_identity,
        private $color_pattern,
        private $coherent_logo,
        private $suggestion
    ) {}

    public function save()
    {
        $statement = self::$connection->prepare(
            "INSERT INTO forms (age, clear_objective, understanding_objective, culinary_diversity, understandable_language, proposal, pleasant_visual_identity, culinary_visual_identity, color_pattern, coherent_logo, suggestion) VALUES (:age, :clear_objective, :understanding_objective, :culinary_diversity, :understandable_language, :proposal, :pleasant_visual_identity, :culinary_visual_identity, :color_pattern, :coherent_logo, :suggestion);");

        $statement->bindValue(
            ':age', $this->age, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':clear_objective', $this->clear_objective, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':understanding_objective', $this->understanding_objective, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':culinary_diversity', $this->culinary_diversity, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':understandable_language', $this->understandable_language, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':proposal', $this->proposal, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':pleasant_visual_identity', $this->pleasant_visual_identity, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':culinary_visual_identity', $this->culinary_visual_identity, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':color_pattern', $this->color_pattern, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':coherent_logo', $this->coherent_logo, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':suggestion', $this->suggestion, SQLITE3_TEXT
        );

        return $statement->execute();
    }
}