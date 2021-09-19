<?php 
       include_once('./header.php');
       include_once('./function.php');

      ?>

      <?php 
      if(isset($_POST['submit'])){
          //****data send to function with peramitter***\\
          userSend($_POST);
      }
      
       
      ?>
        <div class="main">
            <div class="container">
                <div class="content col-lg-5 mx-auto">
                    <h3 class="text-center text-success">Registration Here</h3>
                    <form  action="post.php" method="post">
                    <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td><input class="form-control" type="text" name="name"></td>
                            </tr>   
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input class="form-control" type="email" name="email"></td>
                            </tr> 
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input class="form-control" type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input class="btn btn-info" type="submit" name='submit' value="Save"/>
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