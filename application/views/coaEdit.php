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
      <form method="post" action="<?php echo site_url('COAController/update')?>/<?php echo $row->accountNumber; ?>">
          <div class="form-group">
            <div class="form-group">
              <label for="accountName">Account Name</label>
              <input type="text" class="form-control" name="accountName"  value="<?php echo $row->accountName; ?>" required placeholder="Enter Account name">
            </div>
            <div class="form-group">
              <label for="accountNumber">Account Number</label>
              <input type="number" class="form-control"  name="accountNumber" value="<?php echo $row->accountNumber; ?>" required placeholder="Enter Account Number">
            </div>
            <div class="form-group">
              <label for="accountDescription">Account Description</label>
              <input type="text" class="form-control" name="accountDescription" value="<?php echo $row->accountDescription; ?>" required placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label for="normalSide">Select Normal Side</label>
                <select class="form-control" name="normalSide" value="<?php echo $row->normalSide; ?>" required>
                  <option>Left</option>
                  <option>Right</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="accountCategory">Select Category</label>
                  <select class="form-control" name="accountCategory" value="<?php echo $row->accountCategory; ?>" required>
                    <option>Assets</option>
                    <option>Liability</option>
                    <option>Equity</option>
                    <option>Expenses</option>
                    <option>Revenue</option>
                  </select>
                </div>
            <div class="form-group">
              <label for="accountSubcategory">Subcategory</label>
              <input type="text" class="form-control" name="accountSubcategory" value="<?php echo $row->accountSubcategory; ?>" required placeholder="Enter Subcategory">
            </div>
            <div class="form-group">
              <label for="initialBalance">Initial Balance</label>
              <input type="number" class="form-control" name="initialBalance" value="<?php echo $row->initialBalance; ?>" required placeholder="Enter Initial Balance - Defaults to 0.00">
            </div>
            <div class="form-group">
              <label for="debit">Debit</label>
              <input type="number" class="form-control" name="debit" value="<?php echo $row->debit; ?>" required placeholder="Enter Debit">
            </div>
            <div class="form-group">
              <label for="credit">Credit</label>
              <input type="number" class="form-control" name="credit" value="<?php echo $row->credit; ?>" required placeholder="Enter Credit">
            </div>
            <div class="form-group">
              <label for="addedBy">Added By</label>
              <input type="text" class="form-control" name="addedBy" value="<?php echo $row->addedBy; ?>" required placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label for="accountOrder">Order</label>
              <input type="number" class="form-control" name="accountOrder" value="<?php echo $row->accountOrder; ?>" required placeholder="Enter Order">
            </div>
            <div class="form-group">
                <label for="statement">Select Statement</label>
                <select class="form-control" name="statement" value="<?php echo $row->statement; ?>" required>
                  <option>Balance Statement</option>
                  <option>Income Statement</option>
                  <option>R/E Statement</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="comment">Comments</label>
                <input type="text" class="form-control" name="comment" value="<?php echo $row->comment; ?>" placeholder="Enter Comments">
              </div>
          <button type="submit" class="btn btn-primary" value="save">Submit</button>
        </form>
    </div>

</body>

</html>
