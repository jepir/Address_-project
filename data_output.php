<?php
    
    echo "<br><h2><center> μ£Ό  μ  λ‘ </center></h2>";
    echo "<hr>";

    $connect = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connect, 'addr_db');



    mysqli_query($connect, "set session character_set_connection=utf8;");
    mysqli_query($connect, "set session character_set_results=utf8;");
    mysqli_query($connect, "set session character_set_client=utf8;");

    $sql ="select *from member";
    $result = mysqli_query($connect, $sql);
    $count = mysqli_num_fields($result);

    echo "<B> π νμ΄λΈ μ΄λ¦ : member </B?<br><br>";


?>


    <table width='600' border="1" bordercolor='blue' cellpadding='1'>
        <tr>
            <td bgcolor="#FFFF00"><B>νλ²</B></td>
            <td bgcolor="#FFFF00"><B>μ΄λ¦</B></td>
            <td bgcolor="#FFFF00"><B>μ£Όμ</B></td>        
        </tr>
<?php

    while($rows=mysqli_fetch_row($result))
    {
        echo "<tr>";
        for ($a=0; $a < $count; $a++)
         {
             echo"<td> $rows[$a] </td>"; 
        }
        echo"</tr>";
    }
    ?>

    </table><br>


<?php

    $row_count = mysqli_num_rows($result);
    echo "π μ μ²΄ λ μ½λμ μ : <B>[ {row_count} κ° ] </B>";
    mysqli_close($connect);
    ?>

    <html>
        <body>
            ββ [ <a href="data_input.php"> μ£Όμ μλ ₯ νλ©΄</a>]μΌλ‘ μ΄λ
        </body>
    </html>