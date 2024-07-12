<?php

require_once 'controllers/Controller.php';
require_once 'models/Sensor.php';

class SensorController extends Controller
{
    public function index()
    {
        $sensors = Sensor::all();
        $greenhouses = Greenhouse::all();
        $this->renderView('sensor', 'index', ['sensors' => $sensors,'greenhouses' => $greenhouses]);
    }

    public function create()
    {
        $greenhouses = Greenhouse::all();
        $this->renderView('sensor', 'create', ['greenhouses' => $greenhouses]);

    }

    public function store()
    {
        $sensors = new Sensor($this-> getHTTPPost());
        $sensors->tempmedia = 0;
        if($sensors->is_valid()){
            $sensors->save();
            $this -> redirectToRoute('sensor','index');
        } else {
            $this -> redirectToRoute('sensor','create');
        }
    }

    public function delete($id)
    {
        $sensors = Sensor::find($_GET['id']);
        $sensors->delete();
        $this->redirectToRoute('sensor', 'index');
    }

    public function show($id)
    {
        $sensors = Sensor::find($id);
        $this->renderView('sensor', 'show', ['sensors' => $sensors]);
    }

}