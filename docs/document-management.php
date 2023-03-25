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
                                <li class="betterdocs-breadcrumb-item"><a href="https://icehrm.com/explore/docs-category/documents/">Documents</a></li>
                                <li class="betterdocs-breadcrumb-item breadcrumb-delimiter">
                                    <div class="icon-container"><svg class="breadcrumb-delimiter-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                            <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                                        </svg>
                                        <div>
                                </li>
                                <li class="betterdocs-breadcrumb-item item-current item-1106 current"><span>Document Management</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">Document Management</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#company-documents">Company Documents</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#employee-personal-documents">Employee Personal Documents</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#document-types">Document Types</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#how-to-add-employee-documents">How to add employee documents?</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#4-toc-title">Payslips</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#expire-notifications">Expire Notifications</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#employee-documents">Employee Documents</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#settings">Settings</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#personalize-the-company-documents">Personalize the Company Documents</a></li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#display-a-document-to-a-specific-employee">Display a Document to a specific Employee</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>In IceHrm you can manage company documents as well as individual employee documents.</p>
                        <h2 id="company-documents" class="betterdocs-content-heading" id="company-documents">Company Documents <a href="#company-documents" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#company-documents" data-title="Copy URL">#</a></h2>
                        <p>Company documents can be added via <strong>Manage -&gt; Documents</strong><code>.</code>Depending on the confidentiality and nature of the document it can be shared only with individual employees, all employees attached to a department, or all the employees in the company.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="206" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1-1024x206.png" alt="" class="wp-image-1710" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1-1024x206.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1-300x60.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1-768x154.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1-600x120.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-46-43-1.png 1489w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="553" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18-1024x553.png" alt="" class="wp-image-1713" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18-1024x553.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18-300x162.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18-768x415.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18-600x324.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-12-55-18.png 1092w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Employees can view company documents via <strong>Documents -&gt; My Documents -&gt; Company Documents.</strong></p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="236" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-1024x236.png" alt="" class="wp-image-1715" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-1024x236.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-300x69.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-768x177.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-1536x354.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15-600x138.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-08-15.png 1658w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="employee-personal-documents" class="betterdocs-content-heading" id="employee-personal-documents">Employee Personal Documents <a href="#employee-personal-documents" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#employee-personal-documents" data-title="Copy URL">#</a></h2>
                        <h3 id="document-types" class="betterdocs-content-heading" id="document-types">Document Types <a href="#document-types" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#document-types" data-title="Copy URL">#</a></h3>
                        <p>Accessed via <strong>Manage -&gt; Documents -&gt; Document Types.</strong></p>
                        <p>Document Types tab is used to define various documents relevant to your organization. The employees are able to upload documents under these categories.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="238" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-1024x238.png" alt="" class="wp-image-1716" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-1024x238.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-300x70.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-768x178.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-1536x357.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23-600x139.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-25-23.png 1661w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h3 id="how-to-add-employee-documents" class="betterdocs-content-heading" id="how-to-add-employee-documents">How to add employee documents? <a href="#how-to-add-employee-documents" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#how-to-add-employee-documents" data-title="Copy URL">#</a></h3>
                        <p>Admins and managers can add employee documents on behalf of the employees by <strong>Manage -&gt; Documents -&gt; Employee documents</strong></p>
                        <figure class="wp-block-image size-full is-resized"><img decoding="async" loading="lazy" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-28-41.png" alt="" class="wp-image-1717" width="782" height="682" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-28-41.png 792w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-28-41-300x262.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-28-41-768x670.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-28-41-600x523.png 600w" sizes="(max-width: 782px) 100vw, 782px" /></figure>
                        <p>Employees can add personal documents by navigating to <strong>Documents -&gt; My documents -&gt; My documents</strong></p>
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="778" height="509" src="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-44-27.png" alt="" class="wp-image-1718" srcset="https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-44-27.png 778w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-44-27-300x196.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-44-27-768x502.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/01/Screenshot-from-2022-01-17-13-44-27-600x393.png 600w" sizes="(max-width: 778px) 100vw, 778px" /></figure>
                        <h2 class="betterdocs-content-heading" id="4-toc-title">Payslips <a href="#4-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#4-toc-title" data-title="Copy URL">#</a></h2>
                        <p>As an admin, you can view all employee payslips under the <strong>Employee Payslips</strong> tab.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="271" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-1024x271.png" alt="" class="wp-image-2220" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-1024x271.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-300x79.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-768x203.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-1536x407.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1-600x159.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-06-24-1.png 1658w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Employees can go to <strong>Documents -&gt; my documents -&gt; payslips</strong> to download their payslips.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="223" src="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-1024x223.png" alt="" class="wp-image-2221" srcset="https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-1024x223.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-300x65.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-768x167.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-1536x334.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1-600x130.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/08/Screenshot-from-2022-08-01-10-08-16-1.png 1666w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 id="expire-notifications" class="betterdocs-content-heading" id="expire-notifications">Expire Notifications <a href="#expire-notifications" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#expire-notifications" data-title="Copy URL">#</a></h2>
                        <p>When defining document types you can define before how many days icehrm should notify the user about the expiring documents.</p>
                        <p>The notification cron should be set up for this feature to function properly. Please check the section [Cron for Notifications] (<a href="https://thilinah.gitbooks.io/icehrm-guide/content/installation-and-setup.html">https://thilinah.gitbooks.io/icehrm-guide/content/installation-and-setup.html</a>)</p>
                        <h3 id="employee-documents" class="betterdocs-content-heading" id="employee-documents">Employee Documents <a href="#employee-documents" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#employee-documents" data-title="Copy URL">#</a></h3>
                        <p>Administrators and Managers can use the &#8220;Employee Documents&#8221; tab to explore and manage documents uploaded by employees or add new documents to employees.</p>
                        <h3 id="settings" class="betterdocs-content-heading" id="settings">Settings <a href="#settings" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#settings" data-title="Copy URL">#</a></h3>
                        <p>Set <strong>&#8220;Notifications: Send Document Expiry Emails&#8221;</strong> to No if you don&#8217;t wish to receive document expiry notifications.</p>
                        <p>Also set <strong>&#8220;Notifications: Copy Document Expiry Emails to Manager&#8221;</strong> to Yes if you want to send all document expiry notifications to respective managers also.</p>
                        <h2 id="personalize-the-company-documents" class="betterdocs-content-heading" id="personalize-the-company-documents">Personalize the Company Documents <a href="#personalize-the-company-documents" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#personalize-the-company-documents" data-title="Copy URL">#</a></h2>
                        <p>Using the new IceHrm Document Management module, you can specify documents privacy. </p>
                        <p>To find the settings go to the Employee Management module under the Admin account and click on the Document Management module.</p>
                        <p>If you don&#8217;t want to share it with your employees:<br>Set <strong>&#8220;Share with Employee Option&#8221;</strong> to <strong>NO</strong> when you create a new Document Type.</p>
                        <p>For any employee document, under a document type with the above-mentioned field set to No will not be displayed to the employee (document will only be visible to the admin or the manager of the employee)</p>
                        <h2 id="display-a-document-to-a-specific-employee" class="betterdocs-content-heading" id="display-a-document-to-a-specific-employee">Display a Document to a specific Employee <a href="#display-a-document-to-a-specific-employee" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/document-management/#display-a-document-to-a-specific-employee" data-title="Copy URL">#</a></h2>
                        <p>When you assign the document to an employee you can make it visible to the <strong>Owner</strong>, <strong>Owner Only,</strong> <strong>Manager</strong> or <strong>Admin</strong>.</p>
                        <p>Also, you can make it visible to the employees&#8217; manager or the Admin.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="453" src="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-1024x453.png" alt="" class="wp-image-1802" srcset="https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-1024x453.png 1024w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-300x133.png 300w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-768x339.png 768w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-1536x679.png 1536w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29-600x265.png 600w, https://icehrm.com/explore/wp-content/uploads/2022/02/Screenshot-from-2022-02-10-10-41-29.png 1896w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>If you only need to enable this document to the Admin, you can select the option as Admin. So the document will only be visible to the Admin.</p>
                        <p> </p>
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
                            Updated on September 20, 2022 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/hr-form-management/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> HR Form Management</a><a href="https://icehrm.com/explore/docs/assigning-an-hr-form-to-an-employee/" rel="next">Assigning an HR Form To an Employee <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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