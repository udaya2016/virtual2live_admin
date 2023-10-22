<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url()?>Home">

    <div class="sidebar-brand-text mx-3">Admin Panel <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?=base_url()?>home/index">
        <i class="fas fa-fw fa-tacHometer-alt"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>B2C User Managment</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">B2C</h6>
            <a class="collapse-item" href="<?=base_url()?>Home/creat_b2c">Creat B2C User</a>
            <a class="collapse-item" href="<?=base_url()?>Home/b2c_userlist">B2C User List</a>

            <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span>B2B User Managment</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">B2B</h6>
            <a class="collapse-item" href="<?=base_url()?>Home/creat_b2b">Creat B2B User</a>
            <a class="collapse-item" href="<?=base_url()?>Home/b2b_userlist">B2B User List</a>

           
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
        aria-expanded="true" aria-controls="collapseFour">
        <i class="fas fa-fw fa-cog"></i>
        <span>Virtual link</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">post</h6>
            <a class="collapse-item" href="<?=base_url()?>Home/adpost">AdPost</a>
            <a class="collapse-item" href="<?=base_url()?>Home/adpost">Virtual Property</a>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">

</div>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>