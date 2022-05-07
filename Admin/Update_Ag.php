<?php    
             include('Connection_Admin.php'); 
                
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $Address=$_POST['add'];
                    $description=$_POST['desc'];
                    $image =$_POST['image'];
                    $tele=$_POST['Tele'];
                    $Aid=$_POST['Aid'];

                    if(isset($_POST['Aid']) && isset($_POST['Aid']) !=  '')
                    {
     
                    if($_POST['image'])
                    {
                      
                        
                    $sql="Update agents set Name ='".$name."', email ='".$email."',address ='".$Address."', description='".$description."' , image ='".$image."', Tele='".$tele."' where  Aid=$Aid";
                    header('Location:gestion_Agent.php');
                    }
                    else
                    {
                        // $image =$_POST['old_img'];
                       
                    $sql="Update agents set Name ='".$name."', email ='".$email."',address ='".$Address."', description='".$description."', Tele='".$tele."' where  Aid=$Aid";
                    header('Location:gestion_Agent.php');
                    }
                    
                    
                    $result=$connect->query($sql);
                   
                }
                   ?>
                





