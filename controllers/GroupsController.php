<?php

class GroupsController extends BaseController
{
    private $db;
    public $groups;

    public function onInit()
    {
        $this->title = "Groups";
        $this->db = new GroupsModel();
    }

    public function index()
    {
        $this->groups = $this->db->getAll();
    }

    public function create(){

    }
}