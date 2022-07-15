<?php

    include('DataBase.php');

    class Contacts {
        private $id;
        private $name;
        private $last_name;
        private $phone;
        private $address;
        private $city;
        private $state;
        private $country;
        private $postal_code;

        public function showContacts (){
            $baseData = new DataBase();
             $info = $baseData-> connectDataBase();
             $contact = $info->query("SELECT * FROM contacto");
             $contact-> execute();
             $listContact = $contact->fetchAll(PDO::FETCH_ASSOC);
 
             return $listContact;
 
          }
    }
    
?>
