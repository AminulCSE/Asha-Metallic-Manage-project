<?php include 'inc/header.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

                <form class="user" action="" method="GET" enctype="multipart/form-data">
                    <table class="table table-striped" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>SL NO.</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Designation</th>
                          <th>Joining Date</th>
                          <th>Present/ Absent</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
  $query = "SELECT * FROM tbl_employee";
  $result = $db->select($query);
  if ($result) {
    $i=0;
    while ($value = $result->fetch_assoc()) {
    $i++;
?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><img src="<?php echo $value['image']; ?>" height="50px;" width="50px;"></td>
                          <td name="designation"><?php echo $value['designation']; ?></td>
                          <td><?php echo $value['joining_date']; ?></td>
                          <td style="color: green;font-weight:bold;"  name="name"><?php echo $value['name']; ?></td>
                          <td>  
                            <label>
                              Present&nbsp;<input type="checkbox" value="1" name="attendence_status[]">
                              <label class="checkbox-inline">||
                              Absent&nbsp;<input type="checkbox" value="0" name="attendence_status[]">
                              </label>
                            </label>
                          </td>
                        </td>
                        </tr>
<?php } } ?>
                  </tbody>
                </table>
<a href=""><?php echo $value['name']; ?>sss</a>
                      <div class="d-flex p-3 bg-secondary text-white">
                        <button style="margin:auto;" type="submit" name="submit" class="btn btn-warning">Submit</button>
                      </div>
                </form>

<?php
  // if($_SERVER["REQUEST_METHOD"] == "GET") {
  //   $name               = $_POST['name'];
  //   $designation        = $_POST['designation'];
  //   $attendence_status  = $_POST['attendence_status'];

  //   if (empty($attendence_status)) {
  //     echo "<span style='color:red;font-size:18px;'>Field must not be empty !!</span>";
  //   }else{
  //     $query = "INSERT INTO tbl_attendence(name,designation,attendence_status)
  //       VALUES('$name','$designation','$attendence_status')";
  //       $inserted_rows = $db->insert($query);
  //       if ($inserted_rows) {
  //        echo "<span class='success'>Inserted Successfully.
  //        </span>";
  //       }else {
  //        echo "<span class='error'>Not Inserted !</span>";
  //     }
  //   }

  // }
?>










              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php include 'inc/footer.php'; ?>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>