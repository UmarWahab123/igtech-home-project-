 $(document).ready(function() {
 	  $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    }); 
     $('#confirm-general').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
$('.main-loader').addClass('hide');
$('.page-content').removeClass('hide');
     jqDatatable('dynamic-table');
     jqDatatable2('dynamic-table2');
 });
 function jqDatatable(tableclass) {
     $("."+tableclass).DataTable( {
             // responsive:!0, dom:"<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
         buttons:["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"], columnDefs:[ {

             },

             ],
             exportOptions: {
                 columns: ':not(:last-child)'
             }
         }
     ),
         $("#export_print").on("click", function(e) {
                 e.preventDefault(), t.button(0).trigger()
             }
         ),
         $("#export_copy").on("click", function(e) {
                 e.preventDefault(), t.button(1).trigger()
             }
         ),
         $("#export_excel").on("click", function(e) {
                 e.preventDefault(), t.button(2).trigger()
             }
         ),
         $("#export_csv").on("click", function(e) {
                 e.preventDefault(), t.button(3).trigger()
             }
         ),
         $("#export_pdf").on("click", function(e) {
                 e.preventDefault(), t.button(4).trigger()
             }
         )
     ;
 }
 function jqDatatable2(tableclass) {
    $("."+tableclass).DataTable( {
            responsive:!0, dom:"<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>\n\t\t\t<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
        buttons:["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"], columnDefs:[ {

            },

            ],
            exportOptions: {
                columns: ':not(:last-child)'
            }
        }
    ),
        $("#export_print").on("click", function(e) {
                e.preventDefault(), t.button(0).trigger()
            }
        ),
        $("#export_copy").on("click", function(e) {
                e.preventDefault(), t.button(1).trigger()
            }
        ),
        $("#export_excel").on("click", function(e) {
                e.preventDefault(), t.button(2).trigger()
            }
        ),
        $("#export_csv").on("click", function(e) {
                e.preventDefault(), t.button(3).trigger()
            }
        ),
        $("#export_pdf").on("click", function(e) {
                e.preventDefault(), t.button(4).trigger()
            }
        )
    ;
}

 function datepickerfun() {
     $(".m_datepicker").datepicker({
         todayHighlight: !0,
         // format: 'dd-mm-yyyy',
         format: 'mm-dd-yyyy',
         templates: {
             leftArrow: '<i class="la la-angle-left"></i>',
             rightArrow: '<i class="la la-angle-right"></i>'
         }
     });
 }
 
 function selectoption() {
     $('select[data-option-id]').each(function () {
         $(this).val($(this).data('option-id'));
     });
 }

 function errormsg(msg) {
     var myStack = {"dir1":"down", "dir2":"right", "push":"top"};
     new PNotify({
         title: 'Error',
         text: msg,
         type:'error',
         addclass: "stack-custom",
         stack: myStack
     });
 }
 function successmsg(msg) {
     var myStack = {"dir1":"down", "dir2":"right", "push":"top"};
     new PNotify({
         title: 'Success',
         text: msg,
         type:'success',
         addclass: "stack-custom",
         stack: myStack
     });
 }

 function dropzonefunc(id,filesize,allowedfiles,inputname,filepath) {
     // alert(filepath);
     var fileList = new Array;
     var fileListinput = new Array;
     var i =0;
     var sitedoc=   new Dropzone(id, {
             paramName:"file",
             maxFiles:filesize,
             maxFilesize:filesize,
             acceptedFiles:allowedfiles,
             addRemoveLinks:!0,
              timeout:3600000,
             accept:function(e, o) {
                 "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
             },
             success:function(file, serverFileName) {
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                 fileListinput[i] =filepath+serverFileName;
                 i++;
                 $('input[name='+inputname+']').val(JSON.stringify(fileListinput));
             },
             removedfile:function(file) {
                 var path="/"+filepath;
                 var rmvFile = "";
                 for(f=0;f<fileList.length;f++){
                     if(fileList[f].fileName == file.name)
                     {
                         rmvFile = fileList[f].serverFileName;
                     }
                 }
                 if (rmvFile){
                     $.ajax({
                         url: document.location.origin+"/delete_temp_files.php",
                        // url: document.location.origin+"/ozland/delete_temp_files.php",
                         type: "POST",
                         data: { "fileList" : rmvFile,"path":path },
                         success: function(data) {
                             removeImg(fileListinput, rmvFile);
                             $('input[name='+inputname+']').val(JSON.stringify(fileListinput));
                             $(document).find(file.previewElement).remove();
                             i--;
                         }
                     });
                 }
             },


         })
         ;
 }