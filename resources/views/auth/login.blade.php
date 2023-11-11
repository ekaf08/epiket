<!DOCTYPE html>

<html lang="en">
    <!--begin::Head-->

    <head>
        <base href="../../../" />
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>

        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description"
            content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords"
            content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title"
            content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('metronic/dist/assets/media/logos/favicon.ico') }}" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->

        <style>
            .colored-toast.swal2-icon-success {
                background-color: #a5dc86 !important;
            }

            .colored-toast.swal2-icon-error {
                background-color: #f27474 !important;
            }

            .colored-toast.swal2-icon-warning {
                background-color: #f8bb86 !important;
            }

            .colored-toast.swal2-icon-info {
                background-color: #3fc3ee !important;
            }

            .colored-toast.swal2-icon-question {
                background-color: #87adbd !important;
            }

            .colored-toast .swal2-title {
                color: white;
            }

            .colored-toast .swal2-close {
                color: white;
            }

            .colored-toast .swal2-html-container {
                color: white;
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->

    <body id="kt_body" class="app-blank">
        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Logo-->
                <a href="{{ asset('metronic/dist/index.html') }}" class="d-block d-lg-none mx-auto py-20">
                    <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/default.svg') }}"
                        class="theme-light-show h-25px" />
                    <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/default-dark.svg') }}"
                        class="theme-dark-show h-25px" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside-->
                <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                        <!--begin::Header-->
                        <div class="d-flex flex-stack py-2">
                            <!--begin::Back link-->
                            <div class="me-2"></div>
                            <!--end::Back link-->
                            <!--begin::Sign Up link-->
                            <div class="m-0">
                            </div>
                            <!--end::Sign Up link=-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="py-20">
                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                data-kt-redirect-url="{{ asset('metronic/dist/index.html') }}"
                                action="{{ route('authLogin') }}" method="POST">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="text-start mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group=-->
                                    <div class="fv-row mb-7">
                                        <!--begin::username-->
                                        <input type="text" placeholder="username" name="username"
                                            data-kt-translate="sign-in-input-username"
                                            class="form-control form-control-solid" />
                                        <!--end::username-->
                                    </div>
                                    <!--end::Input group=-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Password-->
                                        <input type="password" placeholder="Password" name="password" autocomplete="off"
                                            data-kt-translate="sign-in-input-password"
                                            class="form-control form-control-solid" />
                                        <!--end::Password-->
                                    </div>
                                    <!--end::Input group=-->

                                    <!--begin::Alert-->
                                    <div
                                        class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-message-text-2 fs-2hx text-light me-4 mb-5 mb-sm-0"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> <!--end::Icon-->

                                        <!--begin::Content-->
                                        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                            <h4 class="mb-2 text-light">Username Atau Password Salah.</h4>
                                            {{-- <span>The alert component can be used to highlight certain parts of your
                                                page for higher content visibility.</span> --}}
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Alert-->

                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Submit-->
                                        <button {{-- id="kt_sign_in_submit" --}} type="button" onclick="submitForm(this.form)"
                                            class="btn btn-primary me-2 flex-shrink-0">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label" data-kt-translate="sign-in-submit">Sign
                                                In</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                <span data-kt-translate="general-progress">Please wait...</span>
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <!--end::Submit-->
                                        <!--begin::Social-->
                                        <div class="d-flex align-items-center">

                                        </div>
                                        <!--end::Social-->
                                    </div>
                                    <!--end::Actions-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                        <div></div>
                                        <!--begin::Link-->
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->

                                </div>
                                <!--begin::Body-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="m-0">

                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Aside-->
                <!--begin::Body-->
                <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                    style="background-image: url({{ asset('metronic/dist/assets/media/auth/bg11.png') }})"></div>
                <!--begin::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('metronic/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/custom/authentication/sign-in/i18n.js') }}"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->

        <script>
            var Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
            });

            function submitForm(originalForm) {
                $.post({
                        url: `{{ route('authLogin') }}`,
                        data: new FormData(originalForm),
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        processData: false
                    })
                    .done(response => {
                        Toast.fire({
                                icon: 'success',
                                position: 'center',
                                title: 'Berhasil',
                            })
                            .then(function() {
                                window.location.href = "{{ url('/dashboard') }}";
                            });
                    })
                    .fail(errors => {
                        console.log(errors);
                        Toast.fire({
                            icon: 'error',
                            position: 'center',
                            title: 'Username Atau Password Salah',
                        })
                    });
            }
        </script>
    </body>
    <!--end::Body-->

</html>
