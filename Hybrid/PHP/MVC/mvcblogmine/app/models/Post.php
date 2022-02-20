<?php 

class Post {
    // This holds the database connection for this model
    private $db;

    // The constructor of my model 
    public function __construct(){
        // The constructor instantiates a new database connection and stores it in the variable above
        // So that it is available within the whole class
        $this->db = new Database;
    }

    // FUNCTION TO READ ALL THE POSTS
    public function findAllPosts(){
        $this->db->query('SELECT * FROM posts ORDER BY created_at ASC');

        // returning an array since there can be multiple entries for posts
        $result = $this->db->resultSet();

        // returns an array of table rows for posts
        return $result;
    }

    // FUNCTION TO ADD A POST
    public function addPost($data){
        $this->db->query('INSERT INTO posts (user_id,title,body) VALUES (:user_id,:title,:body)');

        // bind the parameters to the values
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('body', $data['body']);

        // Check if this query can be executed to the database
        if ($this->db->execute()) {
            # if it returns true/executed
            return true;
        }
        else {
            # Otherwise
            return false;
        }
    }

    
}