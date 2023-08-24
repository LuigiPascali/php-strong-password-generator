<!-- MILESTONE 2: -->

<?php
    // function generatePassword($length) {
    //     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-';
    //     $password = '';
        
    //     for ($i = 0; $i < $length; $i++) {
    //         $randomIndex = rand(0, strlen($chars) - 1);
    //         $password .= $chars[$randomIndex];
    //     }
        
    //     return $password;
    // }

    // if (isset($_GET['passwordLength'])) {
    //     $passwordLength = intval($_GET['passwordLength']);
    //     $generatedPassword = generatePassword($passwordLength);
        
    //     header("Location: display_password.php?password=$generatedPassword");
    //     exit();
    // }
?>

<!-- MILESTONE 4: (BONUS) -->

<?php

    session_start();

    function generatePassword($length, $useNumbers = true, $useLetters = true, $useSymbols = true, $allowRepeating = false) {
        $chars = '';
        
        if ($useLetters) {
            $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($useNumbers) {
            $chars .= '0123456789';
        }
        if ($useSymbols) {
            $chars .= '!@#$%^&*()_+=-';
        }
        
        $password = '';
        $previousChar = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($chars) - 1);
            $randomChar = $chars[$randomIndex];
            
            if (!$allowRepeating && $randomChar === $previousChar) {
                $i--; // Skip this iteration
                continue;
            }
            
            $password .= $randomChar;
            $previousChar = $randomChar;
        }
        
        return $password;
    }

    if (isset($_GET['passwordLength'])) {
        $passwordLength = intval($_GET['passwordLength']);
        $generatedPassword = generatePassword($passwordLength);
        
        $_SESSION['generatedPassword'] = $generatedPassword;

        header("Location: display_password.php");
        exit();
    }

?>
