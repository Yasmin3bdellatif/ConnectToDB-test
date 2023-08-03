<?php

class PersonsContr extends Persons {
 
    //update something in DB

    public function createUsers($firstName, $lastName, $Dateofbirth) {

        $this->setUsers($firstName, $lastName, $Dateofbirth);

    }

}