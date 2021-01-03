<!DOCTYPE html>
<html lang="nl">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <link rel="shortcut icon" href="afbeeldingen/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <img class="masthead-avatar mb-5 achtergond-logo" src="#" alt="logo" title="logo">
    <h1>Contact form</h1>
    <p>Not every field of the contact form is shown below. We received all of the info!</p>

    <?php
    
    if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
			echo "<p> Ingevuld bij naam: " . $_POST["gebruikersnaam"] . "</p>\n";
		} else {
			echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
		}
    
    if (isset($_POST["feedback"]) && $_POST["feedback"] != "") {
    echo "<p> Message typed by user: " . $_POST["feedback"] . "</p>\n";
    } else {
    echo "<p> No message was submitted by user. </p>\n";
    }
    
    ?>

    <div id="center_button">
        <button onclick="location.href='index.html'">Back to Home</button>
    </div>

</body>
</html>