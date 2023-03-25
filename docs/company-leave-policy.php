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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/leave-management/">Leave Management</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1122 current"><span>Company Leave Policy</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Company Leave Policy</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#introduction">Introduction</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#example-leave-policy">Example Leave Policy</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#setup-leave-periods">Setup Leave Periods</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#leave-types-in-singapore">Leave Types in Singapore</a>
                                        <ul class="betterdocs-toc-list-level-4">
                                            <li class="betterdocs-toc-heading-level-4"><a href="#annual-leave">Annual Leave</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#casual-leave">Casual Leave</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#maternity-leave">Maternity Leave</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#initial-test-for-leave-settings">Initial Test for Leave Settings</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#adding-test-employees">Adding test employees</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#initial-test-for-leave-balances">Initial Test for Leave Balances</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#adding-leave-types-by-country">Adding Leave Types by Country</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#defining-a-leave-group-of-singapore">Defining a Leave Group of Singapore</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#second-test-for-leave-balances">Second Test for Leave Balances</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#allow-maternity-leave-only-to-working-mothers">Allow Maternity Leave only to Working Mothers</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#third-test-for-leave-balances">Third test for Leave balances</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#leave-types-in-germany">Leave Types in Germany</a>
                                        <ul class="betterdocs-toc-list-level-4">
                                            <li class="betterdocs-toc-heading-level-4"><a href="#vacation">Vacation</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#creating-leave-type-for-vacation">Creating Leave Type for Vacation</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#sick-leave">Sick Leave</a>
                                                <ul class="betterdocs-toc-list-level-5">
                                                    <li class="betterdocs-toc-heading-level-5"><a href="#creating-leave-type-for-sick-leave">Creating Leave Type for Sick Leave</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#forth-test-for-leave-balances">Fourth Test for Leave Balances</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#create-leave-rules-for-vacations">Create Leave Rules for Vacations</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#vacation-leave-rule-employees-having-2-years-of-experience">Vacation Leave Rule (Employees having 2 years of Experience)</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#fifth-test-for-leave-balances">Fifth Test for Leave Balances</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#adding-information-about-previously-taken-leave-days">Adding Information about previously taken Leave Days</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#sixth-test-for-leave-balances">Sixth Test for Leave Balances</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#adding-compensated-leave-days">Adding compensated Leave days</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#making-saturday-a-half-day-in-singapore">Making Saturday a Half day in Singapore</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#few-last-notes">Last Few Notes</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <h2 id="introduction" class="betterdocs-content-heading" id="introduction">Introduction <a href="#introduction" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#introduction" data-title="Copy URL">#</a></h2>
                        <p>Icehrm has tools to implement complex leave policies. So most of the companies are covered by it. For example, due to government regulations of some European countries, the leave policies of companies have become a bit too complicated, but still, IceHrm can handle those. This section describes the process of implementing an advanced leave policy that involves multiple leave groups and rules in multiple countries.</p>
                        <h2 id="example-leave-policy" class="betterdocs-content-heading" id="example-leave-policy">Example Leave Policy <a href="#example-leave-policy" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#example-leave-policy" data-title="Copy URL">#</a></h2>
                        <p>Let&#8217;s think of a company operating in <strong>Germany</strong> and <strong>Singapore</strong>.</p>
                        <h3 id="setup-leave-periods" class="betterdocs-content-heading" id="setup-leave-periods">Setup Leave Periods <a href="#setup-leave-periods" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#setup-leave-periods" data-title="Copy URL">#</a></h3>
                        <p>In IceHrm each Leave day is attached to a Leave Period. So It&#8217;s important to configure the Leave Periods. Leave Periods are displayed under <strong>Manage -&gt; Leave -&gt; Leave Periods</strong>.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="44" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12-1024x44.png" alt="" class="wp-image-1817" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12-1024x44.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12-300x13.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12-768x33.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12-600x26.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-17-12.png 1282w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>If your company has not been using Icehrm before, it is recommended to delete all previous leave periods and keep only the current leave period.</p>
                        <p><strong>After setting up leave types you can manually add all details about carried forward leave days and already taken leave days using </strong>Paid Time off<strong> tab under </strong>Leave Settings.</p>
                        <h3 id="leave-types-in-singapore" class="betterdocs-content-heading" id="leave-types-in-singapore">Leave Types in Singapore <a href="#leave-types-in-singapore" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#leave-types-in-singapore" data-title="Copy URL">#</a></h3>
                        <p>Singapore company has three leave types.</p>
                        <h4 id="annual-leave" class="betterdocs-content-heading" id="annual-leave">Annual Leave <a href="#annual-leave" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#annual-leave" data-title="Copy URL">#</a></h4>
                        <p>Every employee gets 14 days off per year. The remaining leave days can be carried forward indefinitely. For example, if you were an employee since 2020 and took 10, 13 annual leave days respectively in 2020 and 2021, by 2022 you will have 19 annual leave days. 14 from 2022 and 5 days from previous years.</p>
                        <p><strong>Creating Leave Type for Annual Leave</strong></p>
                        <ol>
                            <li>Login to IceHrm installation as an admin.</li>
                            <li>Go to Manage -&gt; Leave.</li>
                            <li>If you have created a fresh installation, delete existing leave types.</li>
                            <li>Add a new leave type (name it as &#8220;Annual Leave&#8221;).</li>
                            <li>Set <em>Leaves per Leave Period</em> to 14.</li>
                            <li>Set <em>Admin can assign leave to employees</em> to Yes.</li>
                            <li>Set <em>Employees can apply for this leave type</em> to Yes.</li>
                            <li>Set <em>Leave Carried Forward</em> to Yes (As you need to carry forward remaining leave to next period).</li>
                            <li>Set <em>Percentage of Leave Carried Forward</em> to 100 as you need to carry forward 100% of the remaining leave.</li>
                            <li>Set <em>Maximum Carried Forward Amount</em> to 0. Setting this to 0 will remove the limitation on carried forward leave days.</li>
                            <li>Set <em>Carried Forward Leave Availability Period</em> to <em>No Limit</em>. This will allow employees to carry forward <em>Annual Leave</em> indefinitely.</li>
                            <li>Set <em>Send Notification Emails</em> to Yes. This will send out emails to approvers when a leave application is submitted.</li>
                            <li>Select a <em>Leave Color</em>. This will be used to show leave details on leave calendar.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1015" height="622" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-51.png" alt="" class="wp-image-1819" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-51.png 1015w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-51-300x184.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-51-768x471.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-51-600x368.png 600w" sizes="(max-width: 1015px) 100vw, 1015px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1008" height="518" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-54.png" alt="" class="wp-image-1820" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-54.png 1008w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-54-300x154.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-54-768x395.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-54-600x308.png 600w" sizes="(max-width: 1008px) 100vw, 1008px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1006" height="550" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-59.png" alt="" class="wp-image-1821" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-59.png 1006w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-59-300x164.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-59-768x420.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-21-59-600x328.png 600w" sizes="(max-width: 1006px) 100vw, 1006px" /></figure>
                        <h4 id="casual-leave" class="betterdocs-content-heading" id="casual-leave">Casual Leave <a href="#casual-leave" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#casual-leave" data-title="Copy URL">#</a></h4>
                        <p>Each employee gets 7 days per year. Can not be carried forward.</p>
                        <p><strong>Creating Leave Type for Casual Leave</strong></p>
                        <ol>
                            <li>Add a new leave type for Casual Leave. The settings can be seen in the screenshot.</li>
                            <li>Note that you should set <em>Leave Carried Forward</em> to No.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1006" height="619" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-20.png" alt="" class="wp-image-1822" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-20.png 1006w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-20-300x185.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-20-768x473.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-20-600x369.png 600w" sizes="(max-width: 1006px) 100vw, 1006px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1001" height="504" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-23.png" alt="" class="wp-image-1823" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-23.png 1001w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-23-300x151.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-23-768x387.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-23-600x302.png 600w" sizes="(max-width: 1001px) 100vw, 1001px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1008" height="530" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-26.png" alt="" class="wp-image-1824" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-26.png 1008w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-26-300x158.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-26-768x404.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-26-26-600x315.png 600w" sizes="(max-width: 1008px) 100vw, 1008px" /></figure>
                        <h4 id="maternity-leave" class="betterdocs-content-heading" id="maternity-leave">Maternity Leave <a href="#maternity-leave" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#maternity-leave" data-title="Copy URL">#</a></h4>
                        <p>A working mother can take this leave 4 weeks before the expected date of childbirth. Up to 48 leave days can be taken.</p>
                        <p><strong>Creating Leave Type for Maternity Leave</strong></p>
                        <ol>
                            <li>Add a new leave type for Maternity Leave. The settings can be seen in the screenshot.</li>
                            <li>For maternity leave, we do not need to enable accrue or carry forward.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1015" height="626" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-29.png" alt="" class="wp-image-1825" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-29.png 1015w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-29-300x185.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-29-768x474.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-29-600x370.png 600w" sizes="(max-width: 1015px) 100vw, 1015px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1015" height="509" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-32.png" alt="" class="wp-image-1826" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-32.png 1015w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-32-300x150.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-32-768x385.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-32-600x301.png 600w" sizes="(max-width: 1015px) 100vw, 1015px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1015" height="535" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-36.png" alt="" class="wp-image-1827" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-36.png 1015w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-36-300x158.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-36-768x405.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-12-30-36-600x316.png 600w" sizes="(max-width: 1015px) 100vw, 1015px" /></figure>
                        <h2 id="initial-test-for-leave-settings" class="betterdocs-content-heading" id="initial-test-for-leave-settings">Initial Test for Leave Settings <a href="#initial-test-for-leave-settings" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#initial-test-for-leave-settings" data-title="Copy URL">#</a></h2>
                        <h3 id="adding-test-employees" class="betterdocs-content-heading" id="adding-test-employees">Adding test employees <a href="#adding-test-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#adding-test-employees" data-title="Copy URL">#</a></h3>
                        <p>For testing, we have added 5 employees.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="173" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45-1024x173.png" alt="" class="wp-image-1863" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45-1024x173.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45-300x51.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45-768x130.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45-600x101.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-37-45.png 1502w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>As you can see some employees are based in Singapore and some are based in Germany.</p>
                        <h3 id="initial-test-for-leave-balances" class="betterdocs-content-heading" id="initial-test-for-leave-balances">Initial Test for Leave Balances <a href="#initial-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#initial-test-for-leave-balances" data-title="Copy URL">#</a></h3>
                        <p>For testing the leave balance of each of them you can use the <em>Employee Leave Entitlement</em> report. Go to <strong><em>Admin Reports</em> -&gt; <em>Reports</em></strong> to generate it.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjwNm1QJmnTxD5UD%2Femployee-leave-entitlement-report.png?generation=1543473665109674&amp;alt=media" alt="" /></figure>
                        <p>Here all the employees are entitled to have all the leave types. Also, the leave numbers are as expected.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjwPYIoRp2do8D1t%2Fleave-list-1.png?generation=1543473665590018&amp;alt=media" alt="" /></figure>
                        <h3 id="adding-leave-types-by-country" class="betterdocs-content-heading" id="adding-leave-types-by-country">Adding Leave Types by Country <a href="#adding-leave-types-by-country" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#adding-leave-types-by-country" data-title="Copy URL">#</a></h3>
                        <p>As you can see there is a problem with the above leave entitlement report. The leave types we have defined are entitled to all the employees, even the ones based in Germany.</p>
                        <p>In order to, correct the problem, you need to use leave groups. Leave groups are a way to allow only certain employees the ability to apply for certain types of leave.</p>
                        <h3 id="defining-a-leave-group-of-singapore" class="betterdocs-content-heading" id="defining-a-leave-group-of-singapore">Defining a Leave Group of Singapore <a href="#defining-a-leave-group-of-singapore" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#defining-a-leave-group-of-singapore" data-title="Copy URL">#</a></h3>
                        <p>Define a Leave Group for Singapore under <strong>Manage -&gt; Leave -&gt; Leave Groups -&gt; Edit Leave Groups.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="41" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40-1024x41.png" alt="" class="wp-image-1828" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40-1024x41.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40-300x12.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40-768x30.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40-600x24.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-21-40.png 1262w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Then add all the employees in Singapore to this leave group by going to <strong>Manage -&gt; Leave -&gt; Leave groups -&gt; Leave Group Employees</strong>.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="87" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23-1024x87.png" alt="" class="wp-image-1829" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23-1024x87.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23-300x26.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23-768x66.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23-600x51.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-26-23.png 1042w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>As the next step set <strong>Leave Group </strong>of the <strong>Annual Leave</strong> to <strong>Singapore</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1003" height="542" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-27-47.png" alt="" class="wp-image-1830" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-27-47.png 1003w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-27-47-300x162.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-27-47-768x415.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-27-47-600x324.png 600w" sizes="(max-width: 1003px) 100vw, 1003px" /></figure>
                        <p>Repeat this for the other two Leave Types as well.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="97" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27-1024x97.png" alt="" class="wp-image-1832" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27-1024x97.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27-300x28.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27-768x73.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27-600x57.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-31-27.png 1447w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="second-test-for-leave-balances" class="betterdocs-content-heading" id="second-test-for-leave-balances">Second Test for Leave Balances <a href="#second-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#second-test-for-leave-balances" data-title="Copy URL">#</a></h2>
                        <p>Now generate the<strong> Employee Leave Entitlement</strong> report again. Now you will see that only Singapore based employees are entitled to the Leave Types we just created.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjwZlyEkyQcypEGI%2Fleave-list-2.png?generation=1543473665104646&amp;alt=media" alt="" /></figure>
                        <h3 id="allow-maternity-leave-only-to-working-mothers" class="betterdocs-content-heading" id="allow-maternity-leave-only-to-working-mothers">Allow Maternity Leave only to Working Mothers <a href="#allow-maternity-leave-only-to-working-mothers" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#allow-maternity-leave-only-to-working-mothers" data-title="Copy URL">#</a></h3>
                        <p>We still have a problem with the above leave entitlement for Singapore. Only working mothers should be allowed to apply for Maternity Leave. This can be achieved by adding a new <em>Leave Group</em>.</p>
                        <ul>
                            <li>Add a Leave Group Named <strong>&#8220;Singapore Working Mothers&#8221;</strong></li>
                        </ul>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="76" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37-1024x76.png" alt="" class="wp-image-1833" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37-1024x76.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37-300x22.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37-768x57.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37-600x44.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-35-37.png 1298w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <ul>
                            <li>Add Nicole Smith to Leave Group <strong>&#8220;Singapore Working Mothers&#8221;</strong></li>
                        </ul>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="123" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47-1024x123.png" alt="" class="wp-image-1834" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47-1024x123.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47-300x36.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47-768x92.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47-600x72.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-36-47.png 1142w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <ul>
                            <li>Go to Leave Type tab and change the Leave Group for <em><strong>Maternity Leave</strong></em> to <strong>&#8220;Singapore Working Mothers&#8221;</strong></li>
                        </ul>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="91" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07-1024x91.png" alt="" class="wp-image-1835" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07-1024x91.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07-300x27.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07-768x68.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07-600x53.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-38-07.png 1481w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <ul>
                            <li>Under <em><strong>Employees -&gt; Employees</strong></em> switch to <strong><em>Nicole Smith</em> </strong>by clicking on the <strong>Login As </strong>button<strong>.</strong> This will let you use the application as <em>Nicole Smith</em>.</li>
                        </ul>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="34" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52-1024x34.png" alt="" class="wp-image-1836" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52-1024x34.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52-300x10.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52-768x26.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52-600x20.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-39-52.png 1500w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <ul>
                            <li>Open <strong>Leave -&gt; Leave Management -&gt; Leave Entitlement.</strong> This will show all three leave types</li>
                        </ul>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="410" height="526" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-24.png" alt="" class="wp-image-1837" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-24.png 410w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-24-234x300.png 234w" sizes="(max-width: 410px) 100vw, 410px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="413" height="468" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30.png" alt="" class="wp-image-1838" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30.png 413w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30-265x300.png 265w" sizes="(max-width: 413px) 100vw, 413px" /></figure>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="420" height="480" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30-1.png" alt="" class="wp-image-1839" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30-1.png 420w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-44-30-1-263x300.png 263w" sizes="(max-width: 420px) 100vw, 420px" /></figure>
                        <h2 id="third-test-for-leave-balances" class="betterdocs-content-heading" id="third-test-for-leave-balances">Third test for Leave balances <a href="#third-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#third-test-for-leave-balances" data-title="Copy URL">#</a></h2>
                        <p>Now generate the <em>Employee Leave Entitlement</em> report again. Now you will see that Nicole Smith is entitled to Maternity Leave. This is because <em><strong>Maternity Leave</strong></em> is under Leave Group <em><strong>Singapore Working Mothers</strong></em> and only <em>Nicole Smith</em> is in that Leave Group.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjwktMd1d6HYrC8E%2Fleave-list-3.png?generation=1543473665056158&amp;alt=media" alt="" /></figure>
                        <h3 id="leave-types-in-germany" class="betterdocs-content-heading" id="leave-types-in-germany">Leave Types in Germany <a href="#leave-types-in-germany" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#leave-types-in-germany" data-title="Copy URL">#</a></h3>
                        <p>The German company has three leave types.</p>
                        <h4 id="vacation" class="betterdocs-content-heading" id="vacation">Vacation <a href="#vacation" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#vacation" data-title="Copy URL">#</a></h4>
                        <p>● Every employee gets 25 days off per year. The remaining leave days can be carried forward for three months.<br>● If the employee has been working for more than 2 years. They get 1 additional vacation day.<br>● If the employee has been working for more than 3 years. They get another 1 additional vacation day.<br>● If the employee has been working for more than 4 years. They get another 2 additional vacation days.<br>● For an example of your 5th year in the company, you get 29 vacation days.</p>
                        <h4 id="creating-leave-type-for-vacation" class="betterdocs-content-heading" id="creating-leave-type-for-vacation">Creating Leave Type for Vacation <a href="#creating-leave-type-for-vacation" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#creating-leave-type-for-vacation" data-title="Copy URL">#</a></h4>
                        <p> ● Create a Leave Group for Germany</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="104" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58-1024x104.png" alt="" class="wp-image-1840" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58-1024x104.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58-300x30.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58-768x78.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58-600x61.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-48-58.png 1303w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p> ● Add all other employees to this Leave Group</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="228" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47-1024x228.png" alt="" class="wp-image-1841" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47-1024x228.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47-300x67.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47-768x171.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47-600x133.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-50-47.png 1111w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p> ● Create a Leave Type named Vacation. Set leave carried forward to YES and allow carry forward to 3 months. Also, make sure to set the <em>Leave Group</em> to <em><strong>Germany</strong></em></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1006" height="610" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-13.png" alt="" class="wp-image-1842" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-13.png 1006w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-13-300x182.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-13-768x466.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-13-600x364.png 600w" sizes="(max-width: 1006px) 100vw, 1006px" /></figure>
                        <p></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1020" height="514" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-16.png" alt="" class="wp-image-1843" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-16.png 1020w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-16-300x151.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-16-768x387.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-16-600x302.png 600w" sizes="(max-width: 1020px) 100vw, 1020px" /></figure>
                        <p></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1008" height="547" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-23.png" alt="" class="wp-image-1844" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-23.png 1008w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-23-300x163.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-23-768x417.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-13-57-23-600x326.png 600w" sizes="(max-width: 1008px) 100vw, 1008px" /></figure>
                        <h4 id="sick-leave" class="betterdocs-content-heading" id="sick-leave">Sick Leave <a href="#sick-leave" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#sick-leave" data-title="Copy URL">#</a></h4>
                        <p>Employees are entitled to Sick Leave given without a limitation. We will set a limit of 14 days per year for <strong>Sick Leave</strong> but allow employees to apply it without a restriction by setting <strong>Employees can apply beyond the current leave balance</strong> to <strong>Yes</strong>.</p>
                        <h5 id="creating-leave-type-for-sick-leave" class="betterdocs-content-heading" id="creating-leave-type-for-sick-leave">Creating Leave Type for Sick Leave <a href="#creating-leave-type-for-sick-leave" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#creating-leave-type-for-sick-leave" data-title="Copy URL">#</a></h5>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="998" height="612" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-44.png" alt="" class="wp-image-1845" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-44.png 998w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-44-300x184.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-44-768x471.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-44-600x368.png 600w" sizes="(max-width: 998px) 100vw, 998px" /></figure>
                        <p></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1006" height="509" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-46.png" alt="" class="wp-image-1846" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-46.png 1006w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-46-300x152.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-46-768x389.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-46-600x304.png 600w" sizes="(max-width: 1006px) 100vw, 1006px" /></figure>
                        <p></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1018" height="550" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-49.png" alt="" class="wp-image-1847" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-49.png 1018w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-49-300x162.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-49-768x415.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-05-49-600x324.png 600w" sizes="(max-width: 1018px) 100vw, 1018px" /></figure>
                        <h2 id="forth-test-for-leave-balances" class="betterdocs-content-heading" id="forth-test-for-leave-balances">Fourth Test for Leave Balances <a href="#forth-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#forth-test-for-leave-balances" data-title="Copy URL">#</a></h2>
                        <p>Now generate the <em>Employee Leave Entitlement</em> report again. Only employees in Germany should be entitled to Vacation and Sick Leave.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjwuBjQN8WyAWswP%2Fleave-list-4.png?generation=1543473665174061&amp;alt=media" alt="" /></figure>
                        <p><em><strong>But still, we have a problem with Vacation Leave. How to apply different amounts of leave to employees based on years of experience. </strong></em></p>
                        <p><strong>This can be implemented using Leave Rules.</strong></p>
                        <h2 id="create-leave-rules-for-vacations" class="betterdocs-content-heading" id="create-leave-rules-for-vacations">Create Leave Rules for Vacations <a href="#create-leave-rules-for-vacations" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#create-leave-rules-for-vacations" data-title="Copy URL">#</a></h2>
                        <p>Leave rules are a way to alter Leave Types for individual or specific groups of employees. For example, you can increase the number of leave days only for employees having permanent work contracts by adding a Leave Rule.</p>
                        <h3 id="vacation-leave-rule-employees-having-2-years-of-experience" class="betterdocs-content-heading" id="vacation-leave-rule-employees-having-2-years-of-experience">Vacation Leave Rule (Employees having 2 years of Experience) <a href="#vacation-leave-rule-employees-having-2-years-of-experience" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#vacation-leave-rule-employees-having-2-years-of-experience" data-title="Copy URL">#</a></h3>
                        <ol>
                            <li>Go to <strong>Manage -&gt; Leave -&gt; Leave Rules</strong></li>
                            <li>Create a new Leave Rule for Leave Type <strong>Vacation</strong>. Set the <strong>Required Experience (Days)</strong> to 730 which is 2 years and Number of Leave Days to 27, as we need to give 2 additional leave day to employees who worked more than 2 years. This Leave Rule will be applied to the employees having more than 730 days between the joined date listed on profile and the start date of the current leave period.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="628" height="1024" src="https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1-628x1024.png" alt="" class="wp-image-1848" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1-628x1024.png 628w, https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1-184x300.png 184w, https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1-768x1252.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1-600x978.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/screencapture-icehrm-app-demo-icehrm-2022-02-10-14_16_09-1.png 787w" sizes="(max-width: 628px) 100vw, 628px" /></figure>
                        <ol>
                            <li>In order to create the Leave Rule for 3 years, copy the 2-year leave rule and change <strong>Required Experience (Days)</strong> to <strong>1095 (3 Years)</strong> and Number of Leave Days to 28</li>
                            <li>In order to create the Leave Rule for 4 years, copy the 3-year leave rule and change <strong>Required Experience (Days)</strong> to <strong>1460 (4 Years)</strong> and Number of Leave Days to 30</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="83" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-1024x83.png" alt="" class="wp-image-1849" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-1024x83.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-300x24.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-768x62.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-1536x124.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18-600x48.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-18-18.png 1572w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="fifth-test-for-leave-balances" class="betterdocs-content-heading" id="fifth-test-for-leave-balances">Fifth Test for Leave Balances <a href="#fifth-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#fifth-test-for-leave-balances" data-title="Copy URL">#</a></h2>
                        <p>Now generate the <em>Employee Leave Entitlement</em> report again.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjx-k6wnQ7sNF8Dh%2Fleave-list-5.png?generation=1543473664988533&amp;alt=media" alt="" /></figure>
                        <ul>
                            <li><strong>Jason Wood</strong> has 30 days of Vacation as he joined in Aug 2005.</li>
                            <li><strong>Noah Schmidt</strong> has 25 days of vacation. He joined in March 2020. But there is not more than 730 days between joined date and 1st day of the current leave period which is 1st of Jan 2022.</li>
                            <li><strong>Johanna Fischer</strong> has 27 leave days as she is eligible for 2-Year vacation leave rule. She joined in May 2019 and there are more than 730 days and less than 1095 days from the joined date to 1st of Jan 2022.</li>
                        </ul>
                        <h2 id="adding-information-about-previously-taken-leave-days" class="betterdocs-content-heading" id="adding-information-about-previously-taken-leave-days">Adding Information about previously taken Leave Days <a href="#adding-information-about-previously-taken-leave-days" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#adding-information-about-previously-taken-leave-days" data-title="Copy URL">#</a></h2>
                        <p>Even though you just configured your company leave policy in IceHrm, your employees might have been applying for leaves even before. Assume you migrated to IceHrm in March 2022. In this case, you can use the Paid time off tab to add already taken leave details for employees. For example, assume Jason Wood has already taken 5 Vacation Days off. And Johanna Fischer still has 6 Vacation days carried forward from the previous year. In order to implement this,<strong> you can add a negative paid time off for Jason Wood positive paid time off for Johanna Fischer.</strong></p>
                        <ol>
                            <li>Visit <strong>Manage -&gt; Leave -&gt; Paid Time off</strong></li>
                            <li>Add -5 Vacation days for <strong>Jason Wood</strong></li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="790" height="487" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-25-55.png" alt="" class="wp-image-1854" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-25-55.png 790w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-25-55-300x185.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-25-55-768x473.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-25-55-600x370.png 600w" sizes="(max-width: 790px) 100vw, 790px" /></figure>
                        <p>3. Add 6 Vacation days for <strong>Johanna Fischer</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="75" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10-1024x75.png" alt="" class="wp-image-1855" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10-1024x75.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10-300x22.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10-768x56.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10-600x44.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-27-10.png 1313w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="sixth-test-for-leave-balances" class="betterdocs-content-heading" id="sixth-test-for-leave-balances">Sixth Test for Leave Balances <a href="#sixth-test-for-leave-balances" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#sixth-test-for-leave-balances" data-title="Copy URL">#</a></h2>
                        <p>Now generate the <em>Employee Leave Entitlement</em> report again.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjx5fxeLS-1udKIF%2Fleave-list-6.png?generation=1543473664977920&amp;alt=media" alt="" /></figure>
                        <p>As you can see <strong>Jason Wood&#8217;s</strong> Vacation days are reduced from 30 to 25 and <strong>Johanna Fischer&#8217;s</strong> Vacation days are increased from 27 to 33.</p>
                        <h2 id="adding-compensated-leave-days" class="betterdocs-content-heading" id="adding-compensated-leave-days">Adding compensated Leave days <a href="#adding-compensated-leave-days" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#adding-compensated-leave-days" data-title="Copy URL">#</a></h2>
                        <p>Assume <strong>Johanna Fischer</strong> worked 2 additional Saturdays to get your urgent project released. So you can compensate her with two additional Vacation days using Paid time off.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="117" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19-1024x117.png" alt="" class="wp-image-1857" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19-1024x117.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19-300x34.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19-768x88.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19-600x69.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-30-19.png 1303w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="making-saturday-a-half-day-in-singapore" class="betterdocs-content-heading" id="making-saturday-a-half-day-in-singapore">Making Saturday a Half day in Singapore <a href="#making-saturday-a-half-day-in-singapore" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#making-saturday-a-half-day-in-singapore" data-title="Copy URL">#</a></h2>
                        <p>Currently, both offices only work from Monday to Friday. Let&#8217;s say you want to make Singapore employees work half a day on Saturday also.</p>
                        <ol>
                            <li>Visit <strong>Manage -&gt; Leave -&gt; Work Week</strong></li>
                            <li>Add a work day for Saturday in Singapore</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="777" height="305" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-32-05-1.png" alt="" class="wp-image-1860" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-32-05-1.png 777w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-32-05-1-300x118.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-32-05-1-768x301.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-32-05-1-600x236.png 600w" sizes="(max-width: 777px) 100vw, 777px" /></figure>
                        <p><strong>Note that this will be applied to employees having </strong>Country set to Singapore on their profile.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="519" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28-1024x519.png" alt="" class="wp-image-1861" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28-1024x519.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28-300x152.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28-768x389.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28-600x304.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-14-34-28.png 1090w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="few-last-notes" class="betterdocs-content-heading" id="few-last-notes">Last Few Notes <a href="#few-last-notes" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/company-leave-policy/#few-last-notes" data-title="Copy URL">#</a></h2>
                        <ol>
                            <li>When an employee applied for a Leave his/her Leave Balance will be updated only when the leave is approved.</li>
                            <li>Until the Leave is approved employee has the ability to delete it.</li>
                            <li>After the approval, the employee can cancel the Leave. But the cancellation request will be sent to the supervisor and only after the cancellation request is approved, the leave balance will be updated.</li>
                            <li>Leave days will be carried forward only from Leave Period defined. For an example, if you have leave periods defined for 2021 and 2022, leave days will be carried forward only from 2021 to 2022. Leave days could have been carried forward from 2020 will be ignored.</li>
                            <li>After configuring Leave Types if you are seeing wired numbers as balances first check whether you have previous leave periods defined which are actually not required. When you enable leave carry forwarding and there is a previous leave period defined, current leave period will get leave days carried forward from previous leave period.</li>
                            <li>All the employee leave requests should be approved by the supervisor or an admin. An admin can approve any leave request.</li>
                        </ol>
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
                            Updated on February 10, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/vacation-and-leave-management/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Vacation and Leave Management</a><a href="https://icehrm.com/explore/docs/leave-requests-and-approval/" rel="next">Leave Requests and Approval <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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