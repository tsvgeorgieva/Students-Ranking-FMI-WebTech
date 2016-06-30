<?php

class StudentsController extends BaseController
{
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
    
    public function create(){
        
    }
}