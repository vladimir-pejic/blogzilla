<?php

class Messages {

    public static function setMessage($text, $type) {
        if($type == 'error')
            $_SESSION['error-message'] = $text;
        elseif($type == 'success')
            $_SESSION['success-message'] = $text;
        else
            $_SESSION['generic-message'] = $text;
    }

    public static function displayMessage() {
        if(isset($_SESSION['error-message'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error-message'] . '</div>';
            unset($_SESSION['error-message']);
        }
        if(isset($_SESSION['success-message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success-message'] . '</div>';
            unset($_SESSION['success-message']);
        }


        if(isset($_SESSION['generic-message'])) {
            echo '<div class="alert alert-primary">' . $_SESSION['generic-message'] . '</div>';
            unset($_SESSION['generic-message']);
        }

    }

}