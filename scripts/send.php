<?
$to = "pavel.plotnikov1999@mail.ru";
$to_ecwid = "join@ecwid.com";
$subject = "Тестовое задание с сайта hh.ru";
$mail = '<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Тема страницы</title>
    </head>
    <body>
    <table width="80%" align="center" style="color:white; background:linear-gradient(0deg, #008000 , #3CB371); -webkit-border-radius:15px; box-shadow: 0 0 5px black; box-shadow: 0 0 10px rgba(0,0,0,0.5); -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.5); padding:20px; font-size:20px; font-family: Verdana, Helvetica, Arial, sans-serif;">
      <tr><td>Имя: '.$_POST["name"].' </td></tr>
      <tr><td>Адрес: '.$_POST["email"].'</td></tr>
      <tr><td>Номер телефона: '.$_POST["phone"].'</td></tr>
      <tr><td>Дата отправления: '.$_POST["date"].'</td></tr>
      <tr><td>Вопрос:</td></tr><br>
      <tr style="background:white "><td style="color:black; -webkit-border-radius:15px; border-radius:15px; border: 2px solid #C0C0C0 ; padding:20px; font-size:15px;">'.$_POST["question"].'</td></tr>

      </table>
    </body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
mail($to_ecwid, $subject, $mail, $headers);
?>
