<?php
include('../common/features_header.php');
?>


<main>
    <!-- Sub Header -->
    <p class="sub-navbar-title mobile-visibility">Payroll</p>
    <nav class="navbar navbar-expand-lg sub-navbar">
        <div class="mobile-sub-navbar">
            <p class="sub-navbar-title desktop-visibility">Payroll</p>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features" class="nav-link">Payroll Software</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/payroll-compliance.php" class="nav-link">Compliance</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/expense-management-software.php" class="nav-link">Expense Management</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/compensation-planning-software.php" class="nav-link">Compensation</a></li>
                <li class="nav-item active"><a href="<?php echo Constant::$base_url ?>features/employee-loans-salary-advances.php" class="nav-link">Loans & Advances</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/employee-finances.php" class="nav-link">Employee Finances</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Sub Header -->



    <main id='lc-main'>
        <section class="feature-container">
            <div class="content-container">
                <h2>Helping employees in need is no more an administrative hassle</h2>
                <p>Employees are extremely loyal to the organizations that help them in their times of need. Keka helps you streamline this process and make it easy for your employees and HR, Finance teams too.</p>
                <a href="#" class="desktop-button">Get Started</a>
                <a href="#" class="mobile-button">Get Started</a>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/loans-advances-hero.svg" alt="loans-advances-hero">
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">CONFIGURABLE LOAN POLICIES</p>
                <h2>Setup loan policies and eligibility criteria</h2>
                <p>Setup loan eligibility criteria based on the salary of an employee and duration of employment with the organization. Keka lets you configure the loan eligibility to suit your organization needs.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Loans_Policies.svg" alt="Loans_Policies">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">LOAN MANAGEMENT</p>
                <h2>Easy loan tracking and EMI management</h2>
                <p>Right from the disbursement of the loan to the recovery of EMIs, Keka payroll software helps you easily track and administer the loans and EMI management.
                </p>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Loans_LoanTracking.svg" alt="Loans_LoanTracking">
                <p></p>
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">EMPLOYEE LOANS</p>
                <h2>Apply interest rates - simple or compound or zero interest</h2>
                <p>Configure interest rates once and let Keka do all the math for you. You can change the interest rate calculations anytime during the loan tenure.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Loans_Intrest.svg" alt="Loans_Intrest">
            </div>
        </section>

        <section>
            <div class="keka-client">
                <div class="desktop-visibility">
                    <div class="d-flex align-items-center pr-80">
                        <img src="<?php echo Constant::$base_url ?>images/features/Britto_Franklin_Joe.png" width="200" height="200" class="img-circle mr-40" alt="Britto_Franklin_Joe">
                        <div>
                            <span class="font-weight-normal header-1">A lot of our employees take advantage of our salary advance program. Keka made it much easier</span>
                            <div class="d-flex align-items-center mt-20">
                                <div>
                                    <span class="d-block text-large text-secondary">BrittoFranklin</span>
                                    <span>Head of People Department</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo Constant::$base_url ?>images/features/quotes.svg" class="position-top opacity-50" alt="quotes svg">
                </div>
                <div class="mobile-visibility">
                    <p class="header-3 mb-xs-40"><span class="font-weight-normal">A lot of our employees take advantage of our salary advance program. Keka made it much easier</span></p>
                    <div class="d-flex align-items-center mb-xs-30">
                        <img src="<?php echo Constant::$base_url ?>images/features/Britto_Franklin_Joe.png" width="100" height="100" class="img-circle mr-xs-20" alt="Britto_Franklin_Joe">
                        <div>
                            <p class="text-large-bold">BrittoFranklin</p>
                            <p class="text-large">Head of People Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">EMI MANAGEMENT</p>
                <h2>Pause or adjust EMI deductions</h2>
                <p>Employees have pressing needs at times and would like to have a pause on their EMI payments for a month or two. Keka allows you to manage it all with a simple click of buttons!</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Loans_PauseEMI.svg" alt="Loans_PauseEMI">
            </div>
        </section>

        <section class="container-fluid-box last-container bg-aqua-10">
            <div class="request-demo">
                <div class="desktop-visibility">
                    <img src="<?php echo Constant::$base_url ?>images/features/Awesome-cta.jpg" class="img-fluid" alt="Cta">
                </div>
                <div class="request-demo-content">
                    <div>
                        <h2 class="header-1 mb-10">Start growing with Keka today</h2>
                        <p>With tools to make every part of your process more human and a support team excited to help you, getting started with a growth engine for your employees has never been easier.</p>
                        <a href="#" target="_blank" rel="noopener"><button type="button" class="btn btn-primary mr-20">Signup for a trial</button></a>
                        <a href="#" target="_blank" rel="noopener"><button type="button" class="btn btn-primary-outline" href="https://signup.keka.com/">Request a demo</button></a>
                    </div>
                </div>
            </div>
        </section>
    </main>




