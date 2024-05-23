<?php include("head.php"); ?>
<?php include("header.php"); ?>

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- Card header -->
        <div class="card-header pb-0">
          <div class="d-lg-flex">
            <div>
              <h5 class="mb-0">All appointments</h5>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-0">
          <div class="table-responsive">
            <table class="table table-flush" id="appointments-list">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone No</th>
                  <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th> -->
                  <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vehicle Model</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Appointment Date</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time Frame</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th> -->
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($appointments as $appointment) { ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $appointment['name']; ?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['email']; ?></p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['phoneno']; ?></p>
                    </td>
                    <!-- <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['message']; ?></p>
                    </td> -->
                    <!-- <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['vehical-model']; ?></p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['appointment-date']; ?></p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?= $appointment['time-frame']; ?></p>
                    </td> -->

                    <!--<td class="align-middle text-center" >-->
                    <!--  <span class="text-secondary text-xs font-weight-bold"></span>-->
                    <!--</td>-->
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= date("F j, Y", strtotime($appointment['date'])); ?></span>
                    </td>
                    <td><button class="btn btn-dark" onclick="showmessage('<?= $appointment['message']; ?>')">View Message</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="showmessage"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php include("footer.php"); ?>

<!--   Core JS Files   -->
<script>
  if (document.getElementById('appointments-list')) {
    const dataTableSearch = new simpleDatatables.DataTable("#appointments-list", {
      searchable: true,
      fixedHeight: false,
      perPage: 20,
    });

    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;

        var data = {
          type: type,
          filename: "material-" + type,
        };

        if (type === "csv") {
          data.columnDelimiter = ",";
        }

        dataTableSearch.export(data);
      });
    });
  };
  
 function showmessage(message){
     document.getElementById('showmessage').innerHTML = message;
     var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
     myModal.show()
 }
</script>