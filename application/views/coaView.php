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

    <title>MBI - Charts of Accounts</title>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
    </nav>

    <br>

<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Accounts
  </button>

  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo site_url('COAController/create')?>">
            <div class="form-group">
              <label for="accountName">Account Name</label>
              <input type="text" class="form-control" name="accountName" required placeholder="Enter Account name">
            </div>
            <div class="form-group">
              <label for="accountNumber">Account Number</label>
              <input type="number" class="form-control"  name="accountNumber" minlength="5" maxlength="7" required placeholder="Enter Account Number">
            </div>
            <div class="form-group">
              <label for="accountDescription">Account Description</label>
              <input type="text" class="form-control" name="accountDescription" required placeholder="Enter Description">
            </div>
            <div class="form-group">
              <label for="normalSide">Select Normal Side</label>
              <select class="form-control" name="normalSide" required>
                <option>Left</option>
                <option>Right</option>
              </select>
            </div>
            <div class="form-group">
              <label for="accountCategory">Select Category</label>
              <select class="form-control" name="accountCategory" required>
                <option>Assets</option>
                <option>Liability</option>
                <option>Equity</option>
                <option>Expenses</option>
                <option>Revenue</option>
              </select>
            </div>
            <div class="form-group">
              <label for="accountSubcategory">Subcategory</label>
              <input type="text" class="form-control" name="accountSubcategory" required placeholder="Enter Subcategory">
            </div>
            <div class="form-group">
              <label for="initialBalance">Initial Balance</label>
              <input type="number" class="form-control" step="0.01" name="initialBalance" required placeholder="Enter Initial Balance - Defaults to 0.00">
            </div>
            <div class="form-group">
              <label for="debit">Debit</label>
              <input type="number" step="0.01" class="form-control" name="debit" required placeholder="Enter Debit">
            </div>
            <div class="form-group">
              <label for="credit">Credit</label>
              <input type="number" class="form-control" step="0.01" name="credit" required placeholder="Enter Credit">
            </div>
            <div class="form-group">
              <label for="balance">Balance</label>
              <input type="number" class="form-control" step="0.01" name="balance" required placeholder="Enter Balance">
            </div>
            <div class="form-group">
              <label for="addedBy">Added By</label>
              <input type="text" class="form-control" name="addedBy" required placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label for="accountOrder">Order</label>
              <input type="number" class="form-control" name="accountOrder" required placeholder="Enter Order">
            </div>
            <div class="form-group">
              <label for="statement">Select Statement</label>
              <select class="form-control" name="statement" required>
                <option>Balance Statement</option>
                <option>Income Statement</option>
                <option>R/E Statement</option>
              </select>
            </div>
            <div class="form-group">
              <label for="comment">Comments</label>
              <input type="text" class="form-control" name="comment" placeholder="Enter Comments">
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
        <th scope="col">Account Name</th>
        <th scope="col">Account Number</th>
        <th scope="col">Account Description</th>
        <th scope="col">Normal Side</th>
        <th scope="col">Account Category</th>
        <th scope="col">Account Subcategory</th>
        <th scope="col">Initial Balance</th>
        <th scope="col">Debit</th>
        <th scope="col">Credit</th>
        <th scope="col">Balance</th>
        <th scope="col">Date Added</th>
        <th scope="col">Added By</th>
        <th scope="col">Account Order</th>
        <th scope="col">Statement</th>
        <th scope="col">Comments</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $row) {?>
      <tr>
      <th scope="row"><?php echo $row->accountName;  ?></th>
      <td><?php echo $row->accountNumber; ?></td>
      <td><?php echo $row->accountDescription; ?></td>
      <td><?php echo $row->normalSide; ?></td>
      <td><?php echo $row->accountCategory; ?></td>
      <td><?php echo $row->accountSubcategory; ?></td>
      <td class="text-right">$<?php echo $row->initialBalance; ?>.00</td>
      <td class="text-right">$<?php echo $row->debit; ?>.00</td>
      <td class="text-right">$<?php echo $row->credit; ?>.00</td>
      <td class="text-right">$<?php echo $row->balance; ?>.00</td>
      <td><?php echo $row->dateTimeAdded; ?></td>
      <td><?php echo $row->addedBy; ?></td>
      <td><?php echo $row->accountOrder; ?></td>
      <td><?php echo $row->statement; ?></td>
      <td><?php echo $row->comment; ?></td>
      <td><a href="<?php echo site_url('COAController/edit');?>/<?php echo $row->accountNumber;?>"> Edit</a> |
      <a href="<?php echo site_url('COAController/delete');?>/<?php echo $row->accountNumber;?>">Delete</a></td>
    </tr>
    <tr>
<?php }?>
  </tbody>
  </table>
  </body>
</html>
