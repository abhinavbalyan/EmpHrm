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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/employees/">Employees</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-2723 current"><span>Creating Data Importers</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Creating Data Importers</h1>
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
                            <li class="betterdocs-toc-heading-level-3"><a href="#3-toc-title">Creating a Data Importer for Updating Supervisors and Contract End Date</a>
                                <ul class="betterdocs-toc-list-level-4">
                                    <li class="betterdocs-toc-heading-level-4"><a href="#4-toc-title">How to create a custom field for Contract End Date</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-3"><a href="#5-toc-title">Creating a Data Importer for Updating Approvers</a></li>
                            <li class="betterdocs-toc-heading-level-3"><a href="#6-toc-title">Creating a User Data Importer</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>You can create data importers for importing custom fields or any other additional fields into employees.</p>
                        <h3 id="3-toc-title" class="betterdocs-content-heading" id="3-toc-title">Creating a Data Importer for Updating Supervisors and Contract End Date <a href="#3-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/creating-data-importers/#3-toc-title" data-title="Copy URL">#</a></h3>
                        <p>Here is an example of creating a Data Importer for updating supervisors and some custom fields:</p>
                        <ol>
                            <li>Login as Admin and Navigate to&nbsp;<strong>System -&gt; Data -&gt; Data importers</strong>.</li>
                            <li>Create a new Data importer named “Supervisor and Custom Field Importer” and Data Type should be “EmployeeDataImporter”.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" width="900" height="300" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-31.png" alt="" class="wp-image-2724" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-31.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-31-300x100.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-31-768x256.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-31-600x200.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>3. Each importer should have one ID column. For employees, the id column should be employee_id. Here is how you can add this unique id column.</p>
                        <p>4. Edit the newly created data importer and add a new column named employee_id.</p>
                        <p>The Type of the column should be Reference. We call this type of column a reference type column because it depends on another row in a different or same entity. When you select the Type as Reference, select the ideal options for Depends On and Depends On Field as in the below screenshot.</p>
                        <p>Note that the value “is ID field” is Yes.</p>
                        <p>Sample Value should be a value shown in the sample download. For this column, you can set the sample value as EMP050. Under the&nbsp;<strong>Help Text</strong>&nbsp;enter a small description about the column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-87.png" alt="" class="wp-image-2725" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-87.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-87-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-87-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-87-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>5. Then add the column for Supervisor. This column is also a Reference column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-88.png" alt="" class="wp-image-2726" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-88.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-88-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-88-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-88-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Note that we have set “Is Id Field” as No. Click on the Save button once you add all the columns you require.</p>
                        <h4 id="4-toc-title" class="betterdocs-content-heading" id="4-toc-title">How to create a custom field for Contract End Date <a href="#4-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/creating-data-importers/#4-toc-title" data-title="Copy URL">#</a></h4>
                        <p>Navigate to&nbsp;<strong>Admin -&gt; Custom Fields -&gt; Add New.</strong></p>
                        <p>Add a custom field name as Contract End Date.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-89.png" alt="" class="wp-image-2727" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-89.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-89-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-89-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-89-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Now you can add a column to the existing Employee Data Importer for importing data for “Contract End Date”.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-90.png" alt="" class="wp-image-2728" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-90.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-90-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-90-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-90-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Now you can create the CSV file to import the supervisors and contract end date for employees. In the CSV file, there should be three columns defined for Employee Id, Supervisors, and Contract End Date. The supervisor field should hold the employee_id of the supervisor.</p>
                        <p>Download the file already created CSV file for this step from&nbsp;<a href="https://s3.amazonaws.com/icehrm/images/blog-files/employee_supervisors.csv">here</a>.</p>
                        <p>Then go to the Data Import Files tab. Click on New to upload a new Data Import File.&nbsp;<strong>Name</strong>&nbsp;the File and select the&nbsp;<strong>Employee Data Import</strong>&nbsp;option for the&nbsp;<strong>Data Import Definitions</strong>. Then upload the CSV file and click on Save.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="300" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-32.png" alt="" class="wp-image-2729" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-32.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-32-300x100.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-32-768x256.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-32-600x200.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Then process the file.</p>
                        <h3 id="5-toc-title" class="betterdocs-content-heading" id="5-toc-title">Creating a Data Importer for Updating Approvers <a href="#5-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/creating-data-importers/#5-toc-title" data-title="Copy URL">#</a></h3>
                        <p>As explained above, first we need to create columns for the Approvers.</p>
                        <ol>
                            <li>To do this, Navigate to&nbsp;<strong>System -&gt; Data -&gt; Data Importers.</strong>&nbsp;Then click on the Add New option under the Data Importers. Name the Date Importer and then Select Employee Data as the Data Type.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="300" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-33.png" alt="" class="wp-image-2730" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-33.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-33-300x100.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-33-768x256.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-33-600x200.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>2. Click on the Add button to create columns. The first column should be employee_id.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-91.png" alt="" class="wp-image-2731" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-91.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-91-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-91-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-91-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>3. Then create columns for the Approvers. Click on the Add button to create more columns. Name the Column ID as “approver1”.</p>
                        <p>4. Then select the Type as Reference. Select Employee as the Depends On and employee_id as the Depends on Field. Set the Value as No to “Is Id Field”.</p>
                        <p>5. Repeat the same steps for other levels of approvers as well. And click on the Save button to save the changes.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-92.png" alt="" class="wp-image-2733" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-92.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-92-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-92-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-92-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>6. Then go to the Data Import Files tab. Click on New to create a new Data Import File. Name the File accordingly and Select the Employee Data Import option for the Data Import Definitions. Then upload the CSV file and click on Save.</p>
                        <p>7. Then click on the Process button.</p>
                        <h3 id="6-toc-title" class="betterdocs-content-heading" id="6-toc-title">Creating a User Data Importer <a href="#6-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/creating-data-importers/#6-toc-title" data-title="Copy URL">#</a></h3>
                        <p>Using&nbsp;<a href="https://icehrm.com/">IceHrm</a>&nbsp;latest features now you can automate the process of creating users. You can do this by creating a data importer.</p>
                        <p>Login as Admin and Navigate to&nbsp;<strong>System -&gt; Data Importers</strong>.</p>
                        <p>Create a new Data Importer named “<strong>User Data Importer</strong>” and Data Type should be “<strong>UserDataImporter</strong>“.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="300" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-34.png" alt="" class="wp-image-2734" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-34.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-34-300x100.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-34-768x256.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-900-×-300px-34-600x200.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p><em>Each importer should have one ID column.</em>&nbsp;For this one ID column should be UserName. Here is how you can add this unique id column.</p>
                        <p>Click on the&nbsp;<strong>Add</strong>&nbsp;button in front of the&nbsp;<strong>Columns</strong>&nbsp;option. You need to add a column to each of these fields in order to create a user account.</p>
                        <ol>
                            <li>User Name</li>
                            <li>Email</li>
                            <li>User Level</li>
                            <li>Employee</li>
                        </ol>
                        <p>Let’s start with the first column,&nbsp;<strong>User Name</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-93.png" alt="" class="wp-image-2735" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-93.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-93-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-93-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-93-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Note that the value “<strong>is ID field</strong>” is&nbsp;<strong>Yes</strong>.&nbsp;<strong>Sample Value</strong>&nbsp;should be a value shown in the sample download. For this column, you can set the sample value as user1.</p>
                        <p>Under the <strong>Help Text</strong> enter a small description about the column.</p>
                        <p>The second Column is the&nbsp;<strong>Email</strong>&nbsp;column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-94.png" alt="" class="wp-image-2736" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-94.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-94-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-94-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-94-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Note that the value “<strong>is ID field</strong>” is&nbsp;<strong>No</strong>.</p>
                        <p>Sample Value can be an example email address. The third column is the&nbsp;<strong>User Level</strong>&nbsp;column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-95.png" alt="" class="wp-image-2737" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-95.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-95-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-95-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-95-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Note that the value “<strong>is ID field</strong>” is&nbsp;<strong>No</strong>.&nbsp;<strong>Sample Value</strong>&nbsp;can be one of the User Levels.</p>
                        <p>The fourth column is the name of the&nbsp;<strong>Employee</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="900" height="500" src="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-96.png" alt="" class="wp-image-2738" srcset="https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-96.png 900w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-96-300x167.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-96-768x427.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/10/Untitled-design-96-600x333.png 600w" sizes="(max-width: 900px) 100vw, 900px" /></figure>
                        <p>Note the&nbsp;<strong>Type</strong>&nbsp;of the column should be&nbsp;<strong>Reference</strong>.</p>
                        <p>Then Select <strong>Employee</strong> in the <strong>Depends On</strong> option and <strong>employee_id</strong> as the <strong>Depends on Field</strong>.</p>
                        <p>When you create your CSV file, under the employee column, you need to enter the employee_id data so that IceHrm finds the matching employee and updates the user.</p>
                        <p>Now you can create the CSV file to import User Data. In the CSV file, there should be four columns defined for <strong>username, email, user_level, and employee</strong>. As mentioned above the employee column should hold the employee_id of each employee.</p>
                        <p>Download the sample file already created for this step from <a href="https://docs.google.com/spreadsheets/d/1BxGYzw5PybD4PmEvlEqo_paC0Hqxzr64hhJBj3qztYg/edit?usp=sharing">here</a>. Download it as a CSV file when you import it to IceHrm.</p>
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
                            Updated on October 11, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/importing-basic-employee-data/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Importing Basic Employee Data</a><a href="https://icehrm.com/explore/docs/finding-problems-when-a-data-import-fail/" rel="next">Finding Problems When a Data Import Fail <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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