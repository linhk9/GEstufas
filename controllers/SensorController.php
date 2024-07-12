<?php

require_once 'controllers/Controller.php';
require_once 'models/Sensor.php';

class SensorController extends Controller
{
    public function index()
    {
        $sensors = Sensor::all();
        $this->renderView('sensor', 'index', ['sensors' => $sensors]);
    }

    public function create()
    {
        $greenhouses = Greenhouse::all();
        $this->renderView('sensor', 'create', ['greenhouses' => $greenhouses]);

    }

    public function store()
    {

        $sensors = new Sensor($this-> getHTTPPost());
        if($sensors->is_valid()){
            $sensors->save();

            $this -> redirectToRoute('sensor','index');
        } else {
            $this -> redirectToRoute('sensor','create');
        }
    }
}