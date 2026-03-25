<?php
    class Database {
        public function connect(){
            try{
                $database = new PDO('mysql:host=localhost; dbname=siteDeGroupe; charset=utf8', 'root', '');
                $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $database;
            }
            catch(Exception $e){
                die("Erreur lors de la connexion ". $e->getMessage());
            }
        }
    }
?>