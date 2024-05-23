<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>

<div class="container-fluid py-4">
  <div class="row">
    
    <div class="col-sm-4 mt-4">
      <div class="card">
        <div class="card-body p-3 position-relative">
          <div class="row">
            <div class="col-7 text-start">
              <p class="text-sm mb-1 text-capitalize font-weight-bold">Today's Appointment</p>
              <h5 class="font-weight-bolder mb-0">
              <?php echo($todayappointment); ?>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="row mt-4">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Top Projects</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($projects as $project){ ?>
                
                <tr>
                  <td>
                    <div class="d-flex px-3 py-1">
                      <div>
                        <img src="<?php echo base_url('assets/front/images/properties/'. $project['featured_image']) ?>" class="avatar me-3" alt="image">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm"><?php echo $project['name']; ?></h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-end">
                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                      <p class="text-sm font-weight-normal mb-0"><?php echo $project['category']; ?></p>
                    </div>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>
</main>
<?php $this->load->view('admin/footer'); ?>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>