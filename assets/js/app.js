(function($){
    $(document).on('change', '.questions .form-check-input', function(){
        var qid = $(this).attr('qid');

        console.log('qid:', qid);
        if($(this).prop('checked')){
            $('#qa_form .qa-wrap[qid="' + qid + '"]').show();
        }
        else{
            $('#qa_form .qa-wrap[qid="' + qid + '"]').hide();
        }
    })

    function goQuestionSelectPage(){
        $('#btn_prev').hide();
        $('#btn_next').show();
        $('#btn_print').hide();

        $('.questions-select-page').show();
        $('.qa-page').hide();
    }

    $(document).on('click', '#btn_prev', function(){
        goQuestionSelectPage();
    })

    function goQAPage(){
        $('#btn_prev').show();
        $('#btn_next').hide();
        $('#btn_print').show();
        
        $('.questions-select-page').hide();
        $('.qa-page').show();
    }

    $(document).on('click', '#btn_next', function(){
        goQAPage();
    })

    $(document).on('click', '#btn_print', function(){
        var qas = $('#qa_form .qa-wrap');
        var qatype = $('#qa_form').attr('qatype');
        var isError = false;
        var formData = {};
        for(var index = 0; index < qas.length; index++){
            var qid = $(qas[index]).attr('qid');
            if($(qas[index]).is(":visible") && $(qas[index]).find('.form-control').val() == ''){
                $(qas[index]).addClass('error');
                isError = true;
            } 
            else if($(qas[index]).is(":visible") && $(qas[index]).find('.form-control').val() != ''){
                $(qas[index]).removeClass('error');
                formData[qid] = $(qas[index]).find('.form-control').val();
            } 
            else{
                $(qas[index]).removeClass('error');
            }
        }

        if(isError){
            return;
        }

        $.ajax({
            url: 'api-print-trade',
            type: 'post',
            data: {
                qa: formData,
                qatype: qatype
            },
            success: function(resp){
                resp = JSON.parse(resp);
                if(resp.success){
                    window.open(resp.path);
                }
            }
        })
    })
})(jQuery)