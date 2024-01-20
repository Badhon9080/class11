<?php
   
include_once "./bacend-lay/header.php";
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">profile page</h1>
<div class="wrapper mt-5">
    <div class="row">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">profile info</div>
                <div class="card-body">
                    <div class="row">
                         <div class="col-lg-6">
                         <img class="img-profile rounded-circle"
                                    src="https://api.dicebear.com/7.x/initials/svg?seed=<?= ucwords($_SESSION["auth"]["fname"])  ?? '' ?>">
                         </div>
                         <div class="col-lg-6">
                              <input placeholder="first name" type="text" class="my-2 form-control">
                              <input placeholder="Last name" type="text" class="my-2  form-control">
                              <input placeholder="email" type="text" class="my-2  form-control">
                              <button class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
             <div class="card">
                <div class="card-header">password update</div>
                <div class="card-body">
                    <form action="">
                        <input placeholder="old password" type="text" class="form-control">
                        <input placeholder="new password" type="text" class="form-control">
                        <input placeholder="confirm password" type="text" class="form-control">
                        <button class="btn btn-primary">update password</button>
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<?php
   include_once "./bacend-lay/footer.php";
?>