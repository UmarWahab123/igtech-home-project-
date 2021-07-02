<div class="row">
    <div class="col-md-4">
        <div class="form-group m-form__group">
            <label>Upload Documents</label>
            <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploads/upload_file.php?url=-public-uploads-user-doc'?>" id="userdoc">

                <div class="m-dropzone__msg dz-message needsclick">
                    <h3 class="m-dropzone__msg-title">
                        Drop files here or click to upload
                    </h3>
                </div>
            </div>
        </div>
        @if(isset($data['results']->doc))
            @foreach(json_decode($data['results']->doc) as $row)
                <div class="col-md-4 file_div">
                    @if(file_exists($row))
                        <div class="w200">
                            <a href="{{url('/').'/'.$row}}"><i class="flaticon-file"></i> {{strafter($row,'-')}}</a>
                        </div>
                        <a class="unlink_file" data-img="{{$row}}" href="javascript:void(0)"><i class="la la-times"></i></a>
                    @endif
                </div>
            @endforeach
        @endif
        <input type="hidden" name="doc" class="form-control m-input m-input--square" value="">
        <input type="hidden" name="old_doc" class="form-control m-input m-input--square" value="{{(isset($data['results']->doc) ? $data['results']->doc : '')}}">
    </div>

    <div class="col-md-4">
        <div class="form-group m-form__group">
            <label>Profile picture</label>
            <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploads/upload_file.php?url=-public-uploads-employee-profile'?>" id="mDropzonedp">

                <div class="m-dropzone__msg dz-message needsclick">
                    <h3 class="m-dropzone__msg-title">
                        Drop files here or click to upload
                    </h3>
                </div>
            </div>
        </div>
        <div class="file_div">
            <div class="form-group">
                @if(file_exists(Auth::user()->dp))
                    <a href="{{url('/').'/'.Auth::user()->dp}}" data-lightbox="example-set"><img class="img_frame" width="150" height="100" class="example-image" src="{{url('/').'/'.Auth::user()->dp}}" alt=""/></a>
                    <a class="unlink_file" data-img="{{Auth::user()->dp}}" href="javascript:void(0)"><i class="la la-times"></i></a>
                @endif
            </div>
        </div>

        <input type="hidden" name="dp" class="form-control m-input m-input--square" value="{{Auth::user()->dp}}">

    </div>

</div>