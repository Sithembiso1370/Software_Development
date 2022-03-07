<?php

function get_assignements_by_course($course_id){
    global $db;

    if ($course_id) {
        # code...
        $query = 'SELECT A.courseID, A.Description , C.courseName FROM assignments A LEFT JOIN  
        courses C ON A.courseID = C.courseID WHERE A.courseID = :course_id ORDER BY A.courseID';
    }
    else{
        $query = 'SELECT A.ID, A.Description , C.courseName FROM assignments A LEFT JOIN  
        courses C ON A.courseID = C.courseID ORDER BY C.courseID';
    }

    // prepare the query for execution
    $statment = $db->prepare($query);

    // bind the function parameter course_id to the value course_id of the prepared query
    $statment->bindValue(":course_id", $course_id);

    // execute the statement 
    $statment->execute();

    // fetch the results obtained on statement execution into a variable $assignments
    $assignments = $statment->fetchAll();

    // close the cursor
    $statment->closeCursor();

    // return the result $statement fetchall
    return $assignments;
}

function delete_assignment($assignment_id){
    // access the global database object
    global $db;

    // create the query
    $query = 'DELETE FROM assignments WHERE ID = :assign_id';

    // prepare the query for execution
    $statment = $db->prepare($query);

    // bind the function parameter course_id to the value course_id of the prepared query
    $statment->bindValue(":assign_id", $assignment_id);

    // execute the statement 
    $statment->execute();

    // close the cursor
    $statment->closeCursor();
}

function add_assignment($course_id,$description){
    // access the global database object
    global $db;

    // create the query
    $query = 'INSERT INTO assignments (Description, courseID) VALUES (:descr, :courseID)';

    // prepare the query for execution
    $statment = $db->prepare($query);

    // bind the function parameter course_id to the value course_id of the prepared query
    $statment->bindValue(":descr", $description);
    $statment->bindValue(":courseID", $course_id);

    // execute the statement 
    $statment->execute();

    // close the cursor
    $statment->closeCursor();
}