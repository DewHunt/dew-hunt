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
                                <li class="breadcrumb-item active">Home Contet</li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home/Home/Designation">Designation</a></li>
                                <li class="breadcrumb-item active">Add New Designation</li>
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
                                    *** Enter All The Information and Hit on Save Button For Create New Designation ***
                                </h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="<?= base_url(); ?>Home/Home/Designation" class="btn btn-primary waves-effect waves-light" data-animation="fadein">
                                        <i class="mdi mdi-view-list mr-1"></i> View List Of Designation
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
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>Home/Home/AddDesignationAction">
                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Designation <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Write Your Designation">
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
        $('#designation').css({'border':'1px solid #cccccc'});
    }

    function validation(){
        var designation = $('#designation').val();

        $('#designation').css({'border':'1px solid #cccccc'});
        
        toastr.options.closeButton = true;
        toastr.options.positionClass = "toast-top-center";

        if (designation == "")
        {
            new duDialog('Error','<b class="text-danger">Please Fill Up Designation Filed</b>');
            // toastr.error('<b>Please Fill Up Designation Filed</b>','Error');
            $('#designation').css({'border':'1px solid red'});
            return false;
        }
    }
</script>

<?php echo $this->load->view('dashboard/include/footer.php'); ?>