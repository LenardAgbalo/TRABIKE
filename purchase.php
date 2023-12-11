<?php require('header.php'); ?>
<div class="container">
  <div class="text-center pb-2">
         <h1 class="display-6">Purchase</h1>
      </div>

<div class="container">
    <div class="row">
         <div class="mb-3 col-md-6">
  <label for="exampleFormControlInput1" class="form-label">First Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
</div>
 <div class="mb-3 col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Last Name</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
</div>
    </div>
  
 <div class="row">
     <div class="mb-3 col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contact Number">
</div>
 <div class="mb-3 col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
</div>
    </div>

    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
</div>
     <div class="text-end pb-5 "><a class="btn btn-success mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</a></div>
</div>
              
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Your purchase was successful!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  </div>
</div>
</div>
<?php require('footer.php'); ?>