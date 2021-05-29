<?php include('head.php'); ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('nav.php'); ?>
       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">      
        <!-- insert content here-->
       <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Received Tickets</h4>
                  <p class="card-description">
                    Counting all the tickets received.
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Caller Name</th>
                          <th>Ticket No.</th>
                          <th>Created</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td><a href="#">53275531</a></td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-success">Resolved</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td><a href="#">53275532</a></td>
                          <td>15 May 2017</td>
                          <td><label class="badge badge-success">Resolved</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td><a href="#">53275533</a></td>
                          <td>14 May 2017</td>
                          <td><label class="badge badge-success">Resolved</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td><a href="#">53275534</a></td>
                          <td>16 May 2017</td>
                          <td><label class="badge badge-success">Resolved/label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td><a href="#">53275535</a></td>
                          <td>20 May 2017</td>
                          <td><label class="badge badge-warning">Open</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>  
        </div>
  </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php include('foot.php'); ?>
