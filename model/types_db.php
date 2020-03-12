<?php
    //List of types
    function get_types() {
        global $db;
        $query = 'SELECT * FROM types ORDER BY Code ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $typeName = $statement->fetchAll();
        $statement->closeCursor();
        return $typeName;
    }

        //Get the code of the car from class name
        function get_typeID($typeName) {
            global $db;
            $query = 'SELECT * FROM types WHERE Type = :typeName';
            $statement = $db->prepare($query);
            $statement-> bindValue(':typeName', $typeName);
            $statement-> execute();
            $typeID = $statement->fetch();
            $statement->closeCursor();
            return $typeID['Code'];
        }

    //Checks to see if the given name exists in the types table
    function type_name($typeName) {
        global $db;
        $query = 'SELECT * FROM types WHERE Type = :typeName ORDER BY Code ASC';
        $statement = $db->prepare($query);
        $statement-> bindValue(':typeName', $typeName);
        $statement->execute();
        $typeName = $statement->fetchAll();
        $statement->closeCursor();
        return $typeName;
    }

    //Get the type of car from the code number
    function get_type($typeID) {
        global $db;
        if ($typeID == NULL|| $typeID == FALSE) {
            return 'None';
        } else {
            $query = 'SELECT * FROM types WHERE Code = :typeID';
            $statement = $db->prepare($query);
            $statement-> bindValue(':typeID', $typeID);
            $statement-> execute();
            $typeName = $statement->fetch();
            $statement->closeCursor();
            return $typeName['Type'];
        }
    }

    //Add type
    function add_type($type) {
        global $db;
        $query = 'INSERT INTO types (Type) VALUES (:type)';
        $statement = $db->prepare($query);
        $statement->bindValue(':type', $type);
        $statement->execute();
        $statement->closeCursor();
    }

    //Delete type
    function delete_type($code) {
        global $db;
        $query = 'DELETE FROM types WHERE Code = :code';
        $statement = $db->prepare($query);
        $statement->bindValue(':code', $code);
        $statement->execute();
        $statement->closeCursor();

    }
?>