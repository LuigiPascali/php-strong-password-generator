<!-- MILESTONE 4: (BONUS) -->

<?php
    session_start();

    if (isset($_SESSION['generatedPassword'])) {
        $generatedPassword = $_SESSION['generatedPassword'];
        unset($_SESSION['generatedPassword']);
    } else {
        header("Location: index.php");
        exit();
    }
?>

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

        <title> PHP Strong Password Generator - Display Password </title>
        
    </head>

    <body>

        <!-- ! Main Start -->
        <main>

            <div class="container mt-5">

                <div class="row justify-content-center">

                    <div class="col-md-6">

                        <div class="card">

                            <div class="card-body">
                                <h1 class="card-title">Password Generata <i class="fas fa-check-circle"></i></h1>
                                <p class="card-text">La tua password generata è: <?php echo $generatedPassword; ?></p>
                            </div>

                        </div>

                    </div>

                </div>
                
            </div>
                                    
        </main>

    </body>

</html>