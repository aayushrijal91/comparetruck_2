<header>
    <div class="container">
        <div class="navigation">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-7 col-md-auto">
                    <a href="./" class="heroLogo">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-auto text-white fw-200 d-none d-xl-block">
                            Compare affordable options with <span class="fw-600">more than 80 of Australia's top lenders</span>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-gradient border-0 rounded-6 text-white fw-600 py-3 px-md-5">
                                <?= $phone_number ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <?= renderImg("banner-2.png", 'background', 'banner-bg') ?>

        <div class="container position-relative">
            <div class="row align-items-center gx-xxl-5 gy-5 gy-xl-0">
                <div class="col-lg-6">
                    <div class="fs-30 font-kamerik text-light-grey text-center text-lg-start">Looking to finance a <span class="text-primary fw-700">Truck?</span></div>
                    <div class="fs-80 fw-700 lh-1 pt-3 pb-4 text-center text-lg-start">Compare the lowest rates in the market with us today!</div>
                    <div class="row pt-md-3 gy-3 gy-md-4">
                        <div class="col-12">
                            <div class="form_cta_card">
                                <div class="row align-items-center text-center text-md-start gy-4 gy-md-0">
                                    <div class="col-md-1"><?= renderImg('cta1.png', 'icons') ?></div>
                                    <div class="col-md fs-16 text-white font-kamerik fw-400">Get <span class="fw-700">FREE access to 80+ banks</span> and non-bank lenders with over 1000 unbeatable loan options in your area</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_cta_card">
                                <div class="row align-items-center text-center text-md-start gy-4 gy-md-0">
                                    <div class="col-md-1"><?= renderImg('cta2.png', 'icons') ?></div>
                                    <div class="col-md fs-16 text-white font-kamerik fw-400">Receive a call back <span class="fw-700">within minutes</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_cta_card">
                                <div class="row align-items-center text-center text-md-start gy-4 gy-md-0">
                                    <div class="col-md-1"><?= renderImg('cta3.png', 'icons') ?></div>
                                    <div class="col-md fs-16 text-white font-kamerik fw-400">Speak to Australia's leading business vehicle fianance specialists and get the <span class="fw-700">best deals at the lowest rate</span> Australia wide</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <form action="./src/form.php" method="POST" id="heroForm">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="fs-48 fw-700 d-flex align-items-center gap-3 lh-1 heading">
                            <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 16.9999H16.4003V31.9999H2V16.9999ZM2 16.9999C2 9.30022 5.64744 4.19743 11.6002 1.99994" stroke="white" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M23.5996 16.9999H37.9999V31.9999H23.5996V16.9999ZM23.5996 16.9999C23.5996 9.30022 27.2471 4.19743 33.1998 1.99994" stroke="white" stroke-width="3.75" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Get A Free Quote
                        </div>
                        <div class="row gy-4 gy-md-5">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nameAbnInput">Company Name or ABN</label>
                                    <input type="text" id="nameAbnInput" name="nameAbn" class="form-control" placeholder="Company name or ABN" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="fullNameInput">Your Full Name</label>
                                    <input type="text" id="fullNameInput" name="fullName" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneInput">Your Number</label>
                                    <input type="tel" id="phoneInput" name="phoneNumber" class="form-control" placeholder="Phone Number" required>
                                    <small id="phoneError" class="validationError">Please enter a valid phone number</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailInput">Your Email</label>
                                    <input type="email" id="emailInput" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="loanInput">Enter Loan Amount</label>
                                    <input type="text" id="loanInput" name="loanAmount" class="form-control" placeholder="How much are you looking for?" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foundVehicleInput">Found a Vehicle?</label>
                                    <div class="d-flex gap-5">
                                        <div class="form-check form-check-inline d-flex align-items-center m-0 gap-2">
                                            <input class="form-check-input" type="radio" name="foundVehicle" id="foundVehicleInput1" value="Yes" checked>
                                            <label class="fs-16 fw-400 font-kamerik lh-1 form-check-label" for="foundVehicleInput1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline d-flex align-items-center m-0 gap-2">
                                            <input class="form-check-input" type="radio" name="foundVehicle" id="foundVehicleInput2" value="No">
                                            <label class="fs-16 fw-400 font-kamerik lh-1 form-check-label" for="foundVehicleInput2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="servicing-areas">
    <div class="container">
        <div class="text-center text-grey fs-30 lh-1 font-kamerik fw-500">Our Experts can't be beat on service and pricing</div>
        <div class="text-primary fs-64 fw-500 lh-1 pt-3 text-center text-capitalize">Servicing major cities &amp; surrounding areas</div>
        <?php $areas = array('sydney', 'melbourne', 'brisbane', 'perth', 'adelaide', 'darwin', 'tasmania'); ?>

        <div class="row pt-5 pt-md-7 gx-3" id="areas-slider">
            <?php foreach ($areas as $area) : ?>
                <div class="col-xl">
                    <div class="area_card">
                        <?= renderImg($area . '.jpg', 'lib', 'card_bg') ?>
                        <div class="area">
                            <?= renderImg('mapmarker.png', 'icons') . $area ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="financing">
    <div class="container">
        <div class="text-primary text-center fs-64 lh-1 fw-500">We can finance all types of New & Used<br class="d-none d-xl-block" /> Business Vehicles from Dealers &amp; Private Sellers</div>
        <div class="row pt-7 py-md-7 gy-2 gy-md-3">
            <div class="col-12">
                <div class="row gx-3 gy-2 gy-md-3 gy-xl-0">
                    <div class="col-md-4 col-xl">
                        <div class="financing_card">
                            <?= renderImg('finance-cars.png', 'lib') ?>
                            <div>Cars</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl">
                        <div class="financing_card">
                            <?= renderImg('finance-suvs.png', 'lib') ?>
                            <div>SUVs</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl">
                        <div class="financing_card">
                            <?= renderImg('finance-vans.png', 'lib') ?>
                            <div>Vans</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl">
                        <div class="financing_card">
                            <?= renderImg('finance-trucks.png', 'lib') ?>
                            <div>Trucks</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl">
                        <div class="financing_card">
                            <?= renderImg('finance-utes.png', 'lib') ?>
                            <div>Utes</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl">
                        <a href="javascript:void(0)" id="showMoreUtes" class="financing_card more">
                            & More!
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12" id="moreUtes">
                <div class="row gx-3 gy-2 gy-md-3">
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            <div>Semi-Trailer</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            <div>Tipper Trailer</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            <div>Beavertail Trailer</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            <div>Skeletal Trailer</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            <div>Livestock Trailer</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Dog Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Double Drop Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Dolly Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Curtaisider Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Belt Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Logging Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Refrigerated Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Tank Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Flatbed Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Dump Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Tilt Trailer
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-2">
                        <div class="financing_card_more_list">
                            Tow Dolly Trailer
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center d-none d-md-block">
            <a href="#form" class="btn btn-gradient border-0 d-inline-flex rounded-6 text-white fw-600 py-3 px-md-5">
                Compare Now
            </a>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="fs-64 lh-1 text-primary fw-500 pb-3">What makes us different?</div>
        <div class="text-grey fs-19 font-kamerik fw-500 pt-4">To make sure we get the best loan for you, Compare Business Finance Loans compares affordable options with <span class="fw-600">more than 80 of Australia's top lenders.</span></div>

        <div class="row gx-3 pt-5 pt-md-7" id="about-slider">
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-1.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">Approvals in as little as 24 Hours</div>
                    <div class="text-grey fw-500 pt-2">With minimal paperwork and wait times</div>
                </div>
            </div>
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-2.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">Hassle free process</div>
                    <div class="text-grey fw-500 pt-2">Experience our streamlined approach</div>
                </div>
            </div>
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-3.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">We work for you, not the banks</div>
                    <div class="text-grey fw-500 pt-2">Our focus is solely on serving you</div>
                </div>
            </div>
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-4.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">Over 80 Lenders with low rates</div>
                    <div class="text-grey fw-500 pt-2">Compare competitive interest rates</div>
                </div>
            </div>
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-5.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">Don't be held back</div>
                    <div class="text-grey fw-500 pt-2">Bad credit score? We go you covered</div>
                </div>
            </div>
            <div class="col-xl">
                <div class="about-us-card">
                    <?= renderImg('about-6.png', 'icons', 'icon') ?>
                    <div class="text-primary fs-20 lh-1 fw-700">Expert personal service</div>
                    <div class="text-grey fw-500 pt-2">For all your finance needs</div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="speak-with-us">
        <div class="row align-items-end">
            <div class="col-xl-6">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-lg-10 text-center py-5 py-md-7 px-4">
                        <div class="text-white fs-64 lh-1 fw-500">Speak with a Truck Finance Expert Today!</div>
                        <div class="text-white font-kamerik fs-20 py-5">Compare and save on your next truck loan by speaking with our truck finance experts. Our 30-second online application process only requires you to provide the details we truly need.</div>
                        <div class="text-center">
                            <a href="#form" class="btn btn-white border-0 d-inline-flex rounded-6 text-primary fw-600 py-3 px-md-5">
                                Compare Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 text-end"><?= renderImg('speak-us-van.png', 'lib', 'ps-4 ps-md-0') ?></div>
        </div>
    </section>
