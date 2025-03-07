<?php include 'include/header.php' ?>
<title>Demo</title>
</head>

<body>
    <?php include 'include/menu.php' ?>
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->

    <section class="inner-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>FAQ</h2>
                </div>
                <div class="col-md-6">
                    <figure class="inr-img">
                        <img src="images/inrimg.png" class="img-fluid" alt="img">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section faq-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offerImg">
                        <figure>
                            <img src="images/w1.png" class="img-fluid" alt="">
                        </figure>
                        <figure class="offerImg3">
                            <img src="images/w2.png" class="img-fluid" alt="">
                        </figure>
                        <figure class="playBtn">
                            <img src="images/w3.png" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faqHead">
                        <h2>FAQ <span>Frequently Asked <br>
                                Questions</span></h2>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <div id="headingOne ">
                                <h5 class="mb-0 ">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"><span></span>
                                        What is Lorem Ipsum?
                                        <i class="fas fa-angle-up"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div id="headingTwo ">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <span></span>
                                        Where can I get some?
                                        <i class="fas fa-angle-up"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                        <span></span>
                                        Where does it come from?
                                        <i class="fas fa-angle-up"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingfour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <span></span>
                                        What is Lorem Ipsum?
                                        <i class="fas fa-angle-up"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        It is a long established fact that a reader will be distracted by the
                                        readable content of a page when looking at its layout.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>