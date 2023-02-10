<?php $this->extend('layout/main')?>
<?php $this->section('content')?>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">GDPR CONSENT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Breadcrumbs -->
<div class="container">
<div class="navbar">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
</div>
</div>
<!-- Breadcrumbs Ends -->
<div class="container-fluid text-light py-5 contact-bg">
<div class="container">

<div class="row align-self-center align-items-center">
    <div class="col-md-12">
    <h1 class="display-3 text-center">Contact Us</h1>
    </div>

</div>
</div>
</div>

<div class="continer-fluid py-5">
<div class="container">
<div class="row">
        <div class="px-5">
        <h3 class="fs-4 fw-light ">For Invoice Payment use the button</h3>
        <p><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KD1LNQTtVdwIAO" async> </script> </form></p>
        </div>

        <div class="col-md-8 p-5">
            <h3 class="fs-4 fw-light pb-3">Contact Us form:</h3>
            <!-- hubspot form -->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
              hbspt.forms.create({
                region: "na1",
                portalId: "8654992",
                formId: "7b389b2e-23fe-4fa6-8c7a-f5bd76d98e30"
              });
            </script>
        </div>

        <div class="col-md-4 bg-dark text-light">
        <div class="col p-3 border border-0 border-dark m-3">
            <h3 class="fs-4 fw-light my-3"><i class="bi bi-telephone"></i> Call Us</h3>
            <h3 class="fs-6 fw-light">Phone: +91 124 498 5858</h3>
            <h3 class="fs-6 fw-light">Mobile 01: +91 995 800 6386</h3>
            <h3 class="fs-6 fw-light">Mobile 02: +91 850 599 3333</h3>
        </div>
        <div class="col p-3 border border-0 border-dark m-3">
            <h3 class="fs-4 fw-light my-3"><i class="bi bi-envelope"></i> Email</h3>
            <h3 class="fs-6"> <a href="mailto:info@prismipr.com" class="text-white">info@prismipr.com</a></h3>
        </div>
        <div class="col p-3 border border-0 border-dark m-3">
            <h3 class="fs-4 fw-light my-3"><i class="bi bi-pin-map"></i> Locations</h3>
            <p class="fw-bold"><i class="bi bi-geo"></i> Gurugram</p>
            <address class='fst-italic'>10th Floor Tower B Unitech Cyber Park, Sec-39 Gurugram Haryana 122003, India</address>
            <p class="fw-bold pt-3"><i class="bi bi-geo"></i> Bengaluru</p>
            <address class='fst-italic'>Level 9, Raheja Towers, 26/27, M. G. Road, Bengaluru, Karnataka 560001, India</address>
        </div>
        </div>
</div>
</div>
</div>
<?php $this->endSection()?>