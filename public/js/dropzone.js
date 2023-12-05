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
var projectdoc= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.projectdoc= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput = "public/uploads/projectdoc/"+serverFileName;
                    $('input[name="file"]').val(fileListinput);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/projectdoc/";
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
                            type: "POST",
                            data: { "fileList" : rmvFile,"path":path },
                            success: function(data) {
                                removeImg(fileListinput, rmvFile);
                                $('input[name="file"]').val(JSON.stringify(fileListinput));
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

var members= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.certificate= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/membersprofile/"+serverFileName;
                    $('input[name="profile"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/membersprofile/";
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
                                $('input[name="profile"]').val(JSON.stringify(fileListinput));
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

var siafront= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.siafront= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/siafront/"+serverFileName;
                    $('input[name="sia_front"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/siafront/";
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
                                $('input[name="sia_front"]').val(JSON.stringify(fileListinput));
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

var siaback= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.siaback= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/siaback/"+serverFileName;
                    $('input[name="sia_back"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/siaback/";
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
                                $('input[name="sia_back"]').val(JSON.stringify(fileListinput));
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
var proofaddress1= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.proofaddress1= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/proofaddress1/"+serverFileName;
                    $('input[name="proof_address1"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/proofaddress1/";
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
                                $('input[name="proof_address1"]').val(JSON.stringify(fileListinput));
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

var proofaddress2= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.proofaddress2= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/proofaddress2/"+serverFileName;
                    $('input[name="proof_address2"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/proofaddress2/";
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
                                $('input[name="proof_address2"]').val(JSON.stringify(fileListinput));
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

var passportfront= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.passportfront= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/passportfront/"+serverFileName;
                    $('input[name="passport_front"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/passportfront/";
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
                                $('input[name="passport_front"]').val(JSON.stringify(fileListinput));
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

var passportback= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.passportback= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/passportback/"+serverFileName;
                    $('input[name="passport_back"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/passportback/";
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
                                $('input[name="passport_back"]').val(JSON.stringify(fileListinput));
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

var otherdocument= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.otherdocument= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/otherdocument/"+serverFileName;
                    $('input[name="other_document"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/otherdocument/";
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
                                $('input[name="other_document"]').val(JSON.stringify(fileListinput));
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

var passportsizepicture= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.passportsizepicture= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/passportsizepicture/"+serverFileName;
                    $('input[name="passport_sizepicture"]').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/passportsizepicture/";
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
                                $('input[name="passport_sizepicture"]').val(JSON.stringify(fileListinput));
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

var criminal4= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.criminal4= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/criminal/"+serverFileName;
                    $('.criminal4').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/criminal/";
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
                                $('.criminal4').val(JSON.stringify(fileListinput));
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
var criminal1= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.criminal1= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/criminal/"+serverFileName;
                    $('.criminal1').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/criminal/";
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
                                $('.criminal1').val(JSON.stringify(fileListinput));
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
var criminal2= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.criminal2= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/criminal/"+serverFileName;
                    $('.criminal2').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/criminal/";
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
                                $('.criminal2').val(JSON.stringify(fileListinput));
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
var criminal3= {
        init:function() {
            var fileList = new Array;
            var fileListinput = new Array;
            var i =0;
            Dropzone.options.criminal3= {
                paramName:"file",
                maxFiles:1,
                maxFilesize:20,
                addRemoveLinks:!0,
                accept:function(e, o) {
                    "justinbieber.jpg"==e.name?o("Naha, you don't."): o()
                },
                success:function(file, serverFileName) {
                    // alert('asdf');
                    // $('input[name="image"]').val(JSON.stringify(fileListinput));
                 fileList[i] = {"serverFileName" : serverFileName, "fileName" : file.name,"fileId" : i };
                    fileListinput[i] = "public/uploads/criminal/"+serverFileName;
                    $('.criminal3').val(fileListinput[i]);
                    i++;
                },
                removedfile:function(file) {
                    var path="/public/uploads/criminal/";
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
                                $('.criminal3').val(JSON.stringify(fileListinput));
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







projectdoc.init();
members.init();
siafront.init();
siaback.init();
proofaddress1.init();
proofaddress2.init();
passportfront.init();
passportback.init();
otherdocument.init();
passportsizepicture.init();
criminal4.init();
criminal1.init();
criminal2.init();
criminal3.init();
media.init();
