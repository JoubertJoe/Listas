<!DOCTYPE html>
<html>

<head>
    <table style="width:100%">
</head>

<body>
    <tr>
        <?php
        for ($i = 0; $i < 15; $i++) {
            $num = rand(-100, 100);
            if ($num > 0) {
                echo "<td bgcolor = #cce6ff>$num</td>";
            } else if ($num < 0) {
                echo "<td bgcolor = #ff3333>$num</td>";
            } else {
                echo "<td bgcolor = #ffe680>$num</td>";
            }
        }
        ?>
    </tr>
    </table>
</body>

</html> 