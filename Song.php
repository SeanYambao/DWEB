<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valentine by Laufey</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Georgia', serif;
        background: #fff0f5;
        color: #3a2e2e;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }

    .lyrics-box {
        background-color: #ffffffdd;
        padding: 40px 50px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        width: 100%;
        text-align: center;
    }

    h1 {
        color: #c94f7c;
        font-size: 2.8em;
        margin-bottom: 0.2em;
    }

    h2 {
        color: #a03e66;
        font-weight: 400;
        margin-bottom: 1em;
    }

    p {
        margin: 10px 0;
        line-height: 1.6;
        font-size: 1.1em;
    }

    strong {
        display: block;
        margin-top: 2em;
        font-size: 1.2em;
        color: #7b2e4d;
    }
</style>



</head>
<body>

<?php

$title = "Valentine";
$artist = "Laufey";
$mood = "confused";

$verseCount = 3;
$repeatChorus = "2"; 

$nouns = ["<b>affection</b>", "<b>moment</b>", "<b>flies</b>", "<b>guys</b>", "<b>valentine</b>", "<b>heartbeat</b>", "<b>romance</b>", "<b>shock</b>", "<b>bone</b>", "<b>kiss</b>"];
$verbs = ["<b>rejected</b>", "<b>surprise</b>", "<b>fall</b>", "<b>run</b>", "<b>miss</b>", "<b>blinked</b>", "<b>hear</b>", "<b>love</b>"];
$adjectives = ["<b>weird</b>", "<b>pretty</b>", "<b>scared</b>", "<b>confused</b>", "<b>honest</b>"];

$verse1 = [
    "I've " . $verbs[0] . " " . $nouns[0] . " for years and years",
    "Now I have it and damn it, it‘s kind of " . $adjectives[0] . "",
    "He tells me I'm " . $adjectives[1] . ", don't know how to respond",
    "I tell him that he's " . $adjectives[1] . " too",
    "Can I say that? Don‘t have a clue"
];

$verse2 = [
    "With every passing " . $nouns[1] . ", I " . $verbs[1] . " myself",
    "I'm " . $adjectives[2] . " of " . $nouns[2] . "",
    "I'm " . $adjectives[2] . " of " . $nouns[3] . "",
    "Someone please help",
    "'Cause I think I've " . $verbs[2] . " in love this time",
    "I " . $verbs[5] . " and suddenly I had a " . $nouns[4] . ""
];

$chorus = [
    "How the hell did I " . $verbs[2] . " in love this time?",
    "And honestly, I can‘t believe I get to call you mine.",
    "I " . $verbs[5] . " and suddenly",
    "I had a " . $nouns[4] . ""
];

$verse3 = [
    "I've lost all control of my " . $nouns[5] . " now",
    "Got caught in a " . $nouns[6] . " with him somehow",
    "I still feel a " . $nouns[7] . " through every " . $nouns[8] . "",
    "When I " . $verbs[6] . " an 'I " . $verbs[7] . " you'"
];

echo '<div class="lyrics-box">';
echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p><strong>Mood:</strong> $mood</p>";

echo "<p><strong>[Verse 1]</strong></p>";
echo "<p>" . $verse1[0] . "</p>";
echo "<p>" . $verse1[1] . "</p>";
echo "<p>" . $verse1[2] . "</p>";
echo "<p>" . $verse1[3] . "</p>";
echo "<p>" . $verse1[4] . "</p>";
echo "<br>";

echo "<p><strong>[Pre-Chorus]</strong></p>";
echo "<p>" . $verse2[0] . "</p>";
echo "<p>" . $verse2[1] . "</p>";
echo "<p>" . $verse2[2] . "</p>";
echo "<p>" . $verse2[3] . "</p>";
echo "<br>";

echo "<p><strong>[Chorus]</strong></p>";
echo "<p>'Cause I think I've " . $verbs[2] . " in love this time</p>";
echo "<p>I " . $verbs[5] . " and suddenly I had a " . $nouns[4] . "</p>";
echo "<p>(Valentine)</p>";
echo "<br>";

echo "<p><strong>[Verse 2]</strong></p>";
echo "<p>What if he's the last one I " . $nouns[9] . "?</p>";
echo "<p>What if he's the only one I'll ever " . $verbs[4] . "?</p>";
echo "<p>Maybe I should " . $verbs[3] . ", I'm only twenty-one" . "</p>";
echo "<p>I don't even know who I want to become</p>";
echo "<p>(Valentine)</p>";
echo "<br>";

echo "<p><strong>[Bridge]</strong></p>";
echo "<p>" . $verse3[0] . "</p>";
echo "<p>" . $verse3[1] . "</p>";
echo "<p>" . $verse3[2] . "</p>";
echo "<p>" . $verse3[3] . "</p>";
echo "<p>'Cause now I've got someone to lose</p>";
echo "<br>";

echo "<p><strong>[Pre-Chorus]</strong></p>";
echo "<p>The first one to ever like me back</p>";
echo "<p>I‘m seconds away from a heart attack</p>";
echo "<br>";

echo "<p><strong>[Final Chorus]</strong></p>";
echo "<p>" . $chorus[0] . "</p>";
echo "<p>" . $chorus[1] . "</p>";
echo "<p>" . $chorus[2] . "</p>";
echo "<p>" . $chorus[3] . "</p>";
echo "<p>(Valentine)</p>";
echo '</div>';
?>

</body>
</html>