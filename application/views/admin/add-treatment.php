<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Treatment Information</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form" method="post" action="" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">

                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12">
                                <input type="hidden" name="date_added" value="<?php echo date("Y-m-d"); ?>">
                                <div class="input-group input-group-static m-2">
                                    <label for="name">Treatment Title *</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="top">Top Content</label>
                                    <textarea class="form-control" name="top"></textarea>
                                </div>

                                <div class="input-group input-group-static m-2">
                                    <label for="image">Thumbnail Image</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="image" accept="image/*" required />
                                    </div>
                                    <p>(Image Size Should be 958*1280)</p>
                                    <?php echo form_error('image', '<p class="status-msg error">', '</p>'); ?>

                                </div>

                                <div class="input-group input-group-static m-2">
                                    <label for="videotitle">Video Title</label>
                                    <textarea class="form-control" name="videotitle"></textarea>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="video">Video</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="video" accept="video/*" />
                                    </div>
                                    <p>(Video Size Should be less than 20 mb)</p>
                                    <?php echo form_error('video', '<p class="status-msg error">', '</p>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 mt-3 mt-sm-0">

                                <div class="input-group input-group-static m-2">
                                    <label for="whychoose">Why Choose Content</label>
                                    <textarea class="form-control" name="whychoose"></textarea>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="whychooseimg">Why Choose Image</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="whychooseimg" accept="image/*" />
                                    </div>
                                    <p>(Image Size Should be 958*1280)</p>
                                    <?php echo form_error('image', '<p class="status-msg error">', '</p>'); ?>
                                </div>

                                <div class="input-group input-group-static m-2">
                                    <label for="whychooseytvideo"> Youtube Video (Ex.
                                        https://www.youtube.com/watch?v=<b>JcYGdfGFrDM</b>)</label>
                                    <input class="form-control" type="text" name="whychooseytvideo"
                                        id="whychooseytvideo" />
                                </div>

                                <div class="input-group input-group-static m-2">
                                    <label for="whychoosevideo">Video</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="whychoosevideo" accept="video/*" />
                                    </div>
                                    <p>(Video Size Should be less than 20 mb)</p>
                                    <?php echo form_error('video', '<p class="status-msg error">', '</p>'); ?>
                                </div>


                                <div class="input-group input-group-static m-2">
                                    <label for="bottom">Bottom Content</label>
                                    <textarea class="form-control" name="bottom"></textarea>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($_SESSION['success_msg'])) {
                                echo '<p class="status-msg success">' . $success_msg . '</p>';
                            } elseif (!empty($_SESSION['error_msg'])) {
                                echo '<p class="status-msg error">' . $_SESSION['error_msg'] . '</p>';
                            }
                        ?>
                        <button type="submit" name="submit" class="btn btn-primary w-20 mt-5">Submit</button>
                    </div>
                </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
CKEDITOR.replaceAll(function(textarea, config) {
    config.width = '100%';
});
</script>
<?php $this->load->view('admin/footer'); ?>