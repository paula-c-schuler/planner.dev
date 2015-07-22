<?php 

 ?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <script src="https://use.fonticons.com/6f4f57ed.js"></script>

  <title>Esther Home</title>

</head>
<body>
    <!-- Navigation Bar Top -->
    <?php include 'navbar.php'; ?>

    <!-- Begin Container -->
    <div class="container">

        <!-- Hero -->
        <section class="my-hero">
            <div id="hero-message" class="hero-message">
                <h1 id="author-name">Esther Hershenhorn</h1>
                <h3 id="author-titles">Teacher, Author, Coach</h3>
            </div>
            <div class="half-white hero-overlay"></div>
            <div class="hero-solid-color">
                <h2 id="index-quotes">This is for the quotes.</h2>
            </div>
        </section>

        <!-- Begin Summaries -->
        <div class="row ">
            <div class="col-md-4 top-buffer-8">
                <a class="offset-one-third" href="about.php"><i class="icon icon-5x icon-star"></i></a>
                <h3 class="offset-one-third">About</h3>
                <p class="summary">
                    Lucky me! I spend my days doing what I love and loving what I do! I write 
                    picture books, board books, middle grade fiction. I teach adults writing for
                    children and coach writers of all ages to help them tell their stories. 
                </p>
                <a class="summary" href="about.php">More</a>

            </div>  
            <div class="col-md-4 top-buffer-8">
                <a class="offset-one-third" href=""><i class="icon icon-5x icon-book"></i></a>
                <h3 class="offset-one-third">Books</h3>
                <p class="summary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
                <a class="summary" href="">More</a>
            </div>
            <div class="col-md-4 top-buffer-8">
                <a class="offset-one-third" href="coaching.php"><i class="icon icon-5x icon-exchange"></i></a>
                <h3 class="offset-one-fourth-plus">Coaching</h3>
                <p class="summary">
                    Working with writers wherever they are in the writing and publishing process, I help them
                    discover, craft and market their stories. Coaching clients include authors who publish 
                    through traditional and independent channels. I conduct one-on-one sessions in person 
                    or on communications devices for manuscript feedback and immediate answers to questions. 
                </p>
                <a class="summary" href="coaching.php">More</a>
            </div>  
            </hr>  
        </div>
        <!-- Divider -->
        <div class="row pretty-divider col-md-12">
        </div>
        

        <!-- Contact Button -->
        <?php include 'contact-button.html'; ?>
    </div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>

    
    <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/quotes.js"></script>

</body>
</html>
