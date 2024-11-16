<?php
require_once __DIR__ . '/../services/dbservice/db.php'; 

class User {
    private $id;
    private $firstname;
    private $lastname;
    private $organization;
    private $email;
    private $password;
    private $role;
    private $note;
    private $deleted;
    public static function getAll() {
        $results = DB::queryAll("SELECT * FROM user");
        if ($results === false) {
            echo "Error: Could not retrieve users.";
            return [];
        }

        $users = [];
        foreach ($results as $row) {
            $u = new User();
            $u->setId($row['id']);
            $u->setFirstname($row['firstname']);
            $u->setLastname($row['lastname']);
            $u->setEmail($row['email']);
            $u->setPassword($row['password']);
            $u->setOrganization($row['organization']);
            $u->setNote($row['note']);
            $u->setRole($row['role']); // Ensure 'role' key is used
            $u->deleted = $row['deleted'];
            array_push($users, $u);
        }
        return $users;
    }

    public function add() {
        $query = "INSERT INTO user (firstname, lastname, email, password, organization, note, role, deleted)
                  VALUES(:firstname, :lastname, :email, :password, :organization, :note, :role, :deleted)";
        $params = [
            ':firstname' => $this->firstname,
            ':lastname' => $this->lastname,
            ':email' => $this->email,
            ':password' => $this->password,
            ':organization' => $this->organization,
            ':note' => $this->note,
            ':role' => $this->role,
            ':deleted' => $this->deleted
        ];
        try {
            DB::query($query,$params);
            echo "User added successfully.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function getId() {
        return $this->id;
    }   
    
    function getName() {
        return $this->firstname . " " . $this->lastname;
    }
    
    function getFirstname() {
        return $this->firstname;
    }
    
    function setFirstname($firstname) {
      $this->firstname = $firstname;
    }
    
    function getLastname() {
        return $this->lastname;
    }
    
    function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }
    
    function setPassword($password) {
        $this->password = $password;
    }
    
    function setOrganization($organization) {
        $this->organization = $organization;
    }
    
    function getOrganization() {
        return $this->organization;
    }
    
    function setNote($note) {
        $this->note = $note;
    }
    
    function getNote() {
        return $this->note;
    }
    function getRole() {
        return $this->role;
    }
    function setRole($role) {
        $this->role = $role;
    }

    function setDeleted($deleted) {
        $this->deleted = $deleted;
    }   
    function getDeleted() {
        return $this->deleted;
}
}