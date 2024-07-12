<?php

require_once 'controllers/Controller.php';
require_once 'models/Greenhouse.php';
class GreenhouseController extends Controller
{
    public function index()
    {
        $greenhouses = Greenhouse::all();
        $this->renderView('greenhouse', 'index',['greenhouses'=>$greenhouses]);
    }

    public function create()
    {
        $this->renderView('greenhouse', 'create');
    }

    public function store()
    {
        $greenhouse = new Greenhouse($this-> getHTTPPost());
        if($greenhouse->is_valid()){
            $greenhouse->save();
            $this -> redirectToRoute('greenhouse','index');
        } else {
            $this -> redirectToRoute('greenhouse','create');
        }
    }

    public function show($id)
    {
        $greenhouses = Greenhouse::find($id);
        if (is_null($greenhouses)) {
        } else {
            $this->renderView('greenhouse', 'show',['greenhouses'=>$greenhouses]);
        }
    }

    public function delete($id)
    {
        $greenhouses = Greenhouse::find($id);
        $greenhouses->delete();
        $this -> redirectToRoute('greenhouse','index');

    }
}