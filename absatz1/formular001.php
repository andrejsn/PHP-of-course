<html>
<head></head>

<body>
<form action="" method="POST">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
<!-- Age field here -->
  <input type="submit" value="Submit">
</form>


</body>


</html>

<?php
    $name = $_POST['fname'];
    echo $_POST['fname'];

    // Auswerten ob Name String ist

    // Auch Alter eingeben und prüfen, ob Alter Nummer ist