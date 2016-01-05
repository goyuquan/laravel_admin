
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="top:100px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">
                    图片上传
                </h4>
            </div>
            <div class="modal-body no-padding">

                <form id="file_form" class="smart-form" method="POST" action="/article/fileUpload" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <fieldset>

                        <section>
                            <div class="row">
                                <div class="col col-10">
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <div class="input input-file">
            								<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">点击选择</span><input type="text" placeholder="选择文件" readonly="">
            							</div>
                                    </label>
                                </div>
                                <div class="col col-2">
                                    <input type="button" id="img_upload" class="btn btn-success btn-sm" name="name" value="     点击上传      ">
                                    @if ($errors->has('photo'))
                                    <strong>{{ $errors->first('photo') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </section>

                        <div class="progress progress-sm progress-striped active">
							<div id="progress" class="progress-bar bg-color-primary" role="progressbar"></div>
						</div>

                        <footer>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                关闭
                            </button>
                        </footer>
                    </form>


                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
