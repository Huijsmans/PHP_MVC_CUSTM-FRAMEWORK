<!DOCTYPE html>
<html>

<?php include ('../viewcomponents/head.php'); ?>

<body>
<?php include ('../viewcomponents/header.php'); ?>
	<section>
		<h1>My Product:</h1>
		<ul>
			<li><?php echo $product->getTitle(); ?></li>
            <li><?php echo $product->getDescription(); ?></li>
            <li><?php echo $product->getPrice(); ?></li>
            <li><?php echo $product->getSku(); ?></li>
            <li><?php echo $product->getImage(); ?></li>
		</ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
	<section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
		crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>