<?php
class UserModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM users');
        $users = $this->resultset();
        return $users;
    }

    public function register() {
        // Sanitize POST array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);
        if($post['submit']) {
            $this->query('INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)');
            $this->bind(':first_name', $post['first_name']);
            $this->bind(':last_name', $post['last_name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            // Verify
            if($this->lastInsertId()) {
                // Redirect
                header('LOCATION: '.ROOT_URL.'users/login');
            }
        }
        return;
    }

    public function login() {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if($post['submit']) {
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $row = $this->single();

            if($row) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user'] = [
                    'id'            =>  $row['id'],
                    'first_name'    =>  $row['first_name'],
                    'last_name'     =>  $row['last_name'],
                    'email'         =>  $row['email'],
                ];
                header('LOCATION: '.ROOT_URL.'posts');
            } else {
                header('LOCATION: '.ROOT_URL.'users/login');
            }
        }
        return;

    }
}