<?php

class StudentsModel extends BaseModel
{
    protected $tableName = "students";

    public function getAll(){
        $statement = self::$db->query("SELECT s.name as name,
            s.faculty_number as faculty_number,
            g.name as group_name,
            c.name as class_name,
            sp.name as speciality_name
            FROM students s
            INNER JOIN groups g ON s.group_id = g.id
            INNER JOIN classes c ON g.class_id = c.id
            INNER JOIN specialities sp ON c.speciality_id = sp.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function checkIfExists($facultyNumber)
    {
        $statement = self::$db->prepare("SELECT COUNT(id) FROM {$this->tableName} WHERE faculty_number = ?");
        $statement->bind_param("s", $facultyNumber);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
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