@extends('admin.layouts.admin')

@section('style')



@endsection

@section('content')


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

        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
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
				<span class="widget-icon"> <i class="fa fa-table"></i> </span>
				<h2>文章列表 </h2>

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
					<div class="widget-body-toolbar">

					</div>
                    @if (count($articles) > 0)
                    <div class="dt_wrapper">
                        <table id="dt_basic" class="table table-bordered table-striped table-condensed table-hover smart-form has-tickbox">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkbox">
											<input type="checkbox" name="checkbox-inline">
											<i></i>
                                        </label>
                                    </th>
                                    <th style="width:1em;">ID</th>
                                    <th>标题</th>
                                    <th>类别</th>
                                    <th>用户</th>
                                    <th>缩略图</th>
                                    <th style="width:8em;">发布时间</th>
                                    <th style="width:6em;">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <label class="checkbox">
											<input type="checkbox" name="checkbox-inline">
											<i></i>
                                        </label>
                                    </td>
                                    <td>{{ $article->id }}</td>
                                    <td><a href="/article/{{ $article->id }}">
                                        {{str_limit($article->title,50)}}
                                        </a>
                                    </td>
                                    <td>{{ $article->category }}</td>
                                    <td>{{App\Article::find($article->user_id)->user->name}}</td>
                                    <td>
                                        @if($article->thumbnail)
                                            <a href="/uploads/{{ $article->thumbnail }}">图片</a>
                                        @endif
                                    </td>
                                    <td>{{ substr($article->published_at,1,10) }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="/admin/article/{{ $article->id }}/edit">
                                            <button type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-3 fa-edit"></i>
                                            </button>
                                            </a>
                                            <a href="/admin/article/{{ $article->id }}/destroy">
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fa fa-3 fa-times"></i>
                                            </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="dt-row dt-bottom-row">
                        <div class="row text-center">
                            <div class="dataTables_paginate paging_bootstrap_full">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                    @endif
				</div>
				<!-- end widget content -->

			</div>
			<!-- end widget div -->

		</div>
		<!-- end widget -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->




@endsection

@section('script')

<script type="text/javascript">
    $("#aside_article").addClass("open");
    $("#aside_article_").show();
    $("#aside_article_list").addClass("active");
</script>

@endsection
