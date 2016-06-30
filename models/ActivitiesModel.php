<?php

class ActivitiesModel extends BaseModel
{
    protected $tableName = "activities";

    public function getAll(){
        $statement = self::$db->query("SELECT 
            a.id as id,
            a.name as name,
            a.points as points,
            c.name as course_name
            FROM activities a
            INNER JOIN courses c ON a.course_id = c.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}