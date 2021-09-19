<?php 
       include_once('./header.php');
       include_once('./function.php');
        $id = base64_decode($_GET['id']);
        
        // echo $id;exit;
        if($id){
            $userInfo = editUser($id);

            if($userInfo){
                // print_r($postInfo);exit;
                extract($userInfo);
            }
        }
      ?>
          <?php 
      if(isset($_POST['update'])){
          //****data send to function with peramitter***\\
          //userSend($_POST);
          echo "vdsf";
      }
      
       
      ?>


        <div class="main">
            <div class="container">
                <div class="content col-lg-5 mx-auto">
                    <h3 class="text-center text-success">Edit User</h3>
                    <form  action="user_update.php?id=<?php echo $id;?> " method="post">
                    <table class="table table-success table-striped">
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td><input name="name" class="form-control" value="<?php echo $name;?>" type="text" ></td>
                            </tr>   
                            <tr>
                                <td>Full Description</td>
                                <td>:</td>
                                <td><input name="email" class="form-control" value="<?php echo $email;?>" type="text"></td>
                            </tr> 
                            <tr>
                                <td>Short Description</td>
                                <td>:</td>
                                <td><input name="password" class="form-control" value="<?php echo $password;?>" type="text" ></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input class="btn btn-info" type="submit" name='update' value="Update"/>
                                </td>
                                
                            </tr>    
                        </table>
                    </form>   
                </div>
                <div class="sidebar">
                  <?php 
                   require_once("sidebar.php")
                  ?>
                </div>
            </div>
        </div>
        <?php
            include_once('./footer.php')
        ?>
    </body>
</html>