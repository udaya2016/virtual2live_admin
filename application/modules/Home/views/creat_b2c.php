<?= $this->load->view('template/header'); ?>
<style>
    .form-group{
        width: 50%;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?= $this->load->view('sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

             
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">B2C CREATE</h6>

                            <h7<h7>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?=base_url()?>home/insertb2c">

                               
                                <div class="form-group">
                                    <label for="exampleInputName">FullName</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputName">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="exampleInputName">
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputName">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">City</label>
                                    <input type="text" name="city" class="form-control" id="exampleInputName">
                                </div>                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


  
    <?= $this->load->view('template/footer'); ?>

</body>

</html>