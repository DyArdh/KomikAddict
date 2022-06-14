<?php

class Flasher {

    public static function setNotification($message, $action, $type)
    {
        $_SESSION['msg'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function Notification()
    {
        if(isset($_SESSION['msg'])) {
            echo '<div class="alert alert-'. $_SESSION['msg']['type'] .' alert-dismissible fade show" role="alert">
                    Data <strong>'. $_SESSION['msg']['message'] .'</strong> '. $_SESSION['msg']['action'] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
            unset($_SESSION['msg']);
        }
    }
    
};