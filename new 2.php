

<!DOCTYPE html>
<html style="font-size: 16px;" lang="uk">
  <head>
  <style>

    body{
         background:#e8faff;
           font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;

    }
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-radius: 10px;
border-spacing: 0;
text-align: center;
height:400px;
    width: 400px;
}
th {
background: #fcf7d9;
color: black;
text-shadow: 0 1px 1px #2D2020;
padding: 10px 20px;
font-size: 18px;
height: 50px;
}

td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
 word-wrap:break-word;
 height: 100px;
}

td {
padding: 10px 20px;
background:#D8E6F3;
}

  </style>
    <body>
 <form action="" method="post">
    <input type="number" align="" style="width:400px" required placeholder="Число 1-5" maxlength="1" name="day"max="5" min="1"  ><br>
    <input type="submit"style="width:408px" value="Знайти">
</form>
</body>
</html>
<?php
$a=$_POST['day'];
$r=2;

if($a==1){
    $M="<table > <tr>
<th colspan=".$r.">Понеділок</th>
<tr><td colspan=".$r.">Технологія захисту інформації Волинський О.І. Гринчишин Т.М. 
</td></tr>
<tr><td >Адміністрування програмних систем і комплексів  Волинський О.І. Гринчишин Т.М. </td>
<td>Тестування програмних систем і комплексів           Ілько М. В. Волинський О.І. </td>
</tr>
<td colspan=".$r.">Технічна підтримка ІТ-користувача             Гринчишин Т.М.                  Волинський О. І.
 </td>
</table>";
echo $M;
}

if($a==2){
    $T="<table > <tr>
<th colspan=".$r.">Вівторок</th>
<tr><td >Адміністрування програмних систем і комплексів  Волинський О.І. Гринчишин Т.М. </td></tr>
<tr><td >Економіка та основи  ІТ-бізнесу                 Дребот С.Д. </td></tr>
<tr>
<td>Економіка та основи  ІТ-бізнесу                 Дребот С.Д.
 </td>
</tr>
</table>";
echo $T;
}
if($a==3){
     $W="<table > <tr>
<th colspan=".$r.">Середа</th></tr>
<tr><td colspan=".$r."> </td></tr>
<tr><td colspan=".$r." >web-технології та web-дизайн                     Ілько М.В.                  Николайчук Я.М</td></tr>
<tr><td >Технологія захисту інформації Волинський О.І. Гринчишин Т.М. </td>
<td >Технічна підтримка ІТ-користувача             Гринчишин Т.М.                </td></tr>
<tr><td colspan=".$r.">Тестування програмних систем і комплексів           Ілько М. В. Волинський О.І. </td></tr>

</table>";
echo $W;
}
if($a==4){
    $Th="<table > <tr>
<th colspan=".$r.">Четвер</th></tr>
<tr><td colspan=".$r."> Економіка та основи  ІТ-бізнесу                 Дребот С.Д.</td></tr>
<tr><td colspan=".$r." >Охорона праці та БЖД              Скрипник В.С.</td></tr>
<tr><td colspan=".$r." >Тестування програмних систем і комплексів               Ілько М. В.                                     Волинський О.І.  </td></tr>
<tr><td colspan=".$r.">web-технології та web-дизайн                     Ілько М.В.                  Николайчук Я.М</td></tr>
</table>";
echo $Th;
}
if($a==5){
    $F="<table > <tr>
<th colspan=".$r.">П'ятниця</th></tr>
<tr><td >Українська мова (за професійним спрямуванням)             Іроденко Т. Б.   </td>
<td>Охорона праці та БЖД              Скрипник В.С.</td></tr>
<tr><td colspan=".$r." >Українська мова (за професійним спрямуванням)             Іроденко Т. Б.    </td></tr>
</table>";
echo $F;
}

?>
            
          
        



