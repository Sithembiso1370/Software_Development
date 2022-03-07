<?php

// One of the first things our framework needs to do, once it is connected to the
// database, and some core settings are loaded, is to check whether the current user
// is logged in. This is simply done by checking for an active session, and if one exists,
// building the user object from that, or checking to see if a username and password
// have been supplied, and building the user from that.
class Authentication{

    // The checkForAuthentication method checks both for an active session and user
    // credentials being passed in POST data, and calls additional methods to build the
    // user object if appropriate.
    public function checkForAuthentication()
    {
        // Initially, we remove any error template tags on the page (which we would use to inform the user of an invalid login):
        $this->registry->getObject('template')->getPage()->addTag('error', '');
        if( isset( $_SESSION['sn_auth_session_uid'] ) && intval( $_SESSION['sn_auth_session_uid'] ) > 0 )
        {
            // If session data is set, we call the sessionAuthenticate method:
            $this->sessionAuthenticate( intval( $_SESSION['sn_auth_session_uid'] ) );
            // The sessionAuthenticate method then sets the loggedIn property to indicate whether the user is logged in or not:
            if( $this->loggedIn == true )
            {
            $this->registry->getObject('template')->getPage()->addTag('error', '');
            }
            else
            {
                // If the user is not logged in, and we have a valid session, then something went wrong
                // somewhere, so we should inform the user their login attempt was not successful:
                $this->registry->getObject('template')->getPage()->addTag('error', '<p><strong>Error: Your username or password was not correct,please try again</p><strong>');
            }
        }
        // If session data was not set, we check for post data, and call the postAuthenticate
        // method if appropriate, following the same steps as above.
        elseif( isset( $_POST['sn_auth_user'] ) && $_POST['sn_auth_user'] != '' && isset($_POST['sn_auth_pass'] ) && $_POST['sn_auth_pass'] != '')
        {
            $this->postAuthenticate( $_POST['sn_auth_user'] , $_POST['sn_auth_pass'] );
            if( $this->loggedIn == true )
            {
            $this->registry->getObject('template')->getPage()->addTag('error', '');
            }
            else
            {
                $this->registry->getObject('template')->getPage()->addTag('error', '<p><strong>Error: Your username or password was not correct,please try again</p><strong>');
            }
        }
        elseif( isset( $_POST['login']) )
        {
            // If the login post variable has been set, but neither session data or POST login data
            // has been submitted, then the user didn't enter a username or a password, so we
            // should tell them this:
            $this->registry->getObject('template')->getPage()->addTag('error', '<p><strong>Error:Your must enter a username and a password</p><strong>');
        }
        // This method also sets suitable template tag variables for standard errors if there was a problem authenticating the user.


        // In the code above, if the user has tried to log in by submitting a login form, the
        // postAuthenticate method is called. This method is shown below. It utilizes the
        // user object to query the database, if the user exists and is logged in, then it sets the
        // appropriate session data, as highlighted below:
        
    }

    private function postAuthenticate( $u, $p )
    {
        $this->justProcessed = true;
        require_once(FRAMEWORK_PATH.'registry/user.class.php');
        $this->user = new User( $this->registry, 0, $u, $p );
        if( $this->user->isValid() )
            {
            if( $this->user->isActive() == false )
            {
            $this->loggedIn = false;
            $this->loginFailureReason = 'inactive';
            }
            elseif( $this->user->isBanned() == true )
            {
            $this->loggedIn = false;
            $this->loginFailureReason = 'banned';
            }
            else
            {
            $this->loggedIn = true;
            $_SESSION['sn_auth_session_uid'] = $this->user->getUserID();
            }
        }
        else
        {
            $this->loggedIn = false;
            $this->loginFailureReason = 'invalidcredentials';
        }
    }

    // If the user hasn't tried to log in by submitting a form, but has some session data set,
    // we try and authenticate them based on the session data:
    private function sessionAuthenticate( $uid )
    {
        require_once(FRAMEWORK_PATH.'registry/user.class.php');
        $this->user = new User( $this->registry, intval( $_SESSION['sn_
        auth_session_uid'] ), '', '' );
        if( $this->user->isValid() )
        {
            if( $this->user->isActive() == false )
            {
                $this->loggedIn = false;
                $this->loginFailureReason = 'inactive';
            }
            elseif( $this->user->isBanned() == true )
            {
                $this->loggedIn = false;
                $this->loginFailureReason = 'banned';
            }
            else
            {
                $this->loggedIn = true;
            }
        }
        else
        {
            $this->loggedIn = false;
            $this->loginFailureReason = 'nouser';
        }


        if( $this->loggedIn == false )
        {
            $this->logout();
        }
    }


        
                    

















}


?>