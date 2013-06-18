<?php ?>

<!--FORM 1 -->
<fieldset>

  <div class="boxed">
    <h4>personal Information FORM 1</h4>

    <div class="row-fluid">
      <!-- Text input-->
      <fieldset>
          <div class="control-group">
            <label class="control-label" for="inputUserName"><span class="required">*</span>username</label>
            <div class="controls">
              <input id="inputUserName" name="inputUserName" type="text" class="input-large">
              <p><a href="" target="_blank">forgot username</a> or <a href="" target="_blank">register</a></p>
            </div>
          </div>
      </fieldset>
    </div>
    <div class="row-fluid">
      <div class="control-group span6">
          <label class="control-label" for="inputFirstName"><span class="required">*</span>First name</label>
          <div class="controls">
            <input type="text" id="inputFirstName" name="inputFirstName" value="<?php if
            (isset ($_POST['inputFirstName'])) {echo $_POST['inputFirstName']; }; ?>">
          </div>
      </div>
      <div class="control-group span6">
          <label class="control-label" for="inputLastName"><span class="required">*</span>Last name</label>
          <div class="controls">
            <input type="text" id="inputLastName" name="inputLastName" value="<?php if
            (isset ($_POST['inputFirstName'])) {echo $_POST['inputFirstName']; }; ?>">
          </div>
      </div>

    </div>
    <div class="row-fluid">

      <div class="control-group span6">
          <label class="control-label" for="inputCompany"><span class="required">*</span>Company</label>
          <div class="controls">
            <input type="text" id="inputCompany" name="inputCompany" value="<?php if
            (isset ($_POST['inputCompany'])) {echo $_POST['inputCompany']; }; ?>">
          </div>
      </div>
        <div class="control-group span6">
            <label class="control-label" for="inputUrl">website URL</label>
            <div class="controls">
                <input type="text" id="inputUrl" name="inputUrl" value="<?php if
                (isset ($_POST['inputUrl'])) {echo $_POST['inputUrl']; }; ?>">
            </div>
        </div>
    </div>
    <div class="row-fluid">

      <div class="control-group span6">
          <label class="control-label" for="inputEmployees"><span class="required">*</span>number of employees</label>
          <div class="controls">
              <input type="text" id="inputEmployees" name="inputEmployees" value="<?php if
              (isset ($_POST['inputEmployees'])) {echo $_POST['inputEmployees']; }; ?>">
          </div>
      </div>
        <div class="control-group span6">
            <label class="control-label" for="inputEntity"><span class="required">*</span>legal entity</label>
            <div class="controls">
                <input type="text" id="inputEntity" name="inputEntity" value="<?php if
                (isset ($_POST['inputEntity'])) {echo $_POST['inputEntity']; }; ?>">
            </div>
        </div>
    </div>
    <div class="row-fluid">

      <div class="control-group span6">
          <label class="control-label" for="inputEmail"><span class="required">*</span>E-Mail</label>
          <div class="controls">
              <input type="text" id="inputEmail" name="inputEmail" value="<?php if
              (isset ($_POST['inputEmail'])) {echo $_POST['inputEmail']; }; ?>">
          </div>
      </div>
      <div class="control-group span6">
          <label class="control-label" for="inputPhone"><span class="required">*</span>Phone</label>
          <div class="controls">
              <input type="number" id="inputPhone" name="inputPhone" value="<?php if
              (isset ($_POST['inputPhone'])) {echo $_POST['inputPhone']; }; ?>">
          </div>
      </div>
    </div>


  </div>




  <div class="boxed">
    <h4>Technical implementation</h4>
     <p>Please complete this fields, if you don't do the implementation by yourself</p>
    <div class="row-fluid">
      
      <div class="control-group span6">
          <label class="control-label" for="inputCompany2">Company</label>
          <div class="controls">
              <input type="text" id="inputCompany2" name="inputCompany2" value="<?php if
              (isset ($_POST['inputCompany2'])) {echo $_POST['inputCompany2']; }; ?>">
          </div>
      </div>
    </div>
      <div class="row-fluid">
          <div class="control-group span6">
              <label class="control-label" for="inputFirstName2">First name</label>
              <div class="controls">
                  <input type="text" id="inputFirstName2" name="inputFirstName2" value="<?php if
                  (isset ($_POST['inputFirstName2'])) {echo $_POST['inputFirstName2']; }; ?>">
              </div>
          </div>
          <div class="control-group span6">
              <label class="control-label" for="inputLastName2">Last name</label>
              <div class="controls">
                  <input type="text" id="inputLastName2" name="inputLastName2" value="<?php if
                  (isset ($_POST['inputLastName2'])) {echo $_POST['inputLastName2']; }; ?>">
              </div>
          </div>
      </div>
      <div class="row-fluid">
          <div class="control-group span6">
              <label class="control-label" for="inputEmail2">E-Mail</label>
              <div class="controls">
                  <input type="text" id="inputEmail2" name="inputEmail2" value="<?php if
                  (isset ($_POST['inputEmail2'])) {echo $_POST['inputEmail2']; }; ?>">
              </div>
          </div>
          <div class="control-group span6">
              <label class="control-label" for="inputPhone2">Phone</label>
              <div class="controls">
                  <input type="number" id="inputPhone2" name="inputPhone2" value="<?php if
                  (isset ($_POST['inputPhone2'])) {echo $_POST['inputPhone2']; }; ?>">
              </div>
          </div>
      </div>
  </div>