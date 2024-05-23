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
            <form class="multisteps-form__form" method="post" action="editservice" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                    <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-static m-2">
                                    <label for="name">Name *</label>
                                    <input class="form-control" type="text" name="name" id="name" value="<?= $service['name'] ?>" required>
                                </div>
                                <!-- <div class="input-group input-group-static m-2">
                                    <label for="category">Status</label>
                                    <select class="form-control" name="category" required>
                                        <option value="main" <?= ($service['category'] == 'main') ? 'selected' : '' ?>>Main Courses</option>
                                        <option value="other" <?= ($service['category'] == 'other') ? 'selected' : '' ?>>Other Courses</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <label for="content">Content</label>
                                <div class="input-group input-group-static m-2">
                                    <textarea class="form-control" name="content"><?= $service['content'] ?></textarea>
                                </div>
                            </div>
                            <div class=" input-group-static form-check form-switch">
                                <input class="form-control form-check-input" type="checkbox" id="homepage" name="homepage" <?= $service['homepage'] == 'on' ? 'checked' : '' ?>>
                                <label class="form-check-label" for="homepage">Home Page</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="image">Image</label>
                                <div class="input-group input-group-static m-2">
                                    <?php if ($service['image'] != "") {
                                        $img = $service['image'];
                                    ?>
                                        <div class="input-group input-group-static m-2">
                                            <img src="<?php echo base_url('/assets/front/images/' . $img); ?>" height="50px" srcset="">
                                        </div>
                                        <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg()">Remove Image</div>
                                    <?php } else { ?>
                                        <div class="input-group input-group-static m-2">
                                            <input type="file" name="image" accept="image/*" required />
                                        </div>
                                    <?php } ?>

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
        </form>
    </div>
</div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    CKEDITOR.replace('content');
</script>

<script>
    function removeimg() {
        <?php $link = $service['id'];  ?>
        $.ajax({
            url: "<?= base_url('admin/removeservice/' . $link); ?>", //the page containing php script
            type: "post", //request type,
            success: function(result) {
                if (result == "done") {
                    location.reload();
                }
            }
        });
    }
</script>
<?php $this->load->view('admin/footer'); ?>