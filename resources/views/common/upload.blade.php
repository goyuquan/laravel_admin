
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
