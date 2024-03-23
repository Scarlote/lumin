<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mediaqueries.css">
    <link rel="stylesheet" href="../css/keyframes.css">
    <title>Astaria.com</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <main style="filter: url(#SphereMapTest);">

        <?php if (isset($_GET['notification'])) { ?>
            <div class="notification"><p> <i class="fa-solid fa-bell"></i> <?php echo $_GET['notification']; ?> </p></div>
        <?php } ?>

        <!-- INFORMATION -->
        <section id="information">
            <div>
                <h1>
                    <span>L</span>
                    <span>U</span>
                    <span>M</span>
                    <span>I</span>
                    <span>N</span>
                    <span></span>
                    <span><i class="fa-solid fa-cube"></i></span>
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem dolores libero neque error officia hic laborum eaque</p>
            </div>
            
            <div>
                <h4>GET STARTED</h4>
                <div class="steps">
                    <div class="step short">Join</div>
                    <i class="fa-solid fa-caret-right"></i>
                    <div class="step">Add credits</div>
                    <i class="fa-solid fa-caret-right"></i>
                    <div class="step">Play Arcade</div>
                    <i class="fa-solid fa-caret-right"></i>
                    <div class="step short">Win</div>
                </div>
            </div>

            <div>
                <h4>FIND US ON</h4>
                <div class="social">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-discord"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </section>

        <!-- FORMS -->
        <section id="login-section">

            <!-- LOGIN FORM -->
            <form action="../php/process_form.php" method="post" id="login-form">
                <input type="email" id="email" name="email" placeholder="email" autocomplete="off" required>
                <input type="submit" name="submit" value="Continue with this email">
                <a>support@liminalspace.com</a>
            </form>
        
            <!-- CODE FORM -->
            <form action="../php/process_form.php" method="post" id="code-form">
                <input type="text" id="code" name="code" inputmode="numeric" pattern="[0-9]*" placeholder="code" autocomplete="off" required>
                <input type="submit" name="submit_code" value="Continue">
                <a>support@liminalspace.com</a>
            </form>
        </section>
    </main>

    <script src="../js/scripts.js"></script>
    
</body>
</html>