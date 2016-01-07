@extends('admin.layouts.admin')

@section('style')



@endsection

@section('content')

@include('common.upload')

<!-- MAIN PANEL -->
<div id="main" role="main">


    <!-- RIBBON -->
    <div id="ribbon">


        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>
                控制台
            </li>
            <li>
                分类管理
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
                    <h2>添加分类 </h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <form id="category-form" class="smart-form" novalidate="novalidate">

                            <fieldset>
                                <section>
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" class="input-ms" name="fname" placeholder="First name">
                                    </label>
                                </section>
                            </fieldset>



                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body">


                                        <div class="tree">
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-lg fa-calendar"></i> 分类根目录 </span>
                                                    <ul>
                                                        <li>
                                                            <span class="label label-success"><i class="fa fa-lg fa-plus-circle"></i> 分类一 </span>
                                                            <ul>
                                                                <li>
                                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="label label-warning"><i class="fa fa-lg fa-minus-circle"></i> 分类三</span>
                                                            <ul>
                                                                <li>
                                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                                </li>
                                                                <li>
                                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="label label-info"><i class="fa fa-lg fa-minus-circle"></i> 分类四</span>
                                                            <ul>
                                                                <li>
                                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- end widget content -->

                                </div>
                                <!-- end widget div -->




                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    添加
                                </button>
                            </footer>
                        </form>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>



        <article class="col-sm-12 col-md-12 col-lg-6">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-3">
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
                    <span class="widget-icon"> <i class="fa fa-lg fa-calendar"></i> </span>
                    <h2> 分类结构 </h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body">


                        <div class="tree">
                            <ul>
                                <li>
                                    <span><i class="fa fa-lg fa-calendar"></i> 分类根目录 </span>
                                    <ul>
                                        <li>
                                            <span class="label label-success"><i class="fa fa-lg fa-plus-circle"></i> 分类一 </span>
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="label label-warning"><i class="fa fa-lg fa-minus-circle"></i> 分类三</span>
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="label label-info"><i class="fa fa-lg fa-minus-circle"></i> 分类四</span>
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-clock-o"></i> 子分类</span> &ndash; <a href="javascript:void(0);">子分类</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>



        </div>


    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')

<script src="/js/plugin/jquery-form/jquery-form.min.js"></script>
<script type="text/javascript">
$(function(){

    $("#aside_category").addClass("active");

    $('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
    $('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(':visible')) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
        }
        e.stopPropagation();
    });

})

</script>


@endsection
