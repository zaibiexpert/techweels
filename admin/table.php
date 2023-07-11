<?php
// Check if the AJAX request is made
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
  // Get the form data sent through AJAX
  $formData = $_POST;

  // Process the form data or perform any desired operations
  // ...

  // Construct the response with the form data
  $response = "Form data received successfully:\n";
  foreach ($formData as $field => $value) {
    $response .= "$field: $value\n";
  }

  // Return the response
  echo $response;
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    * {
      /* font-family: "Poppins", sans-serif; */
      font-family: Arial, Helvetica, sans-serif;
    }

    .table-container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    table {
      border-collapse: collapse;
      background-color: gainsboro;
      width: 30%;
    }

    td,
    th {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
  </style>
</head>

<body>


  <div class="table-container" id="myTable">
    <table>
      <thead>
        <tr>
          <th>Sr #</th>
          <th>Parts Name</th>
          <th>Condition</th>
        </tr>
      </thead>
      <tbody>
        <!-- Generating rows dynamically using JavaScript -->
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <script>
          var partsname = [
            "Front Bumper",
            "Bonnet Right",
            "Bonnet Center",
            "Bonnet Left",
            "Wind Screen",
            "Sun Roof",
            "Roof Center",
            "Roof Right",
            "Roof Left",
            "Rear Screen",
            "Boot Right",
            "Boot Center",
            "Boot Left",
            "Rear Bumper",
          ];

          var condition = [];

          for (let i = 1; i <= 14; i++) {
            var formDataValue = formData[partsname[i - 1].toLowerCase().replace(/\s/g, "_")];
            condition.push(formDataValue);
          }

          for (let i = 1; i <= 14; i++) {
            document.write("<tr>");
            document.write("<td>" + i + "</td>");
            document.write("<td>" + partsname[i - 1] + "</td>");
            document.write("<td>" + condition[i - 1] + "</td>");
            document.write("</tr>");
          }
        </script>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th>Sr #</th>
          <th>Parts Name</th>
          <th>Condition</th>
        </tr>
      </thead>
      <tbody>
        <!-- Generating rows dynamically using JavaScript -->
        <script>
          var partsname2 = [
            // front driver fender
            "Right Fender FR",
            "Right Fender FC",
            "Right Fender FL",
            // front driver door
            "Right Door FR",
            "Right Door FC",
            "Right Door FL",
            // rear passanger door
            "Right Door BR",
            "Right Door BC",
            "Right Door BL",
            // pannels
            "Right Bottom Grill",
            // rear passanger fender
            "Right Fender BR",
            "Right Fender BC",
            "Right Fender BL",
            // front passanger fender
            "Left Fender FR",
          ];
          for (let i = 15; i <= 28; i++) {
            document.write("<tr>");
            document.write("<td>" + i + "</td>");
            document.write("<td>" + partsname2[i - 15] + "</td>");
            document.write("<td>Row " + i + ", Column 3</td>");
            document.write("</tr>");
          }
        </script>
      </tbody>
    </table>

    <table>
      <thead>
        <tr>
          <th>Sr #</th>
          <th>Parts Name</th>
          <th>Condition</th>
        </tr>
      </thead>
      <tbody>
        <!-- Generating rows dynamically using JavaScript -->
        <script>
          var partsname3 = [
            "Left Fender FC",
            "Left Fender FL",
            // front driver door
            "Left Door FR",
            "Left Door FC",
            "Left Door FL",
            // rear passanger door
            "Left Door BR",
            "Left Door BC",
            "Left Door BL",
            // pannels
            "Left Bottom Grill",
            // rear passanger fender
            "Left Fender BR",
            "Left Fender BC",
            "Left Fender BL",
          ];
          for (let i = 29; i <= 40; i++) {
            document.write("<tr>");
            document.write("<td>" + i + "</td>");
            document.write("<td>" + partsname3[i - 29] + "</td>");
            document.write("<td>Row " + i + ", Column 3</td>");
            document.write("</tr>");
          }
        </script>
        <script>
          // Capture and save screenshot
          html2canvas(document.querySelector("#myTable")).then(function(
            canvas
          ) {
            var timestamp = new Date().getTime(); // Get the current timestamp
            var randomNum = Math.floor(Math.random() * 1000); // Generate a random number between 0 and 999
            var fileNamet =
              "table_screenshot_" + timestamp + "_" + randomNum + ".png"; // Construct the file name

            var link = document.createElement("a");
            link.href = canvas.toDataURL();
            link.download = fileNamet;
            link.click();
          });

          var tablename = "<?php echo $fileNamet ?>";
          sessionStorage.setItem("tablename", tablename);
        </script>
      </tbody>
    </table>
  </div>
</body>

</html>