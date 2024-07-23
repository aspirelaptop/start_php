<?php

    class Avtomobile {

        public $model;
        public $rang;

        public function __construct($model, $rang) {
            $this->model = $model;
            $this->rang = $rang;
        }


        public function index() {
            return "Mashina markasi: $this->model va rangi: $this->rang";
        }
    }


    $obj = new Avtomobile("Tracker", "Qora");
    echo $obj->index();

?>