<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'users' => $this->userModel
        ];

        $this->view('index', $data);
    }
}
