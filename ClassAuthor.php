<?php
    include('DataBase.php');

    class Authors {
        private $id;
        private $name;
        private $last_name;
        private $phone;
        private $address;
        private $city;
        private $state;
        private $country;
        private $postal_code;

        public function showAuthors (){
            $baseData = new DataBase();
             $info = $baseData-> connectDataBase();
             $authors = $info->query("SELECT * FROM autores");
             $authors-> execute();
             $listAuthors = $authors->fetchAll(PDO::FETCH_ASSOC);
             return $listAuthors;
        }
    }
?>
