<?php
/* Template Name: Contact*/
get_header();
?>
<div class="container contact">
    <div class="row contact-intro below-header">
        <div class="twelve columns">
            <?php
                if(have_posts()) :
                    while (have_posts()) : the_post(); ?>


            <h2><?php the_content();?></h2>

                <?php
                    endwhile;

                else :
                    echo "No content available!";

                endif;

            ?>
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            <?php dynamic_sidebar('Contact 1'); ?>
        </div>
        <div class="six columns">
            <?php dynamic_sidebar('Contact 2'); ?>
        </div>
    </div>
    <div class="row">
        <div class="six columns map">
            <?php dynamic_sidebar('FooterMap'); ?>
        </div>
        <div class="six columns">
            <h3>Kontakta oss gärna!</h3>
            <?php
            if(isset($_POST['submit'])) { $flag=1; if($_POST['yourname']=='') { $flag=0; echo "Skriv in ditt namn<br>"; }
            else if(!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/',$_POST['yourname'])) { $flag=0; echo "Skriv in ett giltigt namn<br>"; } if($_POST['email']=='') { $flag=0; echo "Skriv in din e-mail<br>"; }
            else if(!preg_match("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})^", $_POST['email'])) { $flag=0; echo "Skriv in en giltig e-mail<br>";}
            if($_POST['subject']=='') { $flag=0; echo "Skriv in ett ämne<br>"; }
            if($_POST['message']=='') { $flag=0; echo "Skriv ett meddelande"; }
            if ( empty($_POST) ) { print 'Tyvärr gick ditt meddelande inte att skicka.'; exit; }
            else {
                if($flag==1) {wp_mail(get_option("admin_email"),trim($_POST[yourname])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[message])),"From: ".trim($_POST[yourname])." <".trim($_POST[email]).">rnReply-To:".trim($_POST[email])); echo "Ditt meddelande har skickats!"; } } } ?>


                <form method="post" id="contactus_form"> <label>Namn:</label><input type="text" name="yourname" id="yourname" rows="1" value="">
                    <label>E-post:</label><input type="text" name="email" id="email" rows="1" value="">
                    <label>Ämne:</label><input type="text" name="subject" id="subject" rows="1" value="">
                    <label>Meddelande:</label><textarea name="message" id="message"></textarea><br>
                    <input type="submit" name="submit" id="submit" value="Skicka">
                </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
