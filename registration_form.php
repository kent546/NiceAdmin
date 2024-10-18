<!-- registration_form.php -->
<h2>Registration Form</h2>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Register</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Here, you can add your validation and database logic

    echo "<p>Registration successful for $name ($email).</p>";
}
?>
