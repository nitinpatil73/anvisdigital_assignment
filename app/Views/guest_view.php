<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Guest List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
   <div class="d-flex justify-content-end">
      <a href="<?php echo site_url('/guest-form') ?>" class="btn btn-success mb-2">Add Guest</a>
	</div>
  <div class="mt-3">
     <table class="table table-bordered" id="guest-list">
       <thead>
          <tr>
             <th>Guest Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Mobile No</th>
             <th>Adults</th>
             <th>Children</th>
             <th>IN</th>
             <th>OUT</th>
             <th>Room Category</th>
          </tr>
       </thead>
       <tbody>
          <?php if($guest_data): ?>
          <?php foreach($guest_data as $val): ?>
          <tr>
             <td><?= $val['id'] ?></td>
             <td><?= $val['name'] ?></td>
             <td><?= $val['email'] ?></td>
             <td><?= $val['mobile_no'] ?></td>
             <td><?= $val['how_many_adults'] ?></td>
             <td><?= $val['how_many_children'] ?></td>
             <td><?= ($val['in'] && $val['in'] != '0000-00-00 00:00:00') ? date("d-m-Y",strtotime($val['in'])) : '' ?></td>
             <td><?= ($val['out'] && $val['out'] != '0000-00-00 00:00:00') ? date("d-m-Y",strtotime($val['out'])) : '' ?></td>
             <td><?= ucfirst($val['room_category']) ?></td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<script>
   $(document).ready(function() {
      $('#guest-list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
      } );
   } );
</script>
</body>
</html>