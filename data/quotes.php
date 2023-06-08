<?php
// static quotes, in real world use-case I would use API call with ajax
// API call endpoint building would be separated to different folder and PHP class
// I would aim to make said class extendable and on par with the standards
$quotes = [
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Innovation distinguishes between a leader and a follower. - Steve Jobs",
    "Life is 10% what happens to us and 90% how we react to it. - Charles R. Swindoll",
    "The best way to predict the future is to create it. - Peter Drucker",
    "Success is not the key to happiness. Happiness is the key to success. - Albert Schweitzer",
    "The only person you should try to be better than is the person you were yesterday. - Matty Mullins",
    "Believe you can and you're halfway there. - Theodore Roosevelt",
    "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
    "Don't watch the clock; do what it does. Keep going. - Sam Levenson",
    "It does not matter how slowly you go as long as you do not stop. - Confucius"
];

$randomQuote = $quotes[array_rand($quotes)];

echo $randomQuote;
