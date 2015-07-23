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
                <h2 id="index-quotes">“I believe there is hope for us all, even amid the suffering – <br>
                    and maybe even inside the suffering. And that’s why I write fiction, probably. <br>
                    It’s my attempt to keep that fragile strand of radical hope, to build a fire in the darkness.”<br>
                    John Green</h2>
            </div>
        </section>

        <!-- Begin Short Version Section -->
        <section class="row">
            
            <img class="col-md-3 offset-one-sixth top-buffer-4" src="/img/EstherProfileSmall.jpg">
            
            <div id="contact" class="col-md-6 contact-links">
                <h2>210-854-1466 
                	<!-- Below line looks strange, but I need the five empty spaces for display between elements -->
                	<span>      <a href="https://www.facebook.com/esther.hershenhorn.5/about"><i class="icon icon-facebook-official"></i></a>      
                				<a href="https://twitter.com/EHershenhorn"><i class="icon icon-twitter"></i></a>
                	</span>
                </h2>
            </div>
              	<div class="col-md-6">
	                <h3>The Short Version</h3>
	                <br>
	                <p>
	                	I spend my days doing what I love and loving what I do! 
	                	I write picture books, board books, middle grade fiction and teach adults writing for
	                    children and coach writers of all ages to help them tell their stories. 
	                </p>
	                <p>
	                	I earned a degree in elementary education with a minor in journalism from the 
	                    University of Pennsylvania and soon therafter began teaching fifth grade in Chicago.
	                </p>
	                <p>
	                	Eventually, my son was born. He reminded me of how much I loved children's stories.
	                </p>
	                <p>
	                	This launched my writing journey. Writing became publishing. 
	                </p>
	                <p>
	                	Publishing opened the door for teaching adults, and I never looked back. 
	                </p>
                </div>
            </div>
			<br>
			<br>
			<!-- This soft line isnot displaying, check it out -->
            </hr>
        </section>

        <!-- Divider -->
        <div class="row pretty-divider col-md-12">
        </div>

        <!-- Begin More of the Story Section  -->
        <section class="row">
            <img class="col-md-4 offset-one-twelfth image-girl" src="/img/esther-girl-sepia-smaller.jpg">
            
            <div class="col-md-6">
            	<br>
            	<h3>More of The Story</h3>
                <p>
                	I grew up in Philadelphia, Pennsylvania. (I'm the bonneted, kneeling first grade girl,  
                	at Overbrook Elementary School's May Day celebration.) 
                </p>
                <p>
                	I'm known to tell writers, "Know what your character wants, what your character needs, 
                	what he or she wishes for, longs for, dreams of."
                </p>
                <p>
                	Can you guess my long-ago wish-dream-longing?
                	I wanted my name on the front cover of a children's book!
                </p>
                <p>
                	I still love the "happily-ever-after" endings of fairy tales, especially "The Ugly Duckling," 
                	and my orange "True Books" that offered up the childhoods of famous Americans.
                </p>
            </div>
        </section>

        <section class="row row-top-buffer">
			<img class="col-md-4 offset-one-twelfth " src="img/Penn-Wynn-sepia.jpg">
            
            <div class="col-md-6">
                <p>
                	The Penn Wynne Library was but a stone's throw away from my new suburban home in 1955. 
                </p>
                <p>
                	Thanks to my trusty library card, the first I'd ever owned, I spent my tenth year 
                	voraciously reading through the  blue-spine-ed books on the "K" shelves of the library's 
                	Children's Room. 
                </p>
                <p>
                	I rode along with Nancy Drew and her River Heights companions, seated 
                	in the back of Nancy's spiffy blue roadster, supposedly following clues and feeling the breeze, 
                	yet unknowingly uncovering how to tell a story.  
                </p>
                <p>
                	Through adolescence, I sewed along with Jo and her sisters, strolled the moors, walked the 
                	streets of Chicago with Sister Carrie. 
                </p>    
            </div>
        </section>
        <section class="row row-top-buffer">
            <div>
            	<!-- Image of Univ of Pennsylvania -->
            	<img class="col-md-4 offset-one-twelfth " src="img/Penn-Wynn-sepia.jpg">
            </div>
            <div class="col-md-6">
                <p>
                	I earned a degree in Elementary Education from the University of Pennsylvania, minoring in Journalism, 
                	and soon after began teaching fifth grade in Chicago.  
                </p>
                <p>
                	Eventually, I traded my Phillies hat for a Cubbie-blue cap, my cheese steak for a Chicago hot dog 
                	and teaching for Motherhood. 
                </p>
                <p>
                	When my son reconnected me with my long-ago wish-dream-longing, I was off and running on my 
                	Writer's Journey.  Fortunately, the Faith required of all Cubs fans served me well: 
                	my journey to publication took longer than expected!
                </p>
                <p>
      				Eventually, as I knew it would, my writer's plot line ended "happily-ever-after."
      				And lucky me! That Happy Ending spawned several New Beginnings.   
                </p>
               
            </div>
        </section>

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
