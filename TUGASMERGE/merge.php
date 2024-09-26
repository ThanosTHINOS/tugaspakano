<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Arrays</title>
</head>
<body>

<h2>Merge Two Sorted Arrays</h2>

<form method="post">
    <label>Nums1 (comma-separated):</label><br>
    <input type="text" name="nums1" required><br><br>

    <label>Number of elements to consider in Nums1 (m):</label><br>
    <input type="number" name="m" required><br><br>

    <label>Nums2 (comma-separated):</label><br>
    <input type="text" name="nums2" required><br><br>

    <label>Number of elements in Nums2 (n):</label><br>
    <input type="number" name="n" required><br><br>

    <input type="submit" value="Merge">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nums1 = array_merge(array_slice(array_map('intval', explode(',', $_POST['nums1'])), 0, $_POST['m']), array_fill(0, $_POST['n'], 0));
    $nums2 = array_map('intval', explode(',', $_POST['nums2']));
    
    for ($i = $_POST['m'] - 1, $j = $_POST['n'] - 1, $k = $_POST['m'] + $_POST['n'] - 1; $j >= 0; $k--) {
        $nums1[$k] = ($i >= 0 && $nums1[$i] > $nums2[$j]) ? $nums1[$i--] : $nums2[$j--];
    }

    echo "<h3>Merged Array:</h3><p>" . implode(", ", $nums1) . "</p>";
}
?>

</body>
</html>
