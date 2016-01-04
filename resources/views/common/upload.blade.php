
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        图片上传
    </div>

    <div class="ui text center container">

        <form id="file_form" method="POST" action="/article/fileUpload" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="file" id="file" name="file">

            @if ($errors->has('photo'))
            <strong>{{ $errors->first('photo') }}</strong>
            @endif
            <span> 上传进度 </span>
            <span id="progress"></span>

            <div id="img_upload" class="ui positive center labeledd icon button tiny">
                上传
                <i class="checkmark icon"></i>
            </div>

        </form>
    </div>

    <div class="actions"> </div>

</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
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

                <form id="login-form" class="smart-form">

                    <fieldset>
                        <section>
                            <section>
							<label class="label">File input</label>
							<div class="input input-file">
								<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
							</div>
						</section>

                        <section>
                            <div class="row">
                                <label class="label col col-2">Password</label>
                                <div class="col col-10">
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <div class="input input-file">
            								<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
            							</div>
                                    </label>
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
