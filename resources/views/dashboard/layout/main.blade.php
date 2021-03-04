<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
    <!--begin::Head-->
    <head>
        @section('head')
        <base href="">
        <meta charset="utf-8"/>
        <title>
            @if(isset($title))
                {{ $title }}
            @else 
                {{ 'داشبورد' }}
            @endif
        </title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Page Vendors Styles-->
        <!--begin::Global تم Styles(used by all pages)-->
        <link href="{{ asset('plugins/global/plugins.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style.bundle.rtl.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Global تم Styles-->
        <!--begin::چیدمان تم ها(used by all pages)-->
        <!--end::چیدمان تم ها-->
        <link rel="shortcut icon" href="{{ asset('/media/logos/favicon.ico') }}"/>
        @show
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body  id="kt_body"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading"  >
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        @include('dashboard.layout.partials.header-mobile')
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                @include('dashboard.layout.partials.menu')
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <!--begin::Header-->
                    @include('dashboard.layout.partials.header')
                    <!--end::Header-->

                    <!--begin::Content-->
                    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class=" container ">
                                <!--begin::داشبورد-->

                                @yield('content')

                                <!--end::داشبورد-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    @include('dashboard.layout.partials.footer')
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <!--begin::نسخه ی نمایشی Panel-->
        <!--end::نسخه ی نمایشی Panel-->
        
        <!--begin::Global Config(global config for global جی اس scripts)-->
        @section('scripts')
        <script>
            var KTAppSettings  = {
            "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
            },
            "colors": {
            "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
            },
            "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
            }
            },
            "font-family": "Poppins"
            };
        </script>
        <!--end::Global Config-->
        <!--begin::Global تم Bundle(used by all pages)-->
        <script src="{{ asset('plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
        <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js?v=7.0.6') }}"></script>
        <!--end::Global تم Bundle-->
        <!--begin::Page Vendors(used by this page)-->
        <script src="{{ asset('/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6') }}"></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('/js/pages/widgets.js?v=7.0.6') }}"></script>
        @show
        <!--end::Page Scripts-->
    </body>
    <!--end::Body-->
</html>