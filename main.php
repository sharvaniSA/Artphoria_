<!DOCTYPE html>
<html lang="en">
<style>
html{
background-color: #E6D1F2;
}
</style>
<head>
    <title>Artphoria: Where creativity takes flight</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Toggle</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat+Alternates:wght@500&family=Poppins:wght@800&family=Roboto+Condensed&family=Roboto:wght@100&display=swap" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="../assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
<link rel="manifest" href="../assets/site.webmanifest">



</head>
<body background ="uploads/Background.jpeg" ></body>
    <div class="top-icons">
        <a href="note.php"><i class="fa fa-pencil-alt"></i></a> 
        <a href="cart.php"><i class="fa fa-shopping-cart"></i></a> 
        
    </div>
    <div class="intro">
	<h1>Artphoria</h1><br>
        <h1>Where creativity takes flight.</h1>
    </div>
    <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    <nav class="vertical-nav">
        <ul class="menu">
            <li><a href="#"></a></li>;
<br>
            <li><a href="sell.html">Sell&nbsp&nbsp</a></li>
            <li><a href="buy.php">Buy&nbsp&nbsp</a></li>
            <li><a href="tutorial.html">Learn&nbsp&nbsp</a></li>
        </ul>
    </nav>
    
    <!-- <section class="news">
        <article class="news-article">
            <div class="article-header">
                <div class="logo">
                    <img src="uploads/logo.jpg" alt="Artphoria Logo">
                </div>
                <div class="sender-info">
                    <p class="sender">Artphoria Team</p>
                    <p class="article-date" id="article-date"></p>
                </div>
            </div>
            <div class="article-content">
                <h3>Three-Dimensional Artworks</h3>
                <img src="uploads/3D artwork.png" alt="Article Image">
                <br>
                <br>
                <p class="additional-paragraph">
                    Dating back from ancient Greece, this technique has mutated and has now found its way into the street art.
French artist Scaf creates large-scale 3D illusions and urban interventions using spray cans.

From realistic dinosaurs, snakes and alligators to famous film and cartoon characters, Scaf’`s creations seem to emerge from flat surfaces to take over the real world.His work is enhanced by the interactive photographs the artist takes of each piece afterwards.

In order to highlight his graffiti, Scaf often dresses up accordingly and inserts props to the scene, taking the optical illusion to a whole new level.
                </p>
                <a href="#" class="read-more-link" id="readMoreBtn">Read More</a> 
            </div>
        </article>

        <article class="news-article">
            <div class="article-header">
                <div class="logo">
                    <img src="uploads/logo.jpg" alt="Artphoria Logo">
                </div>
                <div class="sender-info">
                    <p class="sender">Artphoria Team</p>
                    <p class="article-date" id="article-date"></p>
                </div>
            </div>
            <div class="article-content">
                <h3>Sell Digital Art with NFT</h3>
                <img src="uploads/NFT-article.png" alt="Article Image">
                <br>
                <br>
                <p class="additional-paragraph">
                    The market for digital collectibles is a rapidly growing opportunity.

                    March 2021 has seen a record-breaking NFT-art sale, in which an artist under the pseudonym Beeple has sold his collection of NFT art for 69 million dollars. 
                    Many more celebrities have jumped on the NFT train, including Grimes, Azealia Banks, and the CEO of Twitter himself.
                </p>
                <a href="#" class="read-more-link" id="readMoreBtn">Read More</a> 
            </div>
        </article>

        <article class="news-article">
            <div class="article-header">
                <div class="logo">
                    <img src="uploads/logo.jpg" alt="Artphoria Logo">
                </div>
                <div class="sender-info">
                    <p class="sender">Artphoria Team</p>
                    <p class="article-date" id="article-date"></p>
                </div>
            </div>
            <div class="article-content">
                <h3>Dis-Assemblage</h3>
                <img src="uploads/Disassemble.png" alt="Article Image">
                <br>
                <br>
                <p class="additional-paragraph">
                    Damián Ortega's Cosmic Thing is without a doubt one of his most celebrated works, in which he took apart a Volkswagen Beetle and re-composed it piece by piece, where it was suspended in midair from wires.
It                  could be described as a hanging diagram where you can see each part of the vehicle, dissected for all to see.
                </p>
                <a href="#" class="read-more-link" id="readMoreBtn">Read More</a> 
            </div>
        </article>
    </section> -->
    <section class="news">
        <?php
        // session_start();
        function limitWords($text, $limit) {
            $words = explode(' ', $text);
            if (count($words) > $limit) {
                return implode(' ', array_slice($words, 0, $limit)) . '...';
            }
            return $text;
        }
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'trial';
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        // Connect to your MySQL database
        // $dbHost = "your_db_host";
        // $dbUser = "your_db_username";
        // $dbPass = "your_db_password";
        // $dbName = "your_db_name";
        // $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // Query to fetch news articles from the database
        $sql = "SELECT title, image, info FROM news_articles";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<article class="news-article">';
                echo '<div class="article-header">';
                echo '<div class="logo">';
                echo '<img src="uploads/logo.jpg" alt="Artphoria Logo">';
                echo '</div>';
                echo '<div class="sender-info">';
                echo '<p class="sender">Artphoria Team</p>';
                echo '<p class="article-date" id="article-date"></p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="article-content">';
                echo '<h3>' . $row['title'] . '</h3>';
                echo '<img src="' . $row['image'] . '" alt="Article Image">';
                echo '<br><br>';
                // echo '<p class="additional-paragraph">' . $row['info'] . '</p>';
                echo '<p class="initial-content">' . limitWords($row['info'], 40) . '</p>';
                echo '<p class="hidden-content" style="display: none;">' . substr($row['info'], strpos($row['info'], limitWords($row['info'], 40)) + strlen(limitWords($row['info'], 40))) . '</p>';
                echo '<a href="#" class="read-more-link" id="readMoreBtn">Read More</a>';
                echo '</div>';
                echo '</article>';
            }
        }
        $conn->close();
        ?>
    </section>
    
    <div class="profile-toggle" id="profile-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></div>
    <nav class="profile-nav">
        <ul class="profile-menu">
            <br>
            <li><a href="profile1.php">Profile</a></li>
            <li><a href="collections.html">Your Orders</a></li>
            <li><a href="index.html">Logout</a></li>
        </ul>
    </nav>
    <script>
    // Add a click event handler to all "Read More" links
    var readMoreLinks = document.querySelectorAll('.read-more-link');
    readMoreLinks.forEach(function (readMoreLink) {
        readMoreLink.addEventListener('click', function (event) {
            event.preventDefault();
            var articleContent = event.target.parentElement;
            var initialContent = articleContent.querySelector('.initial-content');
            var hiddenContent = articleContent.querySelector('.hidden-content');

            if (hiddenContent.style.display === 'none') {
                // Concatenate the hidden content to the visible content
                initialContent.innerHTML += hiddenContent.innerHTML;

                // Show the hidden content and change the "Read More" text to "Read Less"
                hiddenContent.style.display = 'block';
                readMoreLink.textContent = 'Read Less';
            } else {
                // Hide the hidden content and change the "Read Less" text to "Read More"
                hiddenContent.style.display = 'none';
                readMoreLink.textContent = 'Read More';
            }
        });
    });
</script>
    <script src="main.js"></script>
</body>
</html>
