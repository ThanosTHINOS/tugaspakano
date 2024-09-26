<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pyramid</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            white-space: pre;
        }
    </style>
</head>
<body>

<h1>angka</h1>

<form method="POST">
    <label for="lines">berapa line:</label>
    <input type="number" id="lines" name="lines" min="1" max="100" required>
    <input type="submit" value="bikin piramid">
</form>

<main>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lines'])) {
    $numLines = intval($_POST['lines']); 
    
    function generatePyramid($numLines) {
   
        $number = 1;
        
        for ($i = 1; $i <= $numLines; $i++) {
          
            $result = $number * $number;
            

            $spacing = str_repeat(' ', $numLines - $i);
            
        
            echo $spacing . "$number x $number = $result\n";
      
            $number = $number * 10 + 1;
        }
    }

  
    echo "<pre>"; 
    generatePyramid($numLines);
    echo "</pre>";
}
?>
</main>

</body>
</html>
