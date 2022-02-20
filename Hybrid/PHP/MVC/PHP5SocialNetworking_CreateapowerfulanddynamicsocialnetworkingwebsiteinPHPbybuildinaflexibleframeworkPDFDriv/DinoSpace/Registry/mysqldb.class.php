<?php
// // Our database access class (registry/mysqldb.class.php) should provide us with a
// basic level of abstraction when accessing the database; this also allows us to simplify
// certain tasks such as inserting records into a database, performing updates, and if we
// wanted to, even tasks such as creating and editing database tables.
/**
* Database management / access class: basic abstraction
*
* @author Michael Peacock
* @version 1.0
*/
class Mysqldb {
    /**
    * Allows multiple database connections
    * each connection is stored as an element in the array, and the
    *active connection is maintained in a variable (see below)
    */
    private $connections = array();
    /**
    * Tells the DB object which connection to use
    * setActiveConnection($id) allows us to change this
    */
    private $activeConnection = 0;
    /**
    * Queries which have been executed and the results cached for
    *later, primarily for use within the template engine
    */
    private $queryCache = array();
    /**
    * Data which has been prepared and then cached for later usage,
    *primarily within the template engine
    */
    private $dataCache = array();
    /**
    * Number of queries made during execution process
    */
    private $queryCounter = 0;

    /**
    * Record of the last query
    */
    private $last;
    /**
    * Reference to the registry object
    */
    private $registry;
    /**
    * Construct our database object
    */
    public function __construct( Registry $registry ){
        $this->registry = $registry;
    }

    /**
    * Create a new database connection
    * @param String database hostname
    * @param String database username
    * @param String database password
    * @param String database we are using
    * @return int the id of the new connection
    */
    public function newConnection( $host, $user, $password, $database ){
        $this->connections[] = new mysqli( $host, $user, $password,
        $database);
        $connection_id = count($this->connections)-1;

        if( mysqli_connect_errno() )
        {
            trigger_error('Error connecting to host. '.$this->connections[$connection_id]->error, E_USER_ERROR);
        }
        return $connection_id;
    }

    // When we need to swap between connections, for example, to look up data from
    // an external source, or authenticate against another system, we need to tell the
    // database object to use this different connection. This is achieved through the
    // setActiveConnection method.
    /**
    * Change which database connection is actively used for the next operation
    * @param int the new connection id
    * @return void
    */
    public function setActiveConnection( int $new ){
        $this->activeConnection = $new;
    }

    // Executing queries
    // After a query is executed, we may wish to get the rows from the result of the query;
    // to allow us to do this, we simply store the result of the query in the classes $last
    // variable, so that it can be accessed by other methods.
    /**
    * Execute a query string
    * @param String the query
    * @return void
    */
    public function executeQuery($queryStr){
        if( !$result = $this->connections[$this->activeConnection]->query( $queryStr ) )
        {
            trigger_error('Error executing query: ' . $queryStr .' -
            '.$this->connections[$this->activeConnection]->error,
            E_USER_ERROR);
        }
        else
        {
            $this->last = $result;
        }
    }

    // When we do need to get the results from a query, we simply call the MySQLi fetch_
    // array method on the result stored in the last variable.
    /**
    * Get the rows from the most recently executed query, excluding
    * cached queries
    * @return array
    */
    public function getRows(){
        return $this->last->fetch_array(MYSQLI_ASSOC);
    }

