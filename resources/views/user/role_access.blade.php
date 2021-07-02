@extends('../../layout.header')

@section('title','Role Access')

@section('content')
    <form id="role_access_form" method="post" action="{{ url('/saveroleaccess') }}">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">{{$data['page_title']}}</h3>
            </div>
            <div class="pull-right">
                <div class="form-group m-form__group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
        {{ csrf_field() }}
        <div class="m-content">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group" >
                    <select required class="form-control"  name="role_id" data-live-search="true">
                        <option value="">Select Role</option>
                        @foreach ($data['roles'] as $row)
                            <option  value="{{$row->role_id}}"> {{$row->role_title}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> User & Roles</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon"><i class="la la-expand"></i></a>
                        </li>
                        <li class="m-portlet__nav-item hide">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removeaccount"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Users</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="saveuser" name="role_access[]" value="saveuser" {{in_array("saveuser", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="usaveuser" name="role_access[]" value="usaveuser" {{in_array("usaveuser", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteuser" name="role_access[]" value="deleteuser" {{in_array("deleteuser", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="users" name="role_access[]" value="users" {{in_array("users", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Roles</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="saverole" name="role_access[]" value="saverole" {{in_array("saverole", $data['access']) ?
                        'checked' : ''}}> Add  <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="usaverole" name="role_access[]" value="usaverole" {{(isset($data['access']) ? (in_array("usaverole", $data['access']) ?
                        'checked' : '') : '')}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleterole" name="role_access[]" value="deleterole" {{(isset($data['access']) ? (in_array("deleterole", $data['access']) ?
                        'checked' : '') : '')}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="roles" name="role_access[]" value="roles" {{(isset($data['access']) ? (in_array("roles", $data['access']) ?
                        'checked' : '') : '')}}>View<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="roleaccess|saveroleaccess" name="role_access[]" value="roleaccess|saveroleaccess" {{(isset($data['access']) ? (in_array("roleaccess|saveroleaccess", $data['access']) ?
                        'checked' : '') : '')}}>Role Access<span></span></label> </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm m-portlet--collapse" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> HR Management</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon togglebtn"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removecontact"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="display: none; overflow: hidden; padding-top: 0px; padding-bottom: 0px;">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Employees</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employee|saveemployee" name="role_access[]" value="employee|saveemployee" {{in_array("employee|saveemployee", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employee|usaveemployee" name="role_access[]" value="employee|usaveemployee" {{in_array("employee|usaveemployee", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteemployee" name="role_access[]" value="deleteemployee" {{in_array("deleteemployee", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employees|employeedetail" name="role_access[]" value="employees|employeedetail" {{in_array("employees|employeedetail", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Employee Accident</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employeeaccident|saveemployeeaccident" name="role_access[]" value="employeeaccident|saveemployeeaccident" {{in_array("employeeaccident|saveemployeeaccident", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employeeaccident|usaveemployeeaccident" name="role_access[]" value="employeeaccident|usaveemployeeaccident" {{in_array("employeeaccident|usaveemployeeaccident", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteemployeeaccident" name="role_access[]" value="deleteemployeeaccident" {{in_array("deleteemployeeaccident", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="employeeaccidents" name="role_access[]" value="employeeaccidents" {{in_array("employeeaccidents", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Subcontractor</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="subcontractor|savesubcontractor" name="role_access[]" value="subcontractor|savesubcontractor" {{in_array("subcontractor|savesubcontractor", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="subcontractor|usavesubcontractor" name="role_access[]" value="subcontractor|usavesubcontractor" {{in_array("subcontractor|usavesubcontractor", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deletesubcontractor" name="role_access[]" value="deletesubcontractor" {{in_array("deletesubcontractor", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="subcontractors|subcontractordetail" name="role_access[]" value="subcontractors|subcontractordetail" {{in_array("subcontractors|subcontractordetail", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm m-portlet--collapse" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> Client Management</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon togglebtn"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removecontact"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="display: none; overflow: hidden; padding-top: 0px; padding-bottom: 0px;">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Client</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="client|saveclient" name="role_access[]" value="client|saveclient" {{in_array("client|saveclient", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="client|usaveclient" name="role_access[]" value="client|usaveclient" {{in_array("client|usaveclient", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteclient" name="role_access[]" value="deleteclient" {{in_array("deleteclient", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="clients|clientdetail|filterclients" name="role_access[]" value="clients|clientdetail|filterclients" {{in_array("clients|clientdetail|filterclients", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>

                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="general_info_tab" value="general_info_tab" {{in_array("general_info_tab", $data['access']) ?
                        'checked' : ''}}>General Info Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="primary_tab" value="primary_tab" {{in_array("primary_tab", $data['access']) ?
                        'checked' : ''}}>Primary Contact Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="account_tab" value="account_tab" {{in_array("account_tab", $data['access']) ?
                        'checked' : ''}}>Acccount Contact Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="operations_tab" value="operations_tab" {{in_array("operations_tab", $data['access']) ?
                        'checked' : ''}}>Operations Contact Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="contracts_tab" value="contracts_tab" {{in_array("contracts_tab", $data['access']) ?
                        'checked' : ''}}>Contracts Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="documents_tab" value="documents_tab" {{in_array("documents_tab", $data['access']) ?
                        'checked' : ''}}>Operations Documentation Tab <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" name="role_access[]" data-access="site_tab" value="site_tab" {{in_array("site_tab", $data['access']) ?
                        'checked' : ''}}>Site Tab <span></span></label> </a></li>

                        </ul>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm m-portlet--collapse" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> Asset Management</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon togglebtn"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removecontact"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="display: none; overflow: hidden; padding-top: 0px; padding-bottom: 0px;">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Asset Categories</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="saveassetcategory" name="role_access[]" value="saveassetcategory" {{in_array("saveassetcategory", $data['access']) ?
                        'checked' : ''}}> Add  <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="usaveassetcategory" name="role_access[]" value="usaveassetcategory" {{(isset($data['access']) ? (in_array("usaveassetcategory", $data['access']) ?
                        'checked' : '') : '')}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteassecategory" name="role_access[]" value="deleteassecategory" {{(isset($data['access']) ? (in_array("deleteassecategory", $data['access']) ?
                        'checked' : '') : '')}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="assetcategories" name="role_access[]" value="assetcategories" {{(isset($data['access']) ? (in_array("assetcategories", $data['access']) ?
                        'checked' : '') : '')}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Asset Register</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="asset|saveasset" name="role_access[]" value="asset|saveasset" {{in_array("asset|saveasset", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="asset|usaveasset" name="role_access[]" value="asset|usaveasset" {{in_array("asset|usaveasset", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteasset" name="role_access[]" value="deleteasset" {{in_array("deleteasset", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="assets|assetdetail" name="role_access[]" value="assets|assetdetail" {{in_array("assets|assetdetail", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Asset Transfer</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="transfermodal|savetransfer" name="role_access[]" value="transfermodal|savetransfer" {{in_array("transfermodal|savetransfer", $data['access']) ?
                        'checked' : ''}}>Asset Transfer <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="transfers" name="role_access[]" value="transfers" {{in_array("transfers", $data['access']) ?
                        'checked' : ''}}>View Transfers <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deletetransfer" name="role_access[]" value="deletetransfer" {{in_array("deletetransfer", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm m-portlet--collapse" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> Roster Management</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon togglebtn"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removecontact"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="display: none; overflow: hidden; padding-top: 0px; padding-bottom: 0px;">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Roster</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="balancesheet|getbalancesheet|roster|saveroster|saveshift|updateshift|addshift|deleteshift|shiftaction|copyroster" name="role_access[]" value="balancesheet|getbalancesheet|roster|saveroster|saveshift|updateshift|addshift|deleteshift|shiftaction|copyroster" {{in_array("balancesheet|getbalancesheet|roster|saveroster|saveshift|updateshift|addshift|deleteshift|shiftaction|copyroster", $data['access']) ?
                        'checked' : ''}}>Balance Sheet <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="individualsheet|shiftaction|getindividualsheet|updateshift|updateemployeehours" name="role_access[]" value="individualsheet|shiftaction|getindividualsheet|updateshift|updateemployeehours" {{in_array("individualsheet|shiftaction|getindividualsheet|updateshift|updateemployeehours", $data['access']) ?
                        'checked' : ''}}>Individual Sheet <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="rostersummary|getrostersummary" name="role_access[]" value="rostersummary|getrostersummary" {{in_array("rostersummary|getrostersummary", $data['access']) ?
                        'checked' : ''}}>Summary<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="availabilty|checkavailabilty" name="role_access[]" value="availabilty|checkavailabilty" {{in_array("availabilty|checkavailabilty", $data['access']) ?
                        'checked' : ''}}>Check Availabilty<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="viewrosters" name="role_access[]" value="viewrosters" {{in_array("viewrosters", $data['access']) ?
                        'checked' : ''}}>View Rosters<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deleteroster" name="role_access[]" value="deleteroster" {{in_array("deleteroster", $data['access']) ?
                        'checked' : ''}}>Delete Roster<span></span></label> </a></li>

                        </ul>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
        <div class="m-portlet m-portlet--head-sm m-portlet--collapse" m-portlet="true" id="m_portlet_tools_3">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text"> Settings & Home</h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon togglebtn"><i class="la la-angle-down"></i></a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href="#" m-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon btn-removecontact"><i class="la la-close"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body" style="display: none; overflow: hidden; padding-top: 0px; padding-bottom: 0px;">
                <ul class="treeview">
                    <li>
                        <a href="javascript:void(0)">Sites</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="site|savesite|getsitecontent" name="role_access[]" value="site|savesite|getsitecontent" {{in_array("site|savesite|getsitecontent", $data['access']) ?
                        'checked' : ''}}>Add <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="site|usavesite|getsitecontent" name="role_access[]" value="site|usavesite|getsitecontent" {{in_array("site|usavesite|getsitecontent", $data['access']) ?
                        'checked' : ''}}>Edit <span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="deletesite" name="role_access[]" value="deletesite" {{in_array("deletesite", $data['access']) ?
                        'checked' : ''}}>Delete<span></span></label> </a></li>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="sites" name="role_access[]" value="sites" {{in_array("sites", $data['access']) ?
                        'checked' : ''}}>View<span></span></label> </a></li>
                        </ul>
                    </li>
                    <li>
                    <li>
                        <a href="javascript:void(0)">Home & Trigger</a>
                        <ul>
                            <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="dashboard" name="role_access[]" value="dashboard" {{in_array("dashboard", $data['access']) ?
                        'checked' : ''}}>Dashboard <span></span></label> </a></li>
                         <li><a href="javascript:void(0)"><label class="m-checkbox"><input type="checkbox" data-access="emailreminders|sendreminders" name="role_access[]" value="emailreminders|sendreminders" {{in_array("emailreminders|sendreminders", $data['access']) ?
                        'checked' : ''}}>Email Reminders <span></span></label> </a></li>
                        
                        </ul>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
    </div>
    </form>

        <?php
        $role_id="";
        if($data['role']){
            $role_id=$data['role']->role_id;
        }
        ?>



    <script type="text/javascript">
        $('.menu_item_5').addClass('m-menu__item--active');
        $('.m-userroles').addClass('m-menu__item--open');
        $('.m-access').addClass('m-menu__item--active');
        $(document).ready(function () {
            $('select[name="role_id"]').val(<?=$role_id ?>);

            $('select[name=role_id]').change(function () {
                if ($(this).val() != "") {
                    var href="{{url('/roleaccess')}}/"+ $(this).val();
                    window.location=href;
                }
            });


        });
        var access = "<?=$data['role_access']?>";
        console.log(access);
        var accessList = access.split(',');
        //        var accessList = [];
        //        console.log(accessList);
        var $form = $('#role_access_form');

        for (var i = 0; i < accessList.length; i++) {
            //   var $elem = $("input[data-access*='" + accessList[i] + "']").prop("checked", true);
        }




        $.fn.extend({
            treeview: function () {
                return this.each(function () {
                    // Initialize the top levels;
                    var tree = $(this);

                    tree.addClass('treeview-tree');
                    tree.find('li').each(function () {
                        var stick = $(this);
                    });
                    tree.find('li').has("ul").each(function () {
                        var branch = $(this); //li with children ul

                        branch.prepend("<i class='tree-indicator fa fa-arrow-right'></i>");
                        branch.addClass('tree-branch');
                        branch.on('click', function (e) {
                            if (this == e.target) {
                                var icon = $(this).children('i:first');

                                icon.toggleClass("fa fa-arrow-down fa fa-arrow-right");
                                $(this).children().children().toggle();
                            }
                        })
                        branch.children().children().toggle();

                        /**
                         *	The following snippet of code enables the treeview to
                         *	function when a button, indicator or anchor is clicked.
                         *
                         *	It also prevents the default function of an anchor and
                         *	a button from firing.
                         */
                        branch.children('.tree-indicator, button, a').click(function (e) {
                            branch.click();

                            e.preventDefault();
                        });
                    });
                });
            }
        });
        var cbCount = 0;
        $('.treeview').treeview();


        $('.treeview input[type=checkbox]').each(function () {
            $(this).attr('data-index', cbCount++);

            var className = $(this).data('index') + "hidden";
            var $form = $('#role_access_form');

            if (this.checked) {

                var funcs = $(this).data('access').split('|');
                for (var i = 0, l = funcs.length; i < l; ++i) {
                    $form.append('<input type="hidden" name="access[]" value="' + funcs[i] + '" class="' + className + '">');
                }

            }
            else {
                $('.' + className).remove();
            }

        });

        $(document).on('change', '.treeview input[type=checkbox]', function () {

            var className = $(this).data('index') + "hidden";
            var $form = $('#role_access_form');

            if (this.checked) {

                var funcs = $(this).data('access').split('|');
                for (var i = 0, l = funcs.length; i < l; ++i) {
                    $form.append('<input type="hidden" name="access[]" value="'+funcs[i]+'" class="'+className+'">');
                }

            }
            else {
                $('.' + className).remove();
            }

        });





    </script>

@endsection