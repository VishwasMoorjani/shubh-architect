<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>

<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Service Information</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form" method="post" action="editjob" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <input type="hidden" name="id" value="<?php echo $job['id']; ?>">
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="name">Name *</label>
                                    <input class="form-control" type="text" name="name" id="name" value="<?= $job['name'] ?>" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="position">Position *</label>
                                    <input class="form-control" type="text" name="position" id="position" value="<?= $job['position'] ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="location">Location *</label>
                                    <input class="form-control" type="text" name="location" id="location" value="<?= $job['location'] ?>" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="employment">Employment *</label>
                                    <input class="form-control" type="text" name="employment" id="employment" value="<?= $job['employment'] ?>" required>
                                </div>
                            </div>
                        </div>
                        
                        
                        <button type="submit" name="submit" class="btn btn-primary w-20 mt-5">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php $this->load->view('admin/footer'); ?>