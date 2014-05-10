<html>
    <body>
        <?php
            session_start();
            $res = $_SESSION['result'];
            echo "<table>";
            while($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>" . $row['emailID'] ;
            }
            echo "</table>";
        ?>
    </body>
</html>