<?php

class CoursesModel extends BaseModel
{
    protected $tableName = "courses";

    public function getAll(){
        $statement = self::$db->query("SELECT 
            c.id as id,
            c.name as name,
            sp.name as speciality_name
            FROM courses c
            INNER JOIN courses_specialities cs ON c.id = cs.course_id
            INNER JOIN specialities sp ON cs.speciality_id = sp.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}