<!DOCTYPE html>
<html lang="{{ config( 'app.locale' ) }}">
<head>
    @include( 'meta-headers' )
    {{--@include( 'google-analytics', ['googleTrackingId' => 'UA-3479407-4'] )--}}
    <link rel="shortcut icon" href="{{ asset( 'images/favicon.png', true ) }}"/>

    <title>{{ $template->name }}</title>

<!-- Bootstrap Core JS -->
    <script type="text/javascript" src="{!! asset( '/ixavier-libraries/js/jquery/jquery.min.js', true ) !!}"></script>
    <link href="{!! asset( '/css/base-template.css', true ) !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset( $template->getTemplateCss(), true ) !!}" media="all" rel="stylesheet" type="text/css"/>

</head>
<body class="background-{{ $backgroundType }}">
<div id="content" >
    <header>
    </header>
