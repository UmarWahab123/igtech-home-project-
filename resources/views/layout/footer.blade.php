   <footer class="m-grid__item  m-footer ">
                <div class="m-container m-container--fluid m-container--full-height m-page__container">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                            <div class="text-center">
                                 <span class="m-footer__copyright">
                                {{date('Y')}} &copy;  <a href="#" class="m-link"> Personality Path </a>
                            </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </footer>
<script>
    $('select[data-option-id]').each(function () {
            $(this).val($(this).data('option-id'));
        });




    $(document).ready(function () {
        $('.btn_print').on('click',function(){
            print();
        });

        $(function ()
        {
            $('[data-tooltip="m-tooltip"]').tooltip()
        });
        $(document).on('click','.unlink_file',function(){
            var path=$(this).attr('data-img');
            var token = $('input[name="_token"]').val();
            $(this).parents('.file_div').remove();
            $.ajax({
                type:"post",
                headers: {'X-CSRF-TOKEN': token},
                url: "{{url('/removeimg') }}",
                data:{'path':path},
                success: function(data){
                }
            });
        });

    $(".select2").select2( {
            placeholder: "Select"
        });
     var myStack = {"dir1":"down", "dir2":"right", "push":"top"};
       <?php  if(Session::has('message')):  ?>
        <?php $message = Session::get('message');?>
       <?php  if($message['title'] == 'Error'): ?>
    new PNotify({
        title: '<?=$message['title']?>',
        text: '<?=$message['text']?>',
        type:'error',
        addclass: "stack-custom",
        stack: myStack
});
   <?php else: ?>
    new PNotify({
        title: '<?=$message['title']?>',
        text: '<?=$message['text']?>',
        type: 'success',
        addclass: "stack-custom",
        stack: myStack
});
     <?php
      endif; 
     Session::forget('message'); 
    endif; 
    ?>
    });
</script>
</body>
</html>