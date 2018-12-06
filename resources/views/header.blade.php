<!DOCTYPE html>
<html lang="{{ config( 'app.locale' ) }}">
<head>
    @include( 'meta-headers' )
    {{--@include( 'google-analytics', ['googleTrackingId' => 'UA-3479407-4'] )--}}
    <link rel="shortcut icon" href="{{ asset( 'images/favicon.png', true ) }}"/>

    <title>{{ $template->name }}</title>

<!-- Bootstrap Core JS -->
    <script type="text/javascript" src="'/ixavier-libraries/js/jquery/jquery.min.js'"></script>
    <link href="/menu-templates/css/base-template.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! $template->getTemplateCss() !!}" media="all" rel="stylesheet" type="text/css"/>

</head>
<body class="background-{{ $backgroundType }}">
<div id="content" >
    <header>
    </header>