</main>
<?php
include('../common/features_footer.php');
?>

<!-- Cookies -->
<div class="w-100 cookies shadow-high bg-white position-fixed bottom-0 rounded-top-10 d-none">
    <div class="position-relative d-lg-flex align-items-center rounded py-10 py-xs-10 px-60 px-xs-20 rounded-16">
        <div class="d-flex align-items-center mb-xs-20 mb-md-20">
            <img src="<?php echo Constant::$base_url ?>images/features/cookie.png" alt="cookie image" class="desktop-visibility mr-50 mr-xs-20">
            <p class="text-secondary mr-60 mr-md-0 mr-xs-0 text-sm">
                <span>By clicking “Accept", you consent to our website's use of cookies to give you the most relevant experience by remembering your preferences and repeat visits. You may visit “privacy policy” to know more about cookies we use.</span>
            </p>
        </div>
        <div class="d-flex justify-content-center px-40">
            <button class="accept-cookies btn btn-primary btn-xs h-25 mr-20 mr-xs-10">Accept</button>
            <button class="btn btn-primary-outline btn-xs h-25 text-nowrap"><a href="/privacy-policy" target="_blank">Privacy Policy</a></button>
        </div>
    </div>
</div>
<style>
    .hiringcap::before {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 15;
        width: 15px;
        height: 15px;
        background: linear-gradient(135deg, #fbe9ef 0%, #fbe9ef 50%, transparent 50%, transparent);
    }

    .newheaderstrip {
        background-color: #CC7194;
        background-image: url(media/2023/01/1890X85-2.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
    }

    .newheaderstrip p {
        font-size: 22px;
    }

    .stripcta {
        color: #FFEEA9;
        text-decoration: underline;
        font-weight: bold;
    }
</style>
<script src="https://d2w2i7rp1a0wob.cloudfront.net/static/js/jquery.min.js"></script>
<script src="https://d2w2i7rp1a0wob.cloudfront.net/static/js/bootstrap.bundle.min.js" defer></script>
<script src="https://d2w2i7rp1a0wob.cloudfront.net/static/js/keka.min.js?48" defer></script>



<script type='text/javascript'>
    var chimp_url = 'https://www.keka.com/wp-admin/admin-ajax.php';
    var chimp_action = '2ed55cf2b8';
</script>

<script>
    var queryString = window.location.search || '';
    var keyValPairs = [];
    queryString = queryString.replace(/.*?\?/, "");

    if (queryString.length) {
        keyValPairs = queryString.split('&');
        for (pairNum in keyValPairs) {
            var key = keyValPairs[pairNum].split('=')[0];
            if (!key.length) continue;
            sessionStorage.setItem(key, keyValPairs[pairNum].split('=')[1]);
        }
    }

    function getQueryVars() {
        queryVars = ''
        for (key in Object.keys(sessionStorage)) {
            queryVars += sessionStorage.key(key) + "=" + sessionStorage.getItem(sessionStorage.key(key));
            if (key != sessionStorage.length - 1) {
                queryVars += "&"
            }
        }
        return queryVars;
    }

    $('a').filter(function() {
        return this.href.match(/.*signup.keka.com.*/);
    }).one('click', function() {
        if (getQueryVars().length) {
            this.href += "?" + getQueryVars();
        }
    });
</script>

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1034376784015170');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1034376784015170&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<!-- linkedin retargeting -->
<script type="text/javascript">
    _linkedin_partner_id = "94120";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>

<script type="text/javascript">
    (function(l) {
        if (!l) {
            window.lintrk = function(a, b) {
                window.lintrk.q.push([a, b])
            };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script>

<noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=94120&fmt=gif" />
</noscript>
<!-- End Linkedin retargeting -->

</body>

</html>