<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
	<meta charset="utf-8">
	<title>Welcome to FluidLearn</title>
        <link rel="stylesheet" type="text/css" href="foundation/css/foundation.css"/>
    </head>
    <body>

        <div id="container">
            <div class="panel callout">
                <h1>FluidLearn</h1>
            </div>
            
            <?php
            if(isset($this->correct_value) && $this->correct_value==TRUE) echo " Valori NON permessi : ! # $ % & ' * + - / = ? ^ _ ` { | } ~ @ . [ ] < >";
            echo validation_errors();?>
            <?php echo form_open('GUI_Controller')?>
                <fieldset class="small-4 small-offset-4">
                    <label class="label round secondary sub-nav subheader">Username</label><input name="username" type="text" value="<?php echo set_value('username')?>"></input><br/>
                    <label class="label round secondary sub-nav subheader">Password</label><input name="password" type="password" value="<?php echo set_value('password')?>"></input><br/>
                    <button class="medium small-offset-9" type="submit">Submit !</button>

                </fieldset>
                
            <?php echo form_close()?>
            
	
        </div>

    </body>
</html>