<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Slider Information</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form" method="post" action="addslider" enctype="multipart/form-data">
                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <input type="hidden" name="link" value="slider">
                    <div class="multisteps-form__content">
                        <div class="row mt-3">


                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="title">Slider Title 1*</label>
                                    <input class="form-control" type="text" name="title1" id="title" required>
                                </div>
                            </div>
                            <!--<div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="title">Slider Title 2*</label>
                                    <input class="form-control" type="text" name="title2" id="title" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="input-group input-group-static m-2">
                                    <label for="paragraph">Slider Paragraph *</label>
                                    <input class="form-control" type="text" name="paragraph" id="paragraph" required>
                                </div>
                            </div> -->
                            <!--<div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="title">Slider Bottom Watermark *</label>
                                    <input class="form-control" type="text" name="title" id="title" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="url">Slider URL *</label>
                                    <input class="form-control" type="text" name="url" id="url" required>
                                </div>
                            </div> -->
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="image">Image</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="image" accept="image/*" required />
                                        <p>(Size should be 1920*1080)</p>
                                    </div>
                                    <?php
                                    if (!empty($_SESSION['success_msg'])) {
                                        echo '<p class="status-msg success">' . $success_msg . '</p>';
                                    } elseif (!empty($_SESSION['error_msg'])) {
                                        echo '<p class="status-msg error">' . $_SESSION['error_msg'] . '</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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

<?php $this->load->view('admin/footer'); ?>