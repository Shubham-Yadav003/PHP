<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $selectedSkills = $_POST['skills']; 

   
    echo "<p>Hello, $name! Your selected skills are:</p>";
    echo "<ul>";
    foreach ($selectedSkills as $skill) {
        echo "<li>$skill</li>";
    }
    echo "</ul>";
}
?>
