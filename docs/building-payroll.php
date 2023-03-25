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
                                <li class="betterdocs-breadcrumb-item item-current item-1164 current"><span>Building Payroll for India</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Building Payroll for India</h1>
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
                            <li class="betterdocs-toc-heading-level-1"><a href="#adding-a-payroll-group-for-india">Adding a Payroll Group For India</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#adding-payroll-columns">Adding Payroll Columns</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-basic-salary">Adding Payroll Column for Basic Salary</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-gross-salary">Adding Payroll Column for Gross Salary</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-basic-pay">Adding Payroll Column for Basic Pay</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-province">Adding Payroll Column for Province</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-professional-tax-slab">Adding Payroll Column for Professional Tax Slab</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-employee-birthday">Adding Payroll Column for Employee birthday</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-employee-age">Adding Payroll Column for Employee age</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-income-tax">Adding Payroll Column for Income Tax</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-esi-employee-contribution">Adding Payroll Column for ESI employee contribution</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-pf-employee-contribution">Adding Payroll Column for PF employee contribution</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-total-deductions">Adding Payroll Column for Total Deductions</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-other-allowances">Adding Payroll Column for Other Allowances</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-esi-employer-contribution">Adding Payroll Column for ESI employer contribution</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-pf-employer-contribution">Adding Payroll Column for PF employer contribution</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-esi-total">Adding Payroll Column for ESI Total</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#adding-payroll-column-for-pf-total">Adding Payroll Column for PF Total</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#add-payroll-column-for-residential-area">Add Payroll Column for Residential Area</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#add-payroll-column-for-hra">Add Payroll Column for hra</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#add-net-salary-column">Add Net Salary column</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#create-payslip-template">Create Payslip Template</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#create-payroll-report">Create Payroll Report</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#selecting-employees-for-your-payroll-report">Selecting Employees For Your Payroll Report</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#configure-employee-salary-components">Configure Employee Salary Components</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#processing-payroll-report">Processing Payroll Report</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#downloading-payslips">Downloading Payslips</a></li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#generating-payroll-for-next-month">Generating Payroll for Next Month</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>Company payroll is available under the <strong>Payroll -&gt; Payroll Reports</strong> menu. We are going to create a sample payroll for India.</p>
                        <h1 id="adding-a-payroll-group-for-india" class="betterdocs-content-heading" id="adding-a-payroll-group-for-india">Adding a Payroll Group For India <a href="#adding-a-payroll-group-for-india" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-a-payroll-group-for-india" data-title="Copy URL">#</a></h1>
                        <p>First, we should start with adding a Payroll Group. Go to Payroll Group Menu under Payroll and add a new payroll group. As an example, we will be using India.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F0eb24e4d0ff3dcc2ecfe476a762cf19403ec60f8.png?generation=1593069870584802&amp;alt=media" alt="" /></figure>
                        <h1 id="adding-payroll-columns" class="betterdocs-content-heading" id="adding-payroll-columns">Adding Payroll Columns <a href="#adding-payroll-columns" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-columns" data-title="Copy URL">#</a></h1>
                        <p>One of the best ways to decide which columns you need to have in your payroll report is to think of rows in your employees&#8217; payslips. Now here is the list of columns to show on the Indian payroll we are creating:</p>
                        <ol>
                            <li>Basic Salary</li>
                            <li>Gross Salary</li>
                            <li>Basic Pay</li>
                            <li>Province</li>
                            <li>Professional Tax Slab</li>
                            <li>Employee Birthday</li>
                            <li>Employee Age</li>
                            <li>Income Tax</li>
                            <li>ESI Employee Contribution</li>
                            <li>PF Employee Contribution</li>
                            <li>Total Deductions</li>
                            <li>Other Allowances</li>
                            <li>ESI Employer Contribution</li>
                            <li>PF Employer Contribution</li>
                            <li>ESI Total</li>
                            <li>PF Total</li>
                            <li>Net Salary</li>
                            <li>Residential Area</li>
                            <li>HRA</li>
                        </ol>
                        <p>So now we can start adding payroll columns. It&#8217;s a good idea to prefix your payroll columns with its respective country code to make them easier to find.</p>
                        <h2 id="adding-payroll-column-for-basic-salary" class="betterdocs-content-heading" id="adding-payroll-column-for-basic-salary">Adding Payroll Column for Basic Salary <a href="#adding-payroll-column-for-basic-salary" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-basic-salary" data-title="Copy URL">#</a></h2>
                        <p>Now you can go to the tab &#8220;Payroll Columns&#8221; and click on &#8220;Add&#8221;.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fa9ec84c379277d219f925af5f1401bf7ad076dba.png?generation=1593069870315461&amp;alt=media" alt="" /></figure>
                        <p>As this column only depends on the Basic Salary component you can just select that salary component from the list. (Note that in some cases you can add multiple salary components to the same column). Also, make sure you set the enable to Yes and default value to 0.00. The <strong>column order should be 1</strong> because it should be the first column in your payroll report for India.</p>
                        <h2 id="adding-payroll-column-for-gross-salary" class="betterdocs-content-heading" id="adding-payroll-column-for-gross-salary">Adding Payroll Column for Gross Salary <a href="#adding-payroll-column-for-gross-salary" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-gross-salary" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F87046cc55c335b1d27857f8ca51193c07c924f75.png?generation=1593069871512604&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-basic-pay" class="betterdocs-content-heading" id="adding-payroll-column-for-basic-pay">Adding Payroll Column for Basic Pay <a href="#adding-payroll-column-for-basic-pay" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-basic-pay" data-title="Copy URL">#</a></h2>
                        <p>Based on the previous column you have added, now you can create the basic pay column as shown below:</p>
                        <p>First, create a new payroll column. Then, click on the &#8220;Add&#8221; button next to Calculation Columns. Here you are adding the previously defined <strong>gross salary column as a parameter named X</strong> so you can use it to do various calculations using these columns</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F956cfc06842893be529fcdf271fce446ad171f6b.png?generation=1593069879503752&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-province" class="betterdocs-content-heading" id="adding-payroll-column-for-province">Adding Payroll Column for Province <a href="#adding-payroll-column-for-province" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-province" data-title="Copy URL">#</a></h2>
                        <p>We need to select Get Employee Data in predefined calculations and enter province_Name in the function field in order to get the employee&#8217;s province</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F85ff96d1a8820c772c5bd319d87ccd3cae018729.png?generation=1593069870813826&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-professional-tax-slab" class="betterdocs-content-heading" id="adding-payroll-column-for-professional-tax-slab">Adding Payroll Column for Professional Tax Slab <a href="#adding-payroll-column-for-professional-tax-slab" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-professional-tax-slab" data-title="Copy URL">#</a></h2>
                        <p>This is calculated based on the employee&#8217;s state and basic pay. So you need to add those two calculation columns and write the function to calculate PTS.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F1d404bd3db7859eb1e18fec01b701c8ee95d58c8.png?generation=1593069871671630&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-employee-birthday" class="betterdocs-content-heading" id="adding-payroll-column-for-employee-birthday">Adding Payroll Column for Employee birthday <a href="#adding-payroll-column-for-employee-birthday" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-employee-birthday" data-title="Copy URL">#</a></h2>
                        <p>We need to select Get Employee Data in predefined calculations and enter birthday(Employees table column name) in the function field in order to get an employee&#8217;s birthday</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F2aafa0d1bb8afc5d6614224db105eba48e3d4d73.png?generation=1593069871081224&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-employee-age" class="betterdocs-content-heading" id="adding-payroll-column-for-employee-age">Adding Payroll Column for Employee age <a href="#adding-payroll-column-for-employee-age" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-employee-age" data-title="Copy URL">#</a></h2>
                        <p>We need to get an employee&#8217;s birthday as a calculation column and write a javascript function to calculate age from that.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fd78600b952dd2f992fe9a1fdbb5dad0d908ab442.png?generation=1593069877477313&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-income-tax" class="betterdocs-content-heading" id="adding-payroll-column-for-income-tax">Adding Payroll Column for Income Tax <a href="#adding-payroll-column-for-income-tax" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-income-tax" data-title="Copy URL">#</a></h2>
                        <p>We need to use employees&#8217; age and basic pay and write a function to calculate income tax.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F05a675b8f507095f185dd3f99e62e91d9c57e472.png?generation=1593069871952837&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-esi-employee-contribution" class="betterdocs-content-heading" id="adding-payroll-column-for-esi-employee-contribution">Adding Payroll Column for ESI employee contribution <a href="#adding-payroll-column-for-esi-employee-contribution" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-esi-employee-contribution" data-title="Copy URL">#</a></h2>
                        <p>As you have seen you can do some calculations at column level. But things such as tax which are having different percentages and multiple slabs it&#8217;s better to use saved calculations. Now you should go to the <strong>Saved Calculations</strong> tab and add a new saved calculation.</p>
                        <p>You can create a saved calculation based on a Salary component group (type), a Salary component, or an Existing payroll column. In this case, we use an existing payroll column.</p>
                        <p>Now click on the add button on the Calculation Process field to define the actual calculation. According to our example for the full range of ESI is 0.75%. So we don&#8217;t need to define any ranges and can calculate the tax as follows.</p>
                        <p>Now we need to create a payroll column and add this calculation method to that column.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fdb6fb7174b2bd8016ff0c78f1265047131194d89.png?generation=1593069871939627&amp;alt=media" alt="" /></figure>
                        <p>Please also pay attention to how we are assigning <strong>column order</strong> to each column.</p>
                        <h2 id="adding-payroll-column-for-pf-employee-contribution" class="betterdocs-content-heading" id="adding-payroll-column-for-pf-employee-contribution">Adding Payroll Column for PF employee contribution <a href="#adding-payroll-column-for-pf-employee-contribution" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-pf-employee-contribution" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Ff35bae9bc0e65458116a5caa69c0b4db267ec346.png?generation=1593069872153583&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-total-deductions" class="betterdocs-content-heading" id="adding-payroll-column-for-total-deductions">Adding Payroll Column for Total Deductions <a href="#adding-payroll-column-for-total-deductions" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-total-deductions" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fb3107c6f3251e84560f45438d259300bcff56b9c.png?generation=1593069871147393&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-other-allowances" class="betterdocs-content-heading" id="adding-payroll-column-for-other-allowances">Adding Payroll Column for Other Allowances <a href="#adding-payroll-column-for-other-allowances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-other-allowances" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Ff7a2e0c1cd5742d513c50d249dca40f19f43de8c.png?generation=1593069872040045&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-esi-employer-contribution" class="betterdocs-content-heading" id="adding-payroll-column-for-esi-employer-contribution">Adding Payroll Column for ESI employer contribution <a href="#adding-payroll-column-for-esi-employer-contribution" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-esi-employer-contribution" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Ff794d81bd9e126b0123b5f57a61e1c0a2b5c0616.png?generation=1593069871379321&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-pf-employer-contribution" class="betterdocs-content-heading" id="adding-payroll-column-for-pf-employer-contribution">Adding Payroll Column for PF employer contribution <a href="#adding-payroll-column-for-pf-employer-contribution" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-pf-employer-contribution" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F09ce333dc760e57636d01f092afc9ff35781f7a5.png?generation=1593069870735292&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-esi-total" class="betterdocs-content-heading" id="adding-payroll-column-for-esi-total">Adding Payroll Column for ESI Total <a href="#adding-payroll-column-for-esi-total" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-esi-total" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F2886899a5191186cd955e8050c6a08ab513eec82.png?generation=1593069872194013&amp;alt=media" alt="" /></figure>
                        <h2 id="adding-payroll-column-for-pf-total" class="betterdocs-content-heading" id="adding-payroll-column-for-pf-total">Adding Payroll Column for PF Total <a href="#adding-payroll-column-for-pf-total" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#adding-payroll-column-for-pf-total" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F526ae38f258392cc6b97e6fa8e44086122b579aa.png?generation=1593069872684396&amp;alt=media" alt="" /></figure>
                        <h2 id="add-payroll-column-for-residential-area" class="betterdocs-content-heading" id="add-payroll-column-for-residential-area">Add Payroll Column for Residential Area <a href="#add-payroll-column-for-residential-area" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#add-payroll-column-for-residential-area" data-title="Copy URL">#</a></h2>
                        <p>To calculate HRA we need to know whether an employee lives in a metro or non-metro area. As this is not a default employee data field, we need to add a custom field for the residential area.</p>
                        <p><strong>Add Custom Field for Residential Area</strong></p>
                        <p>Go to <strong>Admin -&gt; Employee Custom Fields</strong></p>
                        <p>Under the <strong>Employee Custom Fields</strong> tab add a new custom field named residential_area</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F52c9819aa8803c6a277a5eee1d45738dc996613e.png?generation=1593069870398855&amp;alt=media" alt="" /></figure>
                        <p>Now you can edit the residential area of each employee from <strong>Employees -&gt; Employees</strong>.</p>
                        <p>You can use this data by selecting Get Employee data in Predefined Calculations. use residential_area in the Function field.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fe1f055d92a17edb7cdefd299ec56bd518aedbc6e.png?generation=1593069872049841&amp;alt=media" alt="" /></figure>
                        <h2 id="add-payroll-column-for-hra" class="betterdocs-content-heading" id="add-payroll-column-for-hra">Add Payroll Column for hra <a href="#add-payroll-column-for-hra" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#add-payroll-column-for-hra" data-title="Copy URL">#</a></h2>
                        <p>You can add basic pay and residential area as calculation columns and write a function to find hra quite easily.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F43a1b3cd18aeb71da4cff6e27c68252f6f46d6b2.png?generation=1593069870147845&amp;alt=media" alt="" /></figure>
                        <h2 id="add-net-salary-column" class="betterdocs-content-heading" id="add-net-salary-column">Add Net Salary column <a href="#add-net-salary-column" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#add-net-salary-column" data-title="Copy URL">#</a></h2>
                        <p>Net Salary is Gross salary minus Total deductions. So we create a Net Salary column as shown below:</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F113c14db80ebc820d8bf72548f533bea45e2a821.png?generation=1593069872793534&amp;alt=media" alt="" /></figure>
                        <p>Now we have finished defining payroll columns. When you go to Payroll columns and search &#8220;IN &#8211; &#8221; you can see all the fields in Indian payroll.</p>
                        <h1 id="create-payslip-template" class="betterdocs-content-heading" id="create-payslip-template">Create Payslip Template <a href="#create-payslip-template" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#create-payslip-template" data-title="Copy URL">#</a></h1>
                        <p>As you have all the required payroll columns you can use these to create a payslip template. So we are going to create a new payslip template named Indian Payslip Template and add all the columns defined above. Goto Payslip Templates tab and create a new payslip. A payslip template has can be created by adding the following items:</p>
                        <ol>
                            <li>Company Logo</li>
                            <li>Company Name</li>
                            <li>Text (For adding special messages to notifications to employees)</li>
                            <li>Separators (For separating sections on payslip)</li>
                            <li>Payroll columns</li>
                        </ol>
                        <p>Click on Add New button and create the payslip template as you want.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F4fc7d1f5076688110f8c1626fb80371412e87ed6.png?generation=1593069871166013&amp;alt=media" alt="" /></figure>
                        <p></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fceec88faf8e7bb5da9e39a606f942d555a41831b.png?generation=1593069872932372&amp;alt=media" alt="" /></figure>
                        <h1 id="create-payroll-report" class="betterdocs-content-heading" id="create-payroll-report">Create Payroll Report <a href="#create-payroll-report" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#create-payroll-report" data-title="Copy URL">#</a></h1>
                        <p>Payroll Report is the unit used to combine all the payroll columns and calculate monthly payments for all the selected employees. Go to the Payroll Reports tab and create a new Payroll Report.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F23a8366f4ce847dbc9451ed9dd92b30bb955b59b.png?generation=1593069870571420&amp;alt=media" alt="" /></figure>
                        <p>When you create the payroll report it should be in a Draft state. Only when it is processing completed it should go to Completed state.Also, you need to select all the payroll columns you defined earlier for Indian payroll here as shown above.</p>
                        <h1 id="selecting-employees-for-your-payroll-report" class="betterdocs-content-heading" id="selecting-employees-for-your-payroll-report">Selecting Employees For Your Payroll Report <a href="#selecting-employees-for-your-payroll-report" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#selecting-employees-for-your-payroll-report" data-title="Copy URL">#</a></h1>
                        <p>The above payroll is for monthly paid employees who are in the Indian Payroll Calculation group. So you need to add some employees satisfying the above requirements under the &#8220;Payroll Employees&#8221; tab. As shown below we have added three employees to the Indian payroll.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fec0a413999139ed8109cb1ad36eb9fca505a6ceb.png?generation=1593069870874914&amp;alt=media" alt="" /></figure>
                        <h1 id="configure-employee-salary-components" class="betterdocs-content-heading" id="configure-employee-salary-components">Configure Employee Salary Components <a href="#configure-employee-salary-components" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#configure-employee-salary-components" data-title="Copy URL">#</a></h1>
                        <p>Since the payroll depends on employee salary components you should make sure all employee salary components are defined properly. You can do this by going to the Payroll -&gt; Salary module and selecting the Employee Salary Components tab. As we have configured our payroll report application now we are able to calculate the tax and other payroll columns properly.</p>
                        <h1 id="processing-payroll-report" class="betterdocs-content-heading" id="processing-payroll-report">Processing Payroll Report <a href="#processing-payroll-report" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#processing-payroll-report" data-title="Copy URL">#</a></h1>
                        <p>Click on the blue color &#8220;Process&#8221; button on your payroll report under the Payroll Report tab. This will show the salaries of all the employees in your payroll. As you can see here IceHrm can now calculate your payroll. After checking figures manually you can click on generate payslips button which will change the payroll report status to <strong>Completed</strong>.</p>
                        <h1 id="downloading-payslips" class="betterdocs-content-heading" id="downloading-payslips">Downloading Payslips <a href="#downloading-payslips" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#downloading-payslips" data-title="Copy URL">#</a></h1>
                        <p>Now your employee can log in and download payslip for the payroll period 2020-06-01 to 2020-06-30.</p>
                        <p>Log in as the employee and go to <strong>User Reports -> Reports</strong> module or you can go to <strong>Documents -> my documents -> payslips.</strong></p>
                        <p> And then download the Payslip from any completed payroll report.</p>
                        <p>Payslip for IceHrm Employee will look like this:</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F0582ab3f521490e0f46e10edc5399c761198bad9.png?generation=1593069880416849&amp;alt=media" alt="" /></figure>
                        <h1 id="generating-payroll-for-next-month" class="betterdocs-content-heading" id="generating-payroll-for-next-month">Generating Payroll for Next Month <a href="#generating-payroll-for-next-month" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/building-payroll-for-india/#generating-payroll-for-next-month" data-title="Copy URL">#</a></h1>
                        <p>Once you configure your payroll initially, generating it for the second month can be done in a few minutes.</p>
                        <p>Clone a previous Payroll Report using the Copy button.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2Fc47bef78096a3a89d4cee014356a3e260c349dd8.png?generation=1593069872429190&amp;alt=media" alt="" /></figure>
                        <p>Change Dates and set the Status to Draft.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2Fsync%2F1d5d2e3d15ddd1143fb473568d0191b5ae60042e.png?generation=1593069872819823&amp;alt=media" alt="" /></figure>
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
                            Updated on August 1, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/import-export-payrolls/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Import &#8211; Export Payrolls</a><a href="https://icehrm.com/explore/docs/how-to-create-an-overtime-report-using-the-payroll-module/" rel="next">How to create an overtime report using the payroll module? <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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