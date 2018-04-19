<?php
  class usersDB{
    public static function getUsers(){
      $db = Database::getDB();
      $query = "SELECT * FROM accounts";
      $statement=$db->prepare($query);
      $statement->execute();
      $users = array();
      foreach ($statement as $row){
        $user = new User($row['id'], $row['email'], $row['fname'], $row['lname'], $row['phone'], $row['birthday'], $row['gender'], $row['password']);
        $users[]=$user;
      }
      return $users;
     }
   public static function insertUser($ID, $email, $fname, $lname, $phone, $birthdate, $gender ,$password){
     $db = Database::getDB();
     $query = "INSERT INTO accounts(id, email, fname, lname, phone, birthdate, gender ,password) VALUES(:id, :email, :fname, :lname, :phone, :birthdate, :gender , :password)";
     $statement=$db->prepare($query);
     $statement->bindValue(':id', $ID);
  	 $statement->bindValue(':email', $email);
	 	 $statement->bindValue(':fname', $fname);
	 	 $statement->bindValue(':lname', $lname);
  	 $statement->bindValue(':phone', $phone);
		 $statement->bindValue(':birthdate', $birthdate);
		 $statement->bindValue(':gender', $gender);
		 $statement->bindValue(':password', $password);
     $statement->execute();
     $statement->closeCursor();
     }
      
   public static function updateUserPW($ID, $password){
     $db = Database::getDB();
     $query = "UPDATE accounts SET password=$password WHERE id=:id";
     $statement=$db->prepare($query);
     $statement->bindValue(':id', $ID);
     $statement->execute();
     $statement->closeCursor();
    }

  public static function deleteUser($ID){
    $db = Database::getDB();
    $query = "DELETE FROM accounts WHERE id = :id";
    $statement=$db->prepare($query);
    $statement->bindValue(':id', $ID);
    $statement->execute();
    $statement->closeCursor(); 
    }
  }  
?>