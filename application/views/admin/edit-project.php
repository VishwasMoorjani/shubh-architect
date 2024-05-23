<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>

<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Project Information</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form" method="post" action="editproject" enctype="multipart/form-data">

                <div class="pt-3 border-radius-xl bg-white" data-animation="FadeIn">

                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <input type="hidden" name="date_added" value="<?php echo date("Y-m-d"); ?>">
                                <input type="hidden" name="link" value="<?php echo $project['link']; ?>">
                                <div class="input-group input-group-static m-2">
                                    <label for="name">Project Title *</label>
                                    <input class="form-control" type="text" name="name" id="name" value="<?= $project['name']; ?>" required>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="area">Year</label>
                                    <input class="form-control" type="text" name="area" id="area" value="<?= $project['area']; ?>" >
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="video">Video (Eg. https://www.youtube.com/watch?v=<b>r0hs0DMUlEU</b>)</label>
                                    <input class="form-control" type="text" name="video" id="video" value="<?= $project['video']; ?>" >
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="input-group input-group-static m-2">
                                    <label for="category">Status</label>
                                    <select class="form-control" name="category" required>
                                        <option value="<?=$project['category']; ?>" disabled selected><?=strtoupper($project['category']); ?></option>
                                        <option value="upcoming">Upcoming</option>
                                        <option value="ongoing">Ongoing</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="address">Address</label>
                                    <input class="form-control" type="text" name="address" id="address" value="<?=$project['address']; ?> ">
                                </div>
                                <div class="input-group input-group-static m-2">
                                    <label for="Location">Location (Eg. 26.822966,75.452848)</label>
                                    <input class="form-control" type="text" name="location" id="Location" value="<?=$project['location']; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="input-group input-group-static">
                            <label for="choices-tags">Features</label>
                            <?php $features = str_replace(array( '[', ']' ), '', str_replace('"', "", $project['features'])); ?>
                            <input class="form-control" name="features[]" value="<?=$features;?>" id="choices-tags" data-color="dark" style="width:100%" type="text" />
                            </div> -->
                            <div class="col-12 col-sm-12">
                                <label for="description">Description</label>
                                <div class="input-group input-group-static m-2">
                                    <textarea class="form-control" name="description"><?=strip_tags($project['description']); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="image">Thumbnail Image</label>
                                <div class="input-group input-group-static m-2">
                                    <?php if ($project['featured_image'] != "") {
                                        $img = $project['featured_image'];
                                    ?>
                                        <div class="input-group input-group-static m-2">
                                            <img src="<?php echo base_url('/assets/front/images/properties/' . $img); ?>" height="50px" srcset="">
                                        </div>
                                        <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg()">Remove Image</div>
                                    <?php } else { ?>
                                        <div class="input-group input-group-static m-2">
                                            <input type="file" name="featured_image" accept="image/*" required />
                                            <p>(Image Size Should be 958*1280)</p>
                                            
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
    CKEDITOR.replace('description');
</script>

<script>
    function removeimg() {
        <?php $link = $project['link'];  ?>
        $.ajax({
            url: "removeimg/<?= $link ?>", //the page containing php script
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