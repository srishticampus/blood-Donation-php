<?php
include 'header.php';
?>
<style type="text/css">
           
  
 .dropbtn {
  background-color: #464dee;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:#464dee;
}
</style>
        <div id="main">
                 <div class="dropdown">
  <button class="dropbtn">ADMIN</button>
  <div class="dropdown-content">
  <a href="../Tutor/tutor-login.php">TUTOR</a>
  <a href="../index.php">STUDENT</a>
  
  </div>
</div>
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View All Tutor</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                   <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                           
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Image</th>
                           <th>Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                                                             <?php $i=1;
    $sql="select * from `tutor_registration` where status='Approved'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){

      
         ?>
                                                    <tr>
                                                    <td><?php echo $i;?></td>
                                                       
                                                        <td><?php echo $row['firstname'].' '.$row['lastname']?></td>
                                                        <td style="width: 10px;"><?php echo $row['email']?></td>
                                                        <td><?php echo $row['phone']?></td>
                                                        <td><?php echo $row['address'].'<br> '.$row['district']?></td>
                                                        
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['date']?></td>
                                                        <td><img src="../Tutor/<?php echo $row['image']?>" width="20" height="30"></td>
                                                       
                                                       <td>
<a href="delete_tutor.php?id=<?php echo $row['tutor_id']; ?>"> <i class="icon dripicons-cross" style="font-size:20px;color:red"></i></a>

                                                          </a></td>
                                                    </tr>
      <?php $i++;} ?>
                        </tbody>

                        
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                    
                    </div>
                    <div class="float-end">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>