<?php

class RankingsController extends BaseController
{
    public $studentsRankings;
    public $courseName;
    public $allCourses;
    public $allSpecialities;
    public $allClasses;
    public $allGroups;
    public $allStudents;
    public $groupsDb;
    public $classesDb;
    public $studentsDb;
    public $specialitiesDb;
    public $courseId;
    public $classId;
    public $groupId;
    public $studentId;
    public $specialityId;
    private $db;
    private $coursesDb;

    public function onInit()
    {
        $this->title = "Rankings";
        $this->db = new RankingsModel();
        $this->coursesDb = new CoursesModel();
        $this->studentsDb = new StudentsModel();
        $this->specialitiesDb = new SpecialitiesModel();
        $this->classesDb = new ClassesModel();
        $this->groupsDb = new GroupsModel();
    }

    public function index()
    {
        if ($this->isPost) {
            $this->courseId = $_POST["course_id"];
            $this->specialityId = $_POST["speciality_id"];
            $this->classId = $_POST["class_id"];
            $this->groupId = $_POST["group_id"];
            $this->studentId = $_POST["student_id"];

            $this->studentsRankings = $this->db->getRankings($this->courseId, $this->specialityId, $this->classId, $this->groupId, $this->studentId);
        }

        $this->allCourses = $this->coursesDb->getAllNameAndId();
        $this->allSpecialities = $this->specialitiesDb->getAllNameAndId();
        $this->allClasses = $this->classesDb->getAllNameAndId();
        $this->allGroups = $this->groupsDb->getAllNameAndId();
        $this->allStudents = $this->studentsDb->getAllNameAndId();
    }
}
