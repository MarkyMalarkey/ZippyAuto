<?php

    //List of classes
    function get_classes() {
        global $db;
        $query = 'SELECT * FROM classes ORDER BY Code ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $className = $statement->fetchAll();
        $statement->closeCursor();
        return $className;
    }
    
    //Get the code of the car from class name
    function get_classID($className) {
        if ($className == NULL) {
            return "None";
        } else {
            global $db;
            $query = 'SELECT * FROM classes WHERE Class = :className';
            $statement = $db->prepare($query);
            $statement-> bindValue(':className', $className);
            $statement-> execute();
            $classID = $statement->fetch();
            $statement->closeCursor();
            return $classID['Code'];
        }
    }

    //Checks to see if the given name exists in the class
    function class_name($className) {
        global $db;
        $query = 'SELECT * FROM classes WHERE Class = :className ORDER BY Code ASC';
        $statement = $db->prepare($query);
        $statement-> bindValue(':className', $className);
        $statement->execute();
        $className = $statement->fetchAll();
        $statement->closeCursor();
        return $className;
    }

    //Get the class name of car from the code number
    function get_car_class($classID) {
        global $db;
        if ($classID == NULL|| $classID == FALSE) {
            return 'None';
        } else {
            $query = 'SELECT * FROM classes WHERE Code = :classID';
            $statement = $db->prepare($query);
            $statement-> bindValue(':classID', $classID);
            $statement-> execute();
            $className = $statement->fetch();
            $statement->closeCursor();
            return $className['Class'];
        }
    }
    
    //Add class
    function add_class($class) {
        global $db;
        $query = 'INSERT INTO classes (Class) VALUES (:class)';
        $statement = $db->prepare($query);
        $statement->bindValue(':class', $class);
        $statement->execute();
        $statement->closeCursor();
    }

    //Delete class
    function delete_class($code) {
        global $db;
        $query = 'DELETE FROM classes WHERE Code = :code';
        $statement = $db->prepare($query);
        $statement->bindValue(':code', $code);
        $statement->execute();
        $statement->closeCursor();

    }

?>