<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 21/09/15
 * Time: 16:32
 */
?>

<span class="anchor" id="footer"></span>
<div style="clear:both;"></div>
<footer class="row-fluid footer">
    <div class="container-fluid" style="">
        <div class="row-fluid">
            <div class="col-md-12">
                <h1>Contact</h1>
            </div>
            <div class="col-md-3 col-md-offset-1 col-xs-12">
                <p class="col-md-12">Retrouvez-moi sur...</p>
                <ul class="social-icon col-md-12 col-xs-12">
                    <li>
                        <a class="btn btn-social-icon btn-lg" href="https://fr.linkedin.com/pub/olivier-marin/a6/706/328">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-social-icon btn-lg" href="https://github.com/MarinOlivier">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-social-icon btn-lg" href="https://twitter.com/olivierMARNI">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-md-offset-1 col-xs-12">
                <p class="col-md-12" style="text-align: right">
                    ... ou par e-mail
                </p>
                <?php $attributes = array("class" => "form-horizontal col-md-12 col-xs-12");
                echo form_open("", $attributes);?>
                <fieldset>
                    <!--<legend>Contact Form</legend>-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="name" class="control-label"></label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" id="name" name="name" placeholder="Nom *" type="text" value="<?php echo set_value('name'); ?>" onkeypress="button()" />
                            <span class="text-danger"><?php echo form_error('name'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email" class="control-label"></label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" id="reply_email" name="email" placeholder="Adresse e-mail *" type="text" value="<?php echo set_value('email'); ?>" onkeypress="button()"/>
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="subject" class="control-label"></label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" name="subject" placeholder="Objet" type="text" value="<?php echo set_value('subject'); ?>" />
                            <span class="text-danger"><?php echo form_error('subject'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="message" class="control-label"></label>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="content" name="message" rows="4" placeholder="Message *"  onkeypress="button()"><?php echo set_value('message'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('message'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="send_btn" name="submit" type="submit" class="btn btn-block btn-perso" disabled="disabled" value="Envoyer" />
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="nop col-md-12 col-xs-12"></div>
        <div class="nop col-md-12 col-xs-12"></div>
    </div>
    <div class="row-fluid">
        <div class="col-md-12 col-xs-12" id="copyright">
            <p style="margin-bottom: 0">Copyright Olivier Marin &copy;</p>
        </div>
    </div>

</footer>

