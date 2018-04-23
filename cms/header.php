<?include_once("modules/config.php");?>

<?
$data = $_POST;

if( isset($data['do_register']) )
{
	// регистрация
	$errors = array();
	if (trim($data['login']) == "")
	{
		$errors[] = "Введите логин!";
	}
	
	if ($data['password'] == "")
	{
		$errors[] = "Введите пароль!";
	}
	
	if ($data['password'] != $data['password2'])
	{
		$errors[] = "Повторный пароль введен неверно!";
	}
	
	if ( R::count("users", "login = ?", array($data['login'])) > 0 )
	{
		$errors[] = "Пользователь уже существует!";
	}
	
	if ( R::count("users", "email = ?", array($data['email'])) > 0 )
	{
		$errors[] = "Пользователь с таким email уже существует!";
	}
	
	if (empty($errors)) 
	{	// все хорошо - регистрируем
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT );
		$user->registered = date('Y-m-d');
		R::store($user);
	}
	else {
		#echo "<div style='color:red;'>".array_shift($errors)."</div><hr>";
	}
	
}

if( isset($data['do_enter']) )
{
	$errors = array();
	// здесь проверяем вход
	$user = R::findOne('users' , 'login = ?', array($data['login']));
	if ( $user ) {
		// логин есть
		if ( password_verify($data['password'], $user->password))
		{
			// все хорошо - регистрируем
			$_SESSION['loguser'] = $user;
			#echo "Вы авторизованы";
		}
		else {
			$errors[] = "Не верно введен пароль!";
		}
	}
	else 
	{
		$errors[] = "Пользователь с таким логином не найден!";
	}
	
	if (! empty($errors)) 
	{
		#echo "<div style='color:red;'>".array_shift($errors)."</div><hr>";
	}
}
$url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lister</title>
        <link rel="shortcut icon" href="/cms/images/favicon.ico">
        <!--Plugin CSS-->
        <link href="/cms/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="/cms/css/main.min.css" rel="stylesheet">
		
		<script src="/cms/js/sweetalert.min.js"></script>
		<link   href="/cms/js/sweetalert.css"rel="stylesheet" type="text/css" >
    </head>
    <body>
        <!-- header -->
		<? 
		if (! empty($errors)) 
	{?>
		<script>swal({
                                        title: "Ошибка",
                                        text: "<?=array_shift($errors)?>",
                                        type: "error"
                                    },
                                    function() {
                                        //location.href="/"
										$(".sweet-alert").hide();
                                        $(".login_form").click();
                                    }
                            );
		</script>
	<?}?>
        <div id="header-fix" class="header fixed-top <?if (in_array($url,array("/","/user-profile.php"))):?>transperant<?endif;?>">
		
			<?include "menu.php";?>
                                
        </div>
        <!--End header -->