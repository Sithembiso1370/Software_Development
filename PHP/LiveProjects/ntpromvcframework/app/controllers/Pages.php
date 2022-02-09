<?php
class Pages extends Controller {
    public function __construct() {
        // Getting my user models through the constructor of the Pages Controller
        // $this->userModel = $this->model('User');
        // $this->userModel = $this->model('Supplierquotes');
    }

    public function index() {
        $this->userModel = $this->model('User');
        $data = [
            'title' => 'test Home page',
            'users' => $this->userModel->getUsers() 
        ];

        $this->view('index', $data);
    }

    public function Homepage(){
        // Getting The models Data for the View
        $usermodel =$this->model('Supplierquotes');
        $users = $this->model('User');
        $all_data = $this->model('Datafetcher'); 

        // Storing the Data in an array called data
        $data = [
            'title' => 'welcome Home page',
            'users' => $users->getUsers(),
            'usermodel' => $usermodel->getSupplierquotes(),
            "all_data" => $all_data->getData()
            // ,'extradata' => $this->model('User')
        ];

        $this->view('Homepage', $data);
    }

    public function transactions(){
        // transactions
        // getting the models data for the view
        $usermodel =$this->model('Supplierquotes');
        $users = $this->model('User');
        $everything = $this->model('Everything');

        // Storing the Data in an array called data
        $data = [
            'title' => 'welcome Home page',
            'users' => $users->getUsers(),
            'usermodel' => $usermodel->getSupplierquotes(),
            'everything' => $everything->getEverything()
            // ,'extradata' => $this->model('User')
        ];

        $this->view('transactions', $data);
    }

    public function addtransaction(){
        // transactions
        // getting the models data for the view
        $usermodel =$this->model('Supplierquotes');
        $users = $this->model('User');

        // Storing the Data in an array called data
        $data = [
            'title' => 'welcome Home page',
            'users' => $users->getUsers(),
            'usermodel' => $usermodel->getSupplierquotes(),
            // ,'extradata' => $this->model('User')
        ];

        $this->view('addtransactions', $data);
    }
}
