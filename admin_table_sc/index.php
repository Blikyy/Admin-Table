<?php
include "database.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data</title>
</head>
<body>

    <h1 class="admin_table">Admin Table</h1>

    <div class="button-container">
    <div class="buttons">
        <button class="btn" onclick="open_insert()">Insert</button>
        <button class="btn" onclick="open_update()">Update</button>
        <button class="btn" onclick="open_delete()">Delete</button>
    </div>
    </div>

    <div class="table-container">
    <table class="fl-table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        foreach($result as $data){
        echo "<tr>";
        echo "<td>" . $data['id'] . "</td>" . "<td>" .$data['name']. "</td>" . "<td>" .$data['email'] . "</td>" . "<td>" .$data['age']. "</td>";
        echo "</tr>";
        }
        ?>
            
        </tbody>
    </table>
    </div>
   <div class="popup" id="insert-popup">
    <div class="popup-window" id="insert-popup-window">
        <h1>Insert</h1>
        <form method="post" action="database.php">
            <input name="name" type="text" placeholder="Jméno" class="input">
            <input name="email" type="email" placeholder="E-mail" class="input">
            <input name="age" type="number" placeholder="Věk" class="input">
            <br>
            <button class="btn" name="insert_submit" type="submit" value="insert_submit">Save</button>
            <button class="btn" type="button" onclick="exit_insert()">Exit</button>
        </form>

    </div>
   </div>


   <div class="popup" id="update-popup">
    <div class="popup-window" id="update-popup-window">
        <h1>Update</h1>
        <form method="post" action="database.php">
            <input name="id" type="number" placeholder="ID řádku" class="input">
            <br>
            <input name="name" type="text" placeholder="Jméno" class="input">
            <input name="email" type="email" placeholder="E-mail" class="input">
            <input name="age" type="number" placeholder="Věk" class="input">
            <br>
            <button class="btn" name="update_submit" type="submit" value="update_submit">Save</button>
            <button class="btn" type="button" onclick="exit_update()">Exit</button>
        </form>

    </div>
   </div>

   <div class="popup" id="delete-popup">
    <div class="popup-window" id="delete-popup-window">
        <h1>Delete</h1>
        <form method="post" class="delete">
            <input name="id" type="number" placeholder="ID řádku" class="input">
            <br>
            <button class="btn-important" name="delete_submit" type="submit" value="delete_submit">Save</button>
            <button class="btn" type="button" onclick="exit_delete()">EXIT</button>
        </form>

    </div>
   </div>

    <script src="script.js"></script>

</body>
</html>