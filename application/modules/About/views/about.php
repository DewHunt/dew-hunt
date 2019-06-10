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
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </div>
                        <h4 class="page-title">About Content</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <form class="form-inline">
                                        <div class="form-group mb-2">
                                            <label for="inputPassword2" class="sr-only">Search</label>
                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-right">
                                        <a href="" class="btn btn-success waves-effect waves-light mb-2" data-animation="fadein">
                                        	<i class="mdi mdi-magnify-minus mr-1"></i>Search
                                        </a>
                                        <a href="<?= base_url(); ?>About/About/AddAbout" class="btn btn-primary waves-effect waves-light mb-2" data-animation="fadein">
                                        	<i class="mdi mdi-plus-circle mr-1"></i>Add New About
                                        </a>
                                    </div>
                                </div><!-- end col-->
                            </div>
                            
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
    
                            <div class="table-responsive">
                                <table class="table table-bordered table-centered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Keyword</th>
                                            <th>DOB</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Freelance</th>
                                            <th>Address</th>
                                            <th style="width: 500px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sl = 1;
                                            foreach ($aboutInfo as $value)
                                            {
                                        ?>
                                            <tr>
                                                <td><?= $sl; ?></td>
                                                <td><?= $value->Title; ?></td>
                                                <td><?= $value->Description; ?></td>
                                                <td><?= $value->Keyword; ?></td>
                                                <td><?= $value->Dob; ?></td>
                                                <td><?= $value->Email; ?></td>
                                                <td><?= $value->Phone; ?></td>
                                                <td><?= $value->Freelance; ?></td>
                                                <td><?= $value->Address; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>Service/Service/EditService/<?= $value->Id; ?>">
                                                        <button class="btn btn-xs btn-outline-primary">Edit</button>
                                                    </a>
                                                    <a href="<?= base_url(); ?>Service/Service/DeleteService/<?= $value->Id; ?>" onclick="return confirm('Are you sure, want to delete this?')">
                                                        <button class="btn btn-xs btn-outline-danger">Delete</button>
                                                    </a>
                                                    <?php
		                                            	if ($value->Display == 1)
		                                            	{
		                                            ?>
	                                                    <a href="<?= base_url(); ?>About/About/Published/<?= $value->Id; ?>">
	                                                    	<button class="btn btn-xs btn-secondary" disabled>Published</button>
	                                                    </a>
	                                                <?php
		                                            	}
		                                            	else
		                                            	{
		                                            ?>
	                                                    <a href="<?= base_url(); ?>About/About/Published/<?= $value->Id; ?>">
	                                                    	<button class="btn btn-xs btn-outline-success">Published</button>
	                                                    </a>
	                                                <?php
		                                            	}
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                                $sl++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<script type="text/javascript">
    setTimeout(function(){
        $('#success-msg').hide(1000);
        $('#err-msg').hide(1000);
    },5000);

    // function show()
    // {
    //     toastr.options.positionClass = "toast-top-center";
    //     toastr.warning("<button type='button' id='yes' class='btn btn-danger'>Yes</button>",'delete item?',{
    //         closeButton: false,
    //         allowHtml: true,
    //         onShown: function (toast) {
    //             $("#yes").click(function(){
    //                 alert("working");
    //                 return true;
    //             });
    //         }
    //     });
    //     return false;
    // }
</script>

<?php echo $this->load->view('dashboard/include/footer.php'); ?>

