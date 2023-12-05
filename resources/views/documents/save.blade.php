<form id="notesforms" action="{{url('/savedocument')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal-body">

                   <input type="hidden" name="project_id" value="{{$data['project_id']}}"> 
                    <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
                    <div class="m-portlet__body">
                        
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group m-form__group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control m-input m-input--square" value="{{(isset($data['results']->title) ? $data['results']->title : '')}}" required>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group m-form__group">
                                    <label>Upload</label>
                                    <div class="m-dropzone dropzone  m-dropzone--primary" action="<?=url('/').'/uploadfile?url=-public-uploads-projectdoc'?>" id="projectdoc">

                                        <div class="m-dropzone__msg dz-message needsclick">
                                            <h3 class="m-dropzone__msg-title">
                                                Drop files here or click to upload
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="file" class="form-control m-input m-input--square" value="{{(isset($data['results']->file) ? $data['results']->file : '')}}">
                       </div>                          
                   </div>
             
               </div>
           </div>
                      
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary savedocument">Save</button>
    </div>
</form>
<script type="text/javascript">
    //this line is for dropzone
     dropzonesinglefunc('#projectdoc',1,'.docx,.pdf','file','public/uploads/projectdoc/');
    datepickerfun();
    selectoption();
</script>
