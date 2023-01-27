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
                <li class="nav-item active"><a href="<?php echo Constant::$base_url ?>features/compensation-planning-software.php" class="nav-link">Compensation</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/employee-loans-salary-advances.php" class="nav-link">Loans & Advances</a></li>
                <li class="nav-item"><a href="<?php echo Constant::$base_url ?>features/employee-finances.php" class="nav-link">Employee Finances</a></li>
            </ul>
        </div>
    </nav>
    <!-- End of Sub Header -->



    <main id='lc-main'>
        <section class="feature-container">
            <div class="content-container">
                <h2>Manage employee compensation with ease</h2>
                <p>Keka helps you manage and plan your compensation strategies, so your employees are always paid fairly and competitively. Accurately manage your employee salary revisions and never err on what matters most to employees.</p>
                <a href="#" class="desktop-button">Get Started</a>
                <a href="#" class="mobile-button">Get Started</a>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/compensation-hero.svg" alt="compensation-hero">
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">SALARY REVISIONS</p>
                <h2>Keep track of revision cycles and revise salary anytime</h2>
                <p>Keka gives your visibility of all pending salary revisions. Should you need to revise a salary in advance, Keka lets you schedule a revision in the future too. And when you missed revising a salary, Keka payroll takes care of the arrears for delayed revisions.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/compensation-salary-revisions.svg" alt="compensation-salary-revisions">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">OPTIMIZED SALARIES</p>
                <h2>Customize salary structures for the best take-home salary</h2>
                <p>Keka provides you optimized salary templates that you can readily use. You can also customize the templates for all salary ranges and senior executives or the floor teams.
                </p>

            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_CustomizeStructure.svg" alt="Compensation_CustomizeStructure">
                <p></p>
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">GAIN INSIGHTS</p>
                <h2>Compensation analytics and Compa ratio</h2>
                <p>Keka provides rich compensation analytics that can help you in your compensation planning. You can further gain insights on the pay distributions among genders, departments, etc.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_GainInsights.svg" alt="Compensation_GainInsights">
            </div>
        </section>

        <section>
            <div class="keka-client">
                <div class="desktop-visibility">
                    <div class="d-flex align-items-center pr-80">
                        <img src="<?php echo Constant::$base_url ?>images/features/metrochem.png" width="200" height="200" class="img-circle mr-40" alt="Metrochem">
                        <div>
                            <span class="font-weight-normal header-1">One of the best employees friendly. Compensation management in Pharma is very complex, but Keka made it easy, like never before.</span>
                            <div class="d-flex align-items-center mt-20">
                                <div>
                                    <span class="d-block text-large text-secondary">Rajesh K</span>
                                    <span>Vice President- HR | Metrochem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo Constant::$base_url ?>images/features/quotes.svg" class="position-top opacity-50" alt="quotes svg">
                </div>
                <div class="mobile-visibility">
                    <p class="header-3 mb-xs-40"><span class="font-weight-normal">One of the best employees friendly. Compensation management in Pharma is very complex, but Keka made it easy, like never before.</span></p>
                    <div class="d-flex align-items-center mb-xs-30">
                        <img src="<?php echo Constant::$base_url ?>images/features/metrochem.png" width="100" height="100" class="img-circle mr-xs-20" alt="Metrochem">
                        <div>
                            <p class="text-large-bold">Rajesh K</p>
                            <p class="text-large">Vice President- HR | Metrochem</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">COMPENSATION ANALYTICS</p>
                <h2>Forecasting by Salary cost</h2>
                <p>Employee salaries are the biggest expenses for most businesses. Keka Payroll helps you plan your cash flows and show you changes in actuals from the planned salaries.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_Forecasting.svg" alt="Compensation_Forecasting">
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">BUDGET PLANNING</p>
                <h2>Plan and budget your new hires to align with your strategy</h2>
                <p>Keka payroll software helps you budget various job role hiring and give you a project of the employee costs.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_Estimation.svg" alt="Compensation_Estimation">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">COMPA RATIO</p>
                <h2>Measuring employees competitiveness in terms of compensation</h2>
                <p>Most enterprises would like to have fair pay practices, but lack tools to measure pay vs performance. Keka compensation software allows you to track the performance of employees vs pay comparison to ensure your high performing employees are not underpaid.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_Competitiveness.svg" alt="Compensation_Competitiveness">
            </div>
        </section>

        <section class="feature-container">
            <div class="content-container">
                <p class="meta-heading">SALARY TIMELINE</p>
                <h2>See all the history of salary revisions of an employee</h2>
                <p>Keka provides an easy view of all employee salary revisions that keeps track of all variable performance bonuses too. In addition, Keka helps record any additional notes against these revisions.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Compensation_SalaryTimeline.svg" alt="Compensation_SalaryTimeline">
            </div>
        </section>

        <section class="feature-container image-first">
            <div class="content-container">
                <p class="meta-heading">INBOX</p>
                <h2>Inbox: One place to track all expenses</h2>
                <p>All your employees and managers can keep track of pending expense requests in one place - The Inbox. The innovative feature from Keka helps you track all your actions, so you don't miss them.</p>
            </div>
            <div class="image-container">
                <img src="<?php echo Constant::$base_url ?>images/features/Expense_Management_Software_Inbox.svg" alt="Inbox">
            </div>
        </section>

        <section>
            <div class="frequent-questions">
                <h2>Frequently asked questions</h2>
                <div class="accordion col-md-8" id="accordionExample">

                    <div class="question">
                        <div class="question-header collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" id="heading1">
                            <h3>What is compensation management software?</h3>
                        </div>
                        <div id="collapse1" class="question-body collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                            <p>Compensation management software allows you to calculate and communicate total rewards, a tailored summary of the value of each employee's compensation package, which includes things like health insurance and retirement savings</p>
                        </div>
                    </div>

                    <div class="question">
                        <div class="question-header collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" id="heading3">
                            <h3>Why use Compensation Management Software?</h3>
                        </div>

                        <div id="collapse3" class="question-body collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                            <p>Compensation management software that is properly deployed may assist managers and HR make wise, educated decisions about recruiting and compensation planning. Employee engagement, retention, and productivity can all benefit from a company that delivers cutting-edge compensation.</p>
                        </div>
                    </div>

                    <div class="question">
                        <div class="question-header collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" id="heading4">
                            <h3>What are the features of Keka Compensation Management Software?</h3>
                        </div>

                        <div id="collapse4" class="question-body collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <p>Keka’s compensation management system gives you a comprehensive set of features to manage your compensation plan. The insightful analytics allow you to analyze trends right from Upcoming Salaries and Revisions to Planned vs Actual Pay compensation.</p>
                        </div>
                    </div>

                    <div class="question">
                        <div class="question-header collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5" id="heading5">
                            <h3>How does Compensation Management Software help employers?</h3>
                        </div>

                        <div id="collapse5" class="question-body collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                            <p>Companies need to adopt a strategic approach to compensation planning in order to retain top talent. Compensation planning involves more than spreadsheets to be successful. This is where compensation management software comes into picture and helps navigate the compensation strategies and plans in the right direction.</p>
                        </div>
                    </div>
                </div>
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