<?php

namespace App\Model;

use App\DBManager;
use PDO;

class User
{
    public $id;
    public $email;
    public $password;
    public $full_name;

    private $connection;

    public function __construct()
    {
        $dbManager = new DBManager('localhost', 'profject', 'root', '');
        $this->connection = $dbManager->getConnection();
    }

    public function addUser($email,$password,$full_name)
    {
        try{
        
        $query = $this->connection->prepare("
            INSERT INTO users (email, password)
            VALUES (:email, :password)
        ");
        $query->execute([
            'email'=>$email,
            'password'=>$password,
        ]);
         
        $query = $this->connection->prepare("
            INSERT INTO user_data (user_id, full_name)
            VALUES (:user_id, :full_name)
        ");
        $query->execute([
        'user_id'=>$this->connection->lastInsertId(),
        'full_name'=>$full_name,
        ]);

         }catch(PDOException $e){
            echo $e->getMessage();
         }
    }

    public function getUser($email)
    {
        try{
            
        $query = $this->connection->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute(["email"=>$email]);
        $result = $query->fetch();
        //print_r($result);
        return $result;

        //return $query->fetchAll(PDO::FETCH_CLASS, User::class);
    }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
    public function getData($id)
    {
        try{   
        $query = $this->connection->prepare("SELECT * FROM user_data WHERE user_id = :user_id");
        $query->execute(["user_id"=>$id]);
        $result = $query->fetch();
        //print_r($result);
        return $result;
        //return $query->fetchAll(PDO::FETCH_CLASS, User::class);
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function deleteUser($id)
    {
        try{
            
        $query = $this->connection->prepare("DELETE FROM users WHERE id = :id");
        $query->execute(["id"=>$id]);

        $query = $this->connection->prepare("DELETE FROM user_data WHERE user_id = :user_id");
        $query->execute(["user_id"=>$id]);
        //return $query->fetchAll(PDO::FETCH_CLASS, User::class);
    }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
    public function updateUser($id, $full_name, $password)
    {
    try {
        $query = $this->connection->prepare("
           UPDATE user_data SET full_name = :full_name
           WHERE user_id = :user_id
        ");
        $query->execute([
            'user_id'=>$id,
            'full_name' => $full_name,
        ]);
        $query = $this->connection->prepare("
           UPDATE users SET password = :password
           WHERE id = :id
        ");
        $query->execute([
            'id'=>$id,
            'password' => $password,
        ]);
    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
    }

    public function avaUser($id, $ava)
    {
    try {
        $query = $this->connection->prepare("
           UPDATE user_data SET avatar = :avatar
           WHERE user_id = :user_id
        ");
        $query->execute([
            'user_id'=>$id,
            'avatar' => $ava,
        ]);
    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
    }

    function addTweet($id, $tweet)
    {
        $query = $this->connection->prepare("
            INSERT INTO tweets (id, user_id, tweet, post_date, like_count) 
            VALUES (NULL, :user_id, :tweet, NOW(), 0)
        ");
        
        $query->execute(
            array(
                "user_id"=>$id, 
                "tweet"=>$tweet,
            )
        );  
    }
    function getTweet()
    {
        try {
            $query = $this->connection->prepare("
                SELECT *  FROM tweets 
            ");
            $query->execute();
            $result = $query->fetchAll();
            print_r($result);
            echo json_encode($result);
            }
             catch(PDOException $e){
             echo $e->getMessage();
        }
    }

}
?>