<?php


Class MyDataBase {

private $pdo;
    public function connect_to_db()
    {
        try
        {
                $env = parse_ini_file('../.env');

                $bdd = 'mysql:dbname=' . $env["DB_NAME"] . ';host=' . $env["DB_HOST"];
                $user = $env["DB_USER"];
                $password = $env["DB_PASS"];

                $this->pdo = new PDO($bdd, $user, $password);
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
    }
    
    public function add_user_to_db()
    {
        $nickname = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = hash('ripemd160',$password);
        
        try {
            $query = "INSERT INTO users (nickname, email, password) 
                    VALUES ('$nickname', '$email', '$password');";
            $prepareExecute = $this->pdo->prepare($query);
            $prepareExecute->execute();
            header("Location: ../View/connexion.php");
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
    
}
$data = new MyDataBase ();
$data->connect_to_db();
$data->add_user_to_db()

?>