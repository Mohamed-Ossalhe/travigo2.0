<?php

class homeController extends Controller {
    // home page
    public function index($id='', $name='') {
        $this->view('home/index');
        $this->view->render();
    }
    // about page
    public function about() {
        $this->view('home/about');
        $this->view->render();
    }
    // tours page
    public function tours() {
        $this->model('Tour');
        $this->view('home/tours', $this->model->displayAllData());
        $this->view->render();
    }
    // contact page
    public function contact() {
        $this->view('home/contact');
        $this->view->render();
    }
}