<?php

abstract class BaseModel
{
    protected static $db;
    protected $tableName;

    public function __construct()
    {
        if (self::$db == null) {
            self::$db = new mysqli(
                DB_HOST, DB_USER, DB_PASS, DB_NAME);
            self::$db->set_charset("utf8");
            if (self::$db->connect_errno) {
                die('Cannot connect to database');
            }
        }
    }

    public function getAll()
    {
        $statement = self::$db->query("SELECT * FROM {$this->tableName};");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $statement = self::$db->prepare("SELECT * FROM {$this->tableName} WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
}
