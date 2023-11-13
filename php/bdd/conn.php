<?php
class MaConnexion{
    // étape 1 : ici on met les proprietées
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote){
        
        $this -> nomBaseDeDonnees = $nomBaseDeDonnees;
        $this -> motDePasse = $motDePasse;
        $this -> nomUtilisateur = $nomUtilisateur;
        $this -> hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "erreur : ".$e->getMessage();
        }        
    }

    //Fonction qui selectionne tous les elements d'une table LIMIT 5
    public function selectLimit($table){
        try {
            $requete = "SELECT * from $table LIMIT 5";
            $resultat = $this->connexionPDO->query($requete);
                
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
            
        } catch (PDOException $e) {
                echo "Erreur : ".$e->getMessage();
        }  
    }

    public function select($table){
        try {
            $requete = "SELECT * from $table";
            $resultat = $this->connexionPDO->query($requete);
                
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
            
        } catch (PDOException $e) {
                echo "Erreur : ".$e->getMessage();
        }  
    }

    public function selectUtilisateur(){
        try {
            $requete = "SELECT * from utilisateur";
            $resultat = $this->connexionPDO->query($requete);
                
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
            
        } catch (PDOException $e) {
                echo "Erreur : ".$e->getMessage();
        }  
    }

    // Fonction selection des article par categorie (fonctionne)
    public function selectArticle_Categorie($categorie){
        try {
            $requete = "SELECT * from Article where Categorie = ?";
            $requete_preparee = $this->connexionPDO->prepare($requete);
            $requete_preparee->bindValue(1,$categorie,PDO::PARAM_STR);
            
            $resultat = $requete_preparee->execute();
            $resultat = $requete_preparee->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $error) {
            return "Erreur : " . $error->getMessage();
        }
    }

    // Fonction selection des Article par l'id (fonctionne..)
    public function selectArticle_ID($idArticle){
        try {
            $requete = "SELECT * from Article where ID_Article = ?";

            $requete_preparee = $this->connexionPDO->prepare($requete);
            $requete_preparee->bindValue(1,$idArticle,PDO::PARAM_STR);
            $resultat = $requete_preparee->execute();
            $resultat = $requete_preparee->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
        } catch (PDOException $error) {
            return "Erreur : " . $error->getMessage();
        }
    }

   
    // Fonction d'insertion des article (no test)
    public function insertionArticle($titre,$categorie,$p_un,$p_deux,$img,$date){
        try {
            $requete = " INSERT INTO Article(Titre,Categorie,Texte_un,Texte_deux,Texte_trois,Img,Date)
                VALUES (:Titre,:Categorie,:Texte_un,:Texte_deux,:Texte_trois,:Img,:Date)" ;
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindParam(':Titre',$titre,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Categorie',$categorie,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Texte_un',$p_un,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Texte_deux',$p_deux,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Texte_trois',$p_trois,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Img',$img,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Date',$date,PDO::PARAM_STR);

            $requete_preparee->execute();
            echo ("insertion reussi");
            return "insertion reussi";

        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }
    
    //Fonction d'insertion d'utilisateur (fonctionne)
    public function insertionUtilisateur($nom,$prenom,$pseudo,$mail,$mdp,$role){
        try {
            $requete = " INSERT INTO utilisateur(Nom, Prenom,Mail,Pseudo,Mdp,Role)
                VALUES (:Nom, :Prenom,:Email,:Pseudo,:MDP,:Role)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindParam(':Nom',$nom,PDO::PARAM_STR,30);
            $requete_preparee->bindParam(':Prenom',$prenom,PDO::PARAM_STR,50);
            $requete_preparee->bindParam(':Email',$mail,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Pseudo',$pseudo,PDO::PARAM_STR);
            $requete_preparee->bindParam(':MDP',$mdp,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Role',$role,PDO::PARAM_INT);
            
            $requete_preparee->execute();
            echo ("insertion reussi");
             return "insertion reussi";

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Fonction de mis à jour des article (no test)
    public function maj_Article($titre,$categorie,$p_un,$p_deux,$img,$date){
        try {

            $requete = "UPDATE Article SET Titre = ?, Categorie = ?,Texte_un = ?,Texte_deux = ?,Texte_trois = ?,
                Img = ?, Date = ?
                WHERE ID_Article = ?";

            $requete_preparee = $this->connexionPDO->prepare($requete);

            
            $requete_preparee->bindValue(1,$titre,PDO::PARAM_STR);
            $requete_preparee->bindValue(2,$categorie,PDO::PARAM_STR);
            $requete_preparee->bindValue(3,$p_un,PDO::PARAM_STR);
            $requete_preparee->bindValue(4,$p_deux,PDO::PARAM_STR);
            $requete_preparee->bindValue(5,$img,PDO::PARAM_STR);
            $requete_preparee->bindValue(6,$date,PDO::PARAM_STR);

            $requete_preparee->execute();

            echo("mise a jour reussi");
            return "mise a jour reussi";
        
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    // Fonction de suppression des article (no test)
    public function deleteArticle($idArticle){
        try{
            $requete = "DELETE FROM Article WHERE ID_Article =  ?";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindvalue(1,$idArticle,PDO::PARAM_INT);
            $requete_preparee->execute();
            echo 'suppression reussie';
            return $requete_preparee;

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

        // Fonction de mis à jour des commentaires (fonctionne)
            // public function maj_Commentaire($ID_Utilisateur,$ID_Article,$Commentaire,$ID_Commentaire){
            //     try { 
            //         $requete = "UPDATE commentaire SET ID_Utilisateur = ?, ID_Article = ?, Commentaire = ?
            //             WHERE ID_Commentaire = ?";
                    
            //         $requete_preparee = $this->connexionPDO->prepare($requete);

            //         $requete_preparee->bindValue(1,$ID_Utilisateur,PDO::PARAM_INT);
            //         $requete_preparee->bindValue(2,$ID_Article,PDO::PARAM_INT);
            //         $requete_preparee->bindValue(3,$Commentaire,PDO::PARAM_STR);
            //         $requete_preparee->bindValue(4,$ID_Commentaire,PDO::PARAM_INT);


            //         $requete_preparee->execute();

            //         echo("mise a jour reussi");
            //         return "mise a jour reussi";
                
            //     } catch(PDOException $e) {
            //         return $e->getMessage();
            //     }
        // }

        //Fonction insertion commentaire
        // public function insertionCommentaire($ID_Article, $ID_Utilisateur, $Commentaire){
            //     try {
            //         $requete = " INSERT INTO `commentaire`(ID_Article, ID_Utilisateur, Commentaire)
            //         VALUES (:ID_Article, :ID_Utilisateur, :Commentaire)";
            //         $requete_preparee = $this->connexionPDO->prepare($requete);
                    
            //         $requete_preparee->bindParam(':ID_Article', $ID_Article, PDO::PARAM_INT);
            //         $requete_preparee->bindParam(':ID_Utilisateur', $ID_Utilisateur, PDO::PARAM_INT);
            //         $requete_preparee->bindParam(':Commentaire', $Commentaire, PDO::PARAM_STR);
                    
            //         $requete_preparee->execute();
            //         echo ("insertion reussi");
            //         return "insertion reussi";
            //     } catch (PDOException $e) {
            //         return $e->getMessage();
            //     }
        // }

}

// $conn = new MaConnexion("sc3nuxz4136_mbaecari-abdourahim.projet_x", "OM-RUN_DPS_DWWM_AFC_Avril23", "sc3nuxz4136", "localhost");
$conn = new MaConnexion("Article", "", "root", "localhost");
// $test = $conn->insertionTest("oui c'est une description","mail@mail.co");
// var_dump($test);

//$supp = $test->select("article");
//var_dump($supp);
// $supp = $test->deleteCommentaire(3);
// var_dump($supp);
//$inserting = $test->maj_Ingredient("ingréeza","ezngré","ingezré","ingzaré","ingezaé","ingezaé","inezagré","ingrezaé","inggré","ingrfré","ingré","ingré","ingré","ingré","ingré",1);
//var_dump($inserting);
// $maj = $test->maj_Article("");
// $insertuti = $test->insertionUtilisateur("jon","snow","king of the north","lovemyaunt",1);
// var_dump($insertuti);


?>
