<?php require('header.php'); ?>

<div class="container py-5 min-vh-10">

  <div class="container-fluid">
      <div class="text-center pb-5">
              <h1 class="display-6">E-Shop Cycling</h1>
              
            </div>

    <div class="row g-5">
      <div class="col-lg-3 col-md-4 col-sm-6 wow fadeIn mx-auto" data-wow-delay="0.5s">
                <div class="card rounded shadow-sm" style="width: 18rem;">
            <img src="https://supremebikes.ph/cdn/shop/products/SPYDER-PHANTOM530M-SILBK-0W.jpg?v=1674647540" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>     <h5 class="card-title">₱1500,00 </h5>

<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
</a>
            </div>
            </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <nav aria-label="..." class="pt-5">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link " href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
  </div>
  
</div>


 

<?php require('footer.php'); ?>