</div>

<section class="lenders">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="fs-64 lh-1 text-primary fw-500">Over 1000 financing options and 80+ lenders with low rates</div>
            </div>
        </div>
        <div class="py-5 d-xl-none" id="lenders-slider">
            <div>
                <div class="row justify-content-between align-items-center gy-4">
                    <?php for ($k = 1; $k <= 21; $k++) : ?>
                        <div class="col-4 col-lg-2 d-flex align-items-center justify-content-center"><?= renderImg('lender-' . $k . '.png', 'logo') ?></div>
                    <?php endfor; ?>
                </div>
            </div>
            <div>
                <div class="row justify-content-between align-items-center gy-4">
                    <?php for ($k = 22; $k <= 42; $k++) : ?>
                        <div class="col-4 col-lg-2 d-flex align-items-center justify-content-center"><?= renderImg('lender-' . $k . '.png', 'logo') ?></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center pt-7 gy-5 d-none d-xl-flex">
            <div class="col-12">
                <div class="row justify-content-between align-items-center">
                    <?php for ($i = 1; $i <= 11; $i++) : ?>
                        <div class="col-auto">
                            <?= renderImg('lender-' . $i . '.png', 'logo') ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-between align-items-center">
                    <?php for ($i = 12; $i <= 21; $i++) : ?>
                        <div class="col-auto">
                            <?= renderImg('lender-' . $i . '.png', 'logo') ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-between align-items-center">
                    <?php for ($i = 22; $i <= 31; $i++) : ?>
                        <div class="col-auto">
                            <?= renderImg('lender-' . $i . '.png', 'logo') ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="row justify-content-between align-items-center">
                    <?php for ($i = 32; $i <= 42; $i++) : ?>
                        <div class="col-auto">
                            <?= renderImg('lender-' . $i . '.png', 'logo') ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>