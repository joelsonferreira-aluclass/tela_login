<?php
    class Usuario{

        public function login($login, $password){
            global $pdo;

            $sql = "SELECT * FROM users WHERE  email =:email AND password =:password ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $login);
            $sql-> bindValue("password", md5($password));
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

               $_SESSION['idUser'] = $dado['userid'];
               return true;
            }else{
                return false;
            }
        }

        public function logged($id){
            global $pdo;
            $array = array();

            $sql = "SELECT name FROM users WHERE userid = :userid";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("userid", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetch();

            }
            return $array;

        }

    }
?>