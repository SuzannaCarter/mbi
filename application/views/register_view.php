<div class="container">
    <form method="post" action="<?php echo site_url('admin/AdminUserController/create')?>">
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input type="text" class="form-control" name="firstname" required placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input type="text" class="form-control"  name="lastname" required placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control"  name="username" required placeholder="Enter Username">
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
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" required placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" required placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="level">Select Job Level</label>
                            <select class="form-control" name="level" required>
                              <option>Accountant</option>
                            
                            </select>
                          </div>
                        <button type="submit" class="btn btn-primary" value="save">Submit</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>    
</div>
                    