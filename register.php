<?php require('inc/layout.php');

$Layout->title = 'registration';

$Layout->start(); ?>


    <div id="content" class="container">

                <h1>Solicitation</h1>


        <form class="form-horizontal">
            <div class="row">
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
                        <label class="radio" for="radios-0">
                          <input type="radio" name="radios" id="radios-0" value="Option three" checked="checked">
                          other
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
            <div class="row">
              <div class="boxed span12">
                  <fieldset>
                      <h4>personal Information</h4>
                      <div class="row-fluid">
                        
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">First name</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Last name</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>

                      </div>
                      <div class="row-fluid">

                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Company</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">legal entity</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>         

                      </div>
                      <div class="row-fluid">

                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">number of employees</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">website URL</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                      </div>

                      </div>
                      <div class="row-fluid">
                        
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Quantity of assortment</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Yearly turnover in CHF</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        
                      </div>
                  </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="boxed span12">
                  <fieldset>
                      <h4>Contact</h4>
                      <div class="row-fluid">
                        
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Quantity of assortment</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="control-group span6">
                            <label class="control-label" for="inputEmail">Yearly turnover in CHF</label>
                            <div class="controls">
                              <input type="text" id="inputEmail" placeholder="placeholder">
                            </div>
                        </div>
                        
                      </div>
                  </fieldset>
              </div> 
          </div>

          <div class="row">
            <div class="form-btns span12 text-right">
              <button type="button" class="btn">Cancel</button>
              <button type="submit" class="btn btn-primary">submit form</button>
            </div>
          </div>
        </form>


    </div><!-- close content -->
</div><!-- close wrap -->

<?php $Layout->end(); ?>