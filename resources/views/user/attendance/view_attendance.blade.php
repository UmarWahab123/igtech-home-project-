  <table class="table table-striped- table-bordered table-hover table-checkable dynamic-table">
    <thead class="theme-color">
        <th>Sr</th>
        <th>Type</th>
        <th>From</th>
        <th>To</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($attendance as $key=>$row)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{isset($row->type->type) ? $row->type->type : ''}}</td>
            <td>{{format_date($row->from)}}</td>
            <td>{{format_date($row->to)}}</td>
            <td>
                @php echo delete_link(url('/deleteattendance/'.$row->id)); @endphp
                <a data-id="<?=$row->id?>" href="#" class="btn btn-outline-warning m-btn m-btn--icon m-btn--icon-only m-btn--outline-1x m-btn--pill m-btn--air btn-edit btn-attendance" data-skin="dark" data-tooltip="m-tooltip" data-placement="top" title="" data-original-title="Edit" aria-describedby="tooltip756341">
                   <i class="fa fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    jqDatatable();
</script>
