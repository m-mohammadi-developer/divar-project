<div id="kt_header" class="header  header-fixed " >
    <!--begin::Container-->
    <div class=" container  d-flex align-items-stretch justify-content-between">
        <!--begin::راست-->
        <div class="d-none d-lg-flex align-items-center mr-3">
            <!--begin::Aside Toggle-->
            <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/متن/Align-left.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"/>
                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"/>
                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Aside Toggle-->
            <!--begin::Logo-->
            <a href="index.html">
            <img alt="Logo" src="{{ asset('media/logos/logo-letter-1.png') }}" class="logo-sticky max-h-35px"/>
            </a>
            <!--end::Logo-->
            <!--begin::Desktop جستجو-->
            <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
                <!--begin::Form-->
                <form method="get" class="quick-search-form">
                    <div class="input-group rounded bg-light">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <input type="text" class="form-control h-45px" placeholder="جستجو..."/>
                        <div class="input-group-append">
                            <span class="input-group-text">
                            <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
                <!--begin::جستجو Toggle-->
                <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                <!--end::جستجو Toggle-->
                <!--begin::دراپ دان-->
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200">
                    </div>
                </div>
                <!--end::دراپ دان-->
            </div>
            <!--end::Desktop جستجو-->
        </div>
        <!--end::راست-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Tablet & Mobile جستجو-->
            <div class="dropdown d-flex d-lg-none">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                        <span class="svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::دراپ دان-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                        <!--begin:Form-->
                        <form method="get" class="quick-search-form">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="جستجو..."/>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Scroll-->
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                        </div>
                        <!--end::Scroll-->
                    </div>
                </div>
                <!--end::دراپ دان-->
            </div>
            <!--end::Tablet & Mobile جستجو-->
            <!--begin::ایجاد کردن-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn font-weight-bolder btn-sm btn-light-success px-5">
                        کشو
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::دراپ دان-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                            <span class="navi-text">گروه جدید</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                            <span class="navi-text">مخاطب</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                            <span class="navi-text">گروه ها</span>
                            <span class="navi-link-badge">
                            <span class="label label-light-primary label-inline font-weight-bold">جدید</span>
                            </span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                            <span class="navi-text">تماس ها</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                            <span class="navi-text">تنظیمات</span>
                            </a>
                        </li>
                        <li class="navi-separator my-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                            <span class="navi-text">راهنما</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                            <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                            <span class="navi-text">حریم خصوصی</span>
                            <span class="navi-link-badge">
                            <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
                <!--end::دراپ دان-->
            </div>
            <!--end::اعلان ها-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>