<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../">
    <title>Page Not Found - Riaraboat</title>
    <meta charset="utf-8" />
    <meta
        name="description"
        content="Riaraboat"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />
    <meta
        property="og:site_name"
        content="Riaraboat.co"
    />
    <link
        rel="shortcut icon"
        href="{{ asset('admin/assets/logo.webp') }}"
    />
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link
        href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('admin/assets/css/style.bundle.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body
    id="kt_body"
    class="auth-bg"
>
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - 404 Page-->
        <div class="d-flex flex-column flex-center flex-column-fluid p-10">
            <!--begin::Illustration-->
            <img
                src="{{ asset('admin/assets/media/illustrations/sketchy-1/18.png') }}"
                alt=""
                class="mw-100 mb-10 h-lg-450px"
            />
            <!--end::Illustration-->
            <!--begin::Message-->
            <h1
                class="fw-bold mb-10"
                style="color: #A3A3C7"
            >Seems there is nothing here</h1>
            <!--end::Message-->
            <!--begin::Link-->
            <a
                href="#"
                class="btn btn-primary"
            >Return Home</a>
            <!--end::Link-->
        </div>
        <!--end::Authentication - 404 Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
