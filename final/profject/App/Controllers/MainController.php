<?php

namespace App\Controllers;
use App\Model\User;
use App\Controller;
use App\DBManager;
class MainController extends Controller
{
    public function index()
    {
    	
    	 return 'home';
    }   
    public function home()
    {
        return 'home';
    }
    public function login()
    {
    	return 'login';
    }
    public function login1()
    {
	if($_SERVER['REQUEST_METHOD']=='POST')
    {
        
    		if(isset($_POST['email'])&&!empty($_POST['email']) 
			&& isset($_POST['password']) && !empty($_POST['password'])) 
        {
			
            $user=new User();
			$new=$user->getUser($_POST['email']);
 
			if($new!=null && $new['password']===$_POST['password'])
                {	
				session_start();
				$_SESSION['USER_DATA'] = $new;
                header("Location:?act=home");
                }
                else{
                    header("Location:?act=login");
                }			
		}
		   else{
            header("Location:?act=login");
		}
    }
    }	
    public function reg()
    {  
        return 'reg';
    }
    public function reg1()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['password2'])&&!empty($_POST['password2'])&&isset($_POST['full_name'])&&!empty($_POST['full_name'])) 
            {   
                $user=new User();
                $found =$user->getUser($_POST['email']);
                if($found==null && $_POST['password']===$_POST['password2'])
                    {
                       $use=new User();
                       $use->addUser($_POST['email'], $_POST['password'], $_POST['full_name']);
                       
                    header("Location:?act=login");
                    }
                    else{
                    header("Location:?act=reg");              
                    }
            }
            else{       
                header("Location:?act=reg");
            }  
        }
    }
    public function profile()
    {
        $user=new User();
        $_REQUEST['user']=$user->getData($_SESSION['USER_DATA']['id']);
        return 'profile';
    }
    public function logout()
    {      
    session_start();
    session_destroy();
    header("Location:?act=home");
    }
    public function upload()
    {

        if($_SERVER['REQUEST_METHOD']=='POST')
    {   

        if($_FILES['ava']['size']<5242880 && $_FILES['ava']['type']=='image/jpeg'|| $_FILES['ava']['type']=='image/png')
        {
            $filename = $_FILES['ava']['tmp_name'];
            $sourceFilename=$_FILES['ava']['name'];

        [$width, $height]=getimagesize($filename);
            //var_dump($width);
        $newWidth = $width/2;
        $newHeight = $height/2;
        $smallImage = imagecreatetruecolor($newWidth, $newHeight);
        $sourceImage = imagecreatefromjpeg($filename);
        imagecopyresized($smallImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            imagejpeg($sourceImage, "App/Views/avatar/".$sourceFilename);
            
            imagejpeg($smallImage, "App/Views/avatar/mini_".$sourceFilename);

    $target_dir = "App/Views/avatar/mini_";
    $target_file = $target_dir . basename($sourceFilename);
            $ava=new User();
            $ava->avaUser($_SESSION['USER_DATA']['id'], $target_file);
                    
           
        }
    }
       
    header("Location:?act=profile");
    }
    public function update()
    {
        return 'update';
    }
    public function update1()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['full_name'] )&&isset($_POST['password1'])&&!empty($_POST['password1'])&&isset($_POST['password2'])&&!empty($_POST['password2'])&&isset($_POST['password3'])&&!empty($_POST['password3'])) 
            {   
              $user=new User();
              $found =$user->getUser($_SESSION['USER_DATA']['email']);
                if($found['password']===$_POST['password1'] && $_POST['password2']===$_POST['password3'])
                {
                    $use=new User();
                    $use->updateUser($_SESSION['USER_DATA']['id'],$_POST['full_name'], $_POST['password2']);
                          
                    header('Location:?act=profile'); 
                }
                else{
                    header('Location:?act=update'); 
                }
            }
            else{
                header('Location:?act=update');
            }  
        }
    
    }
    public function delete()
    {
        $use=new User();
        $use->deleteUser($_SESSION['USER_DATA']['id']);    
        session_destroy();
        header('Location:?act=home');
    }
    
    public function tweet()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            if(isset($_POST['tweet'])&&!empty($_POST['tweet']))
            {
               $tweet=new User();
               $tweet->addTweet($_SESSION['USER_DATA']['id'], $_POST['tweet']);
        
             //header("Location:pro.php");
            }
        }
        //return 'tweet';
    }
    public function blog()
    {
        $blog=new User();
        $blog->getTweet();
        //return 'profile';
    }
    public function prof()
    {
    	return 'prof';
    }
    public function contact()
    {
    	return 'contact';
    }
    public function about()
    {
    	return 'about';
    }
   
}
?>