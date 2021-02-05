<?php

$fio = $_POST['name'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];
$time = $_POST['time'];
$date = $_POST['date'];
$body = "<div>
        <p>Name $fio</p>
        <p>Tel $tel</p>
        <p>date $date</p>
        <p>time $time</p>
        <p>comment $comment</p>
        </div>";

$fio = htmlspecialchars($fio);
$tel = htmlspecialchars($tel);
$comment = htmlspecialchars($comment);
$time = htmlspecialchars($time);
$date = htmlspecialchars($date);


$fio = urldecode($fio);
$tel = urldecode($tel);
$comment = urldecode($comment);
$time = urldecode($time);
$date = urldecode($date);

$fio = trim($fio);
$tel = trim($tel);
$comment = trim($comment);
$time = trim($time);
$date = trim($date);

//echo $fio;
//echo "<br>";
//echo $email;
    

if (mail("liubomyrchornolizskiy@gmail.com", "Reserved", "ФИО:".$fio ."\n". "Телефон:".$tel ."\n".  "Дата:".$date ."\n". "Время:".$time ."\n". "Вопрос:".$question ."\n" ,"From: liubomyrchornolizskiy@gmail.com \r\n"))
    { echo "<section>
                <h1>Ваша заявка успешно отправлена!</h1>
            </section> "
        ?>
        <script language="JavaScript" type="text/javascript">
        function changeurl(){
            eval(self.location="index.html");
        }
        window.setTimeout("changeurl();",2000);
        </script>

     <?php
} else {
    echo "при отправке сообщения возникли ошибки";   
}

?>

<style>
  
body{
    padding-top: 35px;
    background-color: #131313;
}


section{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 4px solid white;
    border-radius: 15px;
    margin: 0 auto;
    max-width: 800px;
    height: 90vh;
    text-align: center;
}

h1{
    font-size: 30px;
    color: white;
}
h3{
    margin-top: -10px;
    font-size: 28px;
    color: white;
}

h4{
    font-weight: 400;
    font-size: 25px;
    color: white;
}
h5{
    margin-top: -20px;
    font-weight: 400;
    font-size: 25px;
    color: white;
}

a{
    display: flex;
    justify-content: center;
    align-items: center;
    border:2px solid white;
    border-radius: 5px;
    width: 35px;
    height: 35px;
    color: white;
    position: absolute;
    top:50px;
    right: 60px;
    text-decoration: none;
}

</style>

