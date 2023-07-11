<?php
if (isset($_POST['image'])) {
    $imageData = $_POST['image'];
    $imageData = str_replace('data:image/png;base64,', '', $imageData); // Remove the data URL prefix
    $imageData = str_replace(' ', '+', $imageData); // Replace spaces with '+'

    $decodedImage = base64_decode($imageData);

    // Generate a unique file name
    $timestamp = time();
    $randomNum = mt_rand(100, 999);
    $imageName = "table_" . $timestamp . "_" . $randomNum . ".png";

    // Specify the path to the folder where you want to save the image
    $savePath = 'assets/images/' . $imageName;

    // Save the image to the specified folder
    file_put_contents($savePath, $decodedImage);

    // Return the image path as a response
    echo $savePath;
} else {
    echo "Image data not received.";
}
?>

