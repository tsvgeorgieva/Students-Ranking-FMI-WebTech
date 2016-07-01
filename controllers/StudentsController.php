<?php

class StudentsController extends BaseController
{
    public $activities;
    public $student;
    public $allActivities;
    private $db;
    public $students;

    public function onInit()
    {
        $this->title = "Students";
        $this->db = new StudentsModel();
    }

    public function index()
    {
        $this->students = $this->db->getAll();
    }

    public function create()
    {

    }

    public function activities($studentId)
    {
        $this->student = $this->db->getById($studentId);
        $this->activities = $this->db->getStudentActivities($studentId);
    }

    public function createActivity($studentId)
    {
        if ($this->isPost) {
            var_dump($_POST);
            $activityId = $_POST["activity_id"];
            $date = $_POST["date"];

            $result = $this->db->createActivity($studentId, $activityId, $date);
            if ($result) {
                $this->addSuccessMessage("Student activity added!");
                $this->redirectToUrl("/students/activities/" . $studentId);
            } else {
                $this->addErrorMessage("Error while creating student activity");
            }

        } else {
            $this->student = $this->db->getById($studentId);
            $this->allActivities = $this->db->getActivitiesForStudent($studentId);
        }
    }
}