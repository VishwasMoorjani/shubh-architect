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
            <form class="multisteps-form__form" method="post" action="addservice" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">

                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="name">Name *</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                                <!-- <div class="input-group input-group-static m-2">
                                    <label for="category">Course Category</label>
                                    <select class="form-control" name="category" required>
                                        <option value="main">Main Course</option>
                                        <option value="other">Other Course</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <label for="content">Content</label>
                                <div class="input-group input-group-static m-2">
                                    <textarea class="form-control" name="content"></textarea>
                                </div>
                            </div>
                            <div class=" input-group-static form-check form-switch">
                                        <input class="form-control form-check-input" type="checkbox" id="homepage" name="homepage">
                                        <label class="form-check-label" for="homepage">Home Page</label>
                                    </div>
                            <div class="input-group input-group-static m-2">
                                <label for="image">Image</label>
                                <div class="input-group input-group-static m-2">
                                    <input type="file" name="image" accept="image/*" required />
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
    CKEDITOR.replace('content');
</script>
<?php $this->load->view('admin/footer'); ?>