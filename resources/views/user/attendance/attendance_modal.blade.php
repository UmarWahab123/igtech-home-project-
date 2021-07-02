                          
                          
<div class="modal fade" id="savemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <form id="attendanceform" action="{{ url('/saveattendance') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <input type="hidden" name="user_id" value="{{$data['user_id']}}">
                <input type="hidden" name="id" value="{{(isset($data['results']->id) ? $data['results']->id : '')}}">
                <div class="modal-body">
                    <div class="m-portlet__body">
                    	 <div class="form-group m-form__group">
                                <label>Attendance Type</label>
                                <select name="type_id" class="form-control" data-option-id="{{(isset($data['results']->type_id) ? $data['results']->type_id : '')}}">
                                 <option value="">Select</option>
                                    @foreach($data['types'] as $row)
                                 <option value="{{$row->id}}">{{$row->type}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group m-form__group">
                            <label>Attendance From</label>
                            <div class='input-group'>
                                <input type='text' value="{{(isset($data['results']->from) ? format_date($data['results']->from) : '')}}" class="form-control m-input m_datepicker" name="from" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label>Attendance To</label>
                            <div class='input-group'>
                                <input type='text' value="{{(isset($data['results']->to) ? format_date($data['results']->to) : '')}}" class="form-control m-input m_datepicker" name="to" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <span type="submit" class="btn btn-primary saveattendance">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
	datepickerfun();
	selectoption();
</script>