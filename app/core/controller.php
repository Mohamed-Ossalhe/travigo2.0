<?php
    class Controller {
        // public function model($model) {
        //     require_once '../app/models/' . $model . '.php';
        //     return new $model();
        // }

        public static function view($view, $data) {
            require './app/views/' . $view . '.php';
            return $data;
        }
    }
?>