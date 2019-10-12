<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>MBI</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
      </nav>
<br>

      <div class="container">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add User
              </button>

              <br>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?php echo site_url('UserController/create')?>">
                          <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstName" required placeholder="Enter First Name">
                          </div>
                          <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control"  name="lastName" required placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" name="birthday" required placeholder="Enter Birthday">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter New Password ">
                          </div>
                          <div class="form-group">
                              <label for="joblevel">Select Job Level</label>
                              <select class="form-control" name="jobLevel" required>
                                <option>Accountant</option>
                                <option>Manager</option>
                                <option>Admin</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="active">Active</label>
                                <select class="form-control" name="active" required>
                                  <option>True</option>
                                  <option>False</option>
                                </select>
                              </div>
                          <button type="submit" class="btn btn-primary" value="save">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

              <br>


                <table class="table">
          <thead class="thead-dark">
            <tr>
              <!-- <th scope="col">#</th> -->
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Birthday</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">Job Level</th>
              <th scope="col">Date Created</th>
              <th scope="col">Active</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($result as $row) {?>
            <tr>
              <td><?php echo $row->firstName;  ?></td>
              <td><?php echo $row->lastName; ?></td>
              <td><?php echo $row->birthday; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->address; ?></td>
              <td><?php echo $row->jobLevel; ?></td>
              <td><?php echo $row->dateCreated; ?></td>
              <td><?php echo $row->active; ?></td>
              <td><a href="<?php echo site_url('UserController/edit');?>/<?php echo $row->ID;?>"> Edit</a> |
                <a href="<?php echo site_url('UserController/delete');?>/<?php echo $row->ID;?>">Delete</a></td>
            </tr>
            <tr>
            <?php }?>
          </tbody>
        </table>
      </div>

  </body>
</html>
