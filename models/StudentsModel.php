<?php

class StudentsModel extends BaseModel
{
    protected $tableName = "students";

    public function checkIfExists($facultyNumber)
    {
        $statement = self::$db->prepare("SELECT COUNT(id) FROM {$this->tableName} WHERE faculty_number = ?");
        $statement->bind_param("s", $facultyNumber);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        var_dump($result);
        return $result['COUNT(id)'] > 0;
    }

    public function create($name, $facultyNumber, $groupId)
    {
        if ($this->checkIfExists($facultyNumber)) {
            return false;
        }

        $statement = self::$db->prepare("INSERT INTO {$this->tableName}(name, faculty_number, group_id) VALUES (?)");
        $statement->bind_param("ssi", $name, $facultyNumber, $groupId);
        $statement->execute();
        return $statement->affected_rows > 0;
    }
}