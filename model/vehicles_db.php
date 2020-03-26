<?php
    //Grabs the table items in descending order
    function get_vehicles_desc() {
        global $db;
        $query = 'SELECT * FROM vehicles ORDER BY Price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicle;
    }
    
    //Grabs the table items in ascending order
    function get_vehicles_asc() {
        global $db;
        $query = 'SELECT * FROM vehicles
        ORDER BY Price ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicle;
    }

    //Grabs the table items by year in ascending order
    function get_vehicles_year_asc() {
        global $db;
        $query = 'SELECT * FROM vehicles
        ORDER BY Year ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicle;
    }

    //Grabs the table items by year in descending order
    function get_vehicles_year_desc() {
        global $db;
        $query = 'SELECT * FROM vehicles
        ORDER BY Year DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicle;
    }

    //Gets vehicle by the classID
    function get_vehicles_by_classID($classID) {
        global $db;
        $query = "SELECT * FROM vehicles WHERE Class_code = :classID";
        $statement = $db->prepare($query);
        $statement-> bindValue(':classID', $classID);
        $statement-> execute();
        $vehicle = $statement->fetchAll();
        $statement-> closeCursor();
        return $vehicle;
    }

    //Gets vehicle by the typeID
    function get_vehicles_by_typeID($typeID) {
        global $db;
        $query = "SELECT * FROM vehicles WHERE Type_code = :typeID";
        $statement = $db->prepare($query);
        $statement-> bindValue(':typeID', $typeID);
        $statement-> execute();
        $vehicle = $statement->fetchAll();
        $statement-> closeCursor();
        return $vehicle;
    }

    //Gets every distinct make
    function get_distinct_makes() {
        global $db;
        $query = "SELECT DISTINCT Make FROM vehicles";
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicle = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicle;
    }

    //Sorts by the chosen Make
    function get_make($make) {
        global $db;
        $query = "SELECT * FROM vehicles WHERE Make = :make";
        $statement = $db->prepare($query);
        $statement-> bindValue(':make', $make);
        $statement-> execute();
        $vehicle = $statement->fetchAll();
        $statement-> closeCursor();
        return $vehicle;
    }

    //Add vehicle
    function add_car($year, $make, $model, $price, $typeID, $classID) {
        global $db;
        $query = 'INSERT INTO vehicles (Year, Make, Model, Price, Type_code, Class_code) VALUES ( :year, :make, :model, :price, :typeID, :classID)';
        $statement = $db->prepare($query);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':make', $make);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':typeID', $typeID);
        $statement->bindValue(':classID', $classID);
        $statement->execute();
        $statement->closeCursor();

    }

    //Delete vehicle
    function delete_car($Pkey) {
        global $db;
        $query = 'DELETE FROM vehicles WHERE Pkey = :Pkey';
        $statement = $db->prepare($query);
        $statement->bindValue(':Pkey', $Pkey);
        $statement->execute();
        $statement->closeCursor();

    }


?>