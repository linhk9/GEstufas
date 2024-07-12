<?php

require_once 'controllers/Controller.php';
require_once 'models/Reading.php';

class ReadingController extends Controller
{
    public function index()
    {
        $readings = Reading::all();
        $periods = Period::all();
        $sensors = Sensor::all();
        $this->renderView('reading', 'index', ['readings' => $readings]);
    }

    public function create()
    {
        $sensors = Sensor::all();
        $periods = Period::all();
        $this->renderView('reading', 'create', ['sensors' => $sensors, 'periods' => $periods]);
    }

    public function store()
    {
        $reading = new Reading($this->getHTTPPost());
        if ($reading->is_valid()) {
            $reading->save();
            $this->redirectToRoute('reading', 'index');
        } else {
            $this->redirectToRoute('reading', 'create');
        }
    }

    public function show($id)
    {
        $reading = Reading::find($id);
        if (is_null($reading)) {
        } else {
            $this->renderView('reading', 'show', ['reading' => $reading]);
        }
    }

    public function delete($id)
    {
        $reading = Reading::find($id);
        $reading->delete();
        $this->redirectToRoute('reading', 'index');
    }

}