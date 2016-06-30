<?php

class GroupsModel extends BaseModel
{
    protected $tableName = "groups";

    public function getAll(){
        $statement = self::$db->query("SELECT
            g.id as id,
            g.name as name,
            c.name as class_name,
            sp.name as speciality_name
            FROM groups g
            INNER JOIN classes c ON g.class_id = c.id
            INNER JOIN specialities sp ON c.speciality_id = sp.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}