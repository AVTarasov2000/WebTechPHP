<?

require_once 'resources.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect("localhost", "f0443710_user", "rclqq0eV", "users")
or die("Ошибка " . mysqli_error($link));

// закрываем подключение
mysqli_close($link);
?>