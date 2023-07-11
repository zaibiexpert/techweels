<?php

include "conn.php";
if (isset($_POST['get_img'])) {

    
    // Retrieve image data from database for the specific test drive ID
    $sql = "SELECT image FROM car_images";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are any images to include in the PDF document
    if ($result->num_rows > 0) {
            require_once('./tcpdf/tcpdf.php');
            $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Loop through retrieved images and add them to PDF document
        while ($row = $result->fetch_assoc()) {
            $image_data = $row['image'];

            // Create image resource from image data
            $image_resource = imagecreatefromstring($image_data);

            // Convert image to JPEG format
            ob_start();
            imagejpeg($image_resource);
            $image_data = ob_get_clean();

            // Add page to PDF document
            $pdf->AddPage();

            // Set image scale
            $pdf->setImageScale(3.0);


            // Add image to PDF document
            $pdf->Image('@'.$image_data);
        }

        // Export PDF document with images
        $pdf->Output('example.pdf', 'D');
    } else {
        // If there are no images to include, display an error message
        echo "No images found for test drive ID {$test_drive_id}.";
    }

    // Close the prepared statement
    $stmt->close();
}
?>