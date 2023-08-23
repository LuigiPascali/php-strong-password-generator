<!-- MILESTONE 2: -->

<?php 

    function generateRandomPassword($lenght) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';

        for ($i = 0; $i < $lenght; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $password .= $characters[$randomIndex];
        }

        return $password;
    }

?>