<?php 

$result="";

if(isset($_POST['submit'])){
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->setFrom($_POST['email'],$_POST['fname']);
    $mail->addAddress('stefanlukes@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['fname']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['fname'],$_POST['lname']);
    $mail->Body='<h2>Name: '.$_POST['name'].'<br
    >Surname: '.$_POST['lname'].'<br
    Email: '.$_POST['email'].'<br
    >Mobile: '.$_POST['mobile'].'<br
    >Landline'.$_POST['landline'].'<br
    >Message: '.$_POST['message'].'</h2>';

    if(!$mail->send()){
        $result="Something went wrong. Please try again.";
    }
    else {
        $result=header("Location:thankyou.html");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direct Business Finance</title>
    <link rel="stylesheet" href="style.css" />
    <script>
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 600 ||
                document.documentElement.scrollTop > 600
            ) {
                document.getElementById("smallnavbar").style.visibility = "visible";
                document.getElementById("smalllogo").style.visibility = "visible";
                document.getElementById("smallnavbar").style.opacity = "1";
                document.getElementById("smalllogo").style.opacity = "1";
            } else {
                document.getElementById("smallnavbar").style.visibility = "hidden";
                document.getElementById("smalllogo").style.visibility = "hidden";
                document.getElementById("smallnavbar").style.opacity = "0";
                document.getElementById("smalllogo").style.opacity = "0";
            }
        }
    </script>
</head>

<body>

    <!-- ------------------- Navbar ------------------------- -->


    <div class="navbar" id="navbar">
        <img class="logo" src="assets/direct-business-finance-logo.svg" alt="Direct Business Finance Logo" id="logo" />
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu" id="menu">
            <li class="about-us"><a href="">About Us</a></li>
            <li><a href="">Funding Types</a></li>
            <li><a href="">Declined Finance</a></li>
            <li><a href="">Why Us?</a></li>
            <li class="contact-us"><a href="">Contact Us</a></li>
            <li id="dropdown-phone-box">
                <div><img src="assets/phone.svg" alt="Direct Line - Business Team" id="dropdown-phone-img"></div>
                <div id="dropdown-txt-container">
                    <p id="dropdown-phone-txt">DIRECT LINE - BUSINESS TEAM</p><a id="dropdown-phone-number">0800
                        0286055</a>
                </div>
            </li>
        </ul>
        <div id="phone-number-box">
            <div><img src="assets/phone.svg" alt="Direct Line - Business Team" id="phone-img"></div>
            <div id="txt-container">
                <p id="phone-txt">DIRECT LINE - BUSINESS TEAM</p><a id="phone-number">0800 0286055</a>
            </div>
        </div>
    </div>

    <div class="smallnavbar" id="smallnavbar">
        <img class="smalllogo" src="assets/direct-business-finance-logo.svg" alt="Direct Business Finance Logo"
            id="smalllogo" />
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu" id="menu">
            <li class="about-us"><a href="">About Us</a></li>
            <li><a href="">Funding Types</a></li>
            <li><a href="">Declined Finance</a></li>
            <li><a href="">Why Us?</a></li>
            <li class="contact-us"><a href="">Contact Us</a></li>
        </ul>
        <div id="small-number-box">
            <div><a id="small-phone-number"><span style="color: #ffffee;">T:</span> 0800 0286055</a></div>
        </div>
    </div>


    <!-- ------------------- Header ------------------------- -->

    <div id="header">
        <div id="header-txt-box">
            <h1 id="header-txt">
                Specialising In Sourcing Business<br>
                Funding When Other Brokers Fail
            </h1>
            <h1 id="header-txt-2">
                Specialising In Sourcing Business
                Funding When Other Brokers Fail
            </h1>
            <a href="">ENQUIRE NOW</a>
            <p id="header-sub-txt">Free no obligation consultation</p>
        </div>
    </div>

    <!-- ------------------- About Us ------------------------- -->

    <div id="about-us-section">
        <h1 id="welcome">Welcome to Direct Business Finance</h1>
        <div id="gold-bar"></div>
        <h2 id="about-us">About Us</h2>
        <p id="about-quote"> In the world of business finance, it's not just about what we know,<br>it's about who we
            know... that's why we get results.</p>
        <p id="about-quote-2"> In the world of business finance, it's not just about what we know, it's about who we
            know... that's why we get results.</p>
        <h3 id="simple">Business Loans Made Simple - From £50,000 - £250 million</h3>
        <h3 id="simple-2">Business Loans Made Simple<br>From £50,000 - £250 million</h3>
        <div class="two-column-flex">
            <div class="column">
                <p>At Direct Business Finance we work differently to our competitors, we only deal directly with
                    underwriters and decision makers, therefore no lengthy processing procedures and delays, no
                    middlemen and no business development managers. We work extremely fast to achieve results. Here at
                    Direct Business Finance, we pride ourselves in getting the very best deals for our clients and
                    securing funds quickly. Because of our long-standing connections and over 28 years of close ties
                    with our private investment funders, we are in a very unique position to evaluate and secure funding
                    where other brokers fail.</p>
                <p>Our dedicated experienced team of financial experts will search endlessly to source and secure a deal
                    that suits your needs. We regularly deal with difficult, challenging applications as this is what we
                    specialise in and what we do extremely well. We remove the laborious hurdles associated with
                    commercial finance, namely, meeting inflexible lenders’ criteria who select the safest circumstances
                    and also waiting several days for lending committee deliberations. At Direct Business Finance we
                    fully understand the importance and emphasis of presenting an application in a manner that is
                    favourable to lenders since this is where many commercial brokers fall down.</p>
            </div>
            <div class="column">
                <p>Within our professional team we have business analysists, business turnaround specialists and
                    individuals within the company who have extensive business, sales and marketing experiences.
                    Additionally, our team is backed up by commercial Lawyers and registered Chartered Accountants. We
                    offer the complete package to make the finance process as smooth as possible. At Direct Business
                    Finance we have built a very successful business by sticking to our 3 core values; offering
                    exceptional customer service, working with a team of highly experienced, dedicated experts and
                    working alongside a trusted network of funders that understand our clients’ needs. So, whatever your
                    funding requirements are, whether they be short-term or long-term finance, we are here to help
                    regardless of your status, credit or unusual requirements.</p>
                <p>With our vast knowledge and experience in this industry, we can secure and deliver bespoke finance
                    results for all types of business including commercial, retail, construction, development, property
                    portfolios, leisure, hospitality and many more. <span> We are simply one call away.</span></p>
            </div>
        </div>
        <div id="direct-business-line">
            <h4 class="direct-business-line">Direct Business Line 7 Days a Week</h4>
            <h1 class="gold-number">0800 0286055</h1>
            <h4 class="direct-business-line">We Have the Right Connections to Fund Your Business</h4>
        </div>
    </div>

    <!-- ------------------- Text Boxes ------------------------- -->

    <div class="black-band black-band-290">
        <h2 id="tailored">Specialising in Tailored Business<br>& Commercial Finance</h2>
        <h2 id="tailored-2">Specialising in Tailored Business & Commercial Finance</h2>
    </div>
    <div id="top-txt-2">
        <h3>SIMPLE</h3><img src="assets/arrows.svg" alt="">
        <h3>EFFICIENT</h3><img src="assets/arrows.svg" alt="">
        <h3>RESULTS</h3>
    </div>
    <div class="three-column-boxes">
        <div class="txt-box">
            <h3 class="top-txt"><span>●</span> SIMPLE <span>●</span></h3>
            <div class="box">
                <h4 class="box-heading">Experienced<br>Financial Experts</h4>
                <p>Our dedicated, experienced team who know the market, will very quickly establish your requirements.
                    We provide all of our clients with a fast, efficient service, achieving the best financial package
                    available. We pride ourselves on our efficient customer service and sourcing the correct funding for
                    clients, even when other brokers have failed.</p>
            </div>
        </div>
        <div class="txt-box">
            <h3 class="top-txt"><span>●</span> EFFICIENT <span>●</span></h3>
            <div class="box">
                <h4 class="box-heading">Simple, Stress-Free<br>Applications</h4>
                <p>We never delay. From receiving your enquiry, we will have an application form with you within 1 hour.
                    Our
                    applications are very straight forward and simple. We process your application the same day and aim
                    to
                    have an acceptance within 24 hours. With no money upfront and no obligation to proceed.</p>
            </div>
        </div>
        <div class="txt-box">
            <h3 class="top-txt"><span>●</span> RESULTS <span>●</span></h3>
            <div class="box">
                <h4 class="box-heading">24 Hour<br>Finance Approvals</h4>
                <p>We secure funding fast. Unlike other brokers, once we have established your requirements, we will
                    know
                    exactly where to place your application and achieve the funding result you need, quickly. We do not
                    waste time testing and submitting applications to several lenders. When we submit, we know you will
                    be
                    accepted. </p>
            </div>
        </div>
        <div class="txt-box">
            <div class="box">
                <h4 class="box-heading">Full Range<br>of Products</h4>
                <p>Commercial and business finance made simple. We have access to funds, quickly, for whatever business
                    requirements you may have, from commercial, semi commercial, property investments, HMO’s, land,
                    development, retail, care homes, hotels, clubs, leisure and many more. We can make it happen.</p>
            </div>
        </div>
        <div class="txt-box">
            <div class="box">
                <h4 class="box-heading">We Work Directly with<br>Underwriters</h4>
                <p>This is why we stand out from our competitors and succeed in acquiring funding quickly for all our
                    clients. We have direct access to lenders’ decision makers and underwriters. We don’t have to wait
                    days
                    or weeks for documentation to be processed or eventually assessed in order for decisions to be made.
                </p>
            </div>
        </div>
        <div class="txt-box">
            <div class="box">
                <h4 class="box-heading">Sourcing the<br>Very Best Deals</h4>
                <p>We have access to over 320 lenders and over 1000 different finance products. Part of our team is made
                    up
                    of ex City bankers and individuals with a breadth of experience and connections in the world of
                    commercial finance. We have the knowledge and expertise you need to find the very best deal
                    at
                    the most competitive rates, regardless of your requirements.</p>
            </div>
        </div>
    </div>

    <h1 class="gold-number" id="gold-number">0800 0286055</h1>

    <!-- ------------------- Funding Types ------------------------- -->

    <div class="black-band">
        <h2>Funding Types</h2>
        <h3 class="black-band-sub-heading">
            Here at Direct Business Finance, our funding will be tailored to meet your requirements. Our expert team
            specialise in sourcing the best deal for your needs
        </h3>
    </div>
    <h3 class="sub-heading">Funding That We Specialise In:</h3>

    <div id="two-column-list">
        <div id="list-column">

            <div class="list-item" id="top-item-list-1"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Property portfolios</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Buy-to-Lets</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Commercial mortgages</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Manufacturing and industry</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Existing trading businesses</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Care Homes</h4>
            </div>
            <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Land & Development funding</h4>
            </div>
            <div class="list-item" id="bottom-item-list-1"><img class="tick" src="assets/tick.svg" alt="" />
                <h4>Retail & supermarkets</h4>
            </div>

        </div>
        <div id="list-column">

            <div class="list-item" id="top-item-list-2"><img src="assets/tick.svg" alt="" />
                <h4>Service Industry</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Leisure industry</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Secured funding</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Secured business loans</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Acquisition finance</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Car Park funding</h4>
            </div>
            <div class="list-item"><img src="assets/tick.svg" alt="" />
                <h4>Flat Conversions</h4>
            </div>
            <div class="list-item" id="bottom-item-list-2"><img src="assets/tick.svg" alt="" />
                <h4>HMO Finance</h4>
            </div>

        </div>
    </div>

    <div id="funding-imgs">
        <img src="assets/land-development.png" alt="men in hard-hats on building site">
        <img src="assets/propert-portfolios.png" alt="council-houses">
        <img src="assets/restaurants.png" alt="busy restaurant">
        <img src="assets/commercial-mortgages.png" alt="skyscrapers">
    </div>
    <div id="funding-imgs-2">
        <img src="assets/funding-types-image.jpg" alt="">
    </div>

    <div id="click-below">
        <h3 class="sub-heading">
            Choose from our list of funding types below, and <span style="color:#d39735;">click</span> to expand for
            more information
        </h3>
    </div>

    <!-- ------------------- Accordion ------------------------- -->

    <div class="accordion">
        <ul class="accordion-wrapper">
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox1" />
                <label for="checkbox1"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Secured Finance
                    </h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>
                        Secured Finance is when the borrower has given their consent for a lender to place a legal
                        charge over a certain asset or assets, such as a property, a vehicle or other tangible items
                        which hold value. If the client serially defaults in payment, the lender has the legal right
                        to seize control of the asset and sell it to settle the balance of the loan outstanding.
                        There is a lower risk for a lender to offer secured finance and this should be reflected in
                        the pay rate. Lenders quite often ask for some form of security if profit margins are tight,
                        or if they want slightly more comfort with the arrangement to lend. With further security
                        and increased lender comfort, lower interest rates are acquired for our clients.
                    </p>
                    <div class="black-box">
                        <h4>Secured finance can be utilised for: </h4>
                        <div class="two-columns">
                            <div class="column">
                                <ul class="secured-column">
                                    <li id="list-item-top-a">Accessing funds very quickly</li>
                                    <li>Commercial property acquisition</li>
                                    <li>Cashflow for trading businesses</li>
                                    <li>Property investors</li>
                                    <li id="list-item-bottom-a">Property developers</li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul class="secured-column">
                                    <li id="list-item-top-c">Commercial</li>
                                    <li>Semi commercial</li>
                                    <li>Funding a new opportunity or project</li>
                                    <li>Commercial Property refinance</li>
                                    <li id="list-item-top-d">New startup business funding</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>We can arrange term lending on a 1st & 2nd charge basis over an extensive array of
                        properties
                        including:</h4>
                    <p class="bottom-p">
                        Retail <span>●</span> Offices <span>●</span> Industrial and Warehouse Units <span>●</span>
                        Dental, GP and Veterinary Practices <span>●</span>
                        Nursing/Care Homes <span>●</span> Leisure and Hospitality including Public Houses
                        <span>●</span> Restaurants <span>●</span> B&B <span>●</span> Guest
                        Houses <span>●</span> Hotels <span>●</span> Gyms <span>●</span> Fitness Centres and Golf
                        Courses
                    </p>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox2" />
                <label for="checkbox2"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Long Term Secured Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>
                        Long Term Secured Finance ideally this is the funding we like to provide for our clients,
                        first time around, if time permits. The more time our clients have at their disposal to plan
                        their future financial requirements and the business direction they wish to take, the lower
                        the rate and lender fees.
                    </p>
                    <p>Tier One, high street commercial lenders require their loan facilities to be
                        repaid over a set number of years and will not countenance interest only arrangements apart
                        from possibly the first year of the loan term. Tier One lenders are risk averse, they offer
                        extremely good rates but they ‘cherry pick’, low risk applications, at low loan to values
                        (LTV) and take an age to make decisions and process an application. We have access to a
                        myriad of long-term commercial lenders who do not take several days to make a decision, who
                        offer high LTV’s, keen rates and interest only options (to increase an applicant’s
                        affordability and in turn this increases the amount of loan available).</p>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox3" />
                <label for="checkbox3"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Short Term Secured Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>
                        From 3 to 60 months, normally utilised because you require funds quickly, this can be purely
                        equity, based lending without the requirement to prove income, with interest compounded
                        monthly or a serviced facility, if income proof is available. Exit of the facility is via
                        disposal of assets or refinance to a long term commercial secured mortgage.
                    </p>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox4" />
                <label for="checkbox4"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Unsecured Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>
                        An unsecured loan is issued and supported by the borrower’s creditworthiness and ability to
                        pay, rather than by any type of collateral. In some cases, our lenders may request a PG
                        (Personal Guarantee). Although the borrower becomes personally liable in a default position,
                        the facility is still classified as unsecured as there is no specified security attributed
                        to the loan. Unsecured requests are the fastest applications to be underwritten and draw
                        down can be within 24 hours.
                    </p>
                    <div class="black-box">
                        <h4 class="centred">Unsecured finance can be utilised for: </h4>
                        <ul class="centred black-box-column">
                            <li>Rapid Cash Flow Injection</li>
                            <li>Oversights (V.A.T. or Corporation Tax shortfall)</li>
                            <li>To Finance Business Assets & Technology</li>
                        </ul>
                        <h4 class="centred">Such as:</h4>
                        <p class="centred" id="black-box-horizontal-list">IT Hardware <span>●</span> IT Software
                            <span>●</span> AV/Automation
                            <span>●</span> IP Telephony <span>●</span> Vehicle / Fleet <span>●</span> Office Fit Out
                            &
                            Furniture <span>●</span> Machinery <span>●</span> General Business Assets</p>
                    </div>
                    <h5 class="centred">Borrow up to £250,000 <span>●</span> 1 to 60 months <span>●</span> No
                        Security Required
                        Fixed repayments <span>●</span> Rates from 4.9% <span>●</span> Early repayments without
                        penalty
                        Simple Directors Guarantee <span>●</span> Funding can be Available in 3-5 Business Days
                        Funds for any Legal Purpose <span>●</span> Flexible Solutions <span>●</span> Terms to suit
                        your needs
                    </h5>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox5" />
                <label for="checkbox5"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>100% Bridging Loans
                    </h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>1 to 24 months</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Non & Full Status</li>
                        <li>Highly competitive rates</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox6" />
                <label for="checkbox6"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>100% Finance for Developers/Joint Venture Development</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>1 to 24 months</li>
                        <li>£500K to £10m</li>
                        <li>Staged Funding</li>
                        <li>Major Construction and Redevelopment</li>
                        <li>Expert Support</li>
                        <li>Greenfield, Brownfield and Contaminated Sites Funded</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox7" />
                <label for="checkbox7"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Auction Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>1 to 12 months terms</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Fast decision</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Funding for any type of property in any condition bought at auction</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox8" />
                <label for="checkbox8"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Bridging Facilities</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Bridge Short-Term Funding Gaps</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>1 to 24 months</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Funding can be Available in 5 to 7 Business Days</li>
                        <li>Competitive Rates</li>
                        <li>Non & Full Status</li>
                        <li>Land or premises purchase up to 70% LTV</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox9" />
                <label for="checkbox9"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Buying your Premises</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>80% LTV Available</li>
                        <li>Rates from 2% Over LIBOR</li>
                        <li>Terms up to 20 Years</li>
                        <li>Loan Amounts Calculated by your Turnover</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Interest only Available</li>
                        <li>All Types of Commercial Property & Land</li>
                        <li>Facilities for Sole Traders, Partnerships or Limited Companies</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox10" />
                <label for="checkbox10"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Commercial Property Purchase Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Individual Terms Bespoke to your Circumstances</li>
                        <li>80% LTV Available</li>
                        <li>Rates from 2% Above LIBOR</li>
                        <li>Terms up to 20 Years</li>
                        <li>Payments Geared to your Turnover</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Interest only Available</li>
                        <li>All Types of Commercial Property & Land</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox11" />
                <label for="checkbox11"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Commercial Property Refinance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>A Cost-Effective Way to Raise Finance</li>
                        <li>Loan Amounts Calculated on Turnover</li>
                        <li>80% LTV Available</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Individual Terms Bespoke to your Circumstances</li>
                        <li>Rates from 2% Above LIBOR</li>
                        <li>Non & Full Status</li>
                        <li>Terms up to 20 years</li>
                        <li>Funds for any Business Purpose</li>
                        <li>Effective Funding for Growth</li>
                        <li>Refinance Based on Commercial & Residential Property & also Land</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox12" />
                <label for="checkbox12"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Finance for BTLs</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>85% LTV Available</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Flexible Options</li>
                        <li>Multiple properties</li>
                        <li>Support building a property portfolio</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Rates from 2% Above LIBOR</li>
                        <li>Individual Terms Bespoke to your Circumstances</li>
                        <li>Non & Full Status</li>
                        <li>Interest Only Available</li>
                        <li>We Support your Business Plans</li>
                        <li>Commercial, Semi-Commercial & Residential Property</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox13" />
                <label for="checkbox13"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Finance for Holiday Lets</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Most Lenders Will Not Fund this Sector</li>
                        <li>We Know the Lenders who Do</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Non & Full Status</li>
                        <li>Rates from 2% Above LIBOR</li>
                        <li>Individual Terms Bespoke to your Circumstances</li>
                        <li>80% LTV Available</li>
                        <li>Support Building a Holiday Let Portfolio</li>
                        <li>Commercial, Semi Commercial & Residential Property</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox14" />
                <label for="checkbox14"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>HMO Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Few Lenders will Provide Funding</li>
                        <li>We Know Those who Fund</li>
                        <li>Market or Business Value</li>
                        <li>75% LTV Available </li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>No Income Proof Required</li>
                        <li>Multiple Properties</li>
                        <li>Small & Large, Licensed HMOs</li>
                        <li>100% LTV Available</li>
                        <li>Maximise Returns</li>
                        <li>Suitable for Experienced Landlords</li>
                        <li>Individual Terms Bespoke to your Circumstances</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox15" />
                <label for="checkbox15"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>High-Value Bridging Loans</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>A large-scale bridge may be a simple way to fund both acquisition & development of a project.
                        To take advantage of a new business opportunity or to solve an unforeseen problem.</p>
                    <ul>
                        <li>No Upper Limit on Lending</li>
                        <li>Competitive Rates</li>
                        <li>Non & Full Status</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Interest Roll-Up Facilities</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox16" />
                <label for="checkbox16"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Land Bridging Loans</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Can be Utilised to Buy any Type of Plot</li>
                        <li>With or Without Planning</li>
                        <li>Non & Full Status</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>70% LTV</li>
                        <li>Acquisition for Development</li>
                        <li>No Minimum or Maximum Amount</li>
                        <li>1 to 24 months</li>
                        <li>Interest Roll-Up Facilities</li>
                        <li>Funding can be Available in 5 to 7 Business Days</li>
                        <p>If the land has no planning agreed, a rate of 1.25%-1.5% per month might be appropriate.
                            <br>
                            Rates will be lower for land with planning permission
                        </p>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox17" />
                <label for="checkbox17"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Property Development Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <div class="black-box" style="margin-top: 20px;">
                        <h4>We can fund all sized projects in the UK such as:</h4>
                        </h4>

                        <ul class="black-box-column">
                            <li>Small, Light Refurbishment Programmes</li>
                            <li>Facilities to Fund Heavy Renovation & Major Conversion Projects</li>
                            <li>Ground-Up Development, from Single Property to a Major Urbanisation</li>
                        </ul>
                    </div>
                    <ul>
                        <li>1 to 60 months</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Tranche Funding</li>
                        <li>Interest Roll-Up Schemes, (where you only incur interest on the funds drawn down)</li>
                        <li>60% of GDV</li>
                        <li>Planning Gain Transactions</li>
                        <li>Expert support</li>
                        <li>We Fund Greenfield, Brownfield & Contaminated Sites</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox18" />
                <label for="checkbox18"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Property Development – Continuation Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Extra Funding when Capital Runs Out</li>
                        <li>£500K to £10m</li>
                        <li>Tranche Funding</li>
                        <li>60% of GDV</li>
                        <li>1 to 24 months</li>
                        <li>Support for Residential, Commercial & Mixed-Use Schemes</li>
                        <li>We Fund Greenfield, Brownfield & Contaminated Sites</li>
                        <li>Interest Roll-Up Facilities</li>
                        <li>Available Fast</li>
                        <li>Expert Support</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item">
                <input type="checkbox" class="checkbox" id="checkbox19" />
                <label for="checkbox19"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Property Development – Exit Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <p>When the development has reached practical completion, reduce the cost of funds while the
                        development sells.</p>
                    <ul class="panel-list">
                        <li>£50’000 to No Maximum Amount</li>
                        <li>1 to 24 months</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>Funding can be Available in 5 to 7 Business Days</li>
                        <li>Competitive Rates</li>
                        <li>Non & Full Status</li>
                    </ul>
                </div>
            </li>
            <li class="accordion-item accordion-item-bottom">
                <input type="checkbox" class="checkbox" id="checkbox20" />
                <label for="checkbox20"><img class="tick" src="assets/tick.svg" alt="" />
                    <h4>Refurbishment Finance</h4>
                </label>
                <div class="arrow-box"><span class="arrow-icon"></span>
                </div>
                <div class="panel">
                    <ul class="panel-list">
                        <li>Light & Heavy Refurbishment Facilities Available</li>
                        <li>£50’000 to No Maximum Amount</li>
                        <li>Monthly rates starting from 0.35%</li>
                        <li>Non & Full Status</li>
                        <li>Facilities for Adverse Credit Available</li>
                        <li>1 to 36 months</li>
                        <li>Interest Roll-Up Schemes</li>
                        <li>Proof of Income not Required</li>
                        <li>100% LTV Available</li>
                        <li>Funding can be available in 5 – 7 business days</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div id="immediate-response">
        <h4 class="direct-business-line">For immediate response 7 days a week</h4>
        <h4 class="direct-business-line-2">CALL:</h4>
        <div id="logo-number">
            <h1 class="gold-number">0800 0286055</h1>
        </div>
    </div>

    <!-- ------------------- Declined Finance ------------------------- -->


    <div class="black-band">
        <h2>Declined Finance</h2>
        <h3 class="black-band-sub-heading">
            Adverse Funding for Low Credit
        </h3>
    </div>
    <div class="two-column-flex">
        <div class="column">
            <p>Obtaining a commercial mortgage when you have bad credit is not easy, but that doesn’t mean it’s out of
                reach; and while the range of commercial lenders willing to consider adverse is certainly narrower, they
                nevertheless exist. Furthermore, we may be able to help customers who have suffered a range of credit
                issues, from late payments to bankruptcy—even repossession.
            </p>
            <p>The key point here is that while everyone’s circumstances are different, rarely are they insurmountable.
                That said, you may still wonder if we can help with your particular situation.
            </p>
            <h5>Frequently Asked Questions:</h5>
            <p class="faq-quote">“I was turned down for a commercial mortgage for having bad credit—how is it that you
                are able to help?”
            </p>
            <p class="top-paragraph">Lenders may turn you away simply because you don’t fit their lending criteria, or
                perhaps they were
                approached during a period in which their “appetite for risk” suddenly changed—it happens. Some will
                provide you with a straight no while others may make it difficult for you to accept by offering you
                unsustainably high repayment terms. Conversely, we may be able to introduce you to specialist commercial
                or private funders, those able to take a broader view with a different, more lenient approach to adverse
                credit, balancing the history and degree of your bad credit against the viability of your project.</p>
            <p class="faq-quote">“My credit file shows a number of defaults in the past—am I still able to get a
                business mortgage?”</p>
            <p class="top-paragraph">There’s no question that defaulting on your repayments will not be taken lightly.
                But the circumstances
                that gave rise to the situation, the length of time that has since passed, and how you have conducted
                yourself in the interim are all factors that can be taken into account. Furthermore, a bad credit report
                doesn’t necessarily imply you lack the income or ability to service the repayments—and many lenders know
                this.
            </p>
            <p class="faq-quote">
                “My debts spiralled out of control, my business has been made bankrupt, and I lost my property—how can I
                possibly be trusted with another commercial mortgage?”
            </p>
            <p class="top-paragraph">When deciding whether to underwrite a project not every decision is made by a
                computer algorithm, nor is
                it left to gut-feeling. The deciding factors are more likely to come down to how well a “business case”
                can be packaged and presented ready for the loan application to be assessed by the underwriter.
            </p>
            <p>There can be no doubt that circumstances like these will warrant additional scrutiny, yet one should be
                mindful that any stipulations a lender may make are there to offset the additional risk they may have to
                assume. The following may help to provide focus:
            </p>
            <h5>Affordability</h5>
            <p class="top-paragraph">Lenders will take a view on the income that your commercial project may generate.
                If the numbers stack up
                this will lend credence to your application. If confidence is high that your venture can make the
                repayments, there’s a greater likelihood of being offered better rates.
            </p>
            <div id="for-more-info">
                <h4 id="top-heading">For more information call our direct business team on:</h4>
                <a href="">0800 0286055</a>
                <h4 id="bottom-heading">Immediate advice<br>7 days a week!</h4>
            </div>
        </div>
        <div class="column">
            <h5 id="ltv">Loan-to-Value (LTV)</h5>
            <p class="top-paragraph">It’s common to find business mortgages being offered at between 60-75%. In some
                circumstances this can
                even be 80%. This is the ratio of how much you are borrowing against the value of the property—the
                loan-to-value.
            </p>
            <p>In the case of an investment property the amount will be determined by the rental income—but this will
                may not exceed 65% of the purchase price. When buying a business that includes stock, fixtures, and
                goodwill, then the loan amount will reduce further still.
            </p>
            <p>Needless-to-say, the balance of the purchase price after the loan will still need to be found in the form
                of a deposit. Furthermore, if you have “additional security,” perhaps a residential property or other
                assets you hold equity in, then these can be put up to minimise the lender’s risk.</p>
            <p class="faq-quote">“What if even after managing to get a commercial mortgage or development finance with
                all my bad credit I
                still need more money?”</p>
            <p class="top-paragraph">In spite of the fact that some specialist lenders will go out of their way to help,
                sometimes the figures
                don’t quite meet your requirements. It could be argued that if the lender has done a thorough appraisal
                of the viability of the business and the associated risks, perhaps even attempting to mitigate those
                risks by placing a charge on your additional property then there’s nothing more to be done.
            </p>
            <p>That’s certainly sound commercial sense. But what if it’s close? Very close, but the lending policy just
                won’t allow that little bit extra, after all they have to draw the line somewhere. Well let’s just say
                they’re not the only shop in town.
            </p>
            <p>If the circumstances require it, we may be able to introduce you to another source of lending: Mezzanine
                Finance. What is it? Mezzanine finance allows one to borrow for a property or business investment, it
                uses both debt and equity. That means you pay the lender interest, but you also give the lender a small
                stake in the project.
            </p>
            <p>Finally, this option is the most common and often chosen by our clients; we can provide access to
                non-bank business funders i.e. Private Business Lenders, which we are extremely well placed and well
                connected in this field.
            </p>
            <p>Unlike equity investors these private funders don’t require you to give away a proportion of your
                company. Private business lending can fill the gap left by traditional lending institutions. Oftentimes
                they have fewer constraints when underwriting and structuring a business loan facility. This extra
                flexibility comes at cost. Since traditional routes take lower risks, they can offer lower rates; but if
                your needs are such that a private funder steps in, then just to be clear: you pose a higher risk and
                will pay a slightly higher rate.
            </p>
            <img src="assets/declied-finance.jpg" alt="businessmen and women shaking hands" id="declined-image">
        </div>
    </div>
    <div id="declined-finance-number-2">
        <img src="assets/declied-finance.jpg" alt="">
        <h4 id="top-heading2">For more information call our direct business team on:</h4>
        <a href="">0800 0286055</a>
        <h4 id="bottom-heading2">Immediate advice<br>7 days a week!</h4>
    </div>

    <!-- ------------------- Twelve Boxes ------------------------- -->

    <div class="black-band">
        <h2 id="loans-made-simple">Business Loans Made Simple<br>From £50,000 - £250 million</h2>
    </div>
    <div class="three-column-boxes-2">
        <div class="icon-box">
            <img src="assets/growth.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Growth<br>Expansion</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/consolidate.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Business<br>Consolidation</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/buyout.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Management<br>Buyouts</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/startup.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>New Business<br>Startups</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/tailored.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Specialist Tailored<br>Funding</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/secured.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Secured<br>Loans</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/restructure.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Re-finance &<br>Re-structure</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/capital.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Increase<br>Working Capital</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/unsecured.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Unsecured<br>Loans</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/mortgage.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Commercial<br>Mortgages</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/bridge.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Bridge<br>Finance</h5>
            </div>
        </div>
        <div class="icon-box">
            <img src="assets/corporate.svg" alt="">
            <div class="gold-band"></div>
            <div class="icon-box-txt">
                <h5>Corporate<br>Finance</h5>
            </div>
        </div>
    </div>

    <!-- ------------------- Why Choose Us? ------------------------- -->

    <div class="black-band" id="why-black-band">
        <h2 id="why-choose-us">Why Choose Us?</h2>
    </div>
    <img id="choose-us-img" src="assets/choose-us.jpg" alt="Group of Business Team members">
    <p class="choose-us-txt">Clients choose Direct Business Finance for many justifiable reasons. It’s not just because we have access to
        funds quickly where other brokers fail. It’s not just that we can process and secure funding fast. It’s a
        combination of what we as a company can offer to clients. We firmly stand by our core code of practise that we
        have adhered to from the very start:</p>
    <div id="choose-us-list">
        <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
            <h4>Exceptional level of customer service.</h4>
        </div>
        <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
            <h4>A dedicated team of highly experienced and knowledgeable financial experts.</h4>
        </div>
        <div class="list-item"><img class="tick" src="assets/tick.svg" alt="" />
            <h4>A trusted network of lenders and private funders that understand our clients’ needs.</h4>
        </div>
    </div>
    <p class="choose-us-txt">Why not capitalise on our expertise and take advantage of our longstanding financial connections and benefit from
        our strong established relationship with our funders. We only work with specialised UK commercial and private
        funders. Once we have an insight into your financial needs, we can immediately deal and process your application
        without constant calls or delays to yourselves. We save time by knowing in advance who will fund your
        requirements, and therefore no need for your application to be placed with several lenders and leave
        ‘footprints’ and jeopardise your future chance of funding. We fully understand and appreciate that in business,
        opportunities and circumstances often arise and funding is required quickly. </p>
    <p class="choose-us-txt">We pride ourselves on an exceptional level of service and speed, in order to secure the right type of business
        finance you may require. Here at Direct Business Finance we’re extremely passionate about what we can offer our
        clients and what we can achieve, by working directly with decision makers and underwriters we deliver results.
        That’s why clients choose us. </p>

    
        <!-- ------------------- Why Choose Us? ------------------------- -->

    <div class="black-band" id="contact-black-band">
        <h2 id="why-choose-us">Contact Us</h2>
    </div>
    <div id="contact-container">
        <div id="info-panel">

        </div>
        <div id="contact-form">
            <h5 class="success"><?= $result; ?></h5>
            <form id="contact" method="post" action="">
            
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">         
            
            <label for="lname">Surname:</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" placeholder="Your mobile number..">

            <label for="landline">Landline Number:</label>
            <input type="text" id="landline" name="landline" placeholder="Your landline number..">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Your email address..">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
            
            <fieldset>
            <button name="submit" type="submit" id="contact-submit">Submit</button>
            </fieldset>
            </form>
        </div>
    </div>
</body>

</html>