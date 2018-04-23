<?
# Служит для отладки, показывает все ошибки, предупреждения и т.д.
error_reporting(E_ALL);
# Подключение файлов с функциями
#https://www.youtube.com/channel/UC7f5bVxWsm3jlZIPDzOMcAg
require "rb.php"; #будем юзать RedBean
R::setup( "mysql:host=teo.mysql;dbname=teo_rent" , "teo_rent", "Vyseroll19");
# Запуск сессии 
session_start();

?>