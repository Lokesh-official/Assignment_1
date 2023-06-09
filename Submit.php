<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="This is MyPizza" />
        <meta name="description" content="Order the best, Leave the rest" />
        <link rel="shortcut icon" href="MyPizza.jpeg" type="image/x-icon" />
        <link href="style.css" rel="stylesheet" />
        <title>MyPizza</title>
    </head>

    <body>
        <!--Header-->
        <header>
            <h2>MyPizza</h2>
        </header>
        <main>
            <section>
				<h3>Your order details here</h3>
                              
<?php
// Capture the value of the order INPUT from the Order-Pizza.html page by defining a PHP variable called '$order' and setting the value to the order as entered by the user in the FORM on Order-Pizza.html
	$order = $_GET['order'];
// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's order -->
	echo('<p>Your order, '.$order.' has been added to our list of orders.</p>');
?>
		    </section>
        </main>
        <!--Footer-->
        <footer>
            <p><small>© 2022 Copyright MyPizza</small></p> 
        </footer>
    </body>
</html>