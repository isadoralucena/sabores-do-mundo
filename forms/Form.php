<?php

include __DIR__ . '/Model.php';

class Form extends Model
{
   public function __construct(
        private $objective,
        private $visual_identity,
    ) {}

    public function save()
    {
        $statement = self::$connection->prepare(
            "INSERT INTO forms (objective, visual_identity) VALUES (:objective, :visual_identity);");

        $statement->bindValue(
            ':objective', $this->objective, SQLITE3_TEXT
        );

        $statement->bindValue(
            ':visual_identity', $this->visual_identity, SQLITE3_TEXT
        );

        return $statement->execute();
    }
}