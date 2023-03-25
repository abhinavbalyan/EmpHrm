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
            <script>
                jQuery(document).ready(function() {
                    let masonryGrid = jQuery(".betterdocs-categories-wrap.layout-masonry");
                    let columnPerGrid = jQuery(".betterdocs-categories-wrap.layout-masonry").attr("data-column");
                    let masonryItem = jQuery(".betterdocs-categories-wrap.layout-masonry .docs-single-cat-wrap");
                    let doc_page_column_space = 50;
                    let total_margin = columnPerGrid * doc_page_column_space;
                    if (masonryGrid.length) {
                        masonryItem.css("width", "calc((100% - " + total_margin + "px) / " + parseInt(columnPerGrid) + ")");
                        masonryGrid.masonry({
                            itemSelector: ".docs-single-cat-wrap",
                            percentPosition: true,
                            gutter: doc_page_column_space
                        });
                    }
                });
            </script>
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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/employees/">Employees</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1014 current"><span>Employee Management</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Employee Management</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#company-structure">Company Structure</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#how-to-configure-a-manager-as-the-head-of-the-company-structure-and-enable-to-view-all-employees"> How to configure a manager as the head of the company structure and enable to view all employees </a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#difference-between-users-and-employees">Difference Between Users And Employees</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#adding-employees">Adding Employees</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#switching-employees">Switching Employees</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#supervisors">Supervisors</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#indirect-supervisors">Indirect Supervisors</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#department-heads">Department Heads</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#deleting-employee-data">Deleting Employee Data</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#employee-history">Employee History</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#job-details-setup">Job Details Setup</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#qualifications-setup">Qualifications Setup</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>The employees module is used to list, edit, add and search employees in your company. You can use the search box to search employees by ID, name, or department. Also, you can use the filter button to filter employees by job title, department, or supervisor.</p>
                        <p>Each employee is attached to a company structure. A company structure can be a Group, Company, Branch, or Department. Before adding employees you should first define your company structure.</p>
                        <h2 id="company-structure" class="betterdocs-content-heading" id="company-structure">Company Structure <a href="#company-structure" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#company-structure" data-title="Copy URL">#</a></h2>
                        <p>Company structure module allows you to define the structure of your company. It lets you create the parent structure of the company, branches, departments, and other company units.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="585" src="https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure-1024x585.png" alt="" class="wp-image-1019" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure-1024x585.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure-300x171.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure-768x439.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure-600x343.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-structure.png 1122w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Also, it provides a graphical overview of how each of your company units are connected.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="600" src="https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph-1024x600.png" alt="" class="wp-image-1020" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph-1024x600.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph-300x176.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph-768x450.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph-600x352.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/company-graph.png 1111w" sizes="(max-width: 1024px) 100vw, 1024px" />
                            <figcaption>Company structure</figcaption>
                        </figure>
                        <h2 id="how-to-configure-a-manager-as-the-head-of-the-company-structure-and-enable-to-view-all-employees" class="betterdocs-content-heading" id="how-to-configure-a-manager-as-the-head-of-the-company-structure-and-enable-to-view-all-employees"> How to configure a manager as the head of the company structure and enable to view all employees <a href="#how-to-configure-a-manager-as-the-head-of-the-company-structure-and-enable-to-view-all-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#how-to-configure-a-manager-as-the-head-of-the-company-structure-and-enable-to-view-all-employees" data-title="Copy URL">#</a></h2>
                        <p>Let&#8217;s take an example of a scenario to explain this situation. </p>
                        <p>You have 2 offices in two countries. </p>
                        <p style="line-height:1.5">● 1 Office In UK &#8211; Secondary <br>● 1 Office in USA &#8211; Main</p>
                        <p>You need to configure that your USA HR manager to manage all employees and the UK HR manager can only view the UK employees. To do this:</p>
                        <ol>
                            <li>Go to the <strong>Company Structure</strong> under the <strong>Admin module</strong>.</li>
                            <li>Then select the department you want to make changes.</li>
                            <li>Set a <em>head</em> (or a manager) for a department, as shown in the below screenshot.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="848" height="755" src="https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-14.58.48.png" alt="" class="wp-image-1021" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-14.58.48.png 848w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-14.58.48-300x267.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-14.58.48-768x684.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-14.58.48-600x534.png 600w" sizes="(max-width: 848px) 100vw, 848px" /></figure>
                        <p>4. Then go to the System -&gt; Settings and change the below settings to 1.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="226" src="https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-1024x226.png" alt="" class="wp-image-1022" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-1024x226.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-300x66.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-768x170.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-1536x340.png 1536w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02-600x133.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/Screenshot-2021-02-12-at-15.00.02.png 1687w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>After selecting your employee as head of a particular department, that employee will be able to view all employees under that department. You can appoint your USA HR manager to the Head office so the USA manager can see all employees. Then you can select the UK manager as the head of the UK office, so that manager will be able to see only the employees under the UK branch.</p>
                        <h2 id="difference-between-users-and-employees" class="betterdocs-content-heading" id="difference-between-users-and-employees">Difference Between Users And Employees <a href="#difference-between-users-and-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#difference-between-users-and-employees" data-title="Copy URL">#</a></h2>
                        <p>A user is a person who can log in to icehrm. It’s not required for admin users to have an employee attached but each non-admin user must have an associated employee. Having an employee added in icehrm won’t allow the person to log in to icehrm. You need to create a user with a Manager or Employee user level for that employee to be able to log in to the system.</p>
                        <h2 id="adding-employees" class="betterdocs-content-heading" id="adding-employees">Adding Employees <a href="#adding-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#adding-employees" data-title="Copy URL">#</a></h2>
                        <p>Adding employees to ICE Hrm can only be done by the admin. The employee Id field should have a unique value. In order to complete adding an employee you need to provide job title, employment status and pay grade. </p>
                        <p>Once an employee is added to the system you will be asked to create a user for the newly added employee.</p>
                        <h2 id="switching-employees" class="betterdocs-content-heading" id="switching-employees">Switching Employees <a href="#switching-employees" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#switching-employees" data-title="Copy URL">#</a></h2>
                        <p>One of the key features of ICE Hrm, is admins and managers have the ability to log in as another employee. This feature can be used to apply leaves, add attendance records, or update timesheets on behalf of other employees.</p>
                        <p>To login as an employee, you can use the Login as button on the employee list or the “Switch” button in the top right-hand corner.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="953" height="405" src="https://icehrm.com/explore/wp-content/uploads/2021/11/new.png" alt="" class="wp-image-1030" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/new.png 953w, https://icehrm.com/explore/wp-content/uploads/2021/11/new-300x127.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/new-768x326.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/new-600x255.png 600w" sizes="(max-width: 953px) 100vw, 953px" /></figure>
                        <h2 id="supervisors" class="betterdocs-content-heading" id="supervisors">Supervisors <a href="#supervisors" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#supervisors" data-title="Copy URL">#</a></h2>
                        <p>1.Any employee can be the supervisor of another employee.<br>2.The supervisor of an Employee can be added by changing the supervisor field of employee edit screen.<br>3.If the employee is having <strong>Admin</strong> or <strong>Manager</strong> user level, they can view all their subordinates (employees having the current employee as the supervisor) via <strong>Employees =&gt; Employees</strong> menu.</p>
                        <h2 id="indirect-supervisors" class="betterdocs-content-heading" id="indirect-supervisors">Indirect Supervisors <a href="#indirect-supervisors" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#indirect-supervisors" data-title="Copy URL">#</a></h2>
                        <p>1.An employee can have multiple <strong>Indirect Supervisors</strong> which can be set via edit employee.<br>2.Indirect supervisors are useful when approving leave requests (You can allow indirect supervisors to approve leave requests via <strong>Settings -> Leave</strong>).</p>
                        <h2 id="department-heads" class="betterdocs-content-heading" id="department-heads">Department Heads <a href="#department-heads" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#department-heads" data-title="Copy URL">#</a></h2>
                        <p>1.One or more employees can be added to a department as a head of a department.<br>2.A department head can view and manage all employees under that department or substructures of this department give following settings under <strong>System -&gt; Settings -&gt; System </strong>: </p>
                        <ul>
                            <li>&#8220;System: Company Structure Managers Enabled&#8221;</li>
                            <li>&#8220;System: Child Company Structure Managers Enabled&#8221;</li>
                        </ul>
                        <p>3.You can define <strong>Department Heads</strong> via <strong>Admin -> Company Structure</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="756" height="551" src="https://icehrm.com/explore/wp-content/uploads/2021/11/department-heads.png" alt="" class="wp-image-1025" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/department-heads.png 756w, https://icehrm.com/explore/wp-content/uploads/2021/11/department-heads-300x219.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/department-heads-600x437.png 600w" sizes="(max-width: 756px) 100vw, 756px" /></figure>
                        <h2 id="deleting-employee-data" class="betterdocs-content-heading" id="deleting-employee-data">Deleting Employee Data <a href="#deleting-employee-data" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#deleting-employee-data" data-title="Copy URL">#</a></h2>
                        <p>In order to delete an employee, an admin should first click the <strong>&#8220;Deactivate&#8221;</strong> button on employee list. But we do not delete the employee data at this time. Instead, the employee is moved to the &#8220;Deactivated&#8221; tab. When an employee is in the <strong>&#8220;Deactivated&#8221;</strong> list, you can recover all the employee data with one click.</p>
                        <p>If you delete the employee from <strong>&#8220;Deactivated&#8221;</strong> tab, the Employee profile will be moved to <strong>&#8220;Archived&#8221;</strong> tab<strong>. </strong>At this point<strong>,</strong> you can not recover the employee, but still, you can download all the data of the employee in JSON format.</p>
                        <p>If you want to remove all the data related to the employee you can delete data in <strong>&#8220;Archived&#8221;</strong> also.</p>
                        <p>When billing for cloud-hosted installation, we consider the count of active employees and employees under the <strong>&#8220;Deactivated&#8221;</strong> tab. So if you do not want to get billed for an employee you need to delete the employee from <strong>&#8220;Deactivated&#8221;</strong> tab also.</p>
                        <h2 id="employee-history" class="betterdocs-content-heading" id="employee-history">Employee History <a href="#employee-history" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#employee-history" data-title="Copy URL">#</a></h2>
                        <p>You can view details on how employee data changed over time you can use <strong>Employees -&gt; Employee History.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="524" src="https://icehrm.com/explore/wp-content/uploads/2021/11/history-1024x524.png" alt="" class="wp-image-1029" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/history-1024x524.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/history-300x153.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/history-768x393.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/history-600x307.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/history.png 1138w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="job-details-setup" class="betterdocs-content-heading" id="job-details-setup">Job Details Setup <a href="#job-details-setup" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#job-details-setup" data-title="Copy URL">#</a></h2>
                        <p>Go to <strong>Admin -&gt; Job Details Setup</strong> to set up all the information related to job titles, pay grades, and employment status in your company.</p>
                        <h2 id="qualifications-setup" class="betterdocs-content-heading" id="qualifications-setup">Qualifications Setup <a href="#qualifications-setup" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-management/#qualifications-setup" data-title="Copy URL">#</a></h2>
                        <p>Go to <strong>Admin -> Qualifications Setup</strong> to define skills, Educational Details, Certifications, and Languages that can be used by employees or admins to attach qualifications to their profiles.</p>
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
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/employee-data-import/" rel="next">Employee Data Import <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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