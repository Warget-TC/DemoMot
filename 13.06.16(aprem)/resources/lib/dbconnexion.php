<?php
/**
 * ETML
 * Auteur: Cheema Tamour
 * Date: 03.06.2016
 * Description: Page ayant tout les scripts SQL
 */

class DbConnexion
{

    // connecteur
    private $bdd;

    /**
     * Connect to database
     */
    private function dbConnect()
    {
        $dbUser = "root";
        $dbPass = "";
        /*essaie le try si erreur, renvois au catch*/
        try {
            // La variable private $bdd = la variable mis en paramètre $this->bdd
            $this->bdd = new PDO('mysql:host=localhost;dbname=db_demomot;charset=utf8', $dbUser, $dbPass);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    } // fin dbConnect()

    /**
     * Disconnect to database
     */
    private function dbUnconnect()
    {
        //bdd = private $bdd
        $this->bdd = null;
    }

    public function loginUser($pseudo)
    {
        $this->dbConnect();

        $sql = "select * from t_member where memPseudo ='" . $pseudo . "'";

        $rs = $this->bdd->prepare($sql);
        $rs->execute();
        $result = $rs->fetchAll(PDO::FETCH_ASSOC)[0];
        $this->dbUnconnect();
        return $result;

    }



    public function addUser($pseudo, $password, $fristName, $lastName, $email, $name_file)
    {
        //
        $this->dbConnect();

        // Ajoute les élements à ajouter
        $sql = "INSERT INTO t_member(idMember, memPseudo, memPassword,memFirstName, memLastName, memMail, memAvatar)VALUES('','$pseudo','$password','$fristName','$lastName','$email', '$name_file')";// bdd =private bdd prepare $callteacher à être exectuer
        $rs = $this->bdd->prepare($sql);
        $rs->execute();

    }





    public function getAllScripts()
    {
        //
        $this->dbConnect();

        // Sélectionne les enseignants
        $callScript = "SELECT * FROM t_script INNER JOIN t_member ON fkMember = idMember";
        // bdd =private bdd prepare $callteacher à être exectuer
        $rs = $this->bdd->prepare($callScript);
        $rs->execute();

        // tableau php des donnes mi en php
        $result = $rs->fetchAll(PDO::FETCH_ASSOC);

        // Deco la base de donnée
        $this->dbUnconnect();

        // retroune le resultat
        return $result;

    }

    public function getAllMember($idMember)
    {
        $this->dbConnect();

        // Sélectionne les enseignants
        $callMember = "SELECT * FROM t_member WHERE idMember = ". $idMember;
        // bdd =private bdd prepare $callteacher à être exectuer
        $rs = $this->bdd->prepare($callMember);
        $rs->execute();

        // tableau php des donnes mi en php
        $result = $rs->fetchAll(PDO::FETCH_ASSOC)[0];

        // Deco la base de donnée
        $this->dbUnconnect();

        // retroune le resultat
        return $result;

    }

    public function getScriptDetail($idScript)
    {
        $this->dbConnect();


        $callScript = "SELECT * FROM t_script INNER JOIN t_member ON t_member.idMember = t_script.fkMember WHERE idScript = " . $idScript;

        $rs = $this->bdd->prepare($callScript);
        $rs->execute();

        // Deco la base de donnée
        $this->dbUnconnect();

        // tableau php des donnes mi en php
        $result = $rs->fetchAll(PDO::FETCH_ASSOC)[0];

        // retroune le resultat
        return $result;
    } // fin getTeacherDetail()

    public function addScript($nom, $code, $explication, $syntaxe)
    {
        //
        $this->dbConnect();

        // Ajoute les élements à ajouter
        $sql = "INSERT INTO t_script (idScript,srcNom,srcCode,srcExplanation,srcSyntax,srcParam1,srcParam2,srcParam3,srcParam4,fkMember)
VALUES ('','$nom','$code','$explication','$syntaxe','','','',''," . $_SESSION['id'] . ");)";// bdd =private bdd prepare $callteacher à être exectuer & . $_SESSION['id'] . permet de récuperer l'id de l'utilisateur

//syntaxe juste
//$sql = "INSERT INTO t_script (idScript,srcNom,srcCode,srcExplanation,srcSyntax,srcParam1,srcParam2,srcParam3,srcParam4,fkMember)
//VALUES ('','$nom','$code','$explication','$syntaxe','','','','',3);)";// bdd =private bdd prepare $callteacher à être exectuer


        $rs = $this->bdd->prepare($sql);
        $rs->execute();


        // Deco la base de donnée
        $this->dbUnconnect();

    }





}
