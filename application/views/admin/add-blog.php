<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Blog Information</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form" method="post" action="addblog" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">

                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <input type="hidden" name="date_added" value="<?php echo date("Y-m-d"); ?>">
                                <div class="input-group input-group-static m-2">
                                    <label for="post_title">Blog Title *</label>
                                    <input class="form-control" type="text" name="post_title" id="post_title" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="blogger_name">Blogger Name</label>
                                    <input class="form-control" type="text" name="blogger_name" id="blogger_name">
                                </div>
                                <!-- <div class="input-group input-group-static m-2">
                                    <label for="blog_likes">Blog Likes *</label>
                                    <input class="form-control" type="number" name="blog_likes" id="blog_likes" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="blog_comments">Blog Comments *</label>
                                    <input class="form-control" type="number" name="blog_comments" id="blog_comments" required>
                                </div> -->
                                <!-- <div class="input-group input-group-static m-2">
                                    <label for="blogger_image">Blogger Image</label>
                                    <div class="input-group input-group-static m-2">
                                        <input type="file" name="blogger_image" accept="image/*" required />
                                        <p>(Image Size Should be 640*640)</p>
                                    </div>
                                    <?php
                                    if (!empty($_SESSION['success_msg'])) {
                                        echo '<p class="status-msg success">' . $success_msg . '</p>';
                                    } elseif (!empty($_SESSION['error_msg'])) {
                                        echo '<p class="status-msg error">' . $_SESSION['error_msg'] . '</p>';
                                    }
                                    ?>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <label for="post">Description</label>
                                <div class="input-group input-group-static m-2">
                                    <textarea class="form-control" name="post"></textarea>
                                </div>
                            </div>
                            <div class="input-group input-group-static m-2">
                                <label for="image">Blog Image</label>
                                <div class="input-group input-group-static m-2">
                                    <input type="file" name="image" accept="image/*" required />
                                    <p>(Image Size Should be 800*400)</p>
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
    CKEDITOR.replace('post');
</script>
<?php $this->load->view('admin/footer'); ?>