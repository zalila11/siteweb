<?php



require_once("../../config.php");
require_once "../entities/user.php";

class UserController 
{
	public function login($post)
	{
		print_r($post);
		$user = User::findUserByLogin($post['login'], $post['password']);

		if(isset($user) && !empty($user)){

			$_SESSION['login'] = $user->getLogin();
			$_SESSION['password'] = $user->getPassword();
			
		    header('Location:index.php');
		}else{
			return "not found";
		}
	}
	
	public function ajouterclient($user)
	{
        $Sql = "INSERT INTO `user` (`login`, `password`) VALUES (:login, :password);";
        $db = DB::getConnexion();
        $req = $db->prepare($Sql);
        $req->bindValue(':login', $user->getLogin());
        $req->bindValue(':password', $user->getPassword());
        

        $req->execute();
	}

  public function getList()
  {
  	$Sql = "SELECT * FROM user ORDER BY login";
    $db = config::getConnexion();
    $result = $db->query($Sql);
        //var_dump($result);die;

    return $result;
  }

	public function supprimerclient($login)
	{
		$Sql="DELETE FROM user where login= :login";
		$db = config::getConnexion();
        $req=$db->prepare($Sql);
		$req->bindValue(':login',$login);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	public function modifierclient($user,$login)
	{
		$Sql = "UPDATE user SET  password = :password WHERE login = :login";
		$db = config::getConnexion();
        $req = $db->prepare($Sql);
        $req->bindValue(':login', $user->getLogin());
        $req->bindValue(':password', $user->getPassword());
        

        $req->execute();
	}

	public function recuperer($login)
	{
		$sql="SELECT * from user where login = $login";
		$db = config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
	}

}
?>