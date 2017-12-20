<?php
class PostModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM posts');
        $posts = $this->resultset();
        return $posts;
    }
}