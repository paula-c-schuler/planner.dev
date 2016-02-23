<?php 
// include '/data.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <script src="https://use.fonticons.com/6f4f57ed.js"></script>

	<title>Esther About</title>
</head>
<body>
	<!-- Navigation Bar Top -->
    <?php include 'navbar.php'; ?>

    <!-- Begin Container -->
	<div class="container">

        <!-- Hero -->
        <section class="my-hero">
            <div class="hero-message">
                <h1 id="author-name">Esther Hershenhorn</h1>
                <h3 id="author-titles">Teacher, Author, Coach</h3>
            </div>
            <div class="half-white hero-overlay"></div>
            <div class="hero-solid-color">
                <br>
                <br>
                <p id="index-quotes">"Storytelling reveals meaning without committing the error of defining it." <br>Hannah Arendt</p>
            </div>
        </section>

        <!-- Begin Short Version Section -->
        <section class="row top-buffer-4">
            
            <img class="profile-image top-buffer-4" src="/img/EstherProfileSmall.jpg">
           
            <div id="contact" class="short-version-group"> 
              	<div class="short-version-group">
	                <p class="short-version-header">The Short Version</p>
	                <p class="short-version-text">
	                	I spend my days doing what I love and loving what I do! 
	                	I write picture books, board books, middle grade fiction and teach adults writing for
	                    children and coach writers of all ages to help them tell their stories. 
	                </p>
	                <p class="short-version-text">
	                	I earned a degree in elementary education with a minor in journalism from the 
	                    University of Pennsylvania and soon therafter began teaching fifth grade in Chicago.
	                </p>
	                <p class="short-version-text">
	                	Eventually, I delivered a beautiful baby boy. He reminded me of how much I loved children's stories.
	                </p>
	                <p class="short-version-text">
	                	This launched my writing journey. Writing became publishing. 
	                </p>
	                <p class="short-version-text">
	                	Publishing opened the door for teaching adults, and I never looked back. 
	                </p>
                    <a id="linkedin-icon" href="https://www.linkedin.com/pub/esther-hershenhorn/17/357/91a" target="_blank"><i class="contact-links icon icon-3x icon-linkedin-square"></i></a>
                <a id="twitter-icon" href="https://twitter.com/EHershenhorn" target="_blank"><i class="contact-links icon icon-3x icon-twitter"></i></a>
                <a id="facebook-icon" href="https://www.facebook.com/esther.hershenhorn.5/about" target="_blank"><i class="contact-links icon icon-3x icon-facebook-official"></i></a>  
                </div>
            </div>
			<br>
			<br>
        </section>

        <!-- pretty divider -->
        <div class="row pretty-divider-under-social-icons">
        </div>

        <!-- In later iteration: Longer Story goes here or another page upon click -->

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
