<table border="0">

    <tr style="font-weight:bold">
        <td>ID</td>
        <td>Marke</td>
        <td>Modell</td>
        <td>Typ</td>
        <td>Farbe</td>
        <td>Groesse</td>
        <td>Absatzhoehe</td>
        <td>Ablageort</td>
        <td>Notiz</td>      
    </tr>

    <tr><td colspan="9"><hr><td></tr>

    <tr>
        <?php
        foreach ($result as $shoes) {
            echo "<tr>";
            foreach ($shoes->children() as $shoe) {

                if ($shoe->getName() == "shoeid") {
                    echo "<td><a href='index.php?ctrl=basex&action=delete&shoeid=". $shoe . "'>Entfernen</a></td>";
                } else {
                    echo "<td>" . $shoe . "</td>";
                }
            }
        }
        ?>
    </tr>
</table>    