<?php

class ClassesController extends BaseController
{
    private $db;
    public $classes;

    public function onInit()
    {
        $this->title = "Classes";
        $this->db = new ClassesModel();
    }

    public function index()
    {
        $this->classes = $this->db->getAll();
    }

    public function create(){

    }
}