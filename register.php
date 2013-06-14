<?php require('inc/layout.php');

$Layout->title = 'registration';

$Layout->start(); ?>


    <div id="content" class="container-fluid">
      <div class="container">

        <h1>API Registration</h1>
        <form class="form-horizontal">
            <div class="row">
                <fieldset class="boxed span6">
                    <!-- Form Name -->
                    <h4>What is your purpose?</h4>

                    <!-- Multiple Radios -->
                    <div class="control-group">
                      <label class="control-label" for="radios">Multiple Radios</label>
                      <div class="controls">
                        <label class="radio"><input id="rdb1" type="radio" name="toggler" value="1"   checked="checked" />FORM 1</label>
                        <label class="radio"><input id="rdb2" type="radio" name="toggler" value="2" />FORM 2</label>
                        <label class="radio"><input id="rdb3" type="radio" name="toggler" value="3" />FORM 3</label>
                        <label class="radio"><input id="rdb4" type="radio" name="toggler" value="4" />FORM 4</label>
                      </div>
                    </div>
                </fieldset>
                <!-- Text input-->
                <fieldset class="boxed span6">
                    <h4>ricardo.ch Account</h4>
                    <div class="control-group">
                      <label class="control-label" for="textinput">username</label>
                      <div class="controls">
                        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="input-large">
                        <p><a href="" target="_blank">forgot username</a> or <a href="" target="_blank">register</a></p>
                      </div>
                    </div>
                </fieldset>
            </div>
            <div class="row">
              <div class="boxed span12">
                  
                  <!--FORM 1 -->
                  <fieldset Id="blk-1" class="toHide">
                      <h4>personal Information FORM 1</h4>
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


                  <!--FORM 2 -->
                  <fieldset Id="blk-2" class="toHide" style="display:none">
                      <h4>personal Information FORM 2</h4>
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



                  <!--FORM 3 -->
                  <fieldset Id="blk-3" class="toHide" style="display:none">
                      <h4>personal Information FORM 3</h4>
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

                  <!--FORM 4 -->
                  <fieldset Id="blk-4" class="toHide" style="display:none">
                      <h4>personal Information FORM 4</h4>
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


    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>