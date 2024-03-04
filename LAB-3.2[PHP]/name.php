<?php 
   if (isset($_POST['submit'])){
        require_once 'config.php';

        $errors = [];

        foreach($_POST as $field => $value){
            if($field === 'firstname' || $field === 'lastname' && !preg_match('/^[a-z]*$/i', $value)){
                $errors[] = "{$field} has invalid characters please try again.";
                echo $error;
            }         
        }
}
?>