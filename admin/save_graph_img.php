<?php
session_start();

if (isset($_POST['screenshotDataUrl'])) {
    $screenshotDataUrl = $_POST['screenshotDataUrl'];

    // Remove the "data:image/png;base64," prefix from the data URL
    $screenshotData = str_replace('data:image/png;base64,', '', $screenshotDataUrl);

    // Decode the base64-encoded image data
    $screenshotData = base64_decode($screenshotData);

    // Specify the folder path to save the screenshot
    $folderPath = 'assets/images/';

    // Generate a unique filename for the screenshot
    $filename = uniqid('screenshot_') . '.png';

    // Save the screenshot to the specified folder
    file_put_contents($folderPath . $filename, $screenshotData);
}
?>

<script>
    var fname = "<?php echo $filename ?>";
    sessionStorage.setItem('fname', fname);

    setTimeout(function() {
  window.close();
}, 4000);

</script>
