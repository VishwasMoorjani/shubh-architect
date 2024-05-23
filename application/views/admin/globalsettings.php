<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
<div class="container-fluid py-4 mt-5">
    <div class="card">
        <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <center>
                    <h5 class="font-weight-bolder text-white">Global Settings</h5>
                </center>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-sm-4">Name</div>
                <div class="col-4 col-sm-4">Value</div>
                <div class="col-4 col-sm-4">Submit</div>
            </div>
            
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="footercontent" hidden>
                        <h5>Footer Content</h5>
                    </div>
                    <div class="col-4 col-sm-4"><textarea name="value" rows="6" cols="30"><?php echo strip_tags($this->Global['footercontent']); ?></textarea></div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="address" hidden>
                        <h5>Address</h5>
                    </div>
                    <div class="col-4 col-sm-4"><textarea name="value" rows="6" cols="30"><?php echo strip_tags($this->Global['address']); ?></textarea></div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">                    
                        <input type="text" name="name" value="mobile" hidden>
                        <h5>Mobile</h5>
                    </div>

                    <div class="col-4 col-sm-4"><input type="text" name="value" value="<?php echo ($this->Global['mobile']); ?>" id=""></div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">                    
                        <input type="text" name="name" value="mobile2" hidden>
                        <h5>Mobile 2</h5>
                    </div>

                    <div class="col-4 col-sm-4"><input type="text" name="value" value="<?php echo ($this->Global['mobile2']); ?>" id=""></div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>

            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="name" value="email" hidden>
                        <h5>Email</h5>
                    </div>
                    <div class="col-4 col-sm-4"><input type="text" name="value" value="<?php echo ($this->Global['email']); ?>" id=""></div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            
            <h2>Social Links</h2>
            <br>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="facebook" hidden>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['facebook']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
               <div class="row mt-2">
                   <div class="col-4 col-sm-4">
                   <input type="text" name="name" value="twitter" hidden>
                       <i class="fa fa-twitter" aria-hidden="true"></i>
                   </div>
                   <div class="col-4 col-sm-4">
                       <input type="text" name="value" value="<?php echo ($this->Global['twitter']); ?>" id="">
                   </div>
                   <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
               </div>
               <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="instagram" hidden>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['instagram']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="youtubevideo" hidden>
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['youtubevideo']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="whatsapp" hidden>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['whatsapp']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            

            
            <!-- <form class="multisteps-form__form" method="post" action="editisettings" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="name" value="aboutimage4" hidden>
                        <h5>About Fourth Image</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <?php if ($this->Global['aboutimage4'] != "") {
                            $img = $this->Global['aboutimage4'];
                        ?>
                            <div class="input-group input-group-static m-2">
                                <img src="<?= base_url('/assets/front/images/' . $img); ?>" height="50px" srcset="">
                            </div>
                            <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg('aboutimage4')">Remove Image</div>
                        <?php } else { ?>
                            <div class="input-group input-group-static m-2">
                                <input type="file" name="value" accept="image/*" required />
                                <p>(Image Size Must be 100*100)</p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form> -->
            <h2>Counter Numbers</h2>
            <br>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="patient" hidden>
                        <h5>Satisfied Client</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['patient']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="doctor" hidden>
                    <h5>Current Clients</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['doctor']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="accuracy" hidden>
                    <h5>Completed Projects</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['accuracy']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="experience" hidden>
                    <h5>Experience</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['experience']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>

            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_1_title" hidden>
                    <h5>Banner 1 Title</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_1_title']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_1_link" hidden>
                    <h5>Banner 1 Link</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_1_link']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>

            <form class="multisteps-form__form" method="post" action="editisettings" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="name" value="banner1" hidden>
                        <h5>Banner 1</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                    <?php if ($this->Global['banner1'] != "") {
                            $img = $this->Global['banner1'];
                        ?>
                            <div class="input-group input-group-static m-2">
                                <img src="<?= base_url('/assets/front/images/' . $img); ?>" height="50px" srcset="">
                            </div>
                            <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg('banner1')">Remove Image</div>
                        <?php } else { ?>
                            <div class="input-group input-group-static m-2">
                                <input type="file" name="value" accept="image/*" required />
                                <p>(Image Size Must be 100*100)</p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>

            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_2_title" hidden>
                    <h5>Banner 2 Title</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_2_title']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_2_link" hidden>
                    <h5>Banner 2 link</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_2_link']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>
            
            <form class="multisteps-form__form" method="post" action="editisettings" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="name" value="banner2" hidden>
                        <h5>Banner 2</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                    <?php if ($this->Global['banner2'] != "") {
                            $img = $this->Global['banner2'];
                        ?>
                            <div class="input-group input-group-static m-2">
                                <img src="<?= base_url('/assets/front/images/' . $img); ?>" height="50px" srcset="">
                            </div>
                            <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg('banner2')">Remove Image</div>
                        <?php } else { ?>
                            <div class="input-group input-group-static m-2">
                                <input type="file" name="value" accept="image/*" required />
                                <p>(Image Size Must be 100*100)</p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>


            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_3_title" hidden>
                    <h5>Banner 3 Title</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_3_title']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>
            <form class="multisteps-form__form" method="post" action="editsettings">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                    <input type="text" name="name" value="banner_3_link" hidden>
                    <h5>Banner 3 link</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                        <input type="text" name="value" value="<?php echo ($this->Global['banner_3_link']); ?>" id="">
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <!-- <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;"> -->
            </form>

            <form class="multisteps-form__form" method="post" action="editisettings" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="name" value="banner3" hidden>
                        <h5>Banner 3</h5>
                    </div>
                    <div class="col-4 col-sm-4">
                    <?php if ($this->Global['banner3'] != "") {
                            $img = $this->Global['banner3'];
                        ?>
                            <div class="input-group input-group-static m-2">
                                <img src="<?= base_url('/assets/front/images/' . $img); ?>" height="50px" srcset="">
                            </div>
                            <div class="btn btn-primary m-2" style="border-radius:0.5rem" onclick="removeimg('banner3')">Remove Image</div>
                        <?php } else { ?>
                            <div class="input-group input-group-static m-2">
                                <input type="file" name="value" accept="image/*" required />
                                <p>(Image Size Must be 100*100)</p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-4 col-sm-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                </div>
                <hr style=" color: #000; opacity: 100%;border-style: inset;border-width: 1px;">
            </form>
            
            
            

            

        </div>
    </div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function removeimg($val) {
        console.log($val);
                $.ajax({
            url: "<?=base_url('admin/removesettingsdata/');?>"+$val, //the page containing php script
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