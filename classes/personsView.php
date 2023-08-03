<?php

class PersonsView extends Persons {

    

    public function showUsers($name) {
        $results = $this->getUsers($name);
        echo "Full name: ". $results[0]['FirstName'] ." " . $results[0]['LastName'] . '<br>';
        echo "Date of birth: ". $results[0]['DateOfBirth'];
    }
    
}