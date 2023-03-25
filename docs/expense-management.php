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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/expenses/">Expenses</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1167 current"><span>Expense Management</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Expense Management</h1>
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
                            <ul class="betterdocs-toc-list-level-2">
                                <li class="betterdocs-toc-heading-level-2"><a href="#configuring-expenses-module">Configuring Expenses Module</a></li>
                            </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#adding-expenses">Adding Expenses</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#how-to-add-an-expense-category">How to add an expense category?</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#approval-process">Approval Process</a>
                                <ul class="betterdocs-toc-list-level-2">
                                    <li class="betterdocs-toc-heading-level-2"><a href="#how-to-enable-multilevel-approval-for-an-employee-expense">How to enable multilevel approval for an employee expense?</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#how-to-approve-an-expense-as-an-admin-manager">How to approve an expense as an Admin/Manager?</a></li>
                                    <li class="betterdocs-toc-heading-level-2"><a href="#pre-approving-expenses">Pre-Approving Expenses</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-1"><a href="#reporting">Reporting</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <h2 id="configuring-expenses-module" class="betterdocs-content-heading" id="configuring-expenses-module">Configuring Expenses Module <a href="#configuring-expenses-module" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#configuring-expenses-module" data-title="Copy URL">#</a></h2>
                        <p>Expense categories and payment methods can be configured under<strong> Manage -> Expenses.</strong> Also, Managers can view and approve or reject subordinate expenses under the same module.</p>
                        <p>Admins can view and edit expenses from all employees.</p>
                        <h1 id="adding-expenses" class="betterdocs-content-heading" id="adding-expenses">Adding Expenses <a href="#adding-expenses" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#adding-expenses" data-title="Copy URL">#</a></h1>
                        <p>Employees can add expenses under <strong>Finance -&gt; Expenses -&gt; Add New</strong></p>
                        <p> Fill in the necessary fields.</p>
                        <p>· <strong>Date </strong>— Add the date of the expense.<br>· <strong>Payment method</strong> — Select the payment method whether cash, cheque, or card payment.<br>· <strong>Payee </strong>— Name of the employee who needs to get the payment.<br>· <strong>Expense Category</strong> — Select the expense category accordingly.<br>· <strong>Currency </strong>— Enter the currency which needs to be paid in.<br>· <strong>Amount </strong>— Enter the total amount of expense.</p>
                        <p><strong>In addition to this, you can request your employees to attach proof here. For example, they can attach a receipt of the expense.</strong></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY48gH5SMPe9A4nLezp%2Fimage.png?alt=media&amp;token=0d63747d-cbd3-4542-b493-2d88c5e9a852" alt="" /></figure>
                        <h2 id="how-to-add-an-expense-category" class="betterdocs-content-heading" id="how-to-add-an-expense-category">How to add an expense category? <a href="#how-to-add-an-expense-category" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#how-to-add-an-expense-category" data-title="Copy URL">#</a></h2>
                        <p>If you want to make changes to the Expense module in <a href="https://icehrm.com">IceHrm</a>, you need to log in to the Admin account.</p>
                        <p>Follow the below steps;</p>
                        <ol>
                            <li>Go to <strong>the dashboard </strong>and click on the <strong>Expense Management</strong> module or You can go to the<strong> Manage module</strong> and click on the <strong>Expense</strong> section.</li>
                            <li>In <a href="https://icehrm.com">IceHrm</a> we have already defined some expense categories which are in the use of the Industry. If you want to add anything else, you can click on the <strong>Add New</strong> option under the<strong> Expense Categories </strong>tab</li>
                            <li>Then Add a meaning full <strong>Name</strong> to the expense and <strong>Save</strong></li>
                        </ol>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY49J4uR_jxTgyWviT9%2Fimage.png?alt=media&amp;token=368832d1-723c-424c-94b1-c367ec0fe75f" alt="" /></figure>
                        <h1 id="approval-process" class="betterdocs-content-heading" id="approval-process">Approval Process <a href="#approval-process" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#approval-process" data-title="Copy URL">#</a></h1>
                        <p>You can define 1st, 2nd, and 3rd level approvers for employees (while editing an employee). These approvers and the employee&#8217;s direct supervisor will be involved in the approval process of most of the entities added by employees.</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-LSTBj3Mn8gXVQaLg9Zr%2F-LSTBjtbDxEcFE-C07Gt%2FIceHrm%20Approval%20Process.png?generation=1543473660688381&amp;alt=media" alt="" /></figure>
                        <h2 id="how-to-enable-multilevel-approval-for-an-employee-expense" class="betterdocs-content-heading" id="how-to-enable-multilevel-approval-for-an-employee-expense">How to enable multilevel approval for an employee expense? <a href="#how-to-enable-multilevel-approval-for-an-employee-expense" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#how-to-enable-multilevel-approval-for-an-employee-expense" data-title="Copy URL">#</a></h2>
                        <p>In order to enable multi-level approval for the employee expenses;</p>
                        <ol>
                            <li>Log in to the <strong>Admin account</strong></li>
                            <li>Go to the <strong>System</strong> module and select <strong>Settings</strong> session</li>
                            <li>Click on to the <strong>Other</strong> tab</li>
                            <li>Under the <strong>Other</strong> tab bottom, you will be able to find <strong>Expense: Enable multilevel approvals</strong>. Click on the edit button to make changes</li>
                            <li> Set the value to <strong>Yes</strong> and <strong>save</strong> it.</li>
                        </ol>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY4AS0SkHVL0a60yJTv%2Fimage.png?alt=media&amp;token=b2d707e2-c7d0-4d6d-b612-3f065f4e3a7e" alt="" /></figure>
                        <h2 id="how-to-approve-an-expense-as-an-admin-manager" class="betterdocs-content-heading" id="how-to-approve-an-expense-as-an-admin-manager">How to approve an expense as an Admin/Manager? <a href="#how-to-approve-an-expense-as-an-admin-manager" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#how-to-approve-an-expense-as-an-admin-manager" data-title="Copy URL">#</a></h2>
                        <p>Once an employee requests an expense, the manager will receive a notification to the top right corner:</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY4Bvk0iICil5KV2cHH%2Fimage.png?alt=media&amp;token=0f6333a2-4449-4126-8359-f15d917dfb35" alt="" /></figure>
                        <p><strong>You can click on the notification to proceed. If not,</strong></p>
                        <ol>
                            <li>Go to the <strong>Finance Module</strong></li>
                            <li>Click on the <strong>Expenses </strong>Session</li>
                            <li>Under the <strong>Subordinate Expenses</strong> tab, you will be able to find the requested expense</li>
                            <li>Click on the blue color <strong>Change Status </strong>option to proceed</li>
                            <li> Change the status to <strong>Approved </strong>and then click on the <strong>Change Expense Status </strong>option</li>
                        </ol>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY4CDC4AFANl33MYtgu%2Fimage.png?alt=media&amp;token=c6d9fa8f-4be2-4032-a78d-0213dd287664" alt="" /></figure>
                        <p></p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY4CNEBGX4z-9MP_1Xh%2Fimage.png?alt=media&amp;token=0e830683-cdf6-4b60-b890-2206f81affca" alt="" /></figure>
                        <h2 id="pre-approving-expenses" class="betterdocs-content-heading" id="pre-approving-expenses">Pre-Approving Expenses <a href="#pre-approving-expenses" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#pre-approving-expenses" data-title="Copy URL">#</a></h2>
                        <p>If the Setting<strong> Expense: Pre-Approve Expenses</strong> is set to Yes (change the value to 1), all new expenses will be approved automatically</p>
                        <figure class="wp-block-image"><img decoding="async" src="https://files.gitbook.com/v0/b/gitbook-28427.appspot.com/o/assets%2F-LSTAqbcVhk-wxBWPiuv%2F-MY4-_BDb-WDMxIDdpAx%2F-MY4DdA1n9kncUT4NcaI%2Fimage.png?alt=media&amp;token=7b5bb165-460c-4b32-b2e8-0f3d6b46db00" alt="" /></figure>
                        <h1 id="reporting" class="betterdocs-content-heading" id="reporting">Reporting <a href="#reporting" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/expense-management/#reporting" data-title="Copy URL">#</a></h1>
                        <p>Expense reports can be downloaded under <strong>Admin Reports -> Reports</strong> by specifying a date range.</p>
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
                            Updated on February 7, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/adding-expenses/" rel="next">Adding Expenses <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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