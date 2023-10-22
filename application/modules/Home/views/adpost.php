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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Post List</h6>


        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table  class="display nowrap" style="width:100%" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>product_name</th>
                            <th>category</th>
                            <th>type </th>
                            <th>description</th>
                            <th>state</th>
                            <th>city</th>
                            <th>country</th>
                          </tr>
                    </thead>
                    <tfoot>
                        <tr>


                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i=1;
                        foreach ($adposts as $adpost) {

                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $adpost->product_name ?></td>
                                <td><?= $adpost->category ?></td>
                                <td><?= $adpost->typename ?></td>
                                <td><?= $adpost->description ?></td>
                                <td><?= $adpost->state ?></td>
                                <td><?= $adpost->city ?></td>
                                <td><?= $adpost->country ?></td>
                            </tr>
                        <?php $i++;
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?= $this->load->view('template/footer'); ?>