edit-service.php<?php echo $this->load->view('dashboard/include/header.php'); ?>
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
                                            <li class="breadcrumb-item active">Edit Service Content</li>
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
                                                *** Enter All The Information and Hit on Edit Button For Update Service Content ***
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
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>Service/Service/ServiceAdd">
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">
                                                    Title <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" name="service-title" id="service-title" placeholder="Write Service Title" value="<?= $serviceInfo->Title; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">
                                                    Description <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-9">
                                                	<textarea class="form-control" rows="5" name="service-description" id="service-description" placeholder="Write Service Description">
                                                		<?= $serviceInfo->Description; ?>
                                                	</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Icon</label>
                                                <div class="col-6">
                                                    <input class="dropify" type="file" name="icon-image" id="icon-image" >
                                                    <input type="hidden" name="previous-icon-image" id="previous-icon-image" value="<?= $serviceInfo->Icon; ?>">
                                                </div>
                                                <div class="col-3">
                                                	<img src="<?= base_url(); ?>assets/web2/images/service/<?= $serviceInfo->Icon; ?>" width="200px" height="200px">
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <input type="submit" class="btn btn-outline-primary waves-effect waves-light" name="update" id="update" value="Update" onclick="return validation()">

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

                    if (title == "")
                    {
                        // popup.alert({'content': 'Please Fill Up Title Filed'});
                        new duDialog('Error','<b class="text-danger">Please Fill Up Title Filed</b>');
                        $('#service-title').css({'border':'1px solid red'});
                        return false;
                    }

                    if (description == "")
                    {
                        // popup.alert({'content': 'Please Fill Up Description Field'});
                        new duDialog('Error','<b class="text-danger">Please Fill Up Description Field</b>');
                        $('#service-description').css({'border':'1px solid red'});
                        return false;
                    }
                }
            </script>

<?php echo $this->load->view('dashboard/include/footer.php'); ?>