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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/time-and-attendance/">Time and Attendance</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1077 current"><span>Attendance Module</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Attendance Module</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#attendance-tracking">Attendance Tracking</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#recording-attendance">Recording Attendance</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#attendance-tracking-with-user-time">Attendance Tracking with User Time</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#attendance-tracking-with-server-time">Attendance Tracking with Server Time</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#monitoring-attendance">Monitoring Attendance</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#uploading-attendance-data">Uploading Attendance Data</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#attendance-sheets">Attendance Sheets</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>IceHrm has several different tools for managing and recording employee time.</p>
                        <h2 id="attendance-tracking" class="betterdocs-content-heading" id="attendance-tracking">Attendance Tracking <a href="#attendance-tracking" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#attendance-tracking" data-title="Copy URL">#</a></h2>
                        <p>Attendance represents the time you were in office.</p>
                        <h2 id="recording-attendance" class="betterdocs-content-heading" id="recording-attendance">Recording Attendance <a href="#recording-attendance" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#recording-attendance" data-title="Copy URL">#</a></h2>
                        <p>Employees can record attendance via<strong> Time Management -&gt; Attendance.</strong> While recording attendance they can select the time they arrive and leave the office.</p>
                        <p>When tracking attendance you can either let your employees enter the time when recording attendance or configure it to use server time.</p>
                        <h3 id="attendance-tracking-with-user-time" class="betterdocs-content-heading" id="attendance-tracking-with-user-time">Attendance Tracking with User Time <a href="#attendance-tracking-with-user-time" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#attendance-tracking-with-user-time" data-title="Copy URL">#</a></h3>
                        <p>Under<strong> System -&gt; Settings</strong> set <strong>Attendance: Use Department Time Zone</strong> to No. This will let you select the time when punching in and out.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" width="640" height="333" src="https://icehrm.com/explore/wp-content/uploads/2021/11/punch.png" alt="" class="wp-image-1080" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/punch.png 640w, https://icehrm.com/explore/wp-content/uploads/2021/11/punch-300x156.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/punch-600x312.png 600w" sizes="(max-width: 640px) 100vw, 640px" /></figure>
                        <p></p>
                        <h3 id="attendance-tracking-with-server-time" class="betterdocs-content-heading" id="attendance-tracking-with-server-time">Attendance Tracking with Server Time <a href="#attendance-tracking-with-server-time" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#attendance-tracking-with-server-time" data-title="Copy URL">#</a></h3>
                        <p>Every employee should be attached to a department. These departments are defined under <strong>Admin -&gt; Company Structure</strong> and you should have a time zone for each department defined. When an employee attached to a department records attendance icehrm uses the time in the department&#8217;s timezone to generate the correct time. All you need to do is set the proper time zone and set <strong>Attendance: Use</strong> <strong>Department Time Zone</strong> to <strong>Yes</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="623" height="291" src="https://icehrm.com/explore/wp-content/uploads/2021/11/timein.png" alt="" class="wp-image-1081" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/timein.png 623w, https://icehrm.com/explore/wp-content/uploads/2021/11/timein-300x140.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/timein-600x280.png 600w" sizes="(max-width: 623px) 100vw, 623px" /></figure>
                        <p></p>
                        <h2 id="monitoring-attendance" class="betterdocs-content-heading" id="monitoring-attendance">Monitoring Attendance <a href="#monitoring-attendance" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#monitoring-attendance" data-title="Copy URL">#</a></h2>
                        <p>Attendance details of employees can be viewed/edited via <strong>Manage -&gt; Attendance</strong> module. Admin users can view all employee attendance while Managers can view attendance data for subordinates (direct reports).</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="344" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-1024x344.png" alt="" class="wp-image-1798" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-1024x344.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-300x101.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-768x258.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-1536x515.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42-600x201.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-38-42.png 1666w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p><em>Once an employee has completed 8 hours the time will turn green. Note that Icehrm considers 8 hours as a working day and if an employee passes works more than 8 hours, the remaining hours will be considered as overtime hours.</em></p>
                        <p>To change the overtime start hour go to <strong>system -&gt; settings -&gt; attendance</strong> <strong>-&gt; Attendance: Overtime start hour</strong> and click on edit to change the overtime start hour.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="41" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-1024x41.png" alt="" class="wp-image-1799" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-1024x41.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-300x12.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-768x31.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-1536x61.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17-600x24.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-09-51-17.png 1632w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="uploading-attendance-data" class="betterdocs-content-heading" id="uploading-attendance-data">Uploading Attendance Data <a href="#uploading-attendance-data" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#uploading-attendance-data" data-title="Copy URL">#</a></h2>
                        <p>You can upload attendance data from your attendance recording devices instead of allowing employees to punch in/out using icehrm.</p>
                        <ol>
                            <li>Download the sample attendance file from <a href="https://s3.amazonaws.com/icehrm/images/blog-files/attendance_sample_import.csv">here</a>.</li>
                            <li>Then add your attendance data in the same format.</li>
                            <li>Go to <strong>System -&gt; Data -&gt; Data Import Files</strong> tab.</li>
                            <li>Create a new data import as shown below. Use a descriptive name.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="384" src="https://icehrm.com/explore/wp-content/uploads/2021/11/save-1024x384.png" alt="" class="wp-image-1082" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/save-1024x384.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/save-300x112.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/save-768x288.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/save-1536x576.png 1536w, https://icehrm.com/explore/wp-content/uploads/2021/11/save-2048x768.png 2048w, https://icehrm.com/explore/wp-content/uploads/2021/11/save-600x225.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p> 5. Save and from the &#8220;data import file list&#8221; click the process button.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="267" src="https://icehrm.com/explore/wp-content/uploads/2021/11/process-1024x267.png" alt="" class="wp-image-1083" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/process-1024x267.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/process-300x78.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/process-768x200.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/process-1536x400.png 1536w, https://icehrm.com/explore/wp-content/uploads/2021/11/process-2048x533.png 2048w, https://icehrm.com/explore/wp-content/uploads/2021/11/process-600x156.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p></p>
                        <h2 id="attendance-sheets" class="betterdocs-content-heading" id="attendance-sheets">Attendance Sheets <a href="#attendance-sheets" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/attendance-module/#attendance-sheets" data-title="Copy URL">#</a></h2>
                        <p>Attendance Sheets which can be accessed via <strong>Time management -&gt;</strong> <strong>Attendance Sheets</strong> is a way for employees to group attendance details for the whole week and send it for approval to the supervisor. This feature is useful when you pay employees based on attendance. In such cases, there should be an approval process in place.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="515" src="https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-1024x515.png" alt="" class="wp-image-1085" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-1024x515.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-300x151.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-768x386.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-1536x772.png 1536w, https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-2048x1030.png 2048w, https://icehrm.com/explore/wp-content/uploads/2021/11/timesheets-600x302.png 600w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
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
                            Updated on February 15, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/timesheets/" rel="next">Timesheets <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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