<?php
    include("database.php");
    class Model{
        private $database;
        public function __construct(){
            $database = new Database();
            $this->database = $database->connect();
        }
        public function createGroupe($membres){
            $retour = [];
            try{
                $this->database->beginTransaction();

                foreach($membres as $index=>$membre){

                    $stmt = $this->database->prepare(
                        "SELECT nom, prenom, sexe FROM etudiants WHERE nom = :nom AND prenom = :prenom AND sexe = :sexe"
                    );
                    $stmt->bindParam(":nom", $membre["nom"]);
                    $stmt->bindParam(":prenom", $membre["prenom"]);
                    $stmt->bindParam(":sexe", $membre["sexe"]);
                    $stmt->execute();
                    if(!$stmt->fetch()){
                        $retour["etranger"][] = $membre;
                    }

                    $stmt2 = $this->database->prepare(
                        "SELECT nom, prenom, sexe FROM groupes WHERE nom = :nom AND prenom = :prenom AND sexe = :sexe"
                    );
                    $stmt2->bindParam(":nom", $membre["nom"]);
                    $stmt2->bindParam(":prenom", $membre["prenom"]);
                    $stmt2->bindParam(":sexe", $membre["sexe"]);     
                    $stmt2->execute();
                    
                    if($stmt2->fetch()){
                        $retour["existe"][] = $membre;
                    }

                    $stmt3 = $this->database->prepare(
                        "INSERT INTO groupes SET nom = :nom, prenom = :prenom, sexe = :sexe, chef = :chef"
                    );
                    $chef = $index === 0 ? 1 : 0;
                    $stmt3->bindParam(":nom", $membre["nom"]);
                    $stmt3->bindParam(":prenom", $membre["prenom"]);
                    $stmt3->bindParam(":sexe", $membre["sexe"]);     
                    $stmt3->bindParam(":chef", $chef);
                    $stmt3->execute();
                    
                }

                $this->database->commit();
                $retour["cree"] = true;
            }
            catch(Exception $e){
                $this->database->rollBack();
                $retour['erreur'] = $e->getMessage();
            }
            return $retour;
        }

        public function getGroupes(){
            $stmt =$this->database->prepare(
                "SELECT nom, prenom, sexe, chef FROM groupes"
            );
            if($stmt->execute()){
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return false;
            }
        }

        public function nbreGroupe(){
            try{
                $stmt = $this->database->prepare(
                    "SELECT COUNT(*) from groupes WHERE chef = 1"
                );
                if($stmt->execute()){
                    return $retour["nbreGroupe"] = $stmt->fetchColumn();
                }
            }catch(Exception $e){
                return $e->getMessage();
            }
        }

    }
?>