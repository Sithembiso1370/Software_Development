<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    // Default model and View pair function to run
    // To Create Posts page if a url is sent with the paramters mvcblogmine/posts/index or mvcblogmine/posts/
    public function index() {
        $posts = $this->postModel->findAllPosts();
        $data = [
            'title' => 'Posts',
            'post_data' => $posts
        ];

        $this->view('posts/index', $data);
    }
    

    // To Create a new post if a url is sent with the paramters mvcblogmine/posts/create
    public function create() {
        // echo "create";
        // if (!isLoggedIn()) {
        //     # code...
        //     header(("Location: ".URLROOT."/posts"));
        // }
        // Create feedback fealds holder variables inside an associative array
        $data = [
            'title' => '',
            'body' =>'',
            'titleError' => '',
            'bodyError' => ''
        ];

        // get the url variables
        // Check if a request of type post was sent to the server
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # Sanitize data in an array prevents injections
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Get the values in the POST using their input names
            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];

            // Check if the fealds are not empty
            if (empty($data['title'])) {
                // set the empty error message holder
                $data['titleError'] = "The title of the post cannot e empty";
            }

            // Check if the fealds are not empty
            if (empty($data['body'])) {
                // set the empty error message holder
                $data['titleError'] = "The body of the post cannot e empty";
            }

            // Double Check if the fealds are not empty
            if (empty($data['titleError']) && empty($data['bodyError'])) {
                // Check if a model addPost returns  TRUE when  passed this array of data
                if ($this->postModel->addPost($data)) {
                    # IF so redirect the user to the posts page to view posts
                    header(("Location: ".URLROOT."/posts"));
                }else {
                    // die in the same page
                    die("Something went wrong please try again !");
                }
            }
            else {
                # if the error fealds are  not empty
                // Call the View and pass it the return errata data
                $this->view('posts/create', $data);
            }
        }

        // Call the View and pass it the data
        $this->view('posts/create', $data);
    }

    
    // To update a  post if a url is sent with the paramters mvcblogmine/posts/update
    public function update() {

    }

    // To delete a  post if a url is sent with the paramters mvcblogmine/posts/delete
    public function delete() {

    }
}
