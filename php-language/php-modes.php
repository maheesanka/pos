<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Modes</title>
</head>
<body>
<?php

    echo "<h1>This is a PHP File</h1>";

    $myVar = "IJSE";

    for($i = 0; $i< 2;$i++){

        echo $i,"<br>";

?>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam asperiores assumenda consequuntur, debitis distinctio dolores eos itaque magnam maxime mollitia natus neque nihil nulla praesentium quam quasi velit voluptatum!
</p>
<?php

    echo "<h2>This is my second tag </h2>";

    }

    echo "<h1>Institute of Software Engineering : $myVar</h1>";

?>

<h1>Institute of Software Engineering : <?= $myVar ?></h1>

</body>
</html>