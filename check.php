<?
require_once 'resources.php';
$link = mysqli_connect($host, $dataBase, $password, $dataBaseUser);

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM ".$tableUsers." WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id'])
 or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
        print "Хм, что-то не получилось";
    }
    else
    {
        print "Привет, ".$userdata['user_login'].". Всё работает!";
    }
}
else
{
    print "Включите куки";
}
?>



//$link = mysqli_connect("localhost", "f0443710_user", "dySyvmrp", "f0443710_user");
//if($link){
//echo 'Соединение установлено.';
//}
//else{
//die('Ошибка подключения к серверу баз данных.');
//}
//
////$database = "f0443710_user";
////$selected = mysqli_select_db($link ,$database);
////if($selected)
////echo ' Подключение к базе данных прошло успешно.';
////else
////die(' База данных не найдена или отсутствует доступ.');
//$x = mysqli_fetch_row(mysqli_query($link, "SELECT * FROM users"));
//echo $x[0];
//echo $x[1];
//
//?>