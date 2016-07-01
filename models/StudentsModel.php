<?php

class StudentsModel extends BaseModel
{
    protected $tableName = "students";

    public function getAll()
    {
        $statement = self::$db->query("SELECT 
            s.id AS id,
            s.name AS name,
            s.faculty_number AS faculty_number,
            g.name AS group_name,
            c.name AS class_name,
            sp.name AS speciality_name
            FROM students s
            INNER JOIN groups g ON s.group_id = g.id
            INNER JOIN classes c ON g.class_id = c.id
            INNER JOIN specialities sp ON c.speciality_id = sp.id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $statement = self::$db->prepare("SELECT 
            s.id AS id,
            s.name AS name,
            s.faculty_number AS faculty_number,
            g.name AS group_name,
            c.name AS class_name,
            sp.name AS speciality_name,
            SUM(a.points) AS total_points
            FROM students s
            INNER JOIN groups g ON s.group_id = g.id
            INNER JOIN classes c ON g.class_id = c.id
            INNER JOIN specialities sp ON c.speciality_id = sp.id
            INNER JOIN students_activities sa ON s.id = sa.student_id
            INNER JOIN activities a ON sa.activity_id = a.id
            WHERE s.id = ?
            GROUP BY s.id");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
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

    public function getStudentActivities($studentId)
    {
        $statement = self::$db->prepare("SELECT a.name AS activity_name,
                a.points AS points,
                sa.datetime AS datetime,
                c.name AS course_name
            FROM students s
            INNER JOIN students_activities sa ON s.id = sa.student_id
            INNER JOIN activities a ON sa.activity_id = a.id
            INNER JOIN courses c ON c.id = a.course_id
            WHERE s.id = ?
            ORDER BY sa.datetime DESC");
        $statement->bind_param("i", $studentId);
        $statement->execute();
        return $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getActivitiesForStudent($studentId)
    {
        $statement = self::$db->prepare("SELECT 
                a.id AS id,
                a.name AS name,
                a.points AS points,
                c.name AS course_name
            FROM students s
            INNER JOIN groups g ON s.group_id = g.id
            INNER JOIN classes cl ON g.class_id = cl.id
            INNER JOIN specialities sp ON cl.speciality_id = sp.id
            INNER JOIN courses_specialities cs ON cs.speciality_id = sp.id
            INNER JOIN courses c ON c.id = cs.course_id
            INNER JOIN activities a ON a.course_id = c.id
            WHERE s.id = ?");
        $statement->bind_param("i", $studentId);
        $statement->execute();
        return $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function createActivity($studentId, $activityId, $date)
    {
        $statement = self::$db->prepare("INSERT INTO students_activities(student_id, activity_id, datetime) VALUES (?, ? , ?)");
        $statement->bind_param("iis", $studentId, $activityId, $date);
        $statement->execute();
        return $statement->affected_rows > 0;
    }
}