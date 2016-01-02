<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Use the correct meta names below for your web application
			 Ref: http://davidbcalhoun.com/2010/viewport-metatag

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.css">

		<!-- SmartAdmin RTL Support is under construction
			<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

	</head>
	<body id="login">
		<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
		<header id="header">
			<!--<span id="logo"></span>-->

			<div id="logo-group">
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>

				<!-- END AJAX-DROPDOWN -->
			</div>

			<span id="login-header-space"> <span class="hidden-mobile">已经注册?</span> <a href="/login" class="btn btn-danger">登录</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big">SmartAdmin</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
								<div class="login-app-icons">
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
								</div>
							</div>

							<img src="img/demo/iphoneview.png" alt="" class="pull-right display-image" style="width:210px">

						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
								</p>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<h5 class="about-heading">Not just your average template!</h5>
								<p>
									Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
								</p>
							</div>
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div class="well no-padding">

                                <form id="smart-form-register" class="smart-form client-form" role="form" method="POST" action="{{ url('/register') }}">
                                    {!! csrf_field() !!}
								<header>
									免费注册
								</header>

								<fieldset>
									<section>
										<label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="用户名">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif

											<b class="tooltip tooltip-bottom-right">用来登录网站</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-envelope"></i>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif

											<b class="tooltip tooltip-bottom-right">用来验证帐号</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" class="form-control" name="password" placeholder="密码" id="password">
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif

											<b class="tooltip tooltip-bottom-right">不要忘记密码</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="密码确认">
                                            @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                            @endif

											<b class="tooltip tooltip-bottom-right">不要忘记密码</b> </label>
									</section>
								</fieldset>

								<fieldset>
									<!-- <div class="row">
										<section class="col col-6">
											<label class="input">
												<input type="text" name="firstname" placeholder="First name">
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<input type="text" name="lastname" placeholder="Last name">
											</label>
										</section>
									</div> -->

									<div class="row">
										<section class="col col-6">
											<label class="select">
												<select name="gender">
													<option value="0" selected="" disabled="">Gender</option>
													<option value="1">Male</option>
													<option value="2">Female</option>
													<option value="3">Prefer not to answer</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-calendar"></i>
												<input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
											</label>
										</section>
									</div>

									<section>
										<!-- <label class="checkbox">
											<input type="checkbox" name="subscription" id="subscription">
											<i></i>I want to receive news and special offers</label> -->
										<label class="checkbox">
											<input type="checkbox" name="terms" id="terms">
											<i></i>同意 <a href="#" data-toggle="modal" data-target="#myModal"> Terms and Conditions </a>
                                        </label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										注册
									</button>
								</footer>

								<div class="message">
									<i class="fa fa-check"></i>
									<p>
										感谢注册!
									</p>
								</div>
							</form>

						</div>
						<p class="note text-center">*FREE Registration ends on October 2015.</p>
						<h5 class="text-center">- Or sign in using -</h5>
						<ul class="list-inline text-center">
							<li>
								<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
					</div>
					<div class="modal-body custom-scroll terms-body">

 <div id="left">



            <h1>SMARTADMIN TERMS & CONDITIONS TEMPLATE</h1>



            <h2>Introduction</h2>

            <p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.</p>

            <p>[You must be at least [18] years of age to use this website.  By using this website [and by agreeing to these terms and conditions] you warrant and represent that you are at least [18] years of age.]</p>



            <p>
                <strong>By using this  WEBSITE TERMS AND CONDITIONS template document, you agree to the
                    <a href="#">terms and conditions</a> set out on
                    <a href="#">SmartAdmin.com</a>.  You must retain the credit
                    set out in the section headed "ABOUT THESE WEBSITE TERMS AND CONDITIONS".  Subject to the licensing restrictions, you should
                    edit the document, adapting it to the requirements of your jurisdiction, your business and your
                    website.  If you are not a lawyer, we recommend that you take professional legal advice in relation to the editing and
                    use of the template.
                </strong>
            </p>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-primary" id="i-agree">
							<i class="fa fa-check"></i> I Agree
						</button>

						<button type="button" class="btn btn-danger pull-left" id="print">
							<i class="fa fa-print"></i> Print
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');} </script>

		<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="js/plugin/fastclick/fastclick.js"></script>

		<!--[if IE 7]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="js/app.js"></script>

		<script type="text/javascript">
			runAllForms();

			// Model i agree button
			$("#i-agree").click(function(){
				$this=$("#terms");
				if($this.checked) {
					$('#myModal').modal('toggle');
				} else {
					$this.prop('checked', true);
					$('#myModal').modal('toggle');
				}
			});

			// Validation
			$(function() {
				// Validation
				$("#smart-form-register").validate({

					// Rules for form validation
					rules : {
						username : {
							required : true
						},
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						passwordConfirm : {
							required : true,
							minlength : 3,
							maxlength : 20,
							equalTo : '#password'
						},
						firstname : {
							required : true
						},
						lastname : {
							required : true
						},
						gender : {
							required : true
						},
						terms : {
							required : true
						}
					},

					// Messages for form validation
					messages : {
						login : {
							required : 'Please enter your login'
						},
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						},
						passwordConfirm : {
							required : 'Please enter your password one more time',
							equalTo : 'Please enter the same password as above'
						},
						firstname : {
							required : 'Please select your first name'
						},
						lastname : {
							required : 'Please select your last name'
						},
						gender : {
							required : 'Please select your gender'
						},
						terms : {
							required : 'You must agree with Terms and Conditions'
						}
					},

					// Ajax form submition
					submitHandler : function(form) {
						$(form).ajaxSubmit({
							success : function() {
								$("#smart-form-register").addClass('submited');
							}
						});
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});

			});
		</script>

	</body>
</html>
