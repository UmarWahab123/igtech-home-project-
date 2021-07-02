<div class="row">
    <div class="col-md-4">
        <div class="form-group m-form__group">
            <label>User Name</label>
            <input type="text" name="username" value="{{(isset($data['results']->username) ? $data['results']->username : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Password</label>
            <input type="password" placeholder="{{$data['pwplaceholder']}}" name="password" value="" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Description</label>
            <input type="text" name="desc" value="{{(isset($data['results']->desc) ? $data['results']->desc : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>First Name</label>
            <input type="text" name="first_name" value="{{(isset($data['results']->first_name) ? $data['results']->first_name : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{(isset($data['results']->last_name) ? $data['results']->last_name : '')}}" class="form-control m-input m-input--square">
        </div>





    </div>
    <div class="col-md-4">

        <div class="form-group m-form__group">
            <label>Role</label>
            <select name="role_id" class="form-control" data-option-id="{{(isset($data['results']->role_id) ? $data['results']->role_id : '')}}">
                <option value="">Select</option>
                @foreach($data['roles'] as $row)
                    <option value="{{$row->role_id}}">{{$row->role_title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group m-form__group">
            <label>Passport</label>
            <input type="text" name="passport_no" value="{{(isset($data['results']->passport_no) ? $data['results']->passport_no : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Start Date</label>
            <div class='input-group'>
                <input type='text' value="{{(isset($data['results']->start_date) ? format_date($data['results']->start_date) : '')}}" class="form-control m-input m_datepicker" name="start_date" />
                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                </div>
            </div>
        </div>
        <div class="form-group m-form__group">
            <label>End Date</label>
            <div class='input-group'>
                <input type='text' value="{{(isset($data['results']->end_date) ? format_date($data['results']->end_date) : '')}}" class="form-control m-input m_datepicker" name="end_date" />
                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                </div>
            </div>
        </div>
        <div class="form-group m-form__group">
            <label>National Insurance No</label>
            <input type="text" name="insurance_no" value="{{(isset($data['results']->insurance_no) ? $data['results']->insurance_no : '')}}" class="form-control m-input m-input--square">
        </div>



    </div>
    <div class="col-md-4">
        <div class="form-group m-form__group">
            <label>Email</label>
            <input type="text" name="email" value="{{(isset($data['results']->email) ? $data['results']->email : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Date of birth</label>
            <div class='input-group'>
                <input type='text' value="{{(isset($data['results']->dob) ? format_date($data['results']->dob) : '')}}" class="form-control m-input m_datepicker" name="dob" />
                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-calendar-check-o"></i>
                                </span>
                </div>
            </div>
        </div>
        <div class="form-group m-form__group">
            <label>Home Address</label>
            <input type="text" name="home_address" value="{{(isset($data['results']->home_address) ? $data['results']->home_address : '')}}" class="form-control m-input m-input--square">
        </div>
        <div class="form-group m-form__group">
            <label>Contact No</label>
            <input type="text" name="contact_no" value="{{(isset($data['results']->contact_no) ? $data['results']->contact_no : '')}}" class="form-control m-input m-input--square">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="form-group m-form__group">
            <label>Notes</label>
            <textarea class="form-control" name="notes" rows="6">{{(isset($data['results']->notes) ? $data['results']->notes : '')}}</textarea>
        </div>
    </div>
</div>