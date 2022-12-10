<?php

    session_start();
    class homeController extends Controller {
        public function index() {
            $this->view('home', []);
        }
        public function tours() {
            $this->view('tours', []);
        }
        public function about() {
            $this->view('about', []);
        }
        public function contact() {
            $this->view('contact', []);
        }
        // logout function
        // public function logout() {
        //     session_destroy();
        //     header('Location: /home');
        // }
    }
?>