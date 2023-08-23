<!-- MILESTONE 2: -->

<?php require_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ! FONTAWESOME -->

        <link rel="icon" href="ico/favicon.ico" type="image/x-icon">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous'/>

        <!-- ! FONTS -->
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
        <!-- ! BOOTSTRAP -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- ! CSS -->

        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/style.css">

        <title> PHP Strong Password Generator </title>
        
    </head>

    <body>

        <!-- ! Main Start -->
        <main>

            <div class="container mt-5">

                <h1 class="mb-4">
                    Strong Password Generator
                </h1>

                <!-- MILESTONE 1: -->

                <?php 

                    // function generateRandomPassword($lenght) {
                    //     $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
                    //     $password = '';

                    //     for ($i = 0; $i < $lenght; $i++) {
                    //         $randomIndex = rand(0, strlen($characters) - 1);
                    //         $password .= $characters[$randomIndex];
                    //     }

                    //     return $password;
                    // }

                    if (isset($_GET['lenght'])) {
                        $passwordLenght = (int)$_GET['lenght'];

                        if ($passwordLenght > 7) {
                            $generatedPassword = generateRandomPassword($passwordLenght);

                            echo '<div class="alert alert-success" role="alert">
                                    Password Generata: ' . htmlspecialchars($generatedPassword) . '
                                 </div>';

                        } else {
                            echo '<div class="alert alert-danger" role="alert">
                                    La lunghezza della password deve essere maggiore di 7 caratteri.
                                 </div>';
                        }

                    }

                ?>

                <form action="index.php" method="get" class="mb-4">

                    <label for="lenght" class="form-label">
                        Lunghezza Password:
                    </label>

                    <input type="number" id="lenght" name="lenght" class="form-control" min="1" required>

                    <button type="submit" class="btn btn-primary mt-2">
                        Genera Password
                    </button>
                    
                </form>


            </div>
                                    
        </main>

    </body>

</html>