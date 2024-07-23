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

        public function uzgarish() {
            return "mana shu";
        }

        public function yanaFetch() {
            return "fetch uchun";
        }

        public function addTwo() {
            return "Ikkinchi o'zgarishga";
        }
    }


    $obj = new Avtomobile("Tracker", "Qora");
    echo $obj->index();

?>