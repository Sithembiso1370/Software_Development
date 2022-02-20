<?php

class User {
// Our user object is created when a user tries to log in, either based on submitting
// a login form supplying their username and password, or based on session data
// for the user ID.
// If username and password are supplied, then it checks the credentials and populates
// its variables if such a user exists. If only an ID is supplied, then it populates based on
// whether there is a user of that ID. Since the authentication class controls whether the
// current user is logged in or not, we can use this object to view or perform actions on
// other users if we wished, as by separating the two we won't be automatically logged
// in as the user populated within this object. As a result, we can extend this object to
// reset the user's password, edit the user, deactivate the user, and so on.


    // The constructor takes four arguments, the registry (dependency injection, so it
    // can communicate with the rest of the framework), a user ID, a username, and a
    // password, the latter three being optional, and used as described above.
    public function __construct( Registry $registry, $id=0,$username='', $password='' )
    {
            $this->registry = $registry;
            // If we haven't set a user ID (that is, $id is 0) and we have set a username and a
            // password, we should look up the user to see whether these are valid credentials:
            if( $id=0 && $username != '' && $password != '' )
            {
                $user = $this->registry->getObject('db')->sanitizeData( $username );
                // As our passwords are hashed in the database, we need to hash the password we
                // were supplied. We can hash the password directly in the query (by using the MySQL
                // function MD5), however, this exposes the password in plain text more than required,
                // as it would be processed and accessed by both PHP and the MySQL server
                // (which may be stored on a remote machine):
                $hash = md5( $password );
                $sql = "SELECT * FROM users WHERE username='{$user}' AND
                password_hash='{$hash}' AND deleted=0";
                $this->registry->getObject('db')->executeQuery( $sql );
                if( $this->registry->getObject('db')->numRows() == 1 )
                {
                    // We have a record in the database, so the user is valid, so we set the various properties of our user object:
                    $data = $this->registry->getObject('db')->getRows();
                    $this->id = $data['ID'];
                    $this->username = $data['username'];
                    $this->active = $data['active'];
                    $this->banned = $data['banned'];
                    $this->admin = $data['admin'];
                    $this->email = $data['email'];
                    $this->pwd_reset_key = $data['pwd_reset_key'];
                    $this->valid = true;
                }
            }
            elseif($id > 0)
            {
                // If we supplied a user ID, then we look up the user with that ID and populate the
                // object with their details. As discussed above, we don't want to set them as logged-in
                // here, because we may use this object to edit, delete, and create users, and integrating
                // authentication would log out the administrator and log them in as someone else if
                // they tried to edit an existing user.
                $id = intval( $id );
                $sql = "SELECT * FROM users WHERE ID='{$id}' AND deleted=0";
                $this->registry->getObject('db')->executeQuery( $sql );
                if( $this->registry->getObject('db')->numRows() == 1 )
                {
                    $data = $this->registry->getObject('db')->getRows();
                    $this->id = $data['ID'];
                    $this->username = $data['username'];
                    $this->active = $data['active'];
                    $this->banned = $data['banned'];
                    $this->admin = $data['admin'];
                    $this->email = $data['email'];
                    $this->pwd_reset_key = $data['pwd_reset_key'];
                    $this->valid = true;
                }
            }
    }
}




?>