    // Simplifying common queries
    // Common queries such as INSERT, UPDATE, and DELETE are often very repetitive;
    // however, they are quite easy to abstract the basics of into our database management
    // class. This won't work for all situations, but should make our lives easier for the
    // bulk of these operations. We can abstract select queries to this class too. However,
    // these are much more complicated, particularly, as we will more often than not, need
    // to utilize more complicated logic, such as sub-queries, joins, and aliases. This more
    // complicated logic would need to be developed into the code.
    // Deleting records can be done simply using the table name, conditions, and a limit. In
    // some cases, a limit may not be required, so if a non-empty string is passed, we need
    // to add the LIMIT keyword to the query.
    /**
    * Delete records from the database
    * @param String the table to remove rows from
    * @param String the condition for which rows are to be removed
    * @param int the number of rows to be removed
    * @return void
    */
    public function deleteRecords( $table, $condition, $limit ){
        $limit = ( $limit == '' ) ? '' : ' LIMIT ' . $limit;
        $delete = "DELETE FROM {$table} WHERE {$condition} {$limit}";
        $this->executeQuery( $delete );
    }

    // Updating and inserting records are tasks I find to be the most cumbersome; however,
    // we can easily abstract these simply by passing the table name, an array of field
    // names and field value pairs, and in the case of update operations, a condition.
    /**
    * Update records in the database
    * @param String the table
    * @param array of changes field => value
    * @param String the condition
    * @return bool
    */
    public function updateRecords( $table, $changes, $condition ){
        $update = "UPDATE " . $table . " SET ";
        foreach( $changes as $field => $value )
        {
        $update .= "`" . $field . "`='{$value}',";
        }

        // remove our trailing ,
        $update = substr($update, 0, -1);
        if( $condition != '' )
        {
        $update .= "WHERE " . $condition;
        }
        $this->executeQuery( $update );
        return true;
    }

    /**
    * Insert records into the database
    * @param String the database table
    * @param array data to insert field => value
    * @return bool
    */
    public function insertRecords( $table, $data ){
        // setup some variables for fields and values
        $fields = "";
        $values = "";
        // populate them
        foreach ($data as $f => $v)
        {
            $fields .= "`$f`,";
            $values .= ( is_numeric( $v ) && ( intval( $v ) == $v ) ) ?
            $v."," : "'$v',";
        }
        // remove our trailing ,
        $fields = substr($fields, 0, -1);
        // remove our trailing ,
        $values = substr($values, 0, -1);
        $insert = "INSERT INTO $table ({$fields}) VALUES({$values})";
        //echo $insert;
        $this->executeQuery( $insert );
        return true;
    }

    // Sanitizing data
    // Depending on the exact PHP setup, data needs to be sanitized slightly differently,
    // to prevent characters being escaped too many times. This is often the result of
    // magic_quotes_gpc setting. To make things easier, and to provide a single place
    // for changes to be made depending on our server's configuration, we can centralize
    // our data sanitization.
    /**
    * Sanitize data
    * @param String the data to be sanitized
    * @return String the sanitized data
    */
    public function sanitizeData( $value ){
        // Stripslashes
        if ( get_magic_quotes_gpc() )
        {
        $value = stripslashes ( $value );
        }
        // Quote value
        if ( version_compare( phpversion(), "4.3.0" ) == "-1" )
        {
            $value = $this->connections[$this->activeConnection]->escape_string( $value );
        }
        else
        {
            $value = $this->connections[$this->activeConnection]->real_escape_string( $value );
        }
        return $value;
    }

    //Wrapping other MySQLi functions
    // This leaves us with a few other common MySQLi functions to wrap into our class,
    // including fetching the data from the executed query, fetching the number of rows
    // returned by a query, and getting the number of rows affected by a query.
    /**
    * Get the rows from the most recently executed query, excluding
    *cached queries
    * @return array
    */
    // public function getRows()
    // {
    //      return $this->last->fetch_array(MYSQLI_ASSOC);
    // }

    public function numRows(){
        return $this->last->num_rows;
    }
    /**
    * Gets the number of affected rows from the previous query
    * @return int the number of affected rows
    */
    public function affectedRows(){
        return $this->last->affected_rows;
    }

    /**
    * Deconstruct the object
    * close all of the database connections
    */
    public function __deconstruct(){
        foreach( $this->connections as $connection )
        {
        $connection->close();
        }
    }
}
?>