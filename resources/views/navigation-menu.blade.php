<!-- Sidebar menu -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <!--Logotipo -->
            <x-application-mark class="block h-16 w-auto" />
            <span class="ms-2 font-weight-bold text-white">{{auth()->user()->name}} </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-200" id="sidenav-collapse-main">
        <ul class="navbar-nav">
             <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('profile') }}">


                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('slider') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Carrousel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('experience') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Experience</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('education') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Education</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('skills') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Skills</span>
                </a>
            </li>
            {{--<li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li> --}}
        </ul>
    </div>
</aside>
{{--  --}}
{{-- <aside class="bg-white row-span-2 border-r border-neutral relative flex flex-col justify-between p-[25px] dark:bg-dark-neutral-bg dark:border-dark-neutral-border">
    <div class="absolute p-2 border-neutral right-0 border bg-white rounded-full cursor-pointer duration-300 translate-x-1/2 hover:opacity-75 dark:bg-dark-neutral-bg dark:border-dark-neutral-border" id="sidebar-btn">
        <img src="{{asset('.//images/icons/icon-arrow-left.svg')}}" alt="left chevron icon">
    </div>
    <div>
        <a class="mb-10" href="{{ route('dashboard') }}">
            
        </a>
        <div class="pt-[106px] lg:pt-[35px] pb-[18px]">
            <div class="sidemenu-item rounded-xl relative">
                <input class="sr-only peer" type="checkbox" value="dashboard" name="sidemenu" id="dashboard">
                <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent active" for="dashboard">
                <div class="flex items-center gap-[10px]">
                    <img src="{{asset('.//images/icons/icon-favorite-chart.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Dashboard</span></div>
                </label>
                <img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                <div class="hidden peer-checked:block">
                    <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/index.html">Ecommerce</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/finance-dashboard.html">Finance</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-dashboard.html">Jobs</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-dashboard.html">CMS</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-dashboard.html">CRM</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/analytics-dashboard-1.html">Analytics</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/project-dashboard.html">Project Manage</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/chat-page-1.html">Chat / Message</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/social-feed-1.html">Social Network</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crypto-dashboard.html">Crypto</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/mailbox-inbox.html">Mailbox</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/file-manage-dashboard.html">File Manage</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/help-center-dashboard.html">Help Center</a></li>
                        <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/course-dashboard.html">Course Online</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="rounded-xl bg-neutral pt-4 flex items-center gap-5 mt-5 sidebar-control pr-[18px] pb-[13px] pl-[19px] dark:bg-dark-neutral-border">
        <div class="flex items-center gap-3"><i class="moon-icon" id="theme-toggle-dark-icon"><img class="cursor-pointer" src="{{asset('.//images/icons/icon-moon.svg')}}" alt="moon icon"><img class="cursor-pointer" src="{{asset('.//images/icons/icon-moon-active.svg')}}" alt="moon icon"></i>
            <label class="flex items-center cursor-pointer" for="theme-toggle" id="toggle-theme-btn">
                <div class="relative">
                    <input class="sr-only peer" type="checkbox" name="" id="theme-toggle">
                    <div class="block rounded-full w-[48px] h-[16px] bg-gray-300 peer-checked:bg-[#B2A7FF]"></div>
                    <div class="dot dotS absolute rounded-full transition h-[24px] w-[24px] top-[-4px] left-[-4px] bg-[#B2A7FF] peer-checked:bg-color-brands"></div>
                </div>
            </label>
            <i class="sun-icon" id="theme-toggle-light-icon">
                <img class="cursor-pointer" src="{{asset('.//images/icons/icon-sun.svg')}}" alt="sun icon">
                <img class="cursor-pointer" src="{{asset('.//images/icons/icon-sun-active.svg')}}" alt="sun icon">
            </i>
        </div>
        <div class="bg-neutral-bg w-[2px] h-[30px] dark:bg-dark-neutral-bg"></div>
        <div>
            <img class="cursor-pointer" id="sidebar-expand" src="{{asset('.//images/icons/icon-maximize-3.svg')}}" alt="expand icon">
        </div>
    </div>

 --}}
{{--            
                    
                        
                    
                    
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="ecommerce" name="sidemenu" id="ecommerce">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="ecommerce">
                        <div class="flex items-center gap-[10px]">
                        <img src="{{asset('.//images/icons/icon-products.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Ecommerce</span></div>

                    </label>
                    <img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/index.html">Dashboards</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/product-list.html">Products List</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/product-grid.html">Products Grid</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/product-details.html">Product Details</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/order-list.html">Order List</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/order-details.html">Order Details</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/transactions-list.html">Transactions</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/customers-lists.html">Customers List</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/reviews-list.html">Customers Review</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/seller-details.html">Seller Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="finance" name="sidemenu" id="finance">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="finance">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{asset('.//images/icons/icon-wallet.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Finance</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/finance-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/finance-cards.html">Cards</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/finance-transactions.html">Transactions</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#" id="transaction-detail">Transactions Details</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="jobs" name="sidemenu" id="jobs">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="jobs">
                        <div class="flex items-center gap-[10px]">
                        <img src="{{asset('.//images/icons/icon-job.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Jobs</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-dashboard.html">Dashboard 1</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-dashboard.html">Dashboard 2</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-listing-1.html">Jobs Listing 1</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-listing-2.html">Jobs Listing 2</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/jobs-add-new-job.html">Add New Job</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="cms" name="sidemenu" id="cms">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="cms">
                        <div class="flex items-center gap-[10px]">
                            <img src="{{asset('.//images/icons/icon-cms.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">CMS</span>
                        </div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-post-listing-grid.html">Posts Grid</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-post-listing-list.html">Post List</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-media.html">Media</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-add-post.html"> Add Post</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/cms-comment.html">Comments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="crm" name="sidemenu" id="crm">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="crm">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-crm.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">CRM</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-events.html">Events</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-customers.html">Customers</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-customer-details.html">Customer Details</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crm-customer-edit.html"> Customer Edit</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="analytics" name="sidemenu" id="analytics">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="analytics">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-analytics.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Analytics</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/analytics-dashboard-1.html">Dashboard-1</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/analytics-dashboard-2.html">Dashboard-2</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="project-manage" name="sidemenu" id="project-manage">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="project-manage">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-project.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Project Manage</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/project-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75 show-add-project"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#">Add Project</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#" id="show-share-modal">Share Project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="chat" name="sidemenu" id="chat">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="chat">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-chat.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Chat / Message</span></div>

                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/chat-page-1.html">Layout 1</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/chat-page-2.html">Layout 2</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/chat-page-3.html">Layout 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="network" name="sidemenu" id="network">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="network">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-network.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Social Network</span></div>

                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/social-feed-1.html">Social Feed 1</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/social-feed-2.html">Social Feed 2</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/social-feed-3.html">Social Feed 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="crypto" name="sidemenu" id="crypto">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="crypto">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-crypto.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Crypto</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/crypto-dashboard.html">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="mailbox" name="sidemenu" id="mailbox">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="mailbox">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-mailbox.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Mailbox</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/mailbox-inbox.html">Inbox</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/mailbox-read.html">Read</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/mailbox-chat.html">Chat</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#" id="show-mail-modal">Compose</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="course" name="sidemenu" id="course">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="course">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-course.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Online Course</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/course-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/course-course.html">Course</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/course-add-course.html">Add Course</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="file" name="sidemenu" id="file">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="file">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-file.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">File Manager</span></div>

                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/file-manage-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/file-manage-folder.html">Folder</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/file-manage-folder-blank.html">Folder Blank</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="help" name="sidemenu" id="help">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="help">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-headphone.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Help Center</span></div>

                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/help-center-dashboard.html">Dashboard</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/help-center-ticket.html">Ticket</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/help-center-add-category.html">Add Category</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/help-center-knowledge-base.html">Knowledge Base</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidemenu-item rounded-xl relative">
                    <input class="sr-only peer" type="checkbox" value="auth" name="sidemenu" id="auth">
                    <label class="flex items-center justify-between w-full cursor-pointer py-[17px] px-[21px] focus:outline-none peer-checked:border-transparent" for="auth">
                        <div class="flex items-center gap-[10px]"><img src="{{asset('.//images/icons/icon-auth.svg')}}" alt="side menu icon"><span class="text-normal font-semibold text-gray-500 sidemenu-title dark:text-gray-dark-500">Authentication</span></div>
                    </label><img class="absolute right-2 transition-all duration-150 caret-icon pointer-events-none peer-checked:rotate-180 top-[22px]" src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="caret icon">
                    <div class="hidden peer-checked:block">
                        <ul class="text-gray-300 child-menu z-10 pl-[53px]">
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/sign-in.html">Sign In</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/sign-up.html">Sign Up</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/reset-password.html">Reset password</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/password-required.html">Password required</a></li>
                            <li class="pb-2 transition-opacity duration-150 hover:opacity-75"><a class="text-normal" href="https://wp.alithemes.com/html/frox/demos/sign-up-success.html">Signup success</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="category-list">
                <div class="w-full bg-neutral h-[1px] mb-[21px] dark:bg-dark-neutral-border"></div>
                <h3 class="text-sm font-bold text-gray-1100 py-3 px-6 dark:text-gray-dark-1100">Categories</h3>
                <div><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Laptops</span>
                        <div class="grid place-items-center rounded w-[18px] h-[18px] bg-yellow">
                            <p class="font-medium text-gray-1100 text-[11px] leading-[11px]">8</p>
                        </div>
                    </a><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Mobile phones</span>
                        <div class="grid place-items-center rounded w-[18px] h-[18px] bg-orange">
                            <p class="font-medium text-gray-1100 text-[11px] leading-[11px]">6</p>
                        </div>
                    </a><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Desktops</span></a><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Accessories</span>
                        <div class="grid place-items-center rounded w-[18px] h-[18px] bg-pink">
                            <p class="font-medium text-gray-1100 text-[11px] leading-[11px]">5</p>
                        </div>
                    </a><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Portable storage</span>
                        <div class="grid place-items-center rounded w-[18px] h-[18px] bg-green">
                            <p class="font-medium text-gray-1100 text-[11px] leading-[11px]">9</p>
                        </div>
                    </a><a class="flex items-center justify-between py-3 pl-6" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"><span class="text-gray-500 text-normal dark:text-gray-dark-500">Networking</span></a>
                </div>
                <div class="flex items-center gap-3 py-3 px-6 mb-[22px]"><img src="{{asset('.//images/icons/icon-add-square.svg')}}" alt="add icon">
                    <p class="text-sm font-bold text-gray-1100 dark:text-gray-dark-1100">Add Category</p>
                </div>
            </div>
            <div class="w-full bg-neutral h-[1px] mb-[35px] dark:bg-dark-neutral-border"></div>
          {{--   <div class="pl-6 seller-maximize mb-[35px]">
                <h3 class="text-sm font-bold text-gray-1100 mb-[15px] dark:text-gray-dark-1100">Top Sellers</h3>
                <div class="flex items-center"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-50" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-1.png" alt="user avatar"></a><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-40 translate-x-[-10px]" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-2.png" alt="user avatar"></a><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-30 translate-x-[-20px]" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-3.png" alt="user avatar"></a><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-20 translate-x-[-30px]" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-4.png" alt="user avatar"></a>
                    <button class="w-9 h-9 rounded-full border-neutral overflow-hidden bg-color-brands grid place-items-center border-[1.4px] dark:border-dark-neutral-border z-10 translate-x-[-40px]" type="button"><img src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/icon-add-circle.svg" alt="plus icon"></button>
                </div>
            </div>
            <div class="seller-minimize">
                <h3 class="text-sm font-bold text-gray-1100 mb-[15px] dark:text-gray-dark-1100">Sellers</h3>
                <div class="flex items-center round text-"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-50" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-1.png" alt="user avatar"></a><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 z-40 translate-x-[-10px]" href="https://wp.alithemes.com/html/frox/demos/seller-details.html"><img class="w-full h-full object-cover" src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/avatar-layouts-2.png" alt="user avatar"></a>
                </div>
            </div>
            
 
        <div class="rounded-xl bg-neutral pt-4 flex items-center gap-5 mt-5 sidebar-control pr-[18px] pb-[13px] pl-[19px] dark:bg-dark-neutral-border">
            <div class="flex items-center gap-3"><i class="moon-icon" id="theme-toggle-dark-icon"><img class="cursor-pointer" src="{{asset('.//images/icons/icon-moon.svg')}}" alt="moon icon"><img class="cursor-pointer" src="{{asset('.//images/icons/icon-moon-active.svg')}}" alt="moon icon"></i>
                <label class="flex items-center cursor-pointer" for="theme-toggle" id="toggle-theme-btn">
                    <div class="relative">
                        <input class="sr-only peer" type="checkbox" name="" id="theme-toggle">
                        <div class="block rounded-full w-[48px] h-[16px] bg-gray-300 peer-checked:bg-[#B2A7FF]"></div>
                        <div class="dot dotS absolute rounded-full transition h-[24px] w-[24px] top-[-4px] left-[-4px] bg-[#B2A7FF] peer-checked:bg-color-brands"></div>
                    </div>
                </label>
                <i class="sun-icon" id="theme-toggle-light-icon">
                    <img class="cursor-pointer" src="{{asset('.//images/icons/icon-sun.svg')}}" alt="sun icon">
                    <img class="cursor-pointer" src="{{asset('.//images/icons/icon-sun-active.svg')}}" alt="sun icon">
                </i>
            </div>
            <div class="bg-neutral-bg w-[2px] h-[30px] dark:bg-dark-neutral-bg"></div>
            <div>
                <img class="cursor-pointer" id="sidebar-expand" src="{{asset('.//images/icons/icon-maximize-3.svg')}}" alt="expand icon">
            </div>
        </div>
    </div> --}}
</aside>



  {{--
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
  <x-application-mark class="block h-9 w-auto" />
  </a>
  </div>

  <!-- Navigation Links -->
  <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
      <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
          {{ __('Dashboard') }}
      </x-nav-link>
  </div>
  <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
      <x-nav-link href="{{-- {{ route('dashboard') }} --}}{{--" :active="request()->routeIs('dashboard')">

                        {{ __('blog') }}
                    </x-nav-link>
                </div>

            </div>

            <div class=" hidden sm:flex sm:items-center sm:ms-6">
          <!-- Teams Dropdown -->
          @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
          <div class="ms-3 relative">
              <x-dropdown align="right" width="60">
                  <x-slot name="trigger">
                      <span class="inline-flex rounded-md">
                          <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                              {{ Auth::user()->currentTeam->name }}

                              <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                              </svg>
                          </button>
                      </span>
                  </x-slot>

                  <x-slot name="content">
                      <div class="w-60">
                          <!-- Team Management -->
                          <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Manage Team') }}
                          </div>

                          <!-- Team Settings -->
                          <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                              {{ __('Team Settings') }}
                          </x-dropdown-link>

                          @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                          <x-dropdown-link href="{{ route('teams.create') }}">
                              {{ __('Create New Team') }}
                          </x-dropdown-link>
                          @endcan

                          <!-- Team Switcher -->
                          @if (Auth::user()->allTeams()->count() > 1)
                          <div class="border-t border-gray-200 dark:border-gray-600"></div>

                          <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Switch Teams') }}
                          </div>

                          @foreach (Auth::user()->allTeams() as $team)
                          <x-switchable-team :team="$team" />
                          @endforeach
                          @endif
                      </div>
                  </x-slot>
              </x-dropdown>
          </div>
          @endif

          <!-- Settings Dropdown -->
          <div class="ms-3 relative">
              <x-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                      <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                          <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                      </button>
                      @else
                      <span class="inline-flex rounded-md">
                          <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                              {{ Auth::user()->name }}

                              <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                          </button>
                      </span>
                      @endif
                  </x-slot>

                  <x-slot name="content">
                      <!-- Account Management -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                          {{ __('Manage Account') }}
                      </div>

                      <x-dropdown-link href="{{ route('profile.show') }}">
                          {{ __('Profile') }}
                      </x-dropdown-link>

                      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                      <x-dropdown-link href="{{ route('api-tokens.index') }}">
                          {{ __('API Tokens') }}
                      </x-dropdown-link>
                      @endif

                      <div class="border-t border-gray-200 dark:border-gray-600"></div>

                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}" x-data>
                          @csrf

                          <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                  </x-slot>
              </x-dropdown>
          </div>
  </div>

  <!-- Hamburger -->
  <div class="-me-2 flex items-center sm:hidden">
      <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
      </button>
  </div>
  </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
      <div class="pt-2 pb-3 space-y-1">
          <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
          </x-responsive-nav-link>
      </div>

      <!-- Responsive Settings Options -->
      <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
          <div class="flex items-center px-4">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <div class="shrink-0 me-3">
                  <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
              </div>
              @endif

              <div>
                  <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                  <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
              </div>
          </div>

          <div class="mt-3 space-y-1">
              <!-- Account Management -->
              <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                  {{ __('Profile') }}
              </x-responsive-nav-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                  {{ __('API Tokens') }}
              </x-responsive-nav-link>
              @endif

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>

              <!-- Team Management -->
              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <div class="border-t border-gray-200 dark:border-gray-600"></div>

              <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Team') }}
              </div>

              <!-- Team Settings -->
              <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                  {{ __('Team Settings') }}
              </x-responsive-nav-link>

              @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
              <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                  {{ __('Create New Team') }}
              </x-responsive-nav-link>
              @endcan

              <!-- Team Switcher -->
              @if (Auth::user()->allTeams()->count() > 1)
              <div class="border-t border-gray-200 dark:border-gray-600"></div>

              <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Switch Teams') }}
              </div>

              @foreach (Auth::user()->allTeams() as $team)
              <x-switchable-team :team="$team" component="responsive-nav-link" />
              @endforeach
              @endif
              @endif
          </div>
      </div>
  </div> --}}
