<?php
    include("model/model.php");
    class Controller{
        private $model ; 
        public function __construct(){
            $this->model = new Model();
        }

        //index d'acceuil
        private function home(){
            include("vue/home.php");
        }
        //creation de groupe
        private function createPage(){
            $nbreGroupe = $this->model->nbreGroupe();
            include("vue/create.php");
        }
        //consulter les groupes 
        private function consultPage(){
            $lists = $this->model->getGroupes();
            include("vue/consult.php");
        }
        //creer un groupe.
        private function createGroupe(){
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                //quelle matière?
                if(isset($_POST['matiere']) &&  !empty($_POST['matiere'])){
                    $matiere = ($_POST['matiere']);
                }else{
                    $error['matirere'] = "Vous devez sélectionner une matière.";
                }

                if(isset($_POST['nomPrenoms']) && !empty($_POST['nomPrenoms']) && isset($_POST['sexes'])){
                    $nomPrenoms = $_POST['nomPrenoms'];
                    $sexes = $_POST['sexes'];
                    $membres = [];
                    foreach($nomPrenoms as $index=>$nomPrenom){
                        if(!empty($nomPrenom)){
                            $membre["nom"] = explode(' ', $nomPrenom)[0]; 
                            $membre["prenom"] = explode(' ', $nomPrenom)[1]; 
                            $membre["sexe"] = $sexes[$index];             
                            $membres[]=$membre;             
                        }
                    }
                    // echo json_encode($membres);
                    // echo "<br><br>";
                    // "membres"] = $membres;
                    $creation = $this->model->createGroupe($membres);
                    // echo json_encode($creation);
                    if(isset($creation["cree"]) && !empty($creation['cree'])){
                        if($creation["cree"]){
                            $modalSucces = true;
                        }
                    }elseif(isset($creation["existe"]) && !empty($creation["existe"])){
                        $modalExiste = true;
                        $existe = $creation["existe"];
                    }elseif(isset($creation["etranger"]) && !empty($creation["etranger"])){
                        $modelEtranger = true;
                        $etranger = $creation["etranger"];
                    }
                }
            }
            include("vue/create.php");
            // Location: /siteDeGroupe/create"
        }

        //list des groupes
        private function list(){
            return $this->model->getGroupes();
        }
        public function manage($page){
            switch($page){
                case 'home': 
                    $this->home();
                    break;

                case 'consult': 
                    $this->consultPage();
                    break;

                case 'create': 
                    $this->createPage();
                    break;
                case 'newGroupe':
                    $this->createGroupe();
                    break;
                // case 'list':
                //     $this->list();
                //     break;
                default:
                    $this->home();       
            }
        }
    }
?>