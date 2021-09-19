<?php 
       include_once('./header.php');
       include_once('./function.php');
       $id = base64_decode($_GET['id']);
       // echo $id;exit;
       if($id){
           $user = getSingleUser($id);
        //    print_r($user);exit;
           if($user){
               // print_r($postInfo);exit;
               extract($user);
           }
       }
      ?>

        <div class="main">
            <div class="container">
                <div class="content col-lg-12 mx-auto">
                    <h3 class="text-center text-success">Single View</h3>
                    <table class="table table-bordered">
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>password</th>
                    </tr>
                        <tr>
                        <td><?php echo $name;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $password;?>></td>
              
                    </tr> 
                    </table>
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