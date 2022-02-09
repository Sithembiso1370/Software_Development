<!-- New Controller I create Called Transactions -->
<!-- The Controlls all processes related to transactions -->
<?php


class Transactions extends Controller {
    public function __construct() {
        // Getting my user models through the constructor of the Pages Controller
        // $this->userModel = $this->model('User');
        // $this->userModel = $this->model('Supplierquotes');
    }

    public function index() {
        // Using anything as my data model
        $this->userModel = $this->model('Everything');
        $data = [
            'title' => 'test Home page',
            'Everytable' => $this->userModel->getEverything()  
        ];

        // requiring a new view that has access to all the data
        $this->view('vm/everything', $data);
    }

    public function Addtransaction(){
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

        $this->view('addtransactions', $data);
    }

    public function dashboard(){
        // Getting The models Data for the View
        $all_data = $this->model('Datafetcher'); 

        // Storing the Data in an array called data
        $data = [
            'title' => 'Dashboard',
            "all_data" => $all_data->getData()
            // ,'extradata' => $this->model('User')
        ];

        $this->view('dashboard', $data);
    }

    // public function transactions(){
    //     // transactions
    //     // getting the models data for the view
    //     $usermodel =$this->model('Supplierquotes');
    //     $users = $this->model('User');

    //     // Storing the Data in an array called data
    //     $data = [
    //         'title' => 'welcome Home page',
    //         'users' => $users->getUsers(),
    //         'usermodel' => $usermodel->getSupplierquotes(),
    //         // ,'extradata' => $this->model('User')
    //     ];

    //     $this->view('transactions', $data);
    // }
}