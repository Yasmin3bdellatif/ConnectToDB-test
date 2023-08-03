 <?php

class Persons extends Dbh {

    //connnect to DB

   protected function getUsers($name) {
    $sql= "SELECT * FROM persons WHERE FirstName = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    $resuls = $stmt->fetchAll();
    return $resuls;
   }


   protected function setUsers($firstName, $lastName, $Dateofbirth ) {
    $sql= "INSERT INTO persons (FirstName, LastName, DateOfBirth) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstName, $lastName, $Dateofbirth]); 

    
   }

}