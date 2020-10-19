<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Input phone number:
    <br>
    <textarea name="textArea" placeholder="Phone Number"></textarea>
    <br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textArea = $_POST["textArea"];

    $Viettel = array();
    $vinaphone = array();
    $mobiphone = array();

    $viet = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
    $vina = ["088", "091", "094", "083", "084", "085", "081", "082"];
    $mobi = ["089", "090", "093", "070", "079", "077", "076", "078"];

    echo "Phone Number";
    echo "<pre>";
    $textArea = explode(",", $textArea);
    print_r($textArea);

    for ($i = 0; $i < count($textArea); $i++) {
        $number = str_split($textArea[$i], 3);

        if (in_array($number[0], $viet)) {
            array_push($Viettel, $textArea[$i]);
        } elseif (in_array($number[0], $vina)) {
            array_push($vinaphone, $textArea[$i]);
        } elseif (in_array($number[0], $mobi)) {
            array_push($mobiphone, $textArea[$i]);
        }
    }
}

echo "<h3>Viettle</h3>";
echo "<pre>";
print_r($Viettel);
echo "<h3>Vina Phone</h3>";
echo "<pre>";
print_r($vinaphone);
echo "<h3>Mobi Phone</h3>";
echo "<pre>";
print_r($mobiphone);


?>


</body>
</html>

