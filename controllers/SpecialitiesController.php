<?php

class SpecialitiesController extends BaseController
{
    private $db;
    public $specialities;

    public function onInit()
    {
        $this->title = "Specialities";
        $this->db = new SpecialitiesModel();
    }

    public function index()
    {
        $this->specialities = $this->db->getAll();
    }

    public function create(){

    }
}