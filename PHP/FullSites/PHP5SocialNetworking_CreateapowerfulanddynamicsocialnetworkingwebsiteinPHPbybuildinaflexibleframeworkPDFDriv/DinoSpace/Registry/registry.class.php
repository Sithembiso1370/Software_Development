<?php
// The registry object itself is very straightforward; it needs to contain two arrays, one
// to store any settings and data we wish to centrally store within the registry, and one
// to store the core objects that we wish to access via the registry.

/**
* PHP Social Networking
* @author Sithembiso Maphanga
* Registry Class
*/
class Registry {
    // Array of objects
    private $objects;

    //  Array of settings
    private $settings;

    public function __construct() {
    }

    
    //   For each of these two arrays, we need two methods: one to store data or an object
    //  within the relevant array, and another to retrieve the data or object. Because we are
    //  going to use a Factory Method for storing objects, this code will be different from the
    //  code for storing settings.
    

        /**
    * Create a new object and store it in the registry
    * @param String $object the object file prefix
    * @param String $key pair for the object
    * @return void
    */
    public function createAndStoreObject( $object, $key )
    {
        require_once( $object . '.class.php' );
        $this -> objects[ $key ] = new $object( $this );
    }

    // When storing settings, however, we simply need to take the data and store it directly in the array.
    /**
    * Store Setting
    * @param String $setting the setting data
    * @param String $key the key pair for the settings array
    * @return void
    */
    public function storeSetting( $setting, $key )
    {
        $this->settings[ $key ] = $setting;
    }

    // Retrieving data or objects from the registry both work in the same way, as illustrated
    // by the getSetting and getObject methods; they consist of the same code, acting on
    // their respective arrays.
    /**
    * Get a setting from the registries store
    * @param String $key the settings array key
    * @return String the setting data
    */
    public function getSetting( $key )
    {
        return $this->settings[ $key ];
    }
    /**
    * Get an object from the registries store
    * @param String $key the objects array key
    * @return Object
    */
    public function getObject( $key )
    {
        return $this->objects[ $key ];
    }
}



?>
