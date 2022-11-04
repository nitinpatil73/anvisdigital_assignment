<!DOCTYPE html>
<html>
<head>
  <title>Guest Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
        <div class="row">
          <div class="col-sm-6">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter a name" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter a email" required>
            </div>
          </div>

           <div class="col-sm-6">
            <div class="form-group">
              <label>Mobile No</label>
              <input type="text" name="mobile_no" class="form-control" placeholder="Enter a mobile no" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>How many adults</label>
              <input type="number" name="how_many_adults" class="form-control" placeholder="Enter a how many adults" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>How many children</label>
              <input type="number" name="how_many_children" class="form-control" placeholder="Enter a how many children" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>IN</label>
              <input type="date" name="in" class="form-control" placeholder="Enter a in" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>OUT</label>
              <input type="date" name="out" class="form-control" placeholder="Enter a out" required>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Room Category</label>
              <select name="room_category" id="room_category" class="form-control" required>
                <option value="">Select a room category</option>
                <option value="single room">Single Room</option>
                <option value="double room">Double Room</option>
                <option value="triple room">Triple Room</option>
                <option value="studio room">Studio Room</option>
                <option value="parlour room">Parlour Room</option>
              </select>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <a href="<?php echo site_url('/guest-list') ?>" class="btn btn-primary btn-block">Back</a>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block">Submit</button>
            </div>
          </div>
        </div>
    </form>
  </div>
</body>
</html>