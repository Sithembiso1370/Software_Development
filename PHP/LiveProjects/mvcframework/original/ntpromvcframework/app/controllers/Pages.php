<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'test Home page',
            'users' => $this->userModel->getUsers() 
        ];

        $this->view('index', $data);
    }
}
