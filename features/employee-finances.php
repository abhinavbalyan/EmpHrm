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
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/employee-loans-salary-advances.php" class="nav-link">Loans & Advances</a></li>
                <li class="nav-item active"><a href="<?php echo Constant::$base_url ?>features/employee-finances.php" class="nav-link">Employee Finances</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Sub Header -->



    <main id='lc-main'>
        <section class="feature-container">
            <div class="content-container">
                <h2>Employee centric payroll that saves taxes with no complex jargon</h2>
                <p>Most employees do not understand tax saving jargon. Keka <span class="text-blue">payroll software</span> has been designed to make the whole Tax Declaration section easiest and most useful for all employees.</p>
                <a href="#" class="desktop-button">Get Started</a>
                <a href="#" class="mobile-button">Get Started</a>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/compensation-hero.svg" alt="compensation-hero">
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">SALARY HISTORY</p>
                <h2>A timeline of all salary revisions with a breakup of components</h2>
                <p>Keka provides an easy view of all employee salary revisions that keeps track of all your variable performance bonuses too. In addition, Keka helps record any additional notes against these revisions.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_SalaryTimeline.svg" alt="Compensation_SalaryTimeline">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">INCOME TAX COMPUTATION</p>
                <h2>Keka clears all income tax queries of your employees</h2>
                <p>Most queries that your finance team receives are about income tax calculation. Keka helps clear these questions for your employees by providing a detailed breakup of income tax calculations of the past months and projections for future months.
                </p>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/employee_finances_tax_calculations_and_deductions.svg" alt="employee_finances_tax_calculations_and_deductions">
                <p></p>
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">TAX DECLARATIONS</p>
                <h2>Tax declarations made easy with no complex jargon</h2>
                <p>Keka allows an employee to declare tax declarations and upload their proof documents in an intuitive and easy to use interface. Employees can scan and upload from their mobile app too.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/employee_finances_investments.svg" alt="employee_finances_investments">
            </div>
        </section>

        <section>
            <div class="keka-client">
                <div class="desktop-visibility">
                    <div class="d-flex align-items-center pr-80">
                        <img src="<?php echo Constant::$base_url ?>images/features/splash.png" width="200" height="200" class="img-circle mr-40" alt="Divya">
                        <div>
                            <span class="font-weight-normal header-1">Transparent and easy to use, Keka is the solution to all the old and tedious methods of managing HR and finance.</span>
                            <div class="d-flex align-items-center mt-20">
                                <div>
                                    <span class="d-block text-large text-secondary">Divya Singh</span>
                                    <span>Senior HR Coordinator | Splash</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo Constant::$base_url ?>images/features/quotes.svg" class="position-top opacity-50" alt="quotes svg">
                </div>
                <div class="mobile-visibility">
                    <p class="header-3 mb-xs-40"><span class="font-weight-normal">Transparent and easy to use, Keka is the solution to all the old and tedious methods of managing HR and finance.</span></p>
                    <div class="d-flex align-items-center mb-xs-30">
                        <img src="<?php echo Constant::$base_url ?>images/features/splash.png" width="100" height="100" class="img-circle mr-xs-20" alt="Divya">
                        <div>
                            <p class="text-large-bold">Divya Singh</p>
                            <p class="text-large">Senior HR Coordinator | Splash</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">EXPENSES & REIMBURSEMENTS</p>
                <h2>Scan, upload, and track all reimbursements</h2>
                <p>Employees can scan and upload their receipts using their mobile app and claim their expenses as well as reimbursement allowance payments. Keka helps them keep track of all pending payments and approvals all in one place.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/employee_finances_inbox.svg" alt="employee_finances_inbox">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">MOBILE APP</p>
                <h2>All the payroll information available any time anywhere</h2>
                <p>Keka mobile app allows an employee to view all their financial information. It includes tracking, expenses, income tax calculation, tax declarations and uploads, pay slips.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/employee_finances_mobile_app.svg" alt="employee_finances_mobile_app">
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