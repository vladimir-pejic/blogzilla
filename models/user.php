<?php
class UserModel extends Model {
    public function Index() {

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
}