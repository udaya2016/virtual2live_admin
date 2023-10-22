
<?=$this->load->view('template/header');?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
    
        <?=$this->load->view('sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

           

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php
                    if ($this->session->flashdata('status_b2b') == 'success') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?= $this->session->flashdata('msg'); ?></strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                    <?php }
                    ?>
                    


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><a class="btn btn-info" href="<?= base_url() ?>home/creat_b2b">New User</a></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>

                            <h7</h7>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Sl.No</th>
                            <th>Username</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>city </th>
                            <th>Status</th>
                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                        
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($b2busers as $b2buser) {
                                        
                                         
                                        ?>
                                    <tr>
                                    <td><?= $b2buser->id ?></td>
                                <td><?=$b2buser->username ?></td>
                                <td><?=$b2buser->mobile ?></td>
                                <td><?=$b2buser->password ?></td>
                                <td><?=$b2buser->city ?></td>
                                            <td><?=$b2buser->status?'<span class="badge badge-success">Active</span>':'<span class="badge badge-danger">Inactive</span>'?></td>
                                            <td>
                                    <a href="<?=base_url()?>home/editb2b/<?= $b2buser->id ?>"><i class="fas fa-pencil-alt"></i></a>
                                        <a<i class="fas fa-trash-alt"></i></a> <i class="fas fa-check-circle"></i> <i class="fas fa-minus-circle"></i>
                                </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?=$this->load->view('template/footer');?>

</body>

</html>