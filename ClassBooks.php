<?php

    include('DataBase.php');

    class Title {
        private $id;
        private $name;
        private $last_name;
        private $phone;
        private $address;
        private $city;
        private $state;
        private $country;
        private $postal_code;

        public function showTitle (){
           $baseData = new DataBase();
            $info = $baseData-> connectDataBase();
            $titles = $info->query("SELECT * FROM titulos");
            $titles-> execute();
            $listTitles = $titles->fetchAll(PDO::FETCH_ASSOC);
            return $listTitles;

         }
    }
?>
