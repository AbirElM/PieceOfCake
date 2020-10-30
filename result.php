<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- //**// -->
    
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/logo.png">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>


<body id="bd">
    
    <header>

        <nav>
            <div class="logo">
                <img src="imgs/logo.jpg">
            </div>

            <ul class="nav-links">

                <li><a href="#" hidden>Home</a></li>
                <li><a href="#" hidden>About</a></li>
                <li><a href="#" hidden>Work</a></li>
                <li><a href="#" hidden>Projects</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

    </header>

    <script src="script.js"></script>

    <main>
        <div id="b1">
            <img src="imgs/cake.jpg" id="cake" alt="">
        </div>
        <div id="b2">
            <div class="form-wrapper" 
            style="background-color: white;
            margin: auto;
            margin-top: 15vw;">
                <form method="GET">
                    <!-- <h5 style="color:#5A6A5D; font-weight: 600; text-align: center; margin-top: 15px;">Organiser un
                        évènement</h5> -->
                        <div style="margin-top: 3vh;">
                        <?php echo $_POST["email"]; ?>
                   </div>
                        <h3>Bonjour <?php echo $_POST["name"]; ?> </h3>
                        <h5>Nous vous remercions pour votre message.</h5>
                  <div>
 <div type="text"  placeholder="Message"
                    style="width: fit-content;
                    margin: auto;
                    border: 1px solid black;
                    border-radius: 0.1rem;
                    padding: 20px;
                    ;">
                    
                    <?php echo $_POST["msg"]; ?>
                        <br>
                        <br>
                    </div>

                  </div>
                       
                   <div style="margin-top: 3vh;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nemo veniam fuga iste, ex nulla quasi, voluptates doloremque suscipit minus perspiciatis cupiditate maiores officiis a iusto magnam repellat tempora perferendis?
                   </div>
                    </div>
                 
                </form>
            </div>
    
        </div>

    </main>

    
</body>
</html>