<?php

class CoursesController extends BaseController
{
    private $db;
    public $courses;

    public function onInit()
    {
        $this->title = "Courses";
        $this->db = new CoursesModel();
    }

    public function index()
    {
        $this->courses = $this->db->getAll();
    }

    public function create(){

    }
}