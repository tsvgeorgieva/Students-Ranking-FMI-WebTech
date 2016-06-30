<?php

class ActivitiesController extends BaseController
{
    private $db;
    public $activities;

    public function onInit()
    {
        $this->title = "Activities";
        $this->db = new ActivitiesModel();
    }

    public function index()
    {
        $this->activities = $this->db->getAll();
    }
    
    public function create(){
        
    }
}