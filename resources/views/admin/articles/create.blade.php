@extends('admin.layouts.admin')

@section('style')
<style>
    #dLabel{
        /*padding:5px 10px;*/
        padding:0.5em 1em;
    }
    #type_select a{
        padding: 0.5em 1em;
    }
</style>
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


    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h1 class="page-title txt-color-blueDark">

                <!-- PAGE HEADER -->
                <i class="fa-fw fa fa-pencil-square-o"></i>
                内容管理
                <span>>
                    新建文章
                </span>
            </h1>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <!-- Button trigger modal -->
            <a data-toggle="modal" href="#myModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
                <i class="fa fa-circle-arrow-up fa-lg"></i> 弹出模态框层
            </a>
        </div>
    </div>

    <div class="alert alert-block alert-success">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading"><i class="fa fa-check-square-o">
        </i> Check validation!</h4>
        <p>
            You may also check the form validation by clicking on the form action button. Please try and see the results below!
        </p>
    </div>

    <!-- widget grid -->
    <section id="widget-grid" class="">


        <!-- START ROW -->

<div class="row">

<!-- NEW COL START -->
<article class="col-sm-12 col-md-12 col-lg-6">

<!-- Widget ID (each widget will need unique ID)-->
<div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
<!-- widget options:
usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
data-widget-editbutton="false"
data-widget-togglebutton="false"
data-widget-deletebutton="false"
data-widget-fullscreenbutton="false"
data-widget-custombutton="false"
data-widget-collapsed="true"
data-widget-sortable="false"

-->
<header>
<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
<h2>新建内容 </h2>

</header>

<!-- widget div-->
<div>

<!-- widget content -->
<div class="widget-body no-padding">

    <form class="smart-form" novalidate="novalidate" method="POST" action="/article/store" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <fieldset>

            <!-- 标题 -->
            <section>
                <label class="input">
                    <i class="icon-prepend fa fa-user"></i>
                    <input type="text" name="title" value="{{ old('title') }}" placeholder="文章标题">
                    @if ($errors->has('title'))
                    <strong>{{ $errors->first('title') }}</strong>
                    @endif
                </label>
            </section>
            <!-- 标题结束 -->

            <div class="row">
                <section class="col col-3">
                    <div id="type_select" class="dropdown">
                        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="javascript:void(0);">
                            选择所属类别
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu">
                            <li>
                                <a href="javascript:void(0);">类别1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">类别1</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="javascript:void(0);">有子类别</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="javascript:void(0);">Second level</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Second level</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Second level</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);">类别1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">类别1</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">类别1</a>
                            </li>
                        </ul>
                    </div>

                </section>
                <section class="col col-3">
                    <label class="input"> <i class="icon-append fa fa-calendar"></i>
                        <input type="text" name="publish_at" placeholder="选择发布时间" class="datepicker" value="{{ old('publish_at') }}" data-dateformat="dd/mm/yy">
                        @if ($errors->has('publish_at'))
                        <strong>{{ $errors->first('publish_at') }}</strong>
                        @endif
                    </label>
                </section>
                <div class="col col-6"></div>
            </div>


            <div class="form-group">
                <label>标签 (多选)</label>
                <select multiple style="width:100%" class="select2">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV" selected="selected">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT" selected="selected">Montana</option><option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI" selected="selected">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                    </optgroup>
                </select>

                <div class="note">
                    <strong>提示:</strong> 按住<strong>Ctrl<strong>键多选。
                </div>
            </div>
        </fieldset>

        <textarea name="content" rows="8" cols="40">{{ old('content') }}</textarea>
        @if ($errors->has('content'))
        <strong>{{ $errors->first('content') }}</strong>
        @endif

        <button type="button" id="upload_bt" class="mini negative ui button">图片上传</button>
        <input type="hidden" name="photo">


        <footer>
            <input type="submit" id="submit" class="btn btn-primary" value="submit">
        </footer>
    </form>

    </div>
    <!-- end widget content -->

</div>
<!-- end widget div -->

</div>
<!-- end widget -->

</article>
<!-- END COL -->

</div>

        <!-- END ROW -->

    </section>
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
<script src="/js/upload.js"></script>

<script type="text/javascript">
$(function() {

    pageSetUp();

});
</script>
@endsection
