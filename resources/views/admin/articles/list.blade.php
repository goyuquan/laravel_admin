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

        <div class="row">

					<!-- col -->
					<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
						<h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-file-o"></i> Other Pages <span>&gt;
							Forum Layout </span></h1>
					</div>
					<!-- end col -->

					<!-- right side of the page with the sparkline graphs -->
					<!-- col -->
					<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
						<!-- sparks -->
						<ul id="sparks">
							<li class="sparks-info">
								<h5> 全部文章共计 <span class="txt-color-blue"><i class="fa fa-search-plus"></i>&nbsp;{{$articles->total()}}&nbsp;条</span></h5>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" title="Increased"></i>&nbsp;45%</span></h5>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
							</li>
						</ul>
						<!-- end sparks -->
					</div>
					<!-- end col -->

				</div>


        <div class="row">
            @if (count($articles) > 0)
            <div class="col-sm-12">

                <div class="well">

                    <table class="table table-striped table-forum smart-form table-hover">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="checkbox"> <input type="checkbox" name="checkbox-inline"> <i></i>
                                    </label>
                                </th>
                                <th style="width:20px;">ID</th>
                                <th>标题</th>
                                <th style="width:60px;"> 缩略图 </th>
                                <th style="width:50px;">用户</th>
                                <th class="text-center hidden-xs hidden-sm" style="width: 60px;">类别</th>
                                <th class="text-center hidden-xs hidden-sm" style="width: 100px;">发布时间</th>
                                <th class="hidden-xs hidden-sm" style="width: 50px;">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td>
                                    <label class="checkbox"> <input type="checkbox" name="checkbox-inline"> <i></i>
                                    </label>
                                </td>
                                <td class="text-center">{{ $article->id }}</td>
                                <td><h4><a href="/article/{{ $article->id }}"> {{str_limit($article->title,50)}} </a><small></small></h4></td>
                                <td class="text-center">
                                    @if($article->thumbnail)
                                        <a href="/uploads/{{ $article->thumbnail }}"><i class="fa fa-photo fa-2x text-muted text-success"></i></a>
                                    @endif
                                </td>
                                <td>{{App\Article::find($article->user_id)->user->name}}</td>
                                <td class="text-center hidden-xs hidden-sm">{{ $article->category }}</td>
                                <td class="text-center hidden-xs hidden-sm">{{ substr($article->published_at,1,10) }}</td>
                                <td class="hidden-xs hidden-sm">
                                    <div class="btn-group">
                                        <a href="/admin/article/{{ $article->id }}/edit"> <i class="fa fa-edit" style="font-size:24px;"></i>
                                        </a>
                                        <a href="/admin/article/{{ $article->id }}/destroy"> <i class="fa fa-times" style="font-size:24px;"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- end TR -->
                            @endforeach
                        </tbody>
                    </table>

                    <div class="dt-row dt-bottom-row">
                        <div class="row text-center">
                            <div class="dataTables_paginate paging_bootstrap_full">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>

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
