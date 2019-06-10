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
                                <li class="breadcrumb-item active">About Content</li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Name/Name/Index">Name</a></li>
                                <li class="breadcrumb-item active">Add New About</li>
                            </ol>
                        </div>
                        <h4 class="page-title">About Content</h4>
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
                                    *** Enter All The Information and Hit on Save Button For Create New About ***
                                </h5>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-lg-right mt-3 mt-lg-0">
                                    <a href="<?= base_url(); ?>Name/Name/Index" class="btn btn-primary waves-effect waves-light" data-animation="fadein">
                                        <i class="mdi mdi-view-list mr-1"></i> View List Of Name
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
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?= base_url(); ?>About/About/AddAboutAction">
                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Title <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Write Your Title">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Description <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<textarea class="form-control" rows="5" name="description" id="description" placeholder="Write Description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Keyword <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Write Keyword ( Several Keword Separated By Comma ',' )">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Date Of Birth <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<input type="date" class="form-control" id="dob" name="dob">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<input type="email" class="form-control" id="email" name="email" placeholder="Wright Email">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Phone <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<input type="text" class="form-control" id="phone" name="phone" placeholder="Wright Phone">
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Freelance <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<div class="radio radio-info form-check-inline">
                                    		<input type="radio" id="freelance" value="Available" name="freelance">
                                    		<label for="radio1">Available</label>
                                    	</div>
                                    	<div class="radio radio-info form-check-inline">
                                    		<input type="radio" id="freelance" value="Not Available" name="freelance">
                                    		<label for="radio2">Not Available</label>
                                    	</div>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label">
                                        Address <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-9">
                                    	<textarea class="form-control" rows="5" name="address" id="address" placeholder="Write Address"></textarea>
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
        $('#name').css({'border':'1px solid #cccccc'});
    }

    function validation(){
        var name = $('#name').val();

        $('#name').css({'border':'1px solid #cccccc'});
        
        toastr.options.closeButton = true;
        toastr.options.positionClass = "toast-top-center";

        if (name == "")
        {
            new duDialog('Error','<b class="text-danger">Please Fill Up Name Filed</b>');
            // toastr.error('<b>Please Fill Up Name Filed</b>','Error');
            $('#name').css({'border':'1px solid red'});
            return false;
        }
    }
</script>

<?php echo $this->load->view('dashboard/include/footer.php'); ?>