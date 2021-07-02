// var DropzoneDemo={init:function(){Dropzone.options.mDropzoneOne={paramName:"file",maxFiles:1,maxFilesize:5,addRemoveLinks:!0,accept:function(e,o){"justinbieber.jpg"==e.name?o("Naha, you don't."):o()}},Dropzone.options.mDropzoneTwo={paramName:"file",maxFiles:10,maxFilesize:10,addRemoveLinks:!0,accept:function(e,o){"justinbieber.jpg"==e.name?o("Naha, you don't."):o()}},Dropzone.options.mDropzoneThree={paramName:"file",maxFiles:10,maxFilesize:10,addRemoveLinks:!0,acceptedFiles:"image/*,application/pdf,.psd",accept:function(e,o){"justinbieber.jpg"==e.name?o("Naha, you don't."):o()}}}};DropzoneDemo.init();
function removeImg(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
var DropzoneDemoLot= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.mDropzoneLot= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                addRemoveLinks:!0,
                // renameFilename: function (filename) {
                //     return new Date().getTime() + '_' + filename;
                // },
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = serverFileName;
                    // console.log(fileListinput);
                    i++;
                    $('input[name="images"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/lots/lot images/";
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
                            //url: document.location.origin+"/64_HorseAuction/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('input[name="images"]').val(JSON.stringify(fileListinput));
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
function JS_ClearDropZone() {
    //DropZone Object Get
    
}
var media= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.media= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".jpg,.jpeg,.png",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // console.log('sdf',$(this)[i].element.attributes.path.nodeValue);

                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/property/media/"+serverFileName;
                    $('input[name="media"]').val(fileListinput[i]);
                    i++;

                },
                 complete:function(file, serverFileName) {
                // JS_ClearDropZone();

                },
                removedfile:function(file) {
                    var path ="/public/uploads/property/media/";
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
                             //url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                // $('input[name="vetanaryDocs"]').val(JSON.stringify(fileListinput));
                                $('input[name="media"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
          
        }
    }
    ;
        var address= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.address= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/property/landlord/address/'+serverFileName;
                    i++;
                    $('.address_id').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/property/landlord/address/";
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
                             //url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('.address_id').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;


    var agency= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.agency= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/property/landlord/agency/'+serverFileName;
                    i++;
                    $('.agency_tcs').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/property/landlord/agency/";
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
                                // $('input[name="vetanaryDocs"]').val(JSON.stringify(fileListinput));
                                $('.agency_tcs').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
        var bank= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.bank= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/property/landlord/bank/'+serverFileName;
                    i++;
                    $('.bank_stat').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/property/landlord/bank/";
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
                                $('.bank_stat').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
        var photo= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.photo= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/property/landlord/photo/'+serverFileName;
                    i++;
                    $('.photo_id').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/property/landlord/photo/";
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
                             //url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                // $('input[name="vetanaryDocs"]').val(JSON.stringify(fileListinput));
                                $('.photo_id').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;

    var userdoc= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.userdoc= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/user/doc/'+serverFileName;
                    i++;
                    $('input[name="doc"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/user/doc/";
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
                            // url: document.location.origin+"/wiz/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('input[name="doc"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;

        var deposit= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.deposit= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/customer/buyer/deposit/'+serverFileName;
                    i++;
                    $('input[name="deposit_proof"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/customer/buyer/deposit/";
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
                             //url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                // $('input[name="vetanaryDocs"]').val(JSON.stringify(fileListinput));
                                $('input[name="deposit_proof"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
        var aip= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.aip= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/customer/buyer/aip/'+serverFileName;
                    i++;
                    $('input[name="aip"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/customer/buyer/aip/";
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
                                // $('input[name="vetanaryDocs"]').val(JSON.stringify(fileListinput));
                                $('input[name="aip"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
     var meeting= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.meeting= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/client/meeting/'+serverFileName;
                    i++;
                    $('input[name="meeting_document"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/client/meeting/";
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
                                $('input[name="meeting_document"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
     var operational= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.operational= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/client/operational/'+serverFileName;
                    i++;
                    $('input[name="operational_document"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/client/operational/";
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
                                $('input[name="operational_document"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;  
     var contracts= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.contracts= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/client/contracts/'+serverFileName;
                    i++;
                    $(this).parents('.contract-row').find('.contract_document').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/client/contracts/";
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
                                $('.contract_document').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;

var mDropzonedp= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.mDropzonedp= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:10,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/employee/profile/'+serverFileName;
                    console.log(fileListinput);
                    i++;
                    $('input[name="dp"]').val(fileListinput);
                },
                removedfile:function(file) {
                    var path="public/uploads/employee/profile/";
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
                            //url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('input[name="dp"]').val(fileListinput);
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    };


var assetpics= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.assetpics= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".jpg,.png,.jpeg",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/asset/pics/'+serverFileName;
                    i++;
                    $('input[name="pics"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/asset/pics/";
                    var rmvFile = "";
                    for(f=0;f<fileList.length;f++){
                        if(fileList[f].fileName == file.name)
                        {
                            rmvFile = fileList[f].serverFileName;
                        }
                    }
                    if (rmvFile){
                        $.ajax({
                            // url: document.location.origin+"/delete_temp_files.php",
                            url: document.location.origin+"/ozland/delete_temp_files.php",
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('input[name="pics"]').val(JSON.stringify(fileListinput));
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
var assetdocuments= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.assetdocuments= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/asset/documents/'+serverFileName;
                    i++;
                    $('input[name="documents"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/asset/documents/";
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
                                $('input[name="documents"]').val(JSON.stringify(fileListinput));
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
var resume= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.resume= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/employee/resume/'+serverFileName;
                    i++;
                    $('input[name="resume"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/employee/resume/";
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
                                $('input[name="resume"]').val(JSON.stringify(fileListinput));
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;
var coverletter= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.coverletter= {
                paramName:"file",
                maxFiles:20,
                maxFilesize:20,
                acceptedFiles:".docx,.pdf",
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = 'public/uploads/employee/coverletter/'+serverFileName;
                    i++;
                    $('input[name="cover_letter"]').val(JSON.stringify(fileListinput));
                },
                removedfile:function(file) {
                    var path="/public/uploads/employee/converletter/";
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
                                $('input[name="cover_letter"]').val(JSON.stringify(fileListinput));
                                $(document).find(file.previewElement).remove();
                                i--;
                            }
                        });
                    }
                },
            }
        }
    }
    ;

DropzoneDemoLot.init();
mDropzonedp.init();
media.init();
address.init();
photo.init();
bank.init();
agency.init();
userdoc.init();
deposit.init();
aip.init();
meeting.init();
operational.init();
contracts.init();
assetpics.init();
assetdocuments.init();
resume.init();
coverletter.init();
