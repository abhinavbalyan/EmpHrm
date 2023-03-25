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
                                <li class="betterdocs-breadcrumb-item item-current item-1034 current"><span>Employee Data Import</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Employee Data Import</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#0-toc-title">Preparing Employee Data For Upload</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#1-toc-title">Importing Basic Employee Data</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#2-toc-title">Creating Data Importers</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#3-toc-title">Creating a Data Importer for Updating Supervisors and Contract End Date</a>
                                        <ul class="betterdocs-toc-list-level-4">
                                            <li class="betterdocs-toc-heading-level-4"><a href="#4-toc-title">How to create a custom field for Contract End Date</a></li>
                                        </ul>
                                    </li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#5-toc-title">Creating a Data Importer for Updating Approvers</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#6-toc-title">Creating a User Data Importer</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#7-toc-title">Finding Problems When a Data Import Failed</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>You can import data into icehrm using CSV files. By default, we support importing basic employee details and attendance data. This feature should be used only during the initial setup.</p>
                        <h2 class="betterdocs-content-heading" id="0-toc-title">Preparing Employee Data For Upload <a href="#0-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#0-toc-title" data-title="Copy URL">#</a></h2>
                        <ol>
                            <li>Download sample data file <a href="https://docs.google.com/spreadsheets/d/1vCEgc-HbYcYqpeJ0vvPEyO20d75EZhBxFz5MrbM0CQ8/edit#gid=0" target="_blank" rel="noreferrer noopener">https://docs.google.com/spreadsheets/d/1vCEgc-HbYcYqpeJ0vvPEyO20d75EZhBxFz5MrbM0CQ8/edit#gid=0</a> <em><strong>(File -> Download -> Download as CSV)</strong></em></li>
                        </ol>
                        <p>2. The file has the following columns which match with default employee data file definition</p>
                        <ul>
                            <li>employee_id = The id of the employee (this id should be unique, if the employee with same id exists in the system then employee details will be replaced)</li>
                            <li>first_name, middle_name, last_name = Employee names</li>
                            <li>address1,address2,home_phone,mobile_phone,work_email = Employee contact details</li>
                            <li>gender = Male or Female</li>
                            <li>marital_status = Married, Single, Divorced, Widowed, Other</li>
                            <li>birthday = MM/DD/YY format</li>
                            <li>nationality = Any nationality defined in System -> Manage Meta Data -> Nationality</li>
                            <li>ethnicity = Any ethnicity defined under System -> Manage Meta Data -> Ethnicity</li>
                            <li>ssn_num = Social security number or ID number</li>
                            <li>job_title = Job Title (this should be predefined in Admin -> Job Details Setup -> Job Titles)</li>
                            <li>employment_status = Employment Status (should be predefined in Admin -> Job Details Setup -> Employment Status)</li>
                            <li>joined_date = Joined date in MM/DD/YY format</li>
                            <li>department = Company Structure this employee is attached to (predefined in Admin -> Company Structure)</li>
                        </ul>
                        <h2 class="betterdocs-content-heading" id="1-toc-title">Importing Basic Employee Data <a href="#1-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#1-toc-title" data-title="Copy URL">#</a></h2>
                        <ol>
                            <li>Login as admin and navigate to <strong>System -> Data -> Data Import Files</strong> and create a new entry with the file created in the previous step.</li>
                        </ol>
                        <figure class="wp-block-image size-full"><img decoding="async" width="965" height="398" src="https://icehrm.com/explore/wp-content/uploads/2021/11/data-import.png" alt="" class="wp-image-1035" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/data-import.png 965w, https://icehrm.com/explore/wp-content/uploads/2021/11/data-import-300x124.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/data-import-768x317.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/data-import-600x247.png 600w" sizes="(max-width: 965px) 100vw, 965px" /></figure>
                        <p>2. Once the entry is created click on &#8220;Process&#8221;.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="132" src="https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import-1024x132.png" alt="" class="wp-image-1036" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import-1024x132.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import-300x39.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import-768x99.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import-600x77.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/process_employee_data_import.png 1168w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 class="betterdocs-content-heading" id="2-toc-title">Creating Data Importers <a href="#2-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#2-toc-title" data-title="Copy URL">#</a></h2>
                        <p>You can create data importers for importing custom fields or any other additional fields into employees.</p>
                        <h3 class="betterdocs-content-heading" id="3-toc-title">Creating a Data Importer for Updating Supervisors and Contract End Date <a href="#3-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#3-toc-title" data-title="Copy URL">#</a></h3>
                        <p>Here is an example of creating a Data Importer for updating supervisors and some custom fields:</p>
                        <ol>
                            <li>Login as Admin and Navigate to <strong>System -> Data -> Data importers</strong>.</li>
                            <li>Create a new Data importer named &#8220;Supervisor and Custom Field Importer&#8221; and Data Type should be &#8220;EmployeeDataImporter&#8221;.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="390" src="https://icehrm.com/explore/wp-content/uploads/2021/11/ix-1024x390.png" alt="" class="wp-image-1037" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/ix-1024x390.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/ix-300x114.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/ix-768x293.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/ix-600x229.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/ix.png 1314w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>3. Each importer should have one ID column. For employees, the id column should be employee_id. Here is how you can add this unique id column.</p>
                        <p>4. Edit the newly created data importer and add a new column named employee_id. </p>
                        <p>The Type of the column should be Reference. We call this type of column a reference type column because it depends on another row in a different or same entity. When you select the Type as Reference, select the ideal options for Depends On and Depends On Field as the below screenshot. </p>
                        <p>Note that the value &#8220;is ID field&#8221; is Yes. </p>
                        <p>Sample Value should be a value shown in the sample download. For this column, you can set the sample value as EMP050. Under the <strong>Help Text</strong> enter a small description about the column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="819" height="770" src="https://icehrm.com/explore/wp-content/uploads/2021/11/i2.png" alt="" class="wp-image-1038" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/i2.png 819w, https://icehrm.com/explore/wp-content/uploads/2021/11/i2-300x282.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/i2-768x722.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/i2-600x564.png 600w" sizes="(max-width: 819px) 100vw, 819px" /></figure>
                        <p>5. Then add the column for Supervisor. This column is also a Reference column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="799" height="758" src="https://icehrm.com/explore/wp-content/uploads/2021/11/i3.png" alt="" class="wp-image-1039" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/i3.png 799w, https://icehrm.com/explore/wp-content/uploads/2021/11/i3-300x285.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/i3-768x729.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/i3-600x569.png 600w" sizes="(max-width: 799px) 100vw, 799px" /></figure>
                        <p>Note that we have set &#8220;Is Id Field&#8221; as No. Click on the Save button once you add all the columns you require.</p>
                        <h4 class="betterdocs-content-heading" id="4-toc-title">How to create a custom field for Contract End Date <a href="#4-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#4-toc-title" data-title="Copy URL">#</a></h4>
                        <p>Navigate to <strong>Admin -> Custom Fields -> Add New.</strong></p>
                        <p>Add a custom field name as Contract End Date.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="848" src="https://icehrm.com/explore/wp-content/uploads/2021/11/iz-1024x848.png" alt="" class="wp-image-1040" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/iz-1024x848.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/iz-300x248.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/iz-768x636.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/iz-600x497.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/iz.png 1071w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Now you can add a column to the existing Employee Data Importer for importing data for &#8220;Contract End Date&#8221;.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="831" height="727" src="https://icehrm.com/explore/wp-content/uploads/2021/11/it.png" alt="" class="wp-image-1041" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/it.png 831w, https://icehrm.com/explore/wp-content/uploads/2021/11/it-300x262.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/it-768x672.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/it-600x525.png 600w" sizes="(max-width: 831px) 100vw, 831px" /></figure>
                        <p>Now you can create the CSV file to import the supervisors and contract end date for employees. In the CSV file, there should be three columns defined for Employee Id, Supervisors and Contract End Date. The supervisor field should hold the employee_id of the supervisor.</p>
                        <p>Download the file already created CSV file for this step from <a href="https://s3.amazonaws.com/icehrm/images/blog-files/employee_supervisors.csv">here</a>.</p>
                        <p>Then go to the Data Import Files tab. Click on New to upload a new Data Import File. <strong>Name</strong> the File and select the <strong>Employee Data Import</strong> option for the <strong>Data Import Definitions</strong>. Then upload the CSV file and click on Save.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="348" src="https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor-1024x348.png" alt="" class="wp-image-1042" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor-1024x348.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor-300x102.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor-768x261.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor-600x204.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/emp-supervisor.png 1139w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Then process the file.</p>
                        <h3 class="betterdocs-content-heading" id="5-toc-title">Creating a Data Importer for Updating Approvers <a href="#5-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#5-toc-title" data-title="Copy URL">#</a></h3>
                        <p>As explained above, first we need to create columns for the Approvers.</p>
                        <ol>
                            <li>To do this, Navigate to <strong>System -> Data -> Data Importers.</strong> Then click on the Add New option under the Data Importers. Name the Date Importer and then Select Employee Data as the Data Type.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="393" src="https://icehrm.com/explore/wp-content/uploads/2021/11/i4-1024x393.png" alt="" class="wp-image-1043" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/i4-1024x393.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/i4-300x115.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/i4-768x295.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/i4-600x231.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/i4.png 1252w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>2. Click on the Add button to create columns. The first column should be employee_id.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="814" height="750" src="https://icehrm.com/explore/wp-content/uploads/2021/11/i5.png" alt="" class="wp-image-1044" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/i5.png 814w, https://icehrm.com/explore/wp-content/uploads/2021/11/i5-300x276.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/i5-768x708.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/i5-600x553.png 600w" sizes="(max-width: 814px) 100vw, 814px" /></figure>
                        <p>3. Then create columns for the Approvers. Click on the Add button to create more columns. Name the Column ID as &#8220;approver1&#8221;.</p>
                        <p>4. Then select the Type as Reference. Select Employee as the Depends On and employee_id as the Depends on Field. Set the Value as No to &#8220;Is Id Field&#8221;.</p>
                        <p>5. Repeat the same steps for other levels of approvers as well. And click on the Save button to save the changes.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="615" height="605" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image.png" alt="" class="wp-image-1045" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image.png 615w, https://icehrm.com/explore/wp-content/uploads/2021/11/image-300x295.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image-600x590.png 600w" sizes="(max-width: 615px) 100vw, 615px" /></figure>
                        <p>6. Then go to the Data Import Files tab. Click on New to create a new Data Import File. Name the File accordingly and Select the Employee Data Import option for the Data Import Definitions. Then upload the CSV file and click on Save.</p>
                        <p>7. Then click on the Process button.</p>
                        <h3 class="betterdocs-content-heading" id="6-toc-title">Creating a User Data Importer <a href="#6-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#6-toc-title" data-title="Copy URL">#</a></h3>
                        <p>Using <a href="https://icehrm.com">IceHrm</a> latest features now you can automate the process of creating users. You can do this by creating a data importer.</p>
                        <p>Login as Admin and Navigate to <strong>System -> Data Importers</strong>.</p>
                        <p>Create a new Data Importer named &#8220;<strong>User Data Importer</strong>&#8221; and Data Type should be &#8220;<strong>UserDataImporter</strong>&#8220;.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="400" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image1-1024x400.png" alt="" class="wp-image-1046" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image1-1024x400.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/image1-300x117.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image1-768x300.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/image1-600x235.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/image1.png 1230w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p><em>Each importer should have one ID column.</em> For this one ID column should be UserName. Here is how you can add this unique id column.</p>
                        <p>Click on the <strong>Add</strong> button in front of the <strong>Columns</strong> option. You need to add a column to each of these fields in order to create a user account.</p>
                        <ol>
                            <li>User Name</li>
                            <li>Email</li>
                            <li>User Level</li>
                            <li>Employee</li>
                        </ol>
                        <p>Let&#8217;s start with the first column, <strong>User Name</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="912" height="814" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image2.png" alt="" class="wp-image-1047" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image2.png 912w, https://icehrm.com/explore/wp-content/uploads/2021/11/image2-300x268.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image2-768x685.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/image2-600x536.png 600w" sizes="(max-width: 912px) 100vw, 912px" /></figure>
                        <p>Note that the value &#8220;<strong>is ID field</strong>&#8221; is <strong>Yes</strong>. <strong>Sample Value</strong> should be a value shown in the sample download. For this column, you can set the sample value as user1.</p>
                        <p>Under the <strong>Help Text</strong> enter a small description about the column.</p>
                        <p>The second Column is the <strong>Email</strong> column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="892" height="778" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image3.png" alt="" class="wp-image-1048" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image3.png 892w, https://icehrm.com/explore/wp-content/uploads/2021/11/image3-300x262.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image3-768x670.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/image3-600x523.png 600w" sizes="(max-width: 892px) 100vw, 892px" /></figure>
                        <p>Note that the value &#8220;<strong>is ID field</strong>&#8221; is <strong>No</strong>. </p>
                        <p>Sample Value can be an example email address. The third column is the <strong>User Level</strong> column.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="823" height="752" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image4.png" alt="" class="wp-image-1049" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image4.png 823w, https://icehrm.com/explore/wp-content/uploads/2021/11/image4-300x274.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image4-768x702.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/image4-600x548.png 600w" sizes="(max-width: 823px) 100vw, 823px" /></figure>
                        <p>Note that the value &#8220;<strong>is ID field</strong>&#8221; is <strong>No</strong>. <strong>Sample Value</strong> can be one of the User Levels.</p>
                        <p>The fourth column is the name of the <strong>Employee</strong>.</p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="849" height="774" src="https://icehrm.com/explore/wp-content/uploads/2021/11/image5.png" alt="" class="wp-image-1050" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/image5.png 849w, https://icehrm.com/explore/wp-content/uploads/2021/11/image5-300x273.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/image5-768x700.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/image5-600x547.png 600w" sizes="(max-width: 849px) 100vw, 849px" /></figure>
                        <p>Note the <strong>Type</strong> of the column should be <strong>Reference</strong>.</p>
                        <p>Then Select <strong>Employee</strong> to the <strong>Depends On</strong> option and <strong>employee_id</strong> as the <strong>Depends on Field</strong>.</p>
                        <p>When you create your csv file, under the employee column, you need to enter the employee_id data so the IceHrm find the matching employee and update the user.</p>
                        <p>Now you can create the CSV file to import User Data. In the CSV file, there should be four columns defined for <strong>username, email, user_level and employee</strong>. As mentioned above the employee column should hold the employee_id of each employee.</p>
                        <p>Download the sample file already created for this step from <a href="https://docs.google.com/spreadsheets/d/1BxGYzw5PybD4PmEvlEqo_paC0Hqxzr64hhJBj3qztYg/edit?usp=sharing">here</a>. Download it as a csv file when you import it to IceHrm.</p>
                        <h2 class="betterdocs-content-heading" id="7-toc-title">Finding Problems When a Data Import Failed <a href="#7-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/employee-data-import/#7-toc-title" data-title="Copy URL">#</a></h2>
                        <p>If you have failed to import a file to IceHrm, you can find out what went wrong. You will get an error message once you click on the process button if you&#8217;re data file is wrong.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="483" src="https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror-1024x483.png" alt="" class="wp-image-1051" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror-1024x483.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror-300x142.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror-768x362.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror-600x283.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/userimporterror.png 1244w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Click on the OK button and then click on the Edit button to check the error.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="317" src="https://icehrm.com/explore/wp-content/uploads/2021/11/issue-1024x317.png" alt="" class="wp-image-1052" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/issue-1024x317.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/issue-300x93.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/issue-768x238.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/issue-600x186.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/issue.png 1302w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>You can see the error report under the Last Export Result. If you scroll down you can see what&#8217;s the difference between the expected and actual results.</p>
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
                            Updated on November 3, 2021 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/employee-management/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Employee Management</a><a href="https://icehrm.com/explore/docs/user-permissions/" rel="next">User Permissions <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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