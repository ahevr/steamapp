<!doctype html>
<html class="no-js" lang="tr">
<head>
    @include("inc.head")
</head>
<body class="body__bg" data-bgimg="{{asset("app/data")}}/master/img/bg/body-bg2.webp">
<div class="body_overlay"></div>
<!--header area start-->
<header class="header_section header_transparent sticky-header">
    @include("inc.header")
</header>
<!--header area end-->
<!-- breadcrumbs area start -->
    @yield("banner")
<!-- breadcrumbs area end -->
    @yield("categories")
<!-- page wrapper start -->
<div class="page_wrapper">
    <!-- popular gaming  section start -->
    @yield("content")
    <!-- popular gaming section end -->
</div>
<!-- page wrapper end -->
<!--footer area start-->
<footer class="footer_widgets">
    @include("inc.footer")
</footer>
<!--footer area end-->
@include("inc.script")
</body>
</html>
