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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">B2C EDIT</h6>

                            <h7<h7>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>home/updateb2c">


                                <div class="form-group">
                                    <label for="exampleInputName">FullName</label>
                                    <input type="text" name="name" class="form-control" value="<?= $b2c['username'] ?>" id="exampleInputName" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Password</label>
                                    <input type="text" name="password" value="<?= $b2c['password'] ?>" class="form-control" id="exampleInputPassword" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" value="<?= $b2c['mobile'] ?>" id="exampleInputName" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">City</label>
                                    <input type="text" name="city" class="form-control" value="<?= $b2c['city'] ?>" id="exampleInputName" required>
                                </div>
                                <input type="hidden" name="id" value="<?= $b2c['id'] ?>">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  
    <?= $this->load->view('template/footer'); ?>

    