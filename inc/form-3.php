<fieldset>

    <div class="boxed">
        <h4>personal Information</h4>

        <div class="row-fluid">
            <!-- Text input-->
            <fieldset>
                <div class="control-group span6">
                    <label class="control-label" for="inputUserName">your ricardo.ch username</label>
                    <div class="controls">
                        <input id="inputUserName" name="inputUserName" type="text" class="input-large"  required />
                        <p><a href="https://www.ricardo.ch/form/lostpassword.asp" target="_blank">forgot username</a> or need to <a href="http://www.ricardo.ch/registration" target="_blank">register</a>?</p>
                    </div>
                </div>
                <div class="control-group span6">
                    <label class="control-label" for="inputUserName2">client's ricardo.ch username</label>
                    <div class="controls">
                        <input id="inputUserName2" name="inputUserName2" type="text" class="input-large" required />
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row-fluid">
            <div class="control-group span6">
                <label class="control-label" for="inputFirstName">First name</label>
                <div class="controls">
                    <input type="text" id="inputFirstName" name="inputFirstName" value="<?php if
                    (isset ($_POST['inputFirstName'])) {echo $_POST['inputFirstName']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputLastName">Last name</label>
                <div class="controls">
                    <input type="text" id="inputLastName" name="inputLastName" value="<?php if
                    (isset ($_POST['inputFirstName'])) {echo $_POST['inputFirstName']; }; ?>" required />
                </div>
            </div>

        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputCompany">Company</label>
                <div class="controls">
                    <input type="text" id="inputCompany" name="inputCompany" value="<?php if
                    (isset ($_POST['inputCompany'])) {echo $_POST['inputCompany']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputUrl">website URL</label>
                <div class="controls">
                    <input type="text" id="inputUrl" name="inputUrl"  placeholder="e. g. http://www.example.com"value="<?php if
                    (isset ($_POST['inputUrl'])) {echo $_POST['inputUrl']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmployees">number of employees</label>
                <div class="controls">
                    <input type="number" id="inputEmployees" name="inputEmployees" value="<?php if
                    (isset ($_POST['inputEmployees'])) {echo $_POST['inputEmployees']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputEntity">legal entity</label>
                <div class="controls">
                    <input type="text" id="inputEntity" name="inputEntity" value="<?php if
                    (isset ($_POST['inputEntity'])) {echo $_POST['inputEntity']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmail">E-Mail</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="inputEmail" value="<?php if
                    (isset ($_POST['inputEmail'])) {echo $_POST['inputEmail']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputPhone">Phone</label>
                <div class="controls">
                    <input type="number" id="inputPhone" name="inputPhone" value="<?php if
                    (isset ($_POST['inputPhone'])) {echo $_POST['inputPhone']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <!-- Textarea -->
            <div class="control-group">
                <label class="control-label" for="inputComment2">About your company</label>
                <div class="controls">
                    <textarea name="inputComment2" class="area span11" placeholder="you are allowed to write in French or German"  wrap="physical"><?php if
                        (isset($_POST['inputComment2'])) {echo $_POST['inputComment2']; }; ?></textarea>
                </div>
            </div>
        </div>

    </div>
</fieldset>


<fieldset>
    <input type="hidden" name="formtype" value="3" />
    <div class="boxed">
        <h4>Information about your client</h4>


        <div class="row-fluid">
            <div class="control-group span6">
                <label class="control-label" for="inputFirstName2">First name</label>
                <div class="controls">
                    <input type="text" id="inputFirstName2" name="inputFirstName2" value="<?php if
                    (isset ($_POST['inputFirstName2'])) {echo $_POST['inputFirstName2']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputLastName2">Last name</label>
                <div class="controls">
                    <input type="text" id="inputLastName2" name="inputLastName2" value="<?php if
                    (isset ($_POST['inputLastName2'])) {echo $_POST['inputLastName2']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputCompany2">Company</label>
                <div class="controls">
                    <input type="text" id="inputCompany2" name="inputCompany2" value="<?php if
                    (isset ($_POST['inputCompany2'])) {echo $_POST['inputCompany2']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputUrl2">website URL</label>
                <div class="controls">
                    <input type="text" id="inputUrl2" name="inputUrl2"  placeholder="e. g. http://www.example.com"value="<?php if
                    (isset ($_POST['inputUrl'])) {echo $_POST['inputUrl']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmployees">number of employees</label>
                <div class="controls">
                    <input type="number" id="inputEmployees2" name="inputEmployees2" value="<?php if
                    (isset ($_POST['inputEmployees2'])) {echo $_POST['inputEmployees2']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputEntity2">legal entity</label>
                <div class="controls">
                    <input type="text" id="inputEntity2" name="inputEntity2" value="<?php if
                    (isset ($_POST['inputEntity2'])) {echo $_POST['inputEntity2']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmail2">E-Mail</label>
                <div class="controls">
                    <input type="text" id="inputEmail2" name="inputEmail2" value="<?php if
                    (isset ($_POST['inputEmail2'])) {echo $_POST['inputEmail2']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputPhone2">Phone</label>
                <div class="controls">
                    <input type="number" id="inputPhone2" name="inputPhone2" value="<?php if
                    (isset ($_POST['inputPhone2'])) {echo $_POST['inputPhone2']; }; ?>" required />
                </div>
            </div>
        </div>


</fieldset>