<?php
/**
 * Created by PhpStorm.
 * User: ylepage
 * Date: 27/04/15
 * Time: 09:02
 */

class DbAuth {

    private $_db;

    //on construit l'objet avec une connexion à la base de donnée.
    public function __construct(){
        $this->setDb();
    }

    //création d'une connexion à la base de données.
    public function setDb(){
        $connect = new Base();
        $this->_db = $connect->db();
    }

    /**
     * Cette fonction permet de vérifier en base la correspondance
     * d'un mot de passe pour un utilisateur donné.
     * Elle retourne false si pas de correspondance.
     * Si correspondance, création d'une variable de session et retourne true.
     */
    public function login($username, $password){

        $db_query = 'SELECT * FROM users WHERE userName = ?';
        $req = $this->_db->prepare($db_query);
        $req->execute([$username]);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $user = $req->fetch();
        if(!$user){
            return false;
        }else {
            //$user= $this->db->prepare('SELECT * FROM users WHERE userName = ?', [$username], null, true);
            if ($user->password === sha1($password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
            return false;
        }
    }

    /**
     * Cette fonction vérifie la présence de la variable de session
     * définie dans la fonction login.
     * return true si elle existe false sinon.
     * Permet de définir si un utilisateur est connecté à l'admin.
     */
    public function logged(){
        return isset($_SESSION['auth']);
    }

    /**
     * permet d'obtenir l'id de l'utilisateur connecté ou false si
     * personne n'est actuellement connecté.
     */
    public function getUserId(){
        if ($this->logged){
            return $_SESSION['auth'];
        }
        return false;
    }
}