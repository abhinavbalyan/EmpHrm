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
                                <li class="betterdocs-breadcrumb-item item-current item-1055 current"><span>User Permissions</span></li>
                            </ul>
                        </nav>
                        <h1 id="betterdocs-entry-title" class="betterdocs-entry-title">User Permissions</h1>
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
                            <li class="betterdocs-toc-heading-level-2"><a href="#0-toc-title">Use of Restricted User levels</a>
                                <ul class="betterdocs-toc-list-level-3">
                                    <li class="betterdocs-toc-heading-level-3"><a href="#1-toc-title">Adding Restricted Recruitment Manager</a></li>
                                    <li class="betterdocs-toc-heading-level-3"><a href="#2-toc-title">Restricted Employees</a></li>
                                </ul>
                            </li>
                            <li class="betterdocs-toc-heading-level-2"><a href="#3-toc-title">How to deny access to a particular module for a user level</a></li>
                        </ul>
                    </div>
                    <div id="betterdocs-single-content" class="betterdocs-content">
                        <p>When you want to give privilege to a particular user, you can do this by changing the User Level of the user or using the IceHrm User Role option.</p>
                        <p>With the updated user permission module IceHrm now supports the following user levels:</p>
                        <ol>
                            <li>Admin</li>
                            <li>Manager</li>
                            <li>Employee</li>
                            <li>Restricted Admin</li>
                            <li>Restricted Manager</li>
                            <li>Restricted Employee</li>
                        </ol>
                        <p>Admin user level has all the access to the IceHrm account, while the manager has limited access to administration functionalities.</p>
                        <p>For example, under the leave module, a manager can see their subordinates leave days, can approve leaves, grant leaves. But as an admin, you can see leave requests from all the employees and act on these requests.</p>
                        <p>An employee has all the to use the platform as an employee.</p>
                        <p>Let’s take an example scenario to understand how to grant admin access to one of your employees or managers:</p>
                        <ol>
                            <li>You can log into the admin account.</li>
                            <li>Go to the System section and click on the Users.</li>
                            <li>Then click on the User tab in order to make changes.</li>
                            <li>You can select the employee you want to make changes and click on the edit button.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="474" src="https://icehrm.com/explore/wp-content/uploads/2021/11/users-1024x474.png" alt="" class="wp-image-1056" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/users-1024x474.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/users-300x139.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/users-768x355.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/users-600x278.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/users.png 1135w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>5. Now you can change the User Level of the employee to Admin.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="393" src="https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole-1024x393.png" alt="" class="wp-image-1057" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole-1024x393.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole-300x115.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole-768x294.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole-600x230.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/changeuserole.png 1114w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Now you can select the user level as Admin and click on the Save button. So the particular user will have all the access granted for an admin.</p>
                        <h2 class="betterdocs-content-heading" id="0-toc-title">Use of Restricted User levels <a href="#0-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/user-permissions/#0-toc-title" data-title="Copy URL">#</a></h2>
                        <p>Restricted User levels are the same as the other user levels but with restricted access. If you have not granted specific permission to a restricted user using a user role, they won&#8217;t have any access rights.</p>
                        <p>Let&#8217;s take an example, imagine there is an external recruitment manager who will become a temporary employee of your company only to manage the recruitment related activities.</p>
                        <p>In this case, you can add a Restricted Manager and grant only the required permissions.</p>
                        <p>This will involve providing granular entity-level permissions to a user role. There are 4 Different types of <strong>entity-level permissions</strong>:</p>
                        <p><strong>List &#8211; User can load the list of entities</strong><br><strong>Get &#8211; User can view an individual entity</strong><br><strong>Add/Edit &#8211; User can add data or edit data</strong><br><strong>Delete &#8211; User can delete data</strong></p>
                        <h3 class="betterdocs-content-heading" id="1-toc-title">Adding Restricted Recruitment Manager <a href="#1-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/user-permissions/#1-toc-title" data-title="Copy URL">#</a></h3>
                        <ol>
                            <li>Log in to the admin account.</li>
                            <li>Go to the System section and click on the Users.</li>
                            <li>Then click on the <strong>User role</strong> tab and then click on the <strong>Add New</strong> option in order to create a New User role.</li>
                            <li>Then you can give a specific name to the User role &#8211; For this one, you can use Recruitment Manager.</li>
                            <li>Then click on Add to select the permission level.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="438" src="https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager-1024x438.png" alt="" class="wp-image-1058" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager-1024x438.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager-300x128.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager-768x328.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager-600x257.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/recruitment-manager.png 1134w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>6. Select the Table and then the Permission level you need to grant and then click on Save ( According to the above example, this user only needs to view recruitment data and make adjustments, so we select List, Get, Add/Edit and Delete options for candidate, interview and application entities )</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="441" src="https://icehrm.com/explore/wp-content/uploads/2021/11/permissions-1024x441.png" alt="" class="wp-image-1059" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/permissions-1024x441.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/permissions-300x129.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/permissions-768x331.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/permissions-600x258.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/permissions.png 1126w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>7. Now go to the Manage modules section under the System in order to assign the particular module to the new user role.</p>
                        <p>8. Then click on the Modules tab and search for the particular module.</p>
                        <p>9. Click on the edit button to make changes.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="561" src="https://icehrm.com/explore/wp-content/uploads/2021/11/modules-1024x561.png" alt="" class="wp-image-1060" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/modules-1024x561.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/modules-300x164.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/modules-768x421.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/modules-600x329.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/modules.png 1145w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>10. Select all the modules required for the recruitment process and add the created User Role to all of these modules and save changes.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="380" src="https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules-1024x380.png" alt="" class="wp-image-1061" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules-1024x380.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules-300x111.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules-768x285.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules-600x222.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/adminmodules.png 1114w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Once you created the User role and then Assign the module now you can go back to the User section and click on the User tab in order to assign this to the manager</p>
                        <p>11. Select the user you want to make changes and click on the edit button.</p>
                        <p>12. Now change the <strong>User Level</strong> of the employee into the <strong>Restricted Manager</strong> user level.</p>
                        <p>13. Then add the <strong>Recruitment Manager</strong> user role which you have already created.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="450" src="https://icehrm.com/explore/wp-content/uploads/2021/11/user4-1024x450.png" alt="" class="wp-image-1065" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/user4-1024x450.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/user4-300x132.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/user4-768x338.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/user4-600x264.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/user4.png 1121w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>14. You won&#8217;t be able to save the changes unless you have assigned a Default Module. This default module is important because that&#8217;s what the users can see in their dashboard as they log in</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="441" src="https://icehrm.com/explore/wp-content/uploads/2021/11/default-1024x441.png" alt="" class="wp-image-1066" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/default-1024x441.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/default-300x129.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/default-768x331.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/default-600x258.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/default.png 1113w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Once you save the changes login to the Recruitment Manager&#8217;s account, it will look like the below. And the recruitment manager will only have access to recruitment modules.</p>
                        <figure class="wp-block-image size-large is-resized"><img decoding="async" loading="lazy" src="https://icehrm.com/explore/wp-content/uploads/2021/11/doug-1024x481.png" alt="" class="wp-image-1064" width="1007" height="473" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/doug-1024x481.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/doug-300x141.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/doug-768x361.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/doug-600x282.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/doug.png 1349w" sizes="(max-width: 1007px) 100vw, 1007px" /></figure>
                        <h3 class="betterdocs-content-heading" id="2-toc-title">Restricted Employees <a href="#2-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/user-permissions/#2-toc-title" data-title="Copy URL">#</a></h3>
                        <p><strong>Restricted Employee</strong> is also similar to the employee level but with restricted access. For example, <strong>imagine you need to give access to one of your sales parsons only to mark attendance.</strong></p>
                        <p>To do this;</p>
                        <ol>
                            <li>Login to the admin account.</li>
                            <li>Go to the <strong>System</strong> section and click on the <strong>Users.</strong></li>
                            <li>Then click on the <strong>User role tab</strong> and then click on the <strong>Add New</strong> option in order to create a New User role.</li>
                            <li>Then you can give a specific name to the User role &#8211; For this one, you can use Sales Person or something similar.</li>
                            <li>Then Select the Table and then assign Permission.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="409" src="https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission-1024x409.png" alt="" class="wp-image-1643" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission-1024x409.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission-300x120.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission-768x307.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission-600x240.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/additionalpermission.png 1350w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>6. Now go to the Manage modules section under the System in order to assign the particular module to the new user role.</p>
                        <p>7. Then click on the Modules tab and search for the particular module.</p>
                        <p>8. Click on the edit button to make changes.</p>
                        <p>9. Add the created User Role to this module and save it.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="380" src="https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules-1024x380.png" alt="" class="wp-image-1645" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules-1024x380.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules-300x111.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules-768x285.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules-600x223.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/managemodules.png 1120w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>After creating the <strong>User role</strong> and Assigning the module, go back to the <strong>User section </strong>and click on the <strong>User tab</strong> in order to assign this <strong>role</strong> to the <strong>employee</strong>.</p>
                        <p>10. Click on Add New to create a new user.</p>
                        <p>11. Make sure the <strong>User Level</strong> of the employee is <strong>Restricted Employee</strong> user level.</p>
                        <p>12. Then Select the specific user role which you have already created.</p>
                        <p>13. Set a default module and then save.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="374" src="https://icehrm.com/explore/wp-content/uploads/2021/11/time-1024x374.png" alt="" class="wp-image-1070" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/time-1024x374.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/time-300x110.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/time-768x281.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/time-600x219.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/time.png 1341w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Once you save the changes and logged in to the employee&#8217;s account it will look like the below. The employee will only have access to mark attendance.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="426" src="https://icehrm.com/explore/wp-content/uploads/2021/12/restricted-1024x426.png" alt="" class="wp-image-1646" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/restricted-1024x426.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/restricted-300x125.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/restricted-768x319.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/restricted-600x249.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/restricted.png 1354w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <h2 class="betterdocs-content-heading" id="3-toc-title">How to deny access to a particular module for a user level <a href="#3-toc-title" class="anchor" data-clipboard-text="https://icehrm.com/explore/docs/user-permissions/#3-toc-title" data-title="Copy URL">#</a></h2>
                        <p>Denying access to one module for a particular user is easy in the same way that granting access.</p>
                        <p>Example: You want to deny access to the training module for one of your employees</p>
                        <p>To do this,</p>
                        <ol>
                            <li>Login to the admin account.</li>
                            <li>Go to the System section and click on the Users.</li>
                            <li>Then click on the User role tab and then Add New option in order to create a New User role.</li>
                            <li>Then you can give a specific name to the User role and save.</li>
                        </ol>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="406" src="https://icehrm.com/explore/wp-content/uploads/2021/11/training-1024x406.png" alt="" class="wp-image-1074" srcset="https://icehrm.com/explore/wp-content/uploads/2021/11/training-1024x406.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/11/training-300x119.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/11/training-768x305.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/11/training-600x238.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/11/training.png 1344w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>5. Now go to the Manage modules section under the System in order to assign the particular module to the new user role.</p>
                        <p>6. Then click on the Modules tab and search for the particular module.</p>
                        <p>7. Click on the edit button to make changes.</p>
                        <p>8. Select the created User Role to the Disallowed User Roles option and save it.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="400" src="https://icehrm.com/explore/wp-content/uploads/2021/12/training-1024x400.png" alt="" class="wp-image-1648" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/training-1024x400.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/training-300x117.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/training-768x300.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/training-600x234.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/training.png 1351w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>After creating the User role and assigning the module now you can go back to the <strong>User section</strong> and click on the <strong>User tab</strong> in order to assign this to the user.</p>
                        <p>9. Select the employee you want to make changes and click on the edit button or Click on Add New to create a new user.</p>
                        <p>10. Change the <strong>User Level</strong> of the employee according to your requirement (for this example, select Employee as the user level).</p>
                        <p>11. Then Select the specific user role which you have already created, disallowing the training module.</p>
                        <p>12. Set a default module and then save.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="405" src="https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2-1024x405.png" alt="" class="wp-image-1649" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2-1024x405.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2-300x119.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2-768x304.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2-600x237.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraining2.png 1347w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                        <p>Log in as the employee and you will notice that the employee doesn&#8217;t have the Training module.</p>
                        <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="1024" height="434" src="https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser-1024x434.png" alt="" class="wp-image-1650" srcset="https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser-1024x434.png 1024w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser-300x127.png 300w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser-768x325.png 768w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser-600x254.png 600w, https://icehrm.com/explore/wp-content/uploads/2021/12/notraininguser.png 1345w" sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
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
                            Updated on December 28, 2021 </div>
                    </div>
                </div>
                <div class="docs-navigation"><a href="https://icehrm.com/explore/docs/employee-data-import/" rel="prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
                            <g id="surface1">
                                <path style=" " d="M 11.957031 13.988281 C 11.699219 14.003906 11.457031 14.117188 11.28125 14.308594 L 1.015625 25 L 11.28125 35.691406 C 11.527344 35.953125 11.894531 36.0625 12.242188 35.976563 C 12.589844 35.890625 12.867188 35.625 12.964844 35.28125 C 13.066406 34.933594 12.972656 34.5625 12.71875 34.308594 L 4.746094 26 L 48 26 C 48.359375 26.003906 48.695313 25.816406 48.878906 25.503906 C 49.058594 25.191406 49.058594 24.808594 48.878906 24.496094 C 48.695313 24.183594 48.359375 23.996094 48 24 L 4.746094 24 L 12.71875 15.691406 C 13.011719 15.398438 13.09375 14.957031 12.921875 14.582031 C 12.753906 14.203125 12.371094 13.96875 11.957031 13.988281 Z "></path>
                            </g>
                        </svg> Employee Data Import</a><a href="https://icehrm.com/explore/docs/defining-company-structure/" rel="next">Defining Company Structure <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42px" viewBox="0 0 50 50" version="1.1">
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