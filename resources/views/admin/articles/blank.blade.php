@extends('admin.layouts.admin')

@section('style')



@endsection

@section('content')

@include('common.upload')

<!-- MAIN PANEL -->
<div id="main" role="main">


    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment">
            <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                <i class="fa fa-refresh"></i>
            </span>
        </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>
                控制台
            </li>
            <li>
                内容管理
            </li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
    </span> -->

    </div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">




    <!-- widget grid -->
    <!-- end widget grid -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        <img src="img/logo.png" width="150" alt="SmartAdmin">
                    </h4>
                </div>
                <div class="modal-body no-padding">

                    <form id="login-form" class="smart-form">

                        <fieldset>
                            <section>
                                <div class="row">
                                    <label class="label col col-2">Username</label>
                                    <div class="col col-10">
                                        <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="email" name="email">
                                        </label>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <label class="label col col-2">Password</label>
                                    <div class="col col-10">
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password">
                                        </label>
                                        <div class="note">
                                            <a href="javascript:void(0)">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <div class="col col-2"></div>
                                    <div class="col col-10">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" checked="">
                                            <i></i>Keep me logged in</label>
                                        </div>
                                    </div>
                                </section>
                            </fieldset>

                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Sign in
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Cancel
                                </button>

                            </footer>
                        </form>


                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')



@endsection
