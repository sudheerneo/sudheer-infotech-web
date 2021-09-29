<?php 
  class User {
    // DB stuff
    private $conn;
    private $usersTable = 'users';


    //user parameters
    public $userMail, $userPhone, $userPass, $userGetin, $userName;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
    
    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET title = :title, body = :body, author = :author, category_id = :category_id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->title = htmlspecialchars(strip_tags($this->title));
          $this->body = htmlspecialchars(strip_tags($this->body));
          $this->author = htmlspecialchars(strip_tags($this->author));
          $this->category_id = htmlspecialchars(strip_tags($this->category_id));

          // Bind data
          $stmt->bindParam(':title', $this->title);
          $stmt->bindParam(':body', $this->body);
          $stmt->bindParam(':author', $this->author);
          $stmt->bindParam(':category_id', $this->category_id);

          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // login check
    public function login() {
      // Create query
      $query = 'SELECT * FROM '.$this->usersTable.' WHERE mail = :mail AND keypass = :userPass';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->userMail = htmlspecialchars(strip_tags($this->userMail));
      $this->userPhone = htmlspecialchars(strip_tags($this->userPhone));
      $this->userPass = htmlspecialchars(strip_tags($this->userPass));
      $this->userGetin = htmlspecialchars(strip_tags($this->userGetin));

      // Bind data
      $stmt->bindParam(':mail', $this->userMail);
      $stmt->bindParam(':userPass', $this->userPass);
      // $stmt->bindParam(':userPhone', $this->userPhone);
      // $stmt->bindParam(':userGetin', $this->userGetin);

      // Execute query
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);

      //User Login success
      if($count == 1 && !empty($row)) {
        // echo 'Hello '. $row['name'];
        echo json_encode(
              array(
                'userMsg' => 'LoginSuccess',
                'userName' => $row['name'],
                'userMail' => $row['mail'],
                'userPhone' => $row['phonenumber'],
                'userPreferences' => $row['preferences']                
              )
            );
      } else {
        //login failure
        echo json_encode(
          array(
            'userMsg' => 'invalid user email or password',
          )
        );
      }

}

 // verify If userExist
 public function isUserExist() {
   // Create query
   $query = 'SELECT * FROM '.$this->usersTable.' WHERE mail = :userMail OR phonenumber = :userPhone';

   // Prepare statement
   $stmt = $this->conn->prepare($query);

   // Clean data
   $this->userMail = htmlspecialchars(strip_tags($this->userMail));
   $this->userPhone = htmlspecialchars(strip_tags($this->userPhone));

   // Bind data
   $stmt->bindParam(':userMail', $this->userMail);
   $stmt->bindParam(':userPhone', $this->userPhone);

   // Execute query
   $stmt->execute();
   $count = $stmt->rowCount();
   $row   = $stmt->fetch(PDO::FETCH_ASSOC);

   //User exist
   if($count == 1 && !empty($row)) {
     return true;
   } else {
     //newuser
     return false;
   }

}


 // create User account
 public function createUser() {
  // Create query
  $query = 'INSERT INTO ' . $this->usersTable . ' SET mail = :mail, keypass = :userPass, phonenumber = :userPhone, name = :userName';

  // Prepare statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->userMail = htmlspecialchars(strip_tags($this->userMail));
  $this->userPhone = htmlspecialchars(strip_tags($this->userPhone));
  $this->userPass = htmlspecialchars(strip_tags($this->userPass));
  $this->userName = htmlspecialchars(strip_tags($this->userName));

  // Bind data
  $stmt->bindParam(':mail', $this->userMail);
  $stmt->bindParam(':userPass', $this->userPass);
  $stmt->bindParam(':userPhone', $this->userPhone);
  $stmt->bindParam(':userName', $this->userName);

  // Execute query

  if($stmt->execute()) {
    return true;
  }
  printf("Error: %s.\n", $stmt->error);

  return false;
}


    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
                                SET title = :title, body = :body, author = :author, category_id = :category_id
                                WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->title = htmlspecialchars(strip_tags($this->title));
          $this->body = htmlspecialchars(strip_tags($this->body));
          $this->author = htmlspecialchars(strip_tags($this->author));
          $this->category_id = htmlspecialchars(strip_tags($this->category_id));
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
          $stmt->bindParam(':title', $this->title);
          $stmt->bindParam(':body', $this->body);
          $stmt->bindParam(':author', $this->author);
          $stmt->bindParam(':category_id', $this->category_id);
          $stmt->bindParam(':id', $this->id);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id = htmlspecialchars(strip_tags($this->id));

          // Bind data
          $stmt->bindParam(':id', $this->id);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
    
  }