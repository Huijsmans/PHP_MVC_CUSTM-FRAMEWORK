<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../includes/style.css">    
    <link rel="shortcut icon" href="favicon.png">
    <title>PHP MVC</title>
    <?php include "../includes/style.css"; ?>
</head>
<body>
    <header>  
    <nav>  
    <ul>  
    <li>  
    <a href="#"> Home </a>  
    </li>  
    <li>  
    <a href="#"> About </a>  
    </li>  
    <li>  
    <a href="#"> Contact </a>  
    </li>  
    <li> <a href="#"> Terms of use </a>  
    </li>  
    <li>  
    <a href="#"> Join Us </a>  
    </li>  
    </ul>  
    </nav>  
    </header>  
	<section>
		<h1>Homepage</h1>
		<p>
            <a href="<?php echo $routeToProduct ?>">Check the first product</a>
        </p>
	<section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
		crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>