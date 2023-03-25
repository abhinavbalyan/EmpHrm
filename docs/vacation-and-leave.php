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
                                <li class="betterdocs-breadcrumb-item item-current item-1109 current"><span>Vacation and Leave Management</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Vacation and Leave Management</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#leave-periods">Leave Periods</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#leave-types">Leave Types</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#adding-a-new-leave-type">Adding a new Leave Type</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#work-week">Work week</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#holidays">Holidays</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#employee-leaves">Employee Leaves</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#employee-leave-entitlement">Employee Leave Entitlement</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#leave-groups">Leave Groups</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#leave-rules-by-example">Leave Rules By Example</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#example-1">Example 1</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#example-2">Example 2</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#example-3">Example 3</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#example-4">Example 4</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#implementing-a-sample-leave-policy">Implementing a Sample Leave Policy</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#setting-up-leave-module">Setting up Leave Module</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#setting-up-leave-periods">Setting up leave periods</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#setting-up-leave-types">Setting up leave types</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#employee-leave-entitlement">Employee Leave Entitlement</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#adding-leave-balance-from-the-previous-year">Adding leave balance from the previous year</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#proportioning-leaves-respect-to-joined-date">Proportioning leaves respect to joined date</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#employee-leave-periods">Employee Leave Periods</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#checking-leave-entitlement">Checking Leave Entitlement</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#understand-the-leave-calculation">Understand the Leave Calculation</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#leave-management-faq">Leave Management FAQ</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#leave-paid-time-off-management">Leave/Paid Time Off Management</a>
                                        <ul class="betterdocs-toc-list-level-4">
                                            <li class="betterdocs-toc-heading-level-4"><a href="#how-to-allocate-160-hours-instead-of-days-in-leave-management-module">How to allocate 160 hours instead of days in leave management module?</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#how-to-allocate-different-amounts-of-leave-to-different-employees-or-categories">How to allocate different amounts of leave to different employees or categories?</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#how-to-compensate-an-employee-with-paid-time-off">How to compensate an employee with Paid time off?</a></li>
                                            <li class="betterdocs-toc-heading-level-4"><a href="#i-ve-not-been-using-icehrm-during-2021-but-when-configuring-leave-balances-for-2022-different-employees-are-having-different-leave-balances-carried-forwarded-from-2021-how-to-handle-this">I've not been using IceHrm during 2021, But when configuring leave balances for 2022 different employees are having different leave balances carried forwarded from 2021. How to handle this?</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>IceHrm has one of the best leave management systems among all the HRM software. Leaves module is used to define all the elements required to manage the leave application process of your company including:</p>
                        <p>●Leave periods<br>●Leave types<br>●Workweek<br>●Holidays<br>●Leave rules</p>
                        <h2 id="leave-periods" class="betterdocs-content-heading" id="leave-periods">Leave Periods <a href="#leave-periods" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-periods" data-title="Copy URL">#</a></h2>
                        <p>A leave period is usually a year but can be different according to company HR processes. Leave periods can’t overlap, which means if an employee applied for annual leaves in the leave period for “Year 2014”, his leave balance in the leave period “Year 2015” won’t get affected. This is the same for all types of leaves. Also if the leave period for the year 2015 is not defined, employees won’t be able to apply for leaves for 2015.</p>
                        <h2 id="leave-types" class="betterdocs-content-heading" id="leave-types">Leave Types <a href="#leave-types" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-types" data-title="Copy URL">#</a></h2>
                        <p>The leave type tab defines the types of leaves that can be applied by employees.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="372" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1024x372.png" alt="" class="wp-image-1110" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1024x372.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-300x109.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-768x279.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-600x218.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave.png 1339w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h2 id="adding-a-new-leave-type" class="betterdocs-content-heading" id="adding-a-new-leave-type">Adding a new Leave Type <a href="#adding-a-new-leave-type" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#adding-a-new-leave-type" data-title="Copy URL">#</a></h2>
                        <p>When adding a leave type you need to set the following fields</p>
                        <p>Basic:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="919" height="566" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1.png" alt="" class="wp-image-1269" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1.png 919w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1-300x185.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1-768x473.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-1-600x370.png 600w" sizes="(max-width: 919px) 100vw, 919px" /></figure>
                        <p>Carry Forward:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="917" height="464" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-2.png" alt="" class="wp-image-1270" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-2.png 917w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-2-300x152.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-2-768x389.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-2-600x304.png 600w" sizes="(max-width: 917px) 100vw, 917px" /></figure>
                        <p>Advanced:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="911" height="491" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-3.png" alt="" class="wp-image-1272" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leave-3.png 911w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-3-300x162.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-3-768x414.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leave-3-600x323.png 600w" sizes="(max-width: 911px) 100vw, 911px" /></figure>
                        <p></p>
                        <figure class="wp-block-table is-style-stripes">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Field</strong></td>
                                        <td><strong>Description</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Admin can assign leave to employees</td>
                                        <td>If “Yes” is selected, an Admin or a Manager is able to log in as an employee (Please check switch employee concept explained in employee module) and apply this type of leaves on behalf of the employee.</td>
                                    </tr>
                                    <tr>
                                        <td>Employees can apply for this leave type</td>
                                        <td>If “No” is selected; only an Admin or a Manager is allowed to assign this type of leave to an employee. (An employee won’t be able to apply for this type of leave).</td>
                                    </tr>
                                    <tr>
                                        <td>Leaves per Year</td>
                                        <td>This is the number of leaves that can be applied by an employee per year (or the current leave period). If the leave period is less than a year this is the number of leaves for the leave period.</td>
                                    </tr>
                                    <tr>
                                        <td>Leave Accrue Enabled</td>
                                        <td>If this is set to “Yes”, employees won’t have all the leaves added to their leave balance at the beginning of the leave period. Instead, leaves get accrued for every passing day in the leave period. For example, if for a particular leave type number of leaves per period is defined as 24 and the leave period (having 12 months) is starting from January, at the end of January an employee will be able to apply for 2 leaves of this leave type (24/12)</td>
                                    </tr>
                                    <tr>
                                        <td>Leave Carried Forward</td>
                                        <td>If an employee has some leave balance remaining in the previous leave period, that amount will get added to the current leave period.</td>
                                    </tr>
                                    <tr>
                                        <td>Percentage of Leaves Carried Forward</td>
                                        <td>In each year (or period) what percentage of remaining leaves should be carried forward.</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Carried Forward Amount</td>
                                        <td>The maximum number of leave days can be carried forward from one year to another. Set to 0 for unlimited.</td>
                                    </tr>
                                    <tr>
                                        <td>Carried Forward Leave Availability Period</td>
                                        <td>For how many days carried forward leaves are available from the start date of the next leave period.</td>
                                    </tr>
                                    <tr>
                                        <td>Proportionate Leaves on Joined Date</td>
                                        <td>Whether the available number of leaves should be calculated based on number of days employees work in a given leave period. (e.g if an employee joined at the end of June, he/she will only get half of the number of leaves specified for the given leave type.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                        <p></p>
                        <h2 id="work-week" class="betterdocs-content-heading" id="work-week">Work week <a href="#work-week" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#work-week" data-title="Copy URL">#</a></h2>
                        <p>Work week defines the days that your employees are working. When an employee is applying for a leave, the workweek is taken into consideration. For example, if your company works only from Monday to Friday and if an employee applied for leave for two continuous weeks including weekends, Saturdays and Sundays will NOT be counted for leave application.</p>
                        <p>In some cases, companies need to keep different workweeks for different countries. For example, if your branch in the UK works half a day on Saturday then you can add that as shown in the following image. All the leave calculations of UK-based employees (employee: country field should be set to the UK) will be done according to the extended workweek defined for the UK.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="548" src="https://icehrm.com/explore/wp-content/uploads/2021/11/work-week-1024x548.png" alt="" class="wp-image-1112" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/work-week-1024x548.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/work-week-300x161.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/work-week-768x411.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/work-week-600x321.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/work-week.png 1115w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h2 id="holidays" class="betterdocs-content-heading" id="holidays">Holidays <a href="#holidays" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#holidays" data-title="Copy URL">#</a></h2>
                        <p>Holidays define the list of holidays for all leave periods. It is advised to define all holidays for all the enabled leave periods. If an employee applies for a leave that includes a holiday, the leave for holiday won’t be counted. Just like the workweek, you can have different holidays defined for different countries. In the following example 2022-12-18 is defined as a holiday only for the UK.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="224" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-1024x224.png" alt="" class="wp-image-1804" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-1024x224.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-300x66.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-768x168.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-1536x336.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22-600x131.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-09-22.png 1678w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h2 id="employee-leaves" class="betterdocs-content-heading" id="employee-leaves">Employee Leaves <a href="#employee-leaves" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#employee-leaves" data-title="Copy URL">#</a></h2>
                        <p>The <strong>Employee Leave List</strong> tab lists all the employee leaves. An administrator can view details of leaves and take actions on it (Approve or Reject). Admin should usually use this feature when the Supervisor of the person who applied for the leave is not able to do it.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="269" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-1024x269.png" alt="" class="wp-image-1806" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-1024x269.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-300x79.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-768x202.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-1536x403.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31-600x157.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-11-31.png 1673w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h2 id="employee-leave-entitlement" class="betterdocs-content-heading" id="employee-leave-entitlement">Employee Leave Entitlement <a href="#employee-leave-entitlement" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#employee-leave-entitlement" data-title="Copy URL">#</a></h2>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="593" src="https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement-1024x593.png" alt="" class="wp-image-1113" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement-1024x593.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement-300x174.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement-768x445.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement-600x348.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/entitlement.png 1113w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>All the employees are allowed to check their leave entitlement. It shows a summary of their leave balances for the current leave period.</p>
                        <figure class="wp-block-table is-style-stripes">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><strong>Field </strong></td>
                                        <td><strong>Description</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Available Leaves</td>
                                        <td>Number of leaves remaining that you can apply during the current leave period</td>
                                    </tr>
                                    <tr>
                                        <td>Pending Leaves</td>
                                        <td>Number of leave you have applied but not approved or rejected</td>
                                    </tr>
                                    <tr>
                                        <td>Leaves to be Accrued</td>
                                        <td>If the Leave Accrue Enabled is set for the leave type, this will show how many leave days will be added to your leave balance by end of the current leave period</td>
                                    </tr>
                                    <tr>
                                        <td>Leaves Carried Forwarded</td>
                                        <td><br>Leave days carried forward from previous leave periods</td>
                                    </tr>
                                </tbody>
                            </table>
                        </figure>
                        <p></p>
                        <h2 id="leave-groups" class="betterdocs-content-heading" id="leave-groups">Leave Groups <a href="#leave-groups" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-groups" data-title="Copy URL">#</a></h2>
                        <p>Leave groups can be used to:</p>
                        <ol>
                            <li>Group a set of employees and create leave rules affecting all employees in the group.</li>
                            <li>Selectively allow some leave types only to a group of employees (for an example you can assign Maternity leaves only to female employees).</li>
                        </ol>
                        <p>In order to do this:</p>
                        <p> ● First, create the leave group under <strong>Manage -&gt; Leave -&gt; Leave Groups -&gt; Edit Leave Groups.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="367" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup-1024x367.png" alt="" class="wp-image-1114" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup-1024x367.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup-300x108.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup-768x275.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup-600x215.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavegroup.png 1104w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p> ● Add employees to the leave group.<br> ● Create a leave type for Maternity leave by specifying “Female employees group”. Now only employees added to that group will be able to apply for maternity leaves</p>
                        <h2 id="leave-rules-by-example" class="betterdocs-content-heading" id="leave-rules-by-example">Leave Rules By Example <a href="#leave-rules-by-example" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-rules-by-example" data-title="Copy URL">#</a></h2>
                        <p>Leave rule is one of the unique and advanced features of ICE Hrm. Using leave rules you can overwrite the behavior of leave types for job titles, employment statuses, or even individual employees. The following examples will show you the proper way to use leave rules</p>
                        <h3 id="example-1" class="betterdocs-content-heading" id="example-1">Example 1 <a href="#example-1" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#example-1" data-title="Copy URL">#</a></h3>
                        <p>To enable all Software Engineers to apply for 20 annual leaves, you need to add a new leave rule as shown below</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="628" height="1024" src="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55-628x1024.png" alt="" class="wp-image-1277" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55-628x1024.png 628w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55-184x300.png 184w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55-768x1251.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55-600x978.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_22_55.png 788w" sizes="(max-width: 628px) 100vw, 628px" /></figure>
                        <h3 id="example-2" class="betterdocs-content-heading" id="example-2">Example 2 <a href="#example-2" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#example-2" data-title="Copy URL">#</a></h3>
                        <p>Enable all Software Engineers who are permanent employees to apply for 10 medical leaves</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="616" height="1024" src="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13-616x1024.png" alt="" class="wp-image-1278" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13-616x1024.png 616w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13-181x300.png 181w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13-768x1276.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13-600x997.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_27_13.png 771w" sizes="(max-width: 616px) 100vw, 616px" /></figure>
                        <h3 id="example-3" class="betterdocs-content-heading" id="example-3">Example 3 <a href="#example-3" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#example-3" data-title="Copy URL">#</a></h3>
                        <p>Do not allow contact workers to apply for casual leaves. Only administrator is allowed to apply casual leaves on behalf of them with a maximum limit of 5 leaves per leave period</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="626" height="1024" src="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17-626x1024.png" alt="" class="wp-image-1279" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17-626x1024.png 626w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17-183x300.png 183w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17-768x1257.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17-600x982.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_29_17.png 786w" sizes="(max-width: 626px) 100vw, 626px" /></figure>
                        <h3 id="example-4" class="betterdocs-content-heading" id="example-4">Example 4 <a href="#example-4" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#example-4" data-title="Copy URL">#</a></h3>
                        <p>How to allow employees to take annual leave only after completing 1 year of service.</p>
                        <p>For this create a leave rule having the topmost department of your company and select required experience to 365 days.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="631" height="1024" src="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52-631x1024.png" alt="" class="wp-image-1280" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52-631x1024.png 631w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52-185x300.png 185w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52-768x1247.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52-600x974.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/screencapture-icehrm-app-roshel-2021-11-17-11_31_52.png 795w" sizes="(max-width: 631px) 100vw, 631px" /></figure>
                        <h2 id="implementing-a-sample-leave-policy" class="betterdocs-content-heading" id="implementing-a-sample-leave-policy">Implementing a Sample Leave Policy <a href="#implementing-a-sample-leave-policy" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#implementing-a-sample-leave-policy" data-title="Copy URL">#</a></h2>
                        <h3 id="setting-up-leave-module" class="betterdocs-content-heading" id="setting-up-leave-module">Setting up Leave Module <a href="#setting-up-leave-module" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#setting-up-leave-module" data-title="Copy URL">#</a></h3>
                        <p>Since I have noticed that it&#8217;s not a trivial task to set up the icehrm leave module initially when moving from another active leave management setup, I&#8217;m writing this to walk you through a short tutorial.</p>
                        <p><strong>Let&#8217;s assume the following:</strong></p>
                        <p>1. You are moving the leave management system to icehrm, in the middle of the leave period for 2015.<br>2. Some of your employees have leaves carried forward from 2014, which might not have been used. <br>3. Your company has annual leave which can be carried forward to next year. <br>4. There are casual leaves that are accrued 1.5 per month. <br>5. Some employees have joined in 2015 and their leave entitlement should be proportionate according to joined date.</p>
                        <h3 id="setting-up-leave-periods" class="betterdocs-content-heading" id="setting-up-leave-periods">Setting up leave periods <a href="#setting-up-leave-periods" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#setting-up-leave-periods" data-title="Copy URL">#</a></h3>
                        <p>The first task is setting up the leave periods. If you are starting from 2022 you only need to have the 2022 leave period. But creating a leave period for 2023 also should not be an issue. Creating a leave period for 2021 will carry forward whatever the remaining leaves from 2021 to 2022. In that case, you have to enter all employee leave details for 2021 manually into IceHrm. So the preferred way is to not create the previous leave period by adding all leave carried forwarded by employees using PTO (this will be explained in another section).</p>
                        <p>Also, note that the leave period can have different lengths and can be started from any month of the year.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="63" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-1024x63.png" alt="" class="wp-image-1811" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-1024x63.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-300x19.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-768x47.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-1536x95.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1-600x37.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-16-36-1.png 1553w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h3 id="setting-up-leave-types" class="betterdocs-content-heading" id="setting-up-leave-types">Setting up leave types <a href="#setting-up-leave-types" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#setting-up-leave-types" data-title="Copy URL">#</a></h3>
                        <ul>
                            <li>Lets setup the leave type for annual leave which can be carried forwarded to the next year</li>
                        </ul>
                        <p>Basic:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1019" height="600" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example1.png" alt="" class="wp-image-1282" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example1.png 1019w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example1-300x177.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example1-768x452.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example1-600x353.png 600w" sizes="(max-width: 1019px) 100vw, 1019px" /></figure>
                        <p>Carry Forward:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1019" height="519" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example2.png" alt="" class="wp-image-1283" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example2.png 1019w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example2-300x153.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example2-768x391.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example2-600x306.png 600w" sizes="(max-width: 1019px) 100vw, 1019px" /></figure>
                        <p>Advanced:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1022" height="554" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example3.png" alt="" class="wp-image-1285" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example3.png 1022w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example3-300x163.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example3-768x416.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leavetype-example3-600x325.png 600w" sizes="(max-width: 1022px) 100vw, 1022px" /></figure>
                        <p>Here I&#8217;ve set leave carried forward to &#8216;Yes&#8217; and carry forward percentage to 100% so all the remaining annual leave of this year will be carried forward to the next.</p>
                        <ul>
                            <li>Setting up casual leave which are accrued 1.5 per each month and should not be carried forward to the next year</li>
                        </ul>
                        <p>Basic:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1013" height="590" src="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.1.png" alt="" class="wp-image-1287" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.1.png 1013w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.1-300x175.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.1-768x447.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.1-600x349.png 600w" sizes="(max-width: 1013px) 100vw, 1013px" /></figure>
                        <p>Carry Forward:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="1017" height="507" src="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.2-1.png" alt="" class="wp-image-1291" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.2-1.png 1017w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.2-1-300x150.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.2-1-768x383.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.2-1-600x299.png 600w" sizes="(max-width: 1017px) 100vw, 1017px" /></figure>
                        <p>Advanced:</p>
                        <figure class="is-layout-flex wp-block-gallery-1 wp-block-gallery has-nested-images columns-default is-cropped">
                            <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1016" height="540" data-id="1290" src="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.3.png" alt="" class="wp-image-1290" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/example2.3.png 1016w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.3-300x159.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.3-768x408.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/example2.3-600x319.png 600w" sizes="(max-width: 1016px) 100vw, 1016px" /></figure>
                        </figure>
                        <p>I have entered 18 for leave amount, this will accrue 1.5 (18/12) days per month since the leave period length for 2022 is 12 months.</p>
                        <h3 id="employee-leave-entitlement" class="betterdocs-content-heading" id="employee-leave-entitlement">Employee Leave Entitlement <a href="#employee-leave-entitlement" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#employee-leave-entitlement" data-title="Copy URL">#</a></h3>
                        <p>Now assume we have an employee named &#8216;Melba Dowling&#8217;. Her leave entitlement (under &#8220;Leave&#8221; =&gt; &#8220;Leave Management&#8221;), after the above leave periods and leave types are added should look like this:</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="806" height="612" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-48-50.png" alt="" class="wp-image-1812" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-48-50.png 806w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-48-50-300x228.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-48-50-768x583.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-48-50-600x456.png 600w" sizes="(max-width: 806px) 100vw, 806px" />
                            <figcaption>Leave Entitlement for Melba Dowling</figcaption>
                        </figure>
                        <p>There are 3 leaves accrued for this year (for the period 2022-01-01 to 2022-02-10). </p>
                        <h3 id="adding-leave-balance-from-the-previous-year" class="betterdocs-content-heading" id="adding-leave-balance-from-the-previous-year">Adding leave balance from the previous year <a href="#adding-leave-balance-from-the-previous-year" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#adding-leave-balance-from-the-previous-year" data-title="Copy URL">#</a></h3>
                        <p>The other problem you will face while adopting Icehrm leave management is moving leave balance from the previous year in a third-party leave management system to Icehrm. In order to do this, you can use PTO. For example, if Melba Dowling has 3 annual leave days remaining from 2021 (but you are not able to automatically move it to 2022 because you have not been using Icehrm in 2021), you can add PTO days as shown below through <strong>Manage=&gt;Leave =&gt;Paid Time Off.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="150" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-1024x150.png" alt="" class="wp-image-1813" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-1024x150.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-300x44.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-768x113.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-1536x226.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49-600x88.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-52-49.png 1668w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>After adding the leave balance you will notice that Melba Dowling has 17 annual leaves instead of 14 in her leave entitlement.</p>
                        <p><strong>Also, you may add negative leave balances under PTO for the current year to reflect already taken leaves by employees.</strong></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="818" height="562" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-54-28.png" alt="" class="wp-image-1814" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-54-28.png 818w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-54-28-300x206.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-54-28-768x528.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-11-54-28-600x412.png 600w" sizes="(max-width: 818px) 100vw, 818px" /></figure>
                        <h3 id="proportioning-leaves-respect-to-joined-date" class="betterdocs-content-heading" id="proportioning-leaves-respect-to-joined-date">Proportioning leaves respect to joined date <a href="#proportioning-leaves-respect-to-joined-date" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#proportioning-leaves-respect-to-joined-date" data-title="Copy URL">#</a></h3>
                        <p>Let&#8217;s assume Melba Dowling joined the company in May 2022 and should not be allowed to take only a pat of leave count defined for 2022. Then for the annual leave definition under <strong>Manage -&gt;Leave -&gt;Leave Types</strong> you can edit Annual Leave and make &#8220;Proportionate leaves <strong>on Joined date&#8221; = &#8220;YES&#8221;.</strong></p>
                        <p>If this is set then Melba Dowling will only be entitled to 18 * (8/12) annual leaves for the year given he has joined on the 1st of May 2022.</p>
                        <h3 id="employee-leave-periods" class="betterdocs-content-heading" id="employee-leave-periods">Employee Leave Periods <a href="#employee-leave-periods" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#employee-leave-periods" data-title="Copy URL">#</a></h3>
                        <p>With IceHrm now you can have employee leave periods which are started from the joined date of the employee. For example assume you have an employee joining the company on 20th March 2019. This employee should get 12 days of annual leave for the year. The leave balance should be updated again after one year from the joined date, which is 20th March 2020.</p>
                        <p>In order to implement this, you need Employee Leave Periods. So set <strong>&#8220;Use Employee Leave Period&#8221;</strong> to <strong>YES.</strong></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="782" height="600" src="https://icehrm.com/explore/wp-content/uploads/2021/11/YES.png" alt="" class="wp-image-1117" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/YES.png 782w, https://icehrm.com/explore/wp-content/uploads/2021/11/YES-300x230.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/YES-768x589.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/YES-600x460.png 600w" sizes="(max-width: 782px) 100vw, 782px" /></figure>
                        <p>When you enable this option, leave entitlement will show according to the employee&#8217;s leave period.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-Lu6FhTzntoHfk_hDjMx%2F-Lu6V2LSwBOxVtSOEOBY%2Fimage.png?alt=media&amp;token=9fc6cb1f-0e11-4147-8fe1-cf5cd13dba6f" alt="" /></figure>
                        <h2 id="checking-leave-entitlement" class="betterdocs-content-heading" id="checking-leave-entitlement">Checking Leave Entitlement <a href="#checking-leave-entitlement" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#checking-leave-entitlement" data-title="Copy URL">#</a></h2>
                        <p>In order to check each user&#8217;s leave entitlement, Users can log in to their accounts and go to the Leave Management module. Then click on the Leave Entitlement tab, so they can see the number of leaves entitled under each leave category.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="490" src="https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen-1024x490.png" alt="" class="wp-image-1118" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen-1024x490.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen-300x143.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen-768x367.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen-600x287.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/leaveen.png 1355w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Apart from checking the leave entitlement, you also can find out how the leave balance of each leave type has been calculated. To check it, click on the Show Calculation option on the bottom of each leave entitlement category.</p>
                        <h2 id="understand-the-leave-calculation" class="betterdocs-content-heading" id="understand-the-leave-calculation">Understand the Leave Calculation <a href="#understand-the-leave-calculation" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#understand-the-leave-calculation" data-title="Copy URL">#</a></h2>
                        <p>To understand how IceHrm Leave calculation works, Let&#8217;s take one employees&#8217; leave entitlement as an example. Assume an employee Joined in 2015 Mar 20th and he is entitled for 25 Vacation Leave days for one leave period. The leave period for this leave type is not the employee&#8217;s leave period, it is from 1st Jan to 31 Dec every year. You can find the employee&#8217;s leave entitlement for each leave period separately under show calculation. This is the total leave entitlement of the employee.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-Lu6WSmYc6amzkFlJD8E%2F-Lu7eW0gF6SYR0iqndDH%2Fimage.png?alt=media&amp;token=0f2fef64-c64f-4636-8a93-ae8a6707f03b" alt="" /></figure>
                        <p>Let&#8217;s take a look at the calculation period by period.</p>
                        <p><strong>Leave entitlement for 2019 is as below.</strong></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-Lu6WSmYc6amzkFlJD8E%2F-Lu7XSNs2aiQD-jqnFub%2Fimage.png?alt=media&amp;token=d179f594-0c6c-4134-9dda-5aafd8028389" alt="" /></figure>
                        <p>The leave accrue option has been enabled to this leave type. So according to the leave calculation for this leave period, he is entitled to 22.9 as per the accrual. IceHrm calculation is also showing how employee leave carried forward has been calculated for each leave period.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-Lu6WSmYc6amzkFlJD8E%2F-Lu7_Jvi7POcJytfDsRU%2Fimage.png?alt=media&amp;token=17c86aa8-ab8c-4228-adc1-54215c66bb23" alt="" /></figure>
                        <p>In 2017 this employee hasn&#8217;t taken any leaves so the total of leaves will be carried forwards to the next leave period.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-Lu6WSmYc6amzkFlJD8E%2F-Lu7_qsyO2gte_lp7Xd1%2Fimage.png?alt=media&amp;token=733ccc5b-d327-46a1-89ee-3aacf87d5a30" alt="" /></figure>
                        <p>In 2018 employee has applied for one vacation for this leave period. If we calculate based on that the manual calculation will be 25+25+22.9 &#8211; 1. So the total is 71.9 but the leave entitlement shows as 66.9. This is where we need IceHrm show calculation option to avoid human errors in leave calculation. According to the last screen-shot, you can see the employee has -5 PTO&#8217;s. Because of that, this employee is entitled to only 20 vacation days for 2018. With his requested leave he has a balance of 18. So the total leave entitlement is 18+25+22.9=66.9. Because of this show calculation option, you can easily find out the employees&#8217; leave history.</p>
                        <h2 id="leave-management-faq" class="betterdocs-content-heading" id="leave-management-faq">Leave Management FAQ <a href="#leave-management-faq" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-management-faq" data-title="Copy URL">#</a></h2>
                        <h3 id="leave-paid-time-off-management" class="betterdocs-content-heading" id="leave-paid-time-off-management">Leave/Paid Time Off Management <a href="#leave-paid-time-off-management" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#leave-paid-time-off-management" data-title="Copy URL">#</a></h3>
                        <h4 id="how-to-allocate-160-hours-instead-of-days-in-leave-management-module" class="betterdocs-content-heading" id="how-to-allocate-160-hours-instead-of-days-in-leave-management-module">How to allocate 160 hours instead of days in leave management module? <a href="#how-to-allocate-160-hours-instead-of-days-in-leave-management-module" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#how-to-allocate-160-hours-instead-of-days-in-leave-management-module" data-title="Copy URL">#</a></h4>
                        <p>When adding leave entitlement you should primarily use leave types. Since you are getting 160 hours a year you can create a leave type called Annual leave and add 20 (160/8) days as leave amount for that leave type. IceHrm assumes an 8-hour workday. So when you do that you can apply for a leave for 1 day or 1 hour. If you apply for a 1 day leave your leave entitlement available leave count will become 19. If you apply for one hour it&#8217;ll take away 0.125 from your leave entitlement.</p>
                        <h4 id="how-to-allocate-different-amounts-of-leave-to-different-employees-or-categories" class="betterdocs-content-heading" id="how-to-allocate-different-amounts-of-leave-to-different-employees-or-categories">How to allocate different amounts of leave to different employees or categories? <a href="#how-to-allocate-different-amounts-of-leave-to-different-employees-or-categories" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#how-to-allocate-different-amounts-of-leave-to-different-employees-or-categories" data-title="Copy URL">#</a></h4>
                        <p>Let&#8217;s say some employees have only 150 hours of paid time off. (For example all &#8220;Marketing Managers&#8221;). To implement this you can go to add a leave rule for Marketing Managers for annual leave with a leave amount of only 18.75 days (150/8). Leave rules are not bound to any leave period, so the leave rules that you define will be applied to all the leave periods.</p>
                        <h4 id="how-to-compensate-an-employee-with-paid-time-off" class="betterdocs-content-heading" id="how-to-compensate-an-employee-with-paid-time-off">How to compensate an employee with Paid time off? <a href="#how-to-compensate-an-employee-with-paid-time-off" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#how-to-compensate-an-employee-with-paid-time-off" data-title="Copy URL">#</a></h4>
                        <p>Assume that an employee worked on a holiday due to some urgent issue. You need to compensate him/her with an additional day off. In that case, you can use the &#8220;Paid Time Off&#8221; tab to add an additional leave to the employee. Paid time off is also used to add leaves carried forward from previous years where you have not been using icehrm. If you want to remove some leave from an employee you can add minus PTO also.</p>
                        <h4 id="i-ve-not-been-using-icehrm-during-2021-but-when-configuring-leave-balances-for-2022-different-employees-are-having-different-leave-balances-carried-forwarded-from-2021-how-to-handle-this" class="betterdocs-content-heading" id="i-ve-not-been-using-icehrm-during-2021-but-when-configuring-leave-balances-for-2022-different-employees-are-having-different-leave-balances-carried-forwarded-from-2021-how-to-handle-this">I&#8217;ve not been using IceHrm during 2021, But when configuring leave balances for 2022 different employees are having different leave balances carried forwarded from 2021. How to handle this? <a href="#i-ve-not-been-using-icehrm-during-2021-but-when-configuring-leave-balances-for-2022-different-employees-are-having-different-leave-balances-carried-forwarded-from-2021-how-to-handle-this" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/vacation-and-leave-management/#i-ve-not-been-using-icehrm-during-2021-but-when-configuring-leave-balances-for-2022-different-employees-are-having-different-leave-balances-carried-forwarded-from-2021-how-to-handle-this" data-title="Copy URL">#</a></h4>
                        <p>You should add these as PTO amounts for the leave period 2022 under the &#8220;Paid Time Off&#8221; tab. You will have to add one record for each employee. This is a one-time setup, from 2023 you can use automatic leave carry forwarding.</p>
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
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/company-leave-policy/" rel="next">Company Leave Policy <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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