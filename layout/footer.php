<?php
$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;
$hasfeedback= (empty($PAGE->theme->settings->feedback)) ? false : $PAGE->theme->settings->feedback;
?>
<footer id="page-footer">
<<<<<<< HEAD

=======
    
>>>>>>> e95f554104d20864aa70003845545ad38399c303
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6 right-column">
<<<<<<< HEAD
                <div id="logo" class="site-logo brand">
                    <a title="<?php echo $SITE->fullname; ?>" href="<?php echo $CFG->wwwroot; ?>" class=""><img src="<?php echo $OUTPUT->image_url('logoutb', 'theme') ?>" role="presentation" alt="Universidad Tecnológica de Bolívar"></a>
=======
                <div id="logo" class="site-logo brand"> 
                    <a title="<?php echo $SITE->fullname; ?>" href="<?php echo $CFG->wwwroot; ?>" class=""><img src="<?php echo $OUTPUT->pix_url('logoutb', 'theme') ?>" role="presentation" alt="Universidad Tecnológica de Bolívar"></a>
>>>>>>> e95f554104d20864aa70003845545ad38399c303
                </div>
                <div id="name-and-slogan">
                    <a title="<?php echo $SITE->fullname; ?>" href="<?php echo $CFG->wwwroot; ?>" class=""><?php echo $SITE->fullname; ?></a>
                </div>
                <div class="clearfix"></div>
            </div>
<<<<<<< HEAD

=======
            
>>>>>>> e95f554104d20864aa70003845545ad38399c303
            <div class="span6 left-column">
                <?php if ($hascopyright): ?>
                    <p class="copy">&copy; Copyright <?php echo date("Y") ?> by <?php echo $hascopyright ?> </p>
                <?php endif ?>
<<<<<<< HEAD

                <?php if ($hasfootnote): ?>
                    <div class="footnote"><?php echo $hasfootnote ?></div>
                <?php endif ?>

=======
		
                <?php if ($hasfootnote): ?>
                    <div class="footnote"><?php echo $hasfootnote ?></div>
                <?php endif ?>
   			
>>>>>>> e95f554104d20864aa70003845545ad38399c303
                <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
                <?php echo $OUTPUT->login_info(); ?>
                <?php echo $OUTPUT->home_link(); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="post-footer">
<<<<<<< HEAD
        <?php echo $OUTPUT->standard_footer_html(); ?>
    </div>

=======
        <?php echo $OUTPUT->standard_footer_html(); ?>  
    </div>
        
>>>>>>> e95f554104d20864aa70003845545ad38399c303
</footer>

<?php if($hasfeedback): ?>
    <div id="feedback_wrap">
        <div class="feedback_buttom">
            <a class="" href="javascript:void(0);">Feedback</a>
        </div>
        <div class="feedback_form">
<<<<<<< HEAD

=======
            
>>>>>>> e95f554104d20864aa70003845545ad38399c303
        </div>
    </div>
<?php endif; ?>

<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> e95f554104d20864aa70003845545ad38399c303

$hasnotifications= (empty($PAGE->theme->settings->notifications)) ? false : $PAGE->theme->settings->notifications;
if($hasnotifications){
    $timenotifacation = (empty($PAGE->theme->settings->notifications_time)) ? 60000 : $PAGE->theme->settings->notifications_time;
    if(!is_number($timenotifacation) ){
        $timenotifacation = 60000;
    }
    saviotheme_init_notifications($timenotifacation);
}
<<<<<<< HEAD
=======



>>>>>>> e95f554104d20864aa70003845545ad38399c303
