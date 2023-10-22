<?= $this->load->view('template/header'); ?>

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
                    <?php
                    if ($this->session->flashdata('status_b2c') == 'success') { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?= $this->session->flashdata('msg'); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php }
                    ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><a class="btn btn-info" href="<?= base_url() ?>home/creat_b2c">New User</a></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">B2C LIST</h6>


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
                                        <?php foreach ($b2cusers as $b2cuser) {

                                        ?>
                                            <tr>
                                                <td><?= $b2cuser->id ?></td>
                                                <td><?= $b2cuser->username ?></td>
                                                <td><?= $b2cuser->mobile ?></td>
                                                <td><?= $b2cuser->password ?></td>
                                                <td><?= $b2cuser->city ?></td>
                                                <td><?= $b2cuser->status ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>' ?></td>

                                                <td>
                                                    <a href="<?= base_url() ?>home/editb2c/<?= $b2cuser->id ?>"><i class="fas fa-pencil-alt"></i></a>
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


                <?= $this->load->view('template/footer'); ?>