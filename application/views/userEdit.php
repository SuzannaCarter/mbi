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
  </body>

    <title>Edit</title>
  </head>
  <body>
    <div class="container">
      <form method="post" action="<?php echo site_url('UserController/update')?>/<?php echo $row->ID; ?>">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" placeholder="Enter First Name">
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control"  name="lastName" value="<?php echo $row->lastName; ?>" placeholder="Enter Last Name">
          </div>
          <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" name="birthday" value="<?php echo $row->birthday; ?>" placeholder="Enter Birthday">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="password">Password *Don't touch to remain same*</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row->password; ?>" placeholder="Enter New Password *Optional*">
          </div>
          <div class="form-group">
              <label for="joblevel">Select Job Level</label>
              <select class="form-control" name="jobLevel" value="<?php echo $row->jobLevel; ?>" >
                <option>Admin</option>
                <option>Manager</option>
                <option>Accountant</option>
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



</html>
