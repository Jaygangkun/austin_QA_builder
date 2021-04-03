
<h2 class=""><?php echo $title?></h2>
<div class="questions-select-page">
    <div class="questions">
        <?php
        foreach($questions as $key => $question){
            ?>
            <div class="question-wrap">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="q_<?php echo $key ?>" qid="<?php echo $key ?>">
                    <label class="form-check-label" for="q_<?php echo $key ?>"><?php echo $question['text']?></label>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<div class="qa-page" style="display: none">
    <form id="qa_form" qatype="<?php echo $qatype ?>">
        <?php
        foreach($questions as $key => $question){
            ?>
            <div class="qa-wrap" qid="<?php echo $key ?>" style="display: none">
                <div class="form-group">
                    <label for="qa-<?php echo $key?>"><?php echo $question['text']?></label>
                    <?php
                    if(isset($question['type']) && $question['type'] == 'textarea'){
                        ?>
                        <textarea class="form-control" id="qa-<?php echo $key?>" rows="3"></textarea>
                        <?php
                    }
                    else{
                        ?>
                        <input type="text" class="form-control" id="qa-<?php echo $key?>" aria-describedby="" placeholder="">
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </form>
</div>

<div class="btns-wrap">
    <span class="btn btn-main" id="btn_prev" style="display: none">Prev</span>
    <span class="btn btn-main" id="btn_next">Next</span>
    <span class="btn btn-main" id="btn_print" style="display: none">Generate</span>
</div>
