<?php
  //include('.admin/include/header.php');
  include('include/header.php');
?>
<div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
         </ol>
       

        <!-- dashborad contain -->
        <div class="content-wrapper" id="dashboard-section">
    <div class="row">
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-danger bg-opacity-75 card-img-holder text-white">
                <div class="card-body h-200 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Total Order</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper ">
                
                        <i class="bi bi-card-list  fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-success  bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Payment</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-wallet2 fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-secondary bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Today's sell</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-cart icon-size fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-warning bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Total Users</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-person icon-size fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-danger bg-opacity-75 card-img-holder text-white">
                <div class="card-body h-200 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Order Delivered</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper ">
                
                        <i class="bi bi-card-list  fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-success bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Cancel Order</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-wallet2 fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-secondary bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Accept Order</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-cart icon-size fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-warning bg-opacity-75 card-img-holder text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fs-5 mb-3">Total Company</h4>
                        <h2 class="mb-3">0</h2>
                    </div>
                    <div class="icon-wrapper">
                        <i class="bi bi-buildings icon-size fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                         
          <!-- dashbord contain end -->
         

</div>



<?php
  include('include/footer.php');
  include('include/scripts.php');
?>