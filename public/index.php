<?php 

// Version 1.0 
// by Paula Schuler
// Next iteration, improve navigation


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

  <title>Esther Project</title>

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
                <h2 id="author-titles-shortversion">Author and Coach</h2>
                <h2 id="author-titles">Award-winning Author and Coach</h2>
            </div>
            <div class="half-white hero-overlay"></div>
            <div class="hero-solid-color">
                <br>
                <p id="index-quotes"><br>"Fairy tales are more than true;<br>
                    not because they tell us that dragons exist,<br>
                    but because they tell us that dragons can be beaten."<br>- G. K. Chesterton</p>
            </div>
        </section>

        <!-- Begin Summaries -->
        <div class="summary-row row ">
            <div class="summary-group col-md-4 top-buffer-8">
                <a class="summary-icon" href="about.php"><i class="icon icon-5x icon-star"></i></a>
                <h3 class="summary-header ">About</h3>
                <p class="summary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.  
                </p>
                <a class="summary-more" href="about.php">More</a>

            </div>  
            <div class="summary-group col-md-4 top-buffer-8">
                <a class="" href="books.php"><i class="icon icon-5x icon-book"></i></a>
                <h3 class="summary-header">Books</h3>
                <p class="summary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
                <a class="summary-more" href="books.php">More</a>
            </div>
            <div class="summary-group col-md-4 top-buffer-8">
                <a class="" href="coaching.php"><i class="icon icon-5x icon-exchange"></i></a>
                <!-- <a  id="contact-button" target="_blank" href="http://codeup.com/" class="btn btn-lg button-contact my-button" role="button">About</a> -->
                <h3 class="summary-header">Coaching</h3>
                <p class="summary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. 
                </p>
                <a class="summary-more" href="coaching.php">More</a>
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
