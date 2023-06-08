<!--
Hello!
I hope that english language isn't a problem. I prefer to use it instead of my native, polish language when it comes to programming or any tech job.
Other than that, it seems to me that chatGPT is immensely powerful when you know what and which way to "ask it".
This site was done in 1 day, as I've read the email on Tuesday, and until then Ubuntu, or rather it's connection to the internet didn't want to cooperate.
I hope I land this job!
Cheers, Kamil.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Telemedi</title>
    <!-- declared only once -->
    <?php echo file_get_contents('styles/styles.html'); ?>
</head>
<body>
<!-- might change, until then declare once -->
<?php echo file_get_contents('html/header.html'); ?>

<!-- just a standard placeholder navbar -->
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<main>
    <h1>Welcome to the website!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor rutrum mauris ac mattis. Suspendisse vulputate dignissim ante,
        at sollicitudin tortor. Donec a justo ut nisl tristique eleifend. Aliquam sagittis auctor turpis ac rhoncus. Donec non libero nec nibh
        tincidunt pellentesque vel at nisi. Nunc finibus velit sed est venenatis, ut fermentum mi feugiat. Donec viverra vestibulum justo, sit
        amet euismod tellus pellentesque vel. Praesent id dolor at risus tincidunt gravida. Integer eleifend dignissim nibh.</p>
    <!--
        .md file extension is used in readme's all over GitHub, I believe it's used properly in this case,
        although someone would argue that displaying it on the website is better.
        Could use Parsedown library to display it in web, but I want to keep the site light-weight
    -->
    <p style="font-style: italic"> Documentation is written in the <strong>'Documentation.md'</strong> file</p>

    <!-- the generated quotes could be styled to "appear in" letter by letter -->
    <h2>Random Quote Generator (ajax/JS) </h2>
    <!--  basic input, could be sanitized  -->
    <input type="text" size="50" placeholder="Input for chatGPT - for topic of the quotation, for ex. future" name="GPT4-request" />
    <p id="quote" class="quote" >Click the button to display a random quote.</p>
    <!-- could make an API call to chatGPT, using the input text, instead of random quote by ajax -->
    <!-- it's not a bug, it's a feature! :) I could fix this, delay the click interval, or even iterate upon it ->
        let's say, the button gets more red and red, until it finally falls off the site completely, even takes one of the quote generator with it.
     -->
    <button onclick="getRandomQuote()">Generate Quote</button> <- this button doesn't like to be clicked fast :)

    <h2>Random Quote Generator (PHP) </h2>
    <input type="text" size="50" placeholder="Input for chatGPT - for topic of the quotation, for ex. future" name="GPT4-request" />
    <p id="quote" class="quote"> <?php include 'data/quotes.php'; ?></p>
    <!-- again, call to chat gpt4 api would be preferred in this case -->
    <form method="post" action="">
        <button type="submit" name="generate">Generate Quote</button>
    </form>

    <script>
        function typeWriter(element, text, delay) {
            let index = 0;
            const timer = setInterval(() => {
                if (index < text.length) {
                    element.innerHTML += text.charAt(index);
                    index++;
                } else {
                    clearInterval(timer);
                }
            }, delay);
        }
        // send request, get response
        function getRandomQuote() {
            const quoteElement = document.getElementById("quote");
            quoteElement.innerHTML = ""; // Clear previous quote
            $.ajax({
                url: "data/quotes.php",
                type: "GET",
                success: function(response) {
                    typeWriter(quoteElement, response, 20);
                },
                error: function() {
                    console.log("Error occurred while retrieving the quote.");
                }
            });
        }

    </script>
</main>
<!-- footer doesn't change, only need to declare it once -->
<?php echo file_get_contents('html/footer.html'); ?>
</body>
</html>