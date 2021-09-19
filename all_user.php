<?php 
       include_once('./header.php');
       include_once('./function.php');
        $res = getAllUsers();
      ?>

        <div class="main">
            <div class="container">
                <div class="content col-lg-12 mx-auto">
                    <h3 class="text-center text-success">All Post</h3>
                    <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <?php while ($data = mysqli_fetch_assoc($res)){?>
                        <tr>
                        <td><?php echo $data["name"];?></td>
                        <td><?php echo $data["email"];?></td>
                        <td><?php echo $data["password"];?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="single_view.php?id=<?php echo base64_encode($data["id"]);?>">Details</a>
                            <a class="btn btn-sm btn-warning" href="edit_user.php?id=<?php echo base64_encode($data["id"]);?>">edit</a>
                            <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $data["id"];?>">Delete</a>
                        </td>
                    </tr> 
                    <?php }?> 
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