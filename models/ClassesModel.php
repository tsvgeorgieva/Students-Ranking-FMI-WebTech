<?php

class ClassesModel extends BaseModel
{
    protected $tableName = "classes";

    public function getAll(){
        $statement = self::$db->query("SELECT 
            c.id as id,
            c.name as name,
            sp.name as speciality_name
            FROM classes c
            INNER JOIN specialities sp ON c.speciality_id = sp.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}