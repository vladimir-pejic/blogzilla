<?php
class PostModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM posts ORDER BY created_at DESC');
        $posts = $this->resultset();
        return $posts;
    }

    public function create() {
        // Sanitize POST array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {

            if($post['title'] == '' || $post['body'] == '' || $post['link'] == '') {
                Messages::setMessage('All fields are required!', 'error');
                return;
            }

            $this->query('INSERT INTO posts (user_id, title, body, link) VALUES (:user_id, :title, :body, :link)');
            $this->bind(':user_id', 1);
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->execute();
            // Verify
            if($this->lastInsertId()) {
                // Redirect
                header('LOCATION: '.ROOT_URL.'posts');
                Messages::setMessage('Posted successfully!', 'success');
            }
        }
        return;
    }
}