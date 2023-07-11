<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Horizontal Bar Chart</title>
    <style>

    </style>
</head>

<body>
    <div id="captureDiv">
        <div style="display: flex; justify-content:center; align-items: center;">
            <div id="labelsContainer" style="display: flex; flex-direction: column;"></div>
            <canvas id="chartCanvas" width="700" height="400"></canvas>
        </div>
    </div>
    <button onclick="captureScreenshot()" id="captureScreenshotbtn">Capture Screenshot</button>
    <script>
        // Get the canvas element and its context
        var canvas = document.getElementById('chartCanvas');
        var ctx = canvas.getContext('2d');

        // Retrieving the percentages from sessionStorage
        var paintExteriorPercentage = sessionStorage.getItem('paintExteriorPercentage');
        var mechanicalFunctionPercentage = sessionStorage.getItem('mechanicalFunctionPercentage');
        var suspensionFunctionPercentage = sessionStorage.getItem('suspensionFunctionPercentage');
        var sealsInteriorPercentage = sessionStorage.getItem('sealsInteriorPercentage');
        var electronicFunctionPercentage = sessionStorage.getItem('electronicFunctionPercentage');
        var acHeaterFunctionPercentage = sessionStorage.getItem('acHeaterFunctionPercentage');
        var testDrivefunctionPercentage = sessionStorage.getItem('testDrivefunctionPercentage');
        var tyreFunctionPercentage = sessionStorage.getItem('tyreFunctionPercentage');



        // Data for the chart (percentage values)
        var data = [
            Math.round(paintExteriorPercentage),
            Math.round(mechanicalFunctionPercentage),
            Math.round(suspensionFunctionPercentage),
            Math.round(sealsInteriorPercentage),
            Math.round(electronicFunctionPercentage),
            Math.round(acHeaterFunctionPercentage),
            Math.round(testDrivefunctionPercentage),
            Math.round(tyreFunctionPercentage)
        ];

        var sum = data.reduce(function(accumulator, value) {
            return accumulator + value;
        }, 0);

        var average = sum / data.length;

        data.unshift(Math.round(average));


        // Set the chart area
        var chartWidth = 500;
        var chartHeight = -50;
        var chartX = 50;
        var chartY = 50;

        // Calculate the maximum value from the data
        var maxValue = Math.max(...data); // Maximum percentage value

        // Calculate the width of each unit on the chart
        var unitWidth = chartWidth / maxValue;

        // Clear the canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw the x-axis
        ctx.beginPath();
        ctx.moveTo(chartX, chartY + chartHeight);
        ctx.stroke();

        // Calculate the spacing between bars and labels
        var spacing = 23; // Reduce the spacing between bars and labels
        var totalHeight = chartHeight + (data.length - 1) * spacing;
        var barHeight = (totalHeight - chartY) / data.length;

        var y = chartY;

        // Array of label texts
        var labelData = [
            'OVERALL RATING',
            'Paint and Exterior',
            'Mechanical Function',
            'Suspension Function',
            'Seals and Interior',
            'Battery, Electronic and Computer',
            'A/C and Heater Function',
            'Test Drive',
            'Tires'
        ];

        // Create a div for the labels
        var labelsContainer = document.getElementById('labelsContainer');
        labelsContainer.style.display = 'flex';
        labelsContainer.style.flexDirection = 'column';
        labelsContainer.style.marginRight = '0px';

        // Calculate the maximum width of the label texts
        var maxLabelTextWidth = 0;
        labelData.forEach(function(lineLabelText) {
            var lineLabelTextWidth = ctx.measureText(lineLabelText).width;
            if (lineLabelTextWidth > maxLabelTextWidth) {
                maxLabelTextWidth = lineLabelTextWidth;
            }

            // Create a div for each label
            var labelDiv = document.createElement('div');
            labelDiv.textContent = lineLabelText;
            labelDiv.style.marginBottom = spacing + 'px'; // Set the margin bottom to spacing
            labelDiv.style.marginTop = -spacing / 2 + 'px'; // Adjust the margin top
            labelDiv.style.textAlign = 'right';
            labelDiv.style.color = '#1b048e'; // Custom label text color
            labelDiv.style.fontWeight = 'bold'; // Make the label text bold
            if (lineLabelText === 'OVERALL RATING') {
                labelDiv.style.fontSize = '20px'; // Set the font size to 20 pixels for the "OVERALL RATING" label
            } else {
                labelDiv.style.fontSize = '17px'; // Set the font size to 17 pixels for other labels
            }
            labelsContainer.appendChild(labelDiv);
        });

        data.forEach(function(percentage, index) {
            var barWidth = percentage * unitWidth;

            // Draw the bar
            ctx.beginPath();
            ctx.rect(chartX, y, barWidth, barHeight);
            ctx.fillStyle = '#11048e';
            ctx.fill();

            // Draw the chart line
            ctx.beginPath();
            ctx.moveTo(chartX, y + (barHeight / 2));
            ctx.strokeStyle = '#241991';
            ctx.stroke();

            y += barHeight + spacing;
        });

        // Display the percentage values as labels
        ctx.font = 'bold 17px Arial';
        ctx.fillStyle = '#241991';
        ctx.textAlign = 'left';


        y = chartY + (barHeight / 2) + spacing / 2; // Adjust the initial y position

        data.forEach(function(percentage) {
            var label = percentage + '%';
            var labelWidth = ctx.measureText(label).width;
            var labelX = chartX + chartWidth + 10;

            // Adjust the labelX position based on bar width and max label width
            if (labelWidth + 20 > chartWidth) {
                labelX = chartX + barWidth + 10;
            }

            // Draw the label
            ctx.fillText(label, labelX, y);

            y += barHeight + spacing;
        });
    </script>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script>
        function captureScreenshot() {
            html2canvas(document.getElementById('captureDiv')).then(function(canvas) {
                // Convert the canvas to a data URL
                var screenshotDataUrl = canvas.toDataURL();

                // Send the data URL to the server for saving
                saveScreenshot(screenshotDataUrl);
                // Null the session values
                sessionStorage.removeItem('paintExteriorPercentage');
                sessionStorage.removeItem('mechanicalFunctionPercentage');
                sessionStorage.removeItem('suspensionFunctionPercentage');
                sessionStorage.removeItem('sealsInteriorPercentage');
                sessionStorage.removeItem('electronicFunctionPercentage');
                sessionStorage.removeItem('acHeaterFunctionPercentage');
                sessionStorage.removeItem('testDrivefunctionPercentage');
                sessionStorage.removeItem('tyreFunctionPercentage');
                const chaloye = 1;
                sessionStorage.setItem('chaloye', chaloye);
            });
        }

        function saveScreenshot(dataUrl) {
            // Create a form and an input field to send the data URL to the server
            var form = document.createElement('form');
            form.method = 'post';
            form.action = 'save_graph_img.php';

            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'screenshotDataUrl';
            input.value = dataUrl;

            // Append the input field to the form
            form.appendChild(input);

            // Append the form to the document body
            document.body.appendChild(form);

            // Submit the form to send the data URL to the server
            form.submit();
        }
    </script>

</body>

</html>