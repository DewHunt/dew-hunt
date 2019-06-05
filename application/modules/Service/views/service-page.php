<?php echo $this->load->view('dashboard/include/header.php'); ?>
<?php echo $this->load->view('dashboard/include/sidebar.php'); ?>



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
            
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>Admin/Dashboard">Dew Hunt</a></li>
                                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>Service/Service/Index">Service Content</a></li>
                                            <li class="breadcrumb-item active">Add Service Content</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Service Content</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 style="color: red;">
                                                *** Enter All The Information and Hit on Save Button For Create New Service Content ***
                                            </h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-lg-right mt-3 mt-lg-0">
                                                <a href="<?= base_url(); ?>Service/Service/Index" class="btn btn-primary waves-effect waves-light" data-animation="fadein">
                                                    <i class="mdi mdi-view-list mr-1"></i> View List Of Service Content
                                                </a>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mb-3 header-title">
                                            <?php
                                                if ($this->session->has_userdata('msg'))
                                                {
                                            ?>
                                                    <div class="alert alert-success text-center successMessage" id="success-msg">
                                                        <strong><?= $this->session->msg; ?></strong>
                                                    </div>
                                            <?php
                                                    $this->session->unset_userdata('msg');
                                                }
                                                elseif ($this->session->has_userdata('errMag'))
                                                {
                                            ?>
                                                    <div class="alert alert-danger text-center" id="err-msg">
                                                        <strong><?= $this->session->msg; ?></strong>
                                                    </div>
                                            <?php
                                                    $this->session->unset_userdata('errMsg');
                                                }
                                            ?>
                                        </h4>

                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>Service/Service/ServiceAddAction">
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">
                                                    Title <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" name="service-title" id="service-title" placeholder="Write Service Title">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">
                                                    Description <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-9">
                                                	<textarea class="form-control" rows="5" name="service-description" id="service-description" placeholder="Write Service Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Icon</label>
                                                <div class="col-9">
                                                    <input class="dropify" type="file" name="icon-image" id="icon-image">
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <input type="submit" class="btn btn-outline-primary waves-effect waves-light" name="save" id="save" value="Save" onclick="return validation()">

                                                    <input type="reset" class="btn btn-outline-danger waves-effect waves-light" name="reset" value="Reset" onclick="return removeError()">
                                                </div>
                                            </div>
                                        </form>
                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->
                        </div>  <!-- end row -->                        
                    </div> <!-- container -->
                </div> <!-- content -->

            <script type="text/javascript">
                setTimeout(function(){
                    $('#success-msg').hide(1000);
                    $('#err-msg').hide(1000);
                },5000);

                function removeError(){
                    $('#service-title').css({'border':'1px solid #cccccc'});
                    $('#service-description').css({'border':'1px solid #cccccc'});
                }

                function validation(){
                    var title = $('#service-title').val();
                    var description = $('#service-description').val();

                    $('#service-title').css({'border':'1px solid #cccccc'});
                    $('#service-description').css({'border':'1px solid #cccccc'});
                    
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = "toast-top-center";

                    if (title == "")
                    {
                        new duDialog('Error','<b class="text-danger">Please Fill Up Title Filed</b>');
                        // toastr.error('<b>Please Fill Up Title Filed</b>','Error');
                        $('#service-title').css({'border':'1px solid red'});
                        return false;
                    }

                    if (description == "")
                    {
                        new duDialog('Error','<b class="text-danger">Please Fill Up Description Field</b>');
                        // toastr.error('<b>Please Fill Up Description Field</b>','Error');
                        $('#service-description').css({'border':'1px solid red'});
                        return false;
                    }
                }
            </script>

<?php echo $this->load->view('dashboard/include/footer.php'); ?>