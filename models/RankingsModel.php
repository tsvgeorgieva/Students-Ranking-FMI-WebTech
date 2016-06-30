<?php

class RankingsModel extends BaseModel
{
    protected $tableName = "students";

    public function getRankings($courseId, $specialityId, $classId, $groupId, $studentId)
    {
        $conditions = array();
        $bindParamsStr = "";
        $bindParams = array();
        if ($courseId != '') {
            array_push($conditions, "c.id = ?");
            $bindParamsStr .= "i";
            array_push($bindParams, $courseId);
        }
        if ($specialityId != '') {
            array_push($conditions, "sp.id = ?");
            $bindParamsStr .= "i";
            array_push($bindParams, $specialityId);
        }

        if ($classId != '') {
            array_push($conditions, "cl.id = ?");
            $bindParamsStr .= "i";
            array_push($bindParams, $classId);
        }

        if ($groupId != '') {
            array_push($conditions, "g.id = ?");
            $bindParamsStr .= "i";
            array_push($bindParams, $groupId);
        }

        if ($studentId != '') {
            array_push($conditions, "s.id = ?");
            $bindParamsStr .= "i";
            array_push($bindParams, $studentId);
        }

        $conditionsStr = count($conditions) > 0 ? 'WHERE ' . implode(" AND ", $conditions) : '';

        $statement = self::$db->prepare("SELECT s.name as name,
                s.faculty_number as faculty_number,
                g.name as group_name,
                cl.name as class_name,
                sp.name as speciality_name,
                c.name as course_name,
                SUM(a.points) as points
            FROM students s
            INNER JOIN groups g ON s.group_id = g.id
            INNER JOIN classes cl ON g.class_id = cl.id
            INNER JOIN specialities sp ON cl.speciality_id = sp.id
            INNER JOIN students_activities sa ON s.id = sa.student_id
            INNER JOIN activities a ON sa.activity_id = a.id
            INNER JOIN courses c ON c.id = a.course_id
            {$conditionsStr}
            GROUP BY s.id
            ORDER BY points desc");
        
        if (count($conditions) > 0) {
            $statement->bind_param($bindParamsStr, ...$bindParams);
        }

        $statement->execute();
        $result = $statement->get_result()->fetch_all(MYSQL_ASSOC);
        return $result;
    }
}