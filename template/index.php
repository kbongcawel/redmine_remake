<?php include('head.php'); ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('nav.php'); ?>
       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">      
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between"> 
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-1 item">
                          <i class="mdi mdi-folder-download mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <?php include('../controllers/countdata.php'); ?>
                            <small class="mb-1 text-muted">Received tickets</small>
                            <h4 class="mr-1 mb-0"><a href="http://172.16.109.156/projects/ucc-cmd-tracker/issues?query_id=58" target="_blank"><?php echo countData($ourl); ?></a></h4>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-1 item">
                          <i class="mdi mdi-folder-open mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Open tickets</small>
                            <h4 class="mr-1 mb-0"><a href="http://172.16.109.156/projects/ucc-cmd-tracker/issues?query_id=55" target="_blank"><?php echo countData($nurl); ?></a></h4>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-1 item">
                          <i class="mdi mdi-folder-open mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Open tickets more than 24 hours</small>
                            <h4 class="mr-1 mb-0"><a href="http://172.16.109.156/projects/ucc-cmd-tracker/issues?query_id=54" target="_blank"><?php echo countData($onedayurl); ?></a></h4>
                          </div>
                        </div>                          
                      </div>
                    </div>
                    <br> 
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Closed tickets within 24 hours</p>
                  <!-- content here -->
                  <?php include('amcharts.php'); ?>
                  <div id="chartdiv"></div> 
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Open more than 24 hours</p>
                  <!-- content -->
                  <?php include('amcharts2.php'); ?>
                  <div id="chartdiv2"></div>                 
                </div> 
              </div>
            </div>
          </div> 
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php include('foot.php'); ?>
