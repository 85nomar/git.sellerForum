<?php require('inc/layout.php');

$Layout->title = 'Seller API page';

$Layout->start(); ?>


    <div id="content" class="container">

                <h1>Solicitation</h1>


        <form class="form-horizontal">
            <div class="row-fluid">
                <fieldset class="boxed span6">
                    <!-- Form Name -->
                    <h4>What is your purpose?</h4>

                    <!-- Multiple Radios -->
                    <div class="control-group">
                      <label class="control-label" for="radios">Multiple Radios</label>
                      <div class="controls">
                        <label class="radio" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="Option one" checked="checked">
                          Option one
                        </label>
                        <label class="radio" for="radios-1">
                          <input type="radio" name="radios" id="radios-1" value="Option two">
                          Option two
                        </label>
                        <label class="radio" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="Option three" checked="checked">
                          Option three
                        </label>
                      </div>
                    </div>
                </fieldset>
                <!-- Text input-->
                <fieldset class="boxed span6">
                    <h4>ricardo.ch Account</h4>
                    <div class="control-group">
                      <label class="control-label" for="textinput">username</label>
                      <div class="controls">
                        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="input-xlarge">
                      </div>
                    </div>
                </fieldset>
            </div>
            <div class="boxed">
                <fieldset class="row-fluid">
                    <h4>personal Information</h4>
                    <div class="control-group span5">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group span5">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group span5">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group span5">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="form-btns container-fluid pull-right">
              <button type="button" class="btn">Cancel</button>
              <button type="submit" class="btn btn-primary">submit form</button>

            </div>
        </form>


    </div><!-- close content -->
</div><!-- close wrap -->

<?php $Layout->end(); ?>