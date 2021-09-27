<?php

include_once  'config.php';


if (isset($_POST['checkuser'])) {

	$username = $_POST['email'];
	$password = $_POST['password'];
	login($username, $password, $pdo);
} elseif (isset($_POST['userlist'])) {

	listUsers($pdo);
} elseif (isset($_POST['user_role'])) {

	getRoles($pdo);
} elseif (isset($_POST['userSubmit'])) {

	insertUser($pdo);
} elseif (isset($_GET['userId'])) {
	populateUserFields($pdo);
} else {

	logout();
}

function login($username, $password, $pdo)
{

	session_start();




	$stmt = $pdo->prepare("SELECT * FROM user_data WHERE email=:email");
	$stmt->execute(['email' => $username]);

	if ($stmt->rowCount() > 0) {


		$user = $stmt->fetch();
		$hashed_password = $user['password'];

		if (password_verify($password, $hashed_password)) {

			$_SESSION['user_found'] = 1;
			$_SESSION['user']['user_id'] = $user['user_data_id'];
			$_SESSION['user']['role'] = $user['user_role_id'];
			$_SESSION['user']['first_name'] = $user['first_name'];
			$_SESSION['user']['last_name'] = $user['last_name'];
			$_SESSION['user']['email'] = $user['email'];

			if ($_SESSION['user']['role'] == 2)
				header("Location: dashboard.php");
			else
				header("Location: users-dashboard.php");
		} else {
			$_SESSION['user_found'] = 0;
			header("Location: index.php");
		}
	} else {
		$_SESSION['user_found'] = 0;
		header("Location: index.php");
	}
}

function logout()
{
	session_start();
	unset($_SESSION["user"]);
	unset($_SESSION["user_found"]);
	header("Location:index.php");
}



function getRoles($pdo)
{

	$stmt = $pdo->prepare("SELECT user_role_id,name from user_role");

	$stmt->execute();

	if ($stmt->rowCount() > 0) {

		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		$z = json_encode($result);

		echo $z;
	} else {
		return '[]';
	}
}

function listUsers($pdo)
{

	$stmt = $pdo->prepare("SELECT 
	user_data_id,
    first_name,
	last_name,
	email,
	name as user_type
   
    FROM user_data
    inner join user_role
    ON user_data.user_role_id=user_role.user_role_id");

	$stmt->execute();

	if ($stmt->rowCount() > 0) {

		$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		$z = json_encode($result);
		echo $z;
	} else {
		echo '[]';
	}
}


function insertUser($pdo)
{

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user_role_id = $_POST['user_type'];

	//create hashed password

	$options = [
		'cost' => 11
	];

	$hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);


	if ($_POST['actiontype'] == 'create') {
		$sql = 'INSERT INTO user_data (first_name,last_name,email,password,user_role_id) VALUES (:first_name,:last_name,:email,:password,:user_role_id)';
	} else if ($_POST['actiontype'] == 'update') {

		$sql = 'UPDATE user_data set first_name=:first_name,last_name=:last_name,email=:email,password=:password,user_role_id=:user_role_id
		where user_data_id =1';
		//.$_SESSION['edit']['user_data_id'];

	}

	$stmt = $pdo->prepare($sql);

	$stmt->execute([
		':first_name' => $first_name,
		':last_name' => $last_name,
		':email' => $email,
		':password' => $hashed_password,
		':user_role_id' => $user_role_id
	]);

	$_SESSION['import_success'] = 1;

	header("Location: users-dashboard.php");
}


function populateUserFields($pdo)
{

	$user_data_id = $_GET['userId'];

	$stmt = $pdo->prepare("SELECT 
	user_data_id,
    first_name,
	last_name,
	email,
	user_role_id
    FROM user_data
    where user_data_id=:user_data_id");

	$stmt->execute(['user_data_id' => $user_data_id]);

	if ($stmt->rowCount() > 0) {

		$user = $stmt->fetch();
		$_SESSION['edit']['user_data_id'] = $user['user_data_id'];
		$_SESSION['edit']['firstname'] = $user['first_name'];
		$_SESSION['edit']['lastname'] = $user['last_name'];
		$_SESSION['edit']['email'] = $user['email'];
		$_SESSION['edit']['user_role_id'] = $user['user_role_id'];
		// $z = json_encode($result);
		header("Location: user-form.php");

		//return $z;
	} else {
		return '[]';
	}
}
