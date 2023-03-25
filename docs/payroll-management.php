<?php
include('../common/docs_header.php');
?>
<div id="inner-wrap" class="wrap hfeed kt-clear">
    <div class="betterdocs-single-wraper betterdocs-single-bg betterdocs-single-layout1">
        <div class="betterdocs-search-form-wrap">
            <div class="betterdocs-live-search">
                <form class="betterdocs-searchform">
                    <svg class="docs-search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38px" viewBox="0 0 50 50" version="1.1">
                        <g id="surface1">
                            <path style=" " d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z "></path>
                        </g>
                    </svg>
                    <input type="text" class="betterdocs-search-field" name="s" placeholder="Search.." autocomplete="off" value="">
                    <input type="hidden" value="Search" class="betterdocs-search-submit"><svg class="docs-search-loader" width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#444b54">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(1 1)" stroke-width="2">
                                <circle stroke-opacity=".5" cx="18" cy="18" r="18" />
                                <path d="M36 18c0-9.94-8.06-18-18-18">
                                    <animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite" />
                                </path>
                            </g>
                        </g>
                    </svg>
                    <svg class="docs-search-close" xmlns="http://www.w3.org/2000/svg" width="38px" viewBox="0 0 128 128">
                        <path fill="#fff" d="M64 14A50 50 0 1 0 64 114A50 50 0 1 0 64 14Z" transform="rotate(-45.001 64 64.001)"></path>
                        <path class="close-border" d="M64,117c-14.2,0-27.5-5.5-37.5-15.5c-20.7-20.7-20.7-54.3,0-75C36.5,16.5,49.8,11,64,11c14.2,0,27.5,5.5,37.5,15.5c10,10,15.5,23.3,15.5,37.5s-5.5,27.5-15.5,37.5C91.5,111.5,78.2,117,64,117z M64,17c-12.6,0-24.4,4.9-33.2,13.8c-18.3,18.3-18.3,48.1,0,66.5C39.6,106.1,51.4,111,64,111c12.6,0,24.4-4.9,33.2-13.8S111,76.6,111,64s-4.9-24.4-13.8-33.2S76.6,17,64,17z"></path>
                        <path class="close-line" d="M53.4,77.6c-0.8,0-1.5-0.3-2.1-0.9c-1.2-1.2-1.2-3.1,0-4.2l21.2-21.2c1.2-1.2,3.1-1.2,4.2,0c1.2,1.2,1.2,3.1,0,4.2L55.5,76.7C54.9,77.3,54.2,77.6,53.4,77.6z"></path>
                        <path class="close-line" d="M74.6,77.6c-0.8,0-1.5-0.3-2.1-0.9L51.3,55.5c-1.2-1.2-1.2-3.1,0-4.2c1.2-1.2,3.1-1.2,4.2,0l21.2,21.2c1.2,1.2,1.2,3.1,0,4.2C76.1,77.3,75.4,77.6,74.6,77.6z"></path>
                    </svg>
                </form>
            </div>
        </div>
        <div class="betterdocs-content-area">
            <?php
            include('/docs_sidebar.php');
            ?>
            <div id="betterdocs-single-main" class="docs-single-main">
                <header class="betterdocs-entry-header">
                    <div class="docs-single-title">
                        <nav id="betterdocs-breadcrumb" class="betterdocs-breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                            <ul class="betterdocs-breadcrumb-list">
                                <li class="betterdocs-breadcrumb-item item-home"><a class="bread-link bread-home" href="https://icehrm.com/explore/docs" title="Home">Home</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-cat item-custom-post-type-docs"><a class="bread-cat bread-custom-post-type-docs" href="https://icehrm.com/explore/docs/" title="Docs">Docs</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/payroll/">Payroll</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1160 current"><span>Payroll Management</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Payroll Management</h1>
                    </div>
                </header>
                <div class="betterdocs-entry-content">
                    <div class="betterdocs-print-pdf">
                        <span class="betterdocs-print-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="20px">
                                <path fill="#66798f" d="M14 16H66V24H14z"></path>
                                <path fill="#b0c1d4" d="M8,63.5c-3,0-5.5-2.5-5.5-5.5V26c0-3,2.5-5.5,5.5-5.5h64c3,0,5.5,2.5,5.5,5.5v32 c0,3-2.5,5.5-5.5,5.5H8z"></path>
                                <path fill="#66798f" d="M72,21c2.8,0,5,2.2,5,5v32c0,2.8-2.2,5-5,5H8c-2.8,0-5-2.2-5-5V26c0-2.8,2.2-5,5-5H72 M72,20H8 c-3.3,0-6,2.7-6,6v32c0,3.3,2.7,6,6,6h64c3.3,0,6-2.7,6-6V26C78,22.7,75.3,20,72,20L72,20z"></path>
                                <path fill="#fff" d="M16.5 2.5H63.5V23.5H16.5z"></path>
                                <path fill="#788b9c" d="M63,3v20H17V3H63 M64,2H16v22h48V2L64,2z"></path>
                                <path fill="#8bb7f0" d="M22,41.5c-3,0-5.5-2.5-5.5-5.5V20.5h47V36c0,3-2.5,5.5-5.5,5.5H22z"></path>
                                <path fill="#4e7ab5" d="M63,21v15c0,2.8-2.2,5-5,5H22c-2.8,0-5-2.2-5-5V21H63 M64,20H16v16c0,3.3,2.7,6,6,6h36 c3.3,0,6-2.7,6-6V20L64,20z"></path>
                                <path fill="#fff" d="M16.5 50.5H63.5V77.5H16.5z"></path>
                                <path fill="#788b9c" d="M63,51v26H17V51H63 M64,50H16v28h48V50L64,50z"></path>
                                <path fill="#d6e3ed" d="M17 52H63V56H17z"></path>
                                <path fill="#788b9c" d="M26 59H54V60H26zM26 67H54V68H26z"></path>
                                <g>
                                    <path fill="#ffeea3" d="M70 28A2 2 0 1 0 70 32A2 2 0 1 0 70 28Z"></path>
                                </g>
                                <path fill="#66798f" d="M17,56v-4h46v4h2c1.7,0,3-1.3,3-3l0,0c0-1.7-1.3-3-3-3H15c-1.7,0-3,1.3-3,3l0,0c0,1.7,1.3,3,3,3H17z"></path>
                            </svg></span>
                    </div>
                    <div class="betterdocs-toc toc-list-number">
                        <span class="toc-title">Table of Contents</span>
                        <ul class="toc-list betterdocs-hierarchial-toc">
                            <li class="betterdocs-toc-heading-level-1"><a href="#payroll-module-usage">Payroll Module Usage</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#understanding-employee-salary-and-salary-components">Understanding Employee Salary and Salary Components</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#defining-salary-for-your-employees">Defining Salary for Your Employees</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#creating-company-payroll">Creating Company Payroll</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#adding-a-calculation-group-for-germany">Adding a Calculation Group For Germany</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#adding-payroll-columns">Adding Payroll Columns</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-basic-salary">Adding Payroll Column for Basic Salary</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-car-allowance">Adding Payroll Column for Car Allowance</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-hours-worked-during-month-column">Adding: Hours Worked During Month Column</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-hourly-pay-column">Adding: Hourly Pay Column</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payment-for-hours-worked-column">Adding: Payment For Hours Worked Column</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-gross-monthly-salary-column">Adding Gross Monthly Salary Column</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-columns-for-employee-details">Adding payroll Columns for Employee Details</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#creating-calculation-method-to-calculate-19-tax">Creating Calculation Method to Calculate 19% Tax</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#add-net-salary-column">Add "Net Salary" column</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#create-payslip-template">Create Payslip Template</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#create-payroll-report">Create Payroll Report</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#selecting-employees-for-your-payroll-report">Selecting Employees For Your Payroll Report</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#configure-employee-salary-components">Configure Employee Salary Components</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#downloading-payslips">Downloading Payslips</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#20-toc-title">Employee payslip in Documents</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#21-toc-title">Payslip in User Reports</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#generating-payroll-for-next-month">Generating Payroll for Next Month</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#clone-a-previous-payroll-report-using-copy-button">Clone a previous Payroll Report using Copy button</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#change-dates-and-set-status-to-draft">Change Dates </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <h1 id="payroll-module-usage" class="betterdocs-content-heading" id="payroll-module-usage">Payroll Module Usage <a href="#payroll-module-usage" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#payroll-module-usage" data-title="Copy URL">#</a></h1>
                        <p>You may use IceHrm to achieve the following tasks:</p>
                        <ul>
                            <li>Store employee salary details with and group into salary components</li>
                            <li>Calculate various deductions</li>
                            <li>Include overtime payments into employee salary slips depending on number of hours</li>
                            <li>Add salary components based on attendance sheets</li>
                            <li>Allow employees to download payslips in PDF format</li>
                        </ul>
                        <h1 id="understanding-employee-salary-and-salary-components" class="betterdocs-content-heading" id="understanding-employee-salary-and-salary-components">Understanding Employee Salary and Salary Components <a href="#understanding-employee-salary-and-salary-components" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#understanding-employee-salary-and-salary-components" data-title="Copy URL">#</a></h1>
                        <p>When paying salary to your employees you can have it divided into several components. When you create a new installation of IceHrm we pre-define some Salary components and group these salary components accordingly for your convenience. If required you can add more. (You may view/edit Salary Components under menu <strong>Payroll -&gt; Salary</strong>)</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBncfEwJjOV7A80sa%2FScreen%20Shot%202017-08-06%20at%207.39.27%20PM.png?generation=1543473679180244&amp;alt=media" alt="" /></figure>
                        <p><strong>Salary Component Types</strong></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBnchZgw5Fovu_Qpc%2FScreen%20Shot%202017-08-06%20at%207.44.21%20PM.png?generation=1543473678911390&amp;alt=media" alt="" /></figure>
                        <p>Also in order to make it easier to define taxes and other deductions on salary components, we group these into Salary Component Types</p>
                        <h1 id="defining-salary-for-your-employees" class="betterdocs-content-heading" id="defining-salary-for-your-employees">Defining Salary for Your Employees <a href="#defining-salary-for-your-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#defining-salary-for-your-employees" data-title="Copy URL">#</a></h1>
                        <p>You can add salary information for your employees under the <strong>Payroll &gt; Salary -&gt; Employee Salary Components </strong>tab.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBncjtp1TYu2UnJ6m%2FScreen%20Shot%202017-08-06%20at%207.51.16%20PM.png?generation=1543473678545702&amp;alt=media" alt="" /></figure>
                        <p>This way you can define other salary components like allowances and hourly pay details.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBncli8X1uaxLsOt_%2FScreen%20Shot%202017-08-06%20at%208.38.28%20PM.png?generation=1543473678716295&amp;alt=media" alt="" /></figure>
                        <h1 id="creating-company-payroll" class="betterdocs-content-heading" id="creating-company-payroll">Creating Company Payroll <a href="#creating-company-payroll" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#creating-company-payroll" data-title="Copy URL">#</a></h1>
                        <p>Company payroll is available under the Payroll -&gt; Payroll menu. We have already added information for calculating payroll for Sri Lanka and Ghana. You can delete all these before starting to work on your payroll. But sometimes these data can come in handy as an example for building your payroll.</p>
                        <h1 id="adding-a-calculation-group-for-germany" class="betterdocs-content-heading" id="adding-a-calculation-group-for-germany">Adding a Calculation Group For Germany <a href="#adding-a-calculation-group-for-germany" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-a-calculation-group-for-germany" data-title="Copy URL">#</a></h1>
                        <p>First, we should start with adding a Payroll Group. Go to <strong>Payroll -&gt; Payroll reports -&gt; payroll groups tab</strong> and add a new payroll group. As an example, we will be using Germany.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="234" src="https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-1024x234.png" alt="" class="wp-image-1915" srcset="https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-1024x234.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-300x69.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-768x176.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-1536x351.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18-600x137.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/03/Screenshot-from-2022-03-14-15-48-18.png 1670w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h1 id="adding-payroll-columns" class="betterdocs-content-heading" id="adding-payroll-columns">Adding Payroll Columns <a href="#adding-payroll-columns" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-payroll-columns" data-title="Copy URL">#</a></h1>
                        <p>One of the best ways to decide which columns you need to have in your payroll report is to think of rows in your employee&#8217;s payslip. Payroll report as a table that holds all your individual employee payslips in each row.</p>
                        <p>Since you have three salary components Basic, Car Allowance, and Hourly pay we can define the following payroll columns. (For now, let&#8217;s assume tax is 19% on total salary). Now here is the list of columns to show on payroll:</p>
                        <ol>
                            <li>Basic Salary</li>
                            <li>Car Allowance</li>
                            <li>Hours Worked During Month</li>
                            <li>Hourly Pay</li>
                            <li>Payment For Hours Worked</li>
                            <li>Gross monthly salary</li>
                            <li>Deduction for Tax</li>
                            <li>Net Salary</li>
                        </ol>
                        <p>So now we can start adding payroll columns. It&#8217;s a good idea to prefix your payroll columns with their respective country code to make them easier to find.</p>
                        <h2 id="adding-payroll-column-for-basic-salary" class="betterdocs-content-heading" id="adding-payroll-column-for-basic-salary">Adding Payroll Column for Basic Salary <a href="#adding-payroll-column-for-basic-salary" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-payroll-column-for-basic-salary" data-title="Copy URL">#</a></h2>
                        <p>Now you can go to the tab &#8220;Payroll Columns&#8221; and click on &#8220;Add&#8221;.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="690" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37-1024x690.png" alt="" class="wp-image-2223" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37-1024x690.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37-300x202.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37-768x517.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37-600x404.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-46-37.png 1044w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>As this column only depends on the Basic Salary component you can just select that salary component from the list. (Note that in some cases you can add multiple salary components to the same column). Also, make sure you set the enable to Yes and default value to 0.00. The <strong>column order should be 1</strong> because it should be the first column in your payroll report for Germany.</p>
                        <h2 id="adding-payroll-column-for-car-allowance" class="betterdocs-content-heading" id="adding-payroll-column-for-car-allowance">Adding Payroll Column for Car Allowance <a href="#adding-payroll-column-for-car-allowance" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-payroll-column-for-car-allowance" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="820" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50-1024x820.png" alt="" class="wp-image-2225" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50-1024x820.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50-300x240.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50-768x615.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50-600x480.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-47-50.png 1037w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="adding-hours-worked-during-month-column" class="betterdocs-content-heading" id="adding-hours-worked-during-month-column">Adding: Hours Worked During Month Column <a href="#adding-hours-worked-during-month-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-hours-worked-during-month-column" data-title="Copy URL">#</a></h2>
                        <p>There are employees who do not have a fixed salary but are paid on an hourly basis. The easiest way to handle these employees is to first create a column to get the number of hours worked for the month using attendance. In order to do that you can use pre-defined calculations.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="732" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56-1024x732.png" alt="" class="wp-image-2226" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56-1024x732.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56-300x214.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56-768x549.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56-600x429.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-48-56.png 1058w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="adding-hourly-pay-column" class="betterdocs-content-heading" id="adding-hourly-pay-column">Adding: Hourly Pay Column <a href="#adding-hourly-pay-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-hourly-pay-column" data-title="Copy URL">#</a></h2>
                        <p>We can take hourly pay from the salary component and create this column as below:</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="771" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08-1024x771.png" alt="" class="wp-image-2227" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08-1024x771.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08-300x226.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08-768x578.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08-600x452.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-50-08.png 1102w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="adding-payment-for-hours-worked-column" class="betterdocs-content-heading" id="adding-payment-for-hours-worked-column">Adding: Payment For Hours Worked Column <a href="#adding-payment-for-hours-worked-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-payment-for-hours-worked-column" data-title="Copy URL">#</a></h2>
                        <p>Based on the previous column you have added, now you can create the hourly pay based column as shown below:</p>
                        <p><strong>First create a new payroll column:</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="512" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12-1024x512.png" alt="" class="wp-image-2228" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12-1024x512.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12-300x150.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12-768x384.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12-600x300.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-51-12.png 1099w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p><strong>Then, Click on the &#8220;Add&#8221; button next to Calculation Columns.</strong></p>
                        <p>Here you are adding the previously defined <strong>hours per month column as a parameter named X</strong> and the <strong>hourly pay column as parameter Y,</strong> so you can use it to do various calculations using these columns</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="955" height="475" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-52-12.png" alt="" class="wp-image-2229" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-52-12.png 955w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-52-12-300x149.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-52-12-768x382.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-52-12-600x298.png 600w" sizes="(max-width: 955px) 100vw, 955px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="996" height="437" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-53-07.png" alt="" class="wp-image-2230" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-53-07.png 996w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-53-07-300x132.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-53-07-768x337.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-53-07-600x263.png 600w" sizes="(max-width: 996px) 100vw, 996px" /></figure>
                        <p>Then under the <strong>Function</strong> field, you can multiply these columns (all other basic math expressions will work here)</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBnd0PiEdBvBTtHjM%2FScreen%20Shot%202017-09-08%20at%204.38.30%20PM.png?generation=1543473678540241&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-gross-monthly-salary-column" class="betterdocs-content-heading" id="adding-gross-monthly-salary-column">Adding Gross Monthly Salary Column <a href="#adding-gross-monthly-salary-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-gross-monthly-salary-column" data-title="Copy URL">#</a></h2>
                        <p>Total monthly gross salary should be the sum of basic salary, car allowance, and payment for total hours worked. This column can be created as shown below:</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="712" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33-1024x712.png" alt="" class="wp-image-2231" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33-1024x712.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33-300x209.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33-768x534.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33-600x417.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-54-33.png 1183w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="adding-payroll-columns-for-employee-details" class="betterdocs-content-heading" id="adding-payroll-columns-for-employee-details">Adding payroll Columns for Employee Details <a href="#adding-payroll-columns-for-employee-details" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#adding-payroll-columns-for-employee-details" data-title="Copy URL">#</a></h2>
                        <p>When you need to indicate your employees&#8217; details such as Employee Name, Employee ID, Bank Account Number, or Job Title, follow up the below steps: This will be the same as you added the payroll columns before.</p>
                        <ul>
                            <li>First click on the <strong>Add New</strong> option under the <strong>Payroll Column Tab</strong>.</li>
                            <li>Add a <strong>name </strong>to the payroll column. Example: Employee First Name</li>
                            <li>Then select the <strong>Get Employee Data</strong> option for the <strong>Predefined Calculations</strong> field.</li>
                            <li>Select the Payroll Group (<em>You can keep this as Common because these details can be common for all of your payroll groups</em> )</li>
                            <li>Give the <strong>Column Order</strong>.</li>
                            <li>Set the Default Value to 0</li>
                            <li>Then change the <strong>Function Type</strong> to <strong>Simple </strong>(always select <strong>simple </strong>for these type of columns)</li>
                            <li>Under the <strong>Function</strong> field, you need to <strong>add the field name </strong>(If you don&#8217;t know how to add the field name, go to the <strong>Employee Fields</strong> tab under the <strong>Admin m</strong>odule. There, you can find the relevant field name)</li>
                        </ul>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MTFwUqZ-s3_5sfd-JYL%2F-MTGQpyXGEYhn33hrFTd%2Fpayroll.png?alt=media&amp;token=65d9b488-10e8-4923-9653-4ee9afd58ef3" alt="" /></figure>
                        <h2 id="creating-calculation-method-to-calculate-19-tax" class="betterdocs-content-heading" id="creating-calculation-method-to-calculate-19-tax">Creating Calculation Method to Calculate 19% Tax <a href="#creating-calculation-method-to-calculate-19-tax" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#creating-calculation-method-to-calculate-19-tax" data-title="Copy URL">#</a></h2>
                        <p>As you have seen you can do some calculations at the column level. But things such as tax which are having different percentages and multiple slabs it&#8217;s better to use saved calculations. Now you should go to the <strong>Saved Calculations</strong> tab and add a new calculation method.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="371" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52-1024x371.png" alt="" class="wp-image-2207" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52-1024x371.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52-300x109.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52-768x278.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52-600x217.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-47-52.png 1265w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>You can create a calculation method based on a Salary component group (type), a Salary component, or an Existing payroll column. In this case, we use an existing payroll column. Now click on the add button on the Calculation Process field to define the actual calculation. According to our example, the full range of gross salary tax is 19%. So we don&#8217;t need to define any ranges and can calculate the tax as follows.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBnd67dE7pfYvBg8a%2FScreen%20Shot%202017-09-08%20at%205.22.25%20PM.png?generation=1543473678748585&amp;alt=media" alt="" /></figure>
                        <p>Now we need to create a payroll column and add this calculation method to that column.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="680" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24-1024x680.png" alt="" class="wp-image-2232" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24-1024x680.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24-300x199.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24-768x510.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24-600x399.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-55-24.png 1099w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Please also pay attention to how we are assigning <strong>column order</strong> to each column.</p>
                        <h2 id="add-net-salary-column" class="betterdocs-content-heading" id="add-net-salary-column">Add &#8220;Net Salary&#8221; column <a href="#add-net-salary-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#add-net-salary-column" data-title="Copy URL">#</a></h2>
                        <p>Net Salary is Gross salary minus tax. So we create a Net Salary column as shown below:</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="726" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18-1024x726.png" alt="" class="wp-image-2233" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18-1024x726.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18-300x213.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18-768x545.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18-600x426.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-02-09-56-18.png 1073w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Now we have finished defining payroll columns. When you go to Payroll columns and search &#8220;DE &#8211; &#8221; you can see all the fields in German payroll.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="340" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-1024x340.png" alt="" class="wp-image-2208" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-1024x340.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-300x100.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-768x255.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-1536x510.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35-600x199.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-51-35.png 1646w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h1 id="create-payslip-template" class="betterdocs-content-heading" id="create-payslip-template">Create Payslip Template <a href="#create-payslip-template" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#create-payslip-template" data-title="Copy URL">#</a></h1>
                        <p>As you have all the required payroll columns you can use these to create a payslip template. So we are going to create a new payslip template named German Payslip Template and add all the columns defined above. Goto Payslip Templates tab and create a new payslip. A payslip template has can be created by adding the following items:</p>
                        <ol>
                            <li>Company Logo</li>
                            <li>Company Name</li>
                            <li>Text (For adding special messages to notifications to employees)</li>
                            <li>Separators (For separating sections on payslip)</li>
                            <li>Payroll columns</li>
                        </ol>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndEFmjoC6a7310x%2FScreen%20Shot%202017-09-08%20at%205.47.19%20PM.png?generation=1543473678471775&amp;alt=media" alt="" /></figure>
                        <p></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndG_CNGmFYvka6S%2FScreen%20Shot%202017-09-08%20at%205.51.57%20PM.png?generation=1543473678697082&amp;alt=media" alt="" /></figure>
                        <p></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndIKHTqe5qZzKZ3%2FScreen%20Shot%202017-09-08%20at%205.52.09%20PM.png?generation=1543473678491793&amp;alt=media" alt="" /></figure>
                        <h1 id="create-payroll-report" class="betterdocs-content-heading" id="create-payroll-report">Create Payroll Report <a href="#create-payroll-report" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#create-payroll-report" data-title="Copy URL">#</a></h1>
                        <p>Payroll Report is the unit used to combine all the payroll columns and calculate monthly payments for all the selected employees. Go to the Payroll Reports tab and create a new Payroll Report.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndKzxZqyagoorhN%2FScreen%20Shot%202017-09-09%20at%201.01.45%20AM.png?generation=1543473678569654&amp;alt=media" alt="" /></figure>
                        <p>When you create the payroll report it should be in a Draft state. Only when it is processing completed it should go to Completed state.Also, you need to select all the payroll columns you defined earlier for german payroll here as shown above.</p>
                        <h1 id="selecting-employees-for-your-payroll-report" class="betterdocs-content-heading" id="selecting-employees-for-your-payroll-report">Selecting Employees For Your Payroll Report <a href="#selecting-employees-for-your-payroll-report" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#selecting-employees-for-your-payroll-report" data-title="Copy URL">#</a></h1>
                        <p>The above payroll is for monthly paid employees who are in the German Payroll Calculation group. So you need to add some employees satisfying the above requirements under the <strong>&#8220;Company Payroll&#8221;</strong> tab.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndMrzQDbdjl_y-L%2FScreen%20Shot%202017-09-09%20at%201.04.25%20AM.png?generation=1543473678723287&amp;alt=media" alt="" /></figure>
                        <p>As shown below we have added two employees to the German payroll</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="217" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-1024x217.png" alt="" class="wp-image-2209" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-1024x217.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-300x64.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-768x163.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-1536x326.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14-600x127.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-55-14.png 1663w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h1 id="configure-employee-salary-components" class="betterdocs-content-heading" id="configure-employee-salary-components">Configure Employee Salary Components <a href="#configure-employee-salary-components" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#configure-employee-salary-components" data-title="Copy URL">#</a></h1>
                        <p>Since the payroll depends on employee salary components you should make sure all employee salary components are defined properly. You can do this by going to the Payroll -&gt; Salary module and selecting the <strong>Employee Salary</strong> tab.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="229" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-1024x229.png" alt="" class="wp-image-2210" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-1024x229.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-300x67.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-768x171.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-1536x343.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01-600x134.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-57-01.png 1658w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>As you can see here<strong> IceHrm Employee</strong> is getting a Basic Allowance while <strong>Melba Dowling</strong> getting paid per hour. As we have configured our payroll report application, now we are able to calculate the tax and other payroll columns properly. To process the Payroll Report click on the blue color &#8220;Process&#8221; button on your payroll report under the Payroll Report tab. This will change the status from <strong>Draft</strong> to <strong>Processing.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="213" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-1024x213.png" alt="" class="wp-image-2205" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-1024x213.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-300x62.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-768x160.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-1536x320.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46-600x125.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-31-46.png 1663w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="213" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-1024x213.png" alt="" class="wp-image-2206" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-1024x213.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-300x62.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-768x160.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-1536x320.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01-600x125.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-09-32-01.png 1661w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Once the status changes to Processed, click on the view button to view the payroll report. </p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="227" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-1024x227.png" alt="" class="wp-image-2211" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-1024x227.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-300x67.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-768x171.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-1536x341.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55-600x133.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-00-55.png 1666w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>As you can see here IceHrm can now calculate your payroll. After checking figures manually you can click on generate payslips button which will change the payroll report status to <strong>Completed</strong>.</p>
                        <h1 id="downloading-payslips" class="betterdocs-content-heading" id="downloading-payslips">Downloading Payslips <a href="#downloading-payslips" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#downloading-payslips" data-title="Copy URL">#</a></h1>
                        <h2 class="betterdocs-content-heading" id="20-toc-title">Employee payslip in Documents <a href="#20-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#20-toc-title" data-title="Copy URL">#</a></h2>
                        <p>As an admin, you can go to <strong>Manage -&gt; Documents -&gt; Employee payslip</strong> to view and download employee payslips.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="271" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1024x271.png" alt="" class="wp-image-2212" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1024x271.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-300x79.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-768x203.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1536x407.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-600x159.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24.png 1658w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Your employees can log in to their accounts and go to <strong>Documents -&gt; My documents -&gt; Payslips</strong> to download their payslips.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="223" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1024x223.png" alt="" class="wp-image-2213" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1024x223.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-300x65.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-768x167.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1536x334.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-600x130.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16.png 1666w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 class="betterdocs-content-heading" id="21-toc-title">Payslip in User Reports <a href="#21-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#21-toc-title" data-title="Copy URL">#</a></h2>
                        <p>Go to the <strong>User Reports -&gt; Reports</strong> module.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndW-rtN4ah1opUJ%2FScreen%20Shot%202017-09-09%20at%204.01.08%20AM.png?generation=1543473678513321&amp;alt=media" alt="" /></figure>
                        <p>And then download the Payslip from any completed payroll report</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBndYvpjngu1htwQn%2FScreen%20Shot%202017-09-09%20at%204.02.29%20AM.png?generation=1543473678727330&amp;alt=media" alt="" /></figure>
                        <p>Payslip for IceHrm Employee will look like this:</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBnd_GxQKgudi_KFw%2FScreen%20Shot%202017-09-09%20at%204.03.37%20AM.png?generation=1543473678711473&amp;alt=media" alt="" /></figure>
                        <h1 id="generating-payroll-for-next-month" class="betterdocs-content-heading" id="generating-payroll-for-next-month">Generating Payroll for Next Month <a href="#generating-payroll-for-next-month" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#generating-payroll-for-next-month" data-title="Copy URL">#</a></h1>
                        <p>Once you configure your payroll initially, generating it for the second month can be done in a few minutes.</p>
                        <h2 id="clone-a-previous-payroll-report-using-copy-button" class="betterdocs-content-heading" id="clone-a-previous-payroll-report-using-copy-button">Clone a previous Payroll Report using <strong>Copy button</strong> <a href="#clone-a-previous-payroll-report-using-copy-button" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#clone-a-previous-payroll-report-using-copy-button" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="213" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-1024x213.png" alt="" class="wp-image-2214" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-1024x213.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-300x62.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-768x160.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-1536x319.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58-600x125.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-10-58.png 1651w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="change-dates-and-set-status-to-draft" class="betterdocs-content-heading" id="change-dates-and-set-status-to-draft">Change Dates <a href="#change-dates-and-set-status-to-draft" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/payroll-management/#change-dates-and-set-status-to-draft" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="376" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11-1024x376.png" alt="" class="wp-image-2215" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11-1024x376.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11-300x110.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11-768x282.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11-600x221.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-12-11.png 1502w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Then save the new Payroll Report and process and finalize it.</p>
                    </div>
                </div>
                <div class="betterdocs-entry-footer">
                    <div class="feedback-update-form">
                        <div class="feedback-form">
                            <a class="feedback-form-link" href="#betterdocs-form-modal" name="betterdocs-form-modal">
                                <span class="feedback-form-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32px" viewBox="0 0 64 64">
                                        <linearGradient id="zWPy7gPuySZ8fg4Y3QF24a" x1="26" x2="26" y1="630.833" y2="619.332" gradientTransform="matrix(1 0 0 -1 0 654)" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                            <stop offset="0" stop-color="#6dc7ff"></stop>
                                            <stop offset="1" stop-color="#e6abff"></stop>
                                        </linearGradient>
                                        <path fill="url(#zWPy7gPuySZ8fg4Y3QF24a)" d="M15.082,25.762l9.625,8.141c0.746,0.633,1.84,0.633,2.59,0l9.621-8.141 C37.629,25.16,37.203,24,36.27,24H15.73C14.797,24,14.371,25.16,15.082,25.762z"></path>
                                        <linearGradient id="zWPy7gPuySZ8fg4Y3QF24b" x1="26" x2="26" y1="647.5" y2="596.439" gradientTransform="matrix(1 0 0 -1 0 654)" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                            <stop offset="0" stop-color="#1a6dff"></stop>
                                            <stop offset="1" stop-color="#c822ff"></stop>
                                        </linearGradient>
                                        <path fill="url(#zWPy7gPuySZ8fg4Y3QF24b)" d="M18,49h16v2H18V49z"></path>
                                        <linearGradient id="zWPy7gPuySZ8fg4Y3QF24c" x1="32" x2="32" y1="8.915" y2="55.387" gradientUnits="userSpaceOnUse" spreadMethod="reflect">
                                            <stop offset="0" stop-color="#1a6dff"></stop>
                                            <stop offset="1" stop-color="#c822ff"></stop>
                                        </linearGradient>
                                        <path fill="url(#zWPy7gPuySZ8fg4Y3QF24c)" d="M48,9c-6.134,0-11.277,4.276-12.637,10H8c-2.758,0-5,2.242-5,5v26c0,2.758,2.242,5,5,5h36 c2.758,0,5-2.242,5-5V35h2v-2h-3c-6.066,0-11-4.934-11-11s4.934-11,11-11s11,4.934,11,11v3c0,1.102-0.898,2-2,2s-2-0.898-2-2v-3 c0-3.859-3.141-7-7-7s-7,3.141-7,7s3.141,7,7,7c2.125,0,4.027-0.953,5.312-2.453C53.918,27.984,55.344,29,57,29c2.207,0,4-1.793,4-4 v-3C61,14.832,55.168,9,48,9z M5,24.109L17.086,34L5,43.891V24.109z M47,50c0,1.652-1.348,3-3,3H8c-1.652,0-3-1.348-3-3v-3.527 l13.668-11.18l4.168,3.41c0.914,0.75,2.039,1.125,3.164,1.125s2.25-0.375,3.164-1.125l4.172-3.41L47,46.473V50z M47,34.949v8.941 L34.914,34l3.618-3.12C40.691,33.18,43.668,34.694,47,34.949z M37.264,29.317l-9.365,7.835c-1.102,0.902-2.699,0.902-3.801,0 L5.699,22.098C6.25,21.434,7.07,21,8,21h27.051C35.025,21.331,35,21.662,35,22C35,24.712,35.837,27.231,37.264,29.317z M48,27 c-2.758,0-5-2.242-5-5s2.242-5,5-5s5,2.242,5,5S50.758,27,48,27z"></path>
                                    </svg>
                                </span>
                                Still stuck? How can we help? </a>
                            <div id="betterdocs-form-modal" class="betterdocs-modalwindow">
                                <div class="modal-inner">
                                    <div class="modal-content">
                                        <a href="#" class="close"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" viewBox="0 0 50 50" version="1.1">
                                                <g id="surface1">
                                                    <path style=" " d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z "></path>
                                                </g>
                                            </svg></a>
                                        <h2 class="feedback-form-title">How can we help?</h2>
                                        <div class="modal-content-inner">
                                            <div class="form-wrapper">
                                                <div class="response"></div>
                                                <form id="betterdocs-feedback-form" class="betterdocs-feedback-form" action="" method="post">
                                                    <p><label for="message_name" class="form-name">
                                                            Name: <span>*</span> <br>
                                                            <input type="text" id="message_name" name="message_name" value="">
                                                        </label>
                                                    </p>
                                                    <p><label for="message_email" class="form-email">
                                                            Email: <span>*</span> <br>
                                                            <input type="text" id="message_email" name="message_email" value="">
                                                        </label>
                                                    </p>
                                                    <p><label for="message_text" class="form-message">
                                                            Message: <span>*</span> <br>
                                                            <textarea type="text" id="message_text" name="message_text"></textarea>
                                                        </label>
                                                    </p>
                                                    <div class="feedback-from-button">
                                                        <input type="hidden" name="submitted" value="1">
                                                        <input type="submit" name="submit" class="button" id="feedback_form_submit_btn" value="Send" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="update-date">
                            Updated on August 2, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/salary/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Salary</a><a href="https://icehrm.com/explore/docs/import-export-payrolls/" rel="next">Import &#8211; Export Payrolls <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 38.035156 13.988281 C 37.628906 13.980469 37.257813 14.222656 37.09375 14.59375 C 36.933594 14.96875 37.015625 15.402344 37.300781 15.691406 L 45.277344 24 L 2.023438 24 C 1.664063 23.996094 1.328125 24.183594 1.148438 24.496094 C 0.964844 24.808594 0.964844 25.191406 1.148438 25.503906 C 1.328125 25.816406 1.664063 26.003906 2.023438 26 L 45.277344 26 L 37.300781 34.308594 C 36.917969 34.707031 36.933594 35.339844 37.332031 35.722656 C 37.730469 36.105469 38.363281 36.09375 38.746094 35.691406 L 49.011719 25 L 38.746094 14.308594 C 38.5625 14.109375 38.304688 13.996094 38.035156 13.988281 Z "></path>
                            </g>
                        </svg></a></div>
                <div class="betterdocs-credit">
                    <p>Powered by <a href="https://betterdocs.co" target="_blank">BetterDocs</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../common/docs_footer.php');
?>