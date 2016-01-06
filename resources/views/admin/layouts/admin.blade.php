<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Admin </title>

		<!-- Use the correct meta names below for your web application
			 Ref: http://davidbcalhoun.com/2010/viewport-metatag

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-production.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-skins.css">

		<!-- SmartAdmin RTL Support is under construction
		<link rel="stylesheet" type="text/css" media="screen" href="/css/smartadmin-rtl.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="/css/demo.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/css/admin.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<style media="screen">
			#show-shortcut {
				margin-left: 0.5em;
			}
		</style>

		@yield('style')

	</head>

	@include('admin.layouts.header')

	@include('admin.layouts.aside')

    @yield('content')

    @include('admin.layouts.script')

    @yield('script')

    </body>
</html>
