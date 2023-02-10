<nav class="fw-semibold bg-dark text-white container-fluid navbar">
        <div class="container d-flex flex-row justify-content-end">
        <a href="mailto:info@prismipr.com" class="nav-link"><i class="bi bi-envelope fs-5 px-1"></i> info@prismipr.com</a> 
        </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top bg-light">
    <div class="container"> 
    
        <a class="navbar-brand" href="/"><img src="/img/prism-logo-web.svg" alt="Prism IP Logo" height="39"></a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
            <ul class="navbar-nav fw-semibold ms-auto">
                <li class="nav-item ms-3">
                <a class="nav-link <?php if ($name=='home'){ echo ('active');}?>" aria-current="page" href="/"><i class="bi bi-house fs-5"></i> Home</a>
                </li>
        
                <li class="nav-item ms-3">
                <a class="nav-link <?php if ($name=='about'){ echo ('active');}?>" href="/about-us"><i class="bi bi-person-badge fs-5"></i> About Us</a>
                </li>
        
                <li class="nav-item ms-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-briefcase fs-5"></i> 
                    Deliverance
                    </a>
                    <ul class="dropdown-menu rounded-0 border-0 bg-light">
                    <li><a class="dropdown-item fw-semibold" href="/ip-analytics">Analytics</a></li>
                    <li><a class="dropdown-item fw-semibold" href="/statutory-protection">Statutory Protection</a></li>
                    <li><a class="dropdown-item fw-semibold" href="/ip-transactions">Transactions</a></li>
                    <li><a class="dropdown-item fw-semibold" href="/technology-scouting">Technology Scouting</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li class=""><a class="dropdown-item bg-success text-white m-0 fw-semibold" href="/green-initiative">Green Initiative</a></li>
                    </ul>
                </li>
        
                <li class="nav-item ms-3">
                <a class="nav-link <?php if ($name=='contact'){ echo ('active');}?>" href="/contact-us"><i class="bi bi-postcard fs-5"></i> Contact Us</a>
                </li>
        
                <li class="nav-item ms-3">
                <!-- <a class="nav-link" href="#">Blog</a> -->
                </li>
        
                <li class="nav-item ms-3">
                <a class="nav-link btn btn-sm btn-dark rounded-0 text-white py-1 my-1" href="https://www.linkedin.com/company/prism-ipr/" target="_blank">Follow Us</a>
                </li>
                <li class="ms-3">
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_KD1LNQTtVdwIAO" async> </script> </form>
                </li>
            </ul>
        </div>
    
    </div>
</nav>