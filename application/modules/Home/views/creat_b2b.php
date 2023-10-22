
<?=$this->load->view('template/header');?>
<style>
    .form-group{
        width: 50%;
    }
</style>


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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><a class="btn btn-info" href=>Add New User</a></h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">B2B CREATE</h6>

                            <h7</h7>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?=base_url()?>home/insertb2b">

                               
                                <div class="form-group">
                                    <label for="exampleInputName">FullName</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName">Password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputPassword">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputName">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="exampleInputName">
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
         

    <?=$this->load->view('template/footer');?>

</body>

</html>