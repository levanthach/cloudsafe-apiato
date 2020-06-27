@include('application::Layouts.header')

  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
      <!--begin::Logo-->
      <a href="index.html">
        <img alt="Logo" src="{{ asset('./assets/media/logos/logo-letter-3.png') }}" class="logo-default max-h-30px" />
      </a>
      <!--end::Logo-->
      <!--begin::Toolbar-->
      <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
          <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
          <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
          <span class="svg-icon svg-icon-xl">
            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
              </g>
            </svg>
            <!--end::Svg Icon-->
          </span>
        </button>
        <!--end::Topbar Mobile Toggle-->
      </div>
      <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left d-flex flex-column" id="kt_aside">
          <!--begin::Brand-->
          <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
            <!--begin::Logo-->
            <a href="index.html">
              <img alt="Logo" src="{{ asset('./assets/media/logos/logo-letter-9.png') }}" class="max-h-30px" />
            </a>
            <!--end::Logo-->
          </div>
          <!--end::Brand-->
          <!--begin::Nav Wrapper-->
          <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
            <!--begin::Nav-->
            <ul class="nav flex-column">
              <!--begin::Item-->
              <li class="nav-item mb-5" title="Latest Projects">
                <a href="#" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg active" title="Dashboard">
                  <i class="icon-lg la la-dashboard"></i>
                </a>
              </li>
              <!--end::Item-->

               <li class="nav-item mb-5">
                <a href="./log" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg" title="Log">
                  <i class="icon-lg la fab la-keycdn"></i>
                </a>
              </li>
              <!--end::Item-->

               <li class="nav-item mb-5">
                <a href="./report" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg" title="Report">
                  <i class="icon-lg la la-signal"></i>
                </a>
              </li>
              <!--end::Item-->

               <li class="nav-item mb-5">
                <a href="./setting" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg" title="Settings">
                  <i class="la la-gears icon-lg"></i>
                </a>
              </li>
              <!--end::Item-->
             
            </ul>
            <!--end::Nav-->
          </div>
          <!--end::Nav Wrapper-->

        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header bg-white header-fixed">
            <!--begin::Container-->
            <div class="container-fluid d-flex align-items-stretch justify-content-between">
              <!--begin::Left-->
              <div class="d-flex align-items-stretch mr-2">
                <!--begin::Page Title-->
                <h3 class="d-none text-dark d-lg-flex align-items-center mr-10 mb-0"><img class="img-responsive" src="{{ asset('./assets/imgs/logo.png') }}"></h3>
                <!--end::Page Title-->
                <!--begin::Header Menu Wrapper-->
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                  <!--begin::Header Menu-->
                  <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">
                      <li class="menu-item menu-item-active" aria-haspopup="true">
                        <a href="./dashboard" class="menu-link">
                          <span class="menu-text">My Site</span>
                        </a>
                      </li>
                       <li class="menu-item" aria-haspopup="true">
                        <a href="./add-site" class="menu-link">
                          <span class="menu-text">Add Site +</spquan>
                        </a>
                      </li>
                    </ul>
                    <!--end::Header Nav-->
                  </div>
                  <!--end::Header Menu-->
                </div>
                <!--end::Header Menu Wrapper-->
              </div>
              <!--end::Left-->
              <!--begin::Topbar-->
              <div class="topbar">
                <!--begin::Search-->
                <div class="topbar-item mr-3">
                  <div class="btn btn-icon btn-clean btn-lg" id="kt_quick_search_toggle">
                    <span class="svg-icon svg-icon-xl">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </div>
                </div>
                <!--end::Search-->

                <!--begin::Quick Actions-->
                <div class="dropdown">
                  <!--begin::Toggle-->
                  <div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg">
                      <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </div>
                  </div>
                  <!--end::Toggle-->
                 
                </div>
                <!--end::Quick Actions-->
               
                <!--begin::User-->
                <div class="topbar-item">
                  <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <div class="d-flex flex-column text-right pr-3">
                      <span class="text-muted font-weight-bold font-size-base d-none d-md-inline">Hi,</span>
                      <span class="text-dark-75 font-weight-bolder font-size-base d-none d-md-inline">Cloudsafe</span>
                    </div>
                    <span class="symbol symbol-35 symbol-light-primary">
                      <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                    </span>
                  </div>
                </div>
                <!--end::User-->
              </div>
              <!--end::Topbar-->
            </div>
            <!--end::Container-->
          </div>

            <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
        <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
          <i class="ki ki-close icon-xs text-muted"></i>
        </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
          <div class="symbol symbol-100 mr-5">
            <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
            <i class="symbol-badge bg-success"></i>
          </div>
          <div class="d-flex flex-column">
            <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">CloudSafe</a>
            <div class="text-muted mt-1">Adim Security</div>
            <div class="navi mt-2">
              <a href="#" class="navi-item">
                <span class="navi-link p-0 pb-2">
                  <span class="navi-icon mr-1">
                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                          <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </span>
                  <span class="navi-text text-muted text-hover-primary">cloudsafe@gmail.com</span>
                </span>
              </a>
              <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
    
        <!--end::Nav-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->
      </div>
      <!--end::Content-->
    </div>
    <!-- end::User Panel-->