<input type="hidden" name="formtype" value="2" />
<fieldset class="boxed">
    <div>
        <h4>personal Information</h4>

        <div class="row-fluid">
            <!-- Text input-->
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="inputUserName">ricardo.ch username</label>
                    <div class="controls">
                        <input id="inputUserName" name="inputUserName" type="text" class="input-large"  required />
                        <p><a href="https://www.ricardo.ch/form/lostpassword.asp" target="_blank">forgot username</a> or need to <a href="http://www.ricardo.ch/registration" target="_blank">register</a>?</p>
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
                    <input type="text" id="inputUrl" name="inputUrl"  placeholder="www.example.com"value="<?php if
                    (isset ($_POST['inputUrl'])) {echo $_POST['inputUrl']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmployees">number of employees</label>
                <div class="controls">
                    <input type="text" id="inputEmployees" name="inputEmployees" value="<?php if
                    (isset ($_POST['inputEmployees'])) {echo $_POST['inputEmployees']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputEntity">legal entity</label>
                <div class="controls">
                    <input type="text" id="inputEntity" name="inputEntity" placeholder="AG, GmbH ..." value="<?php if
                    (isset ($_POST['inputEntity'])) {echo $_POST['inputEntity']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">

            <div class="control-group span6">
                <label class="control-label" for="inputEmail">E-Mail</label>
                <div class="controls">
                    <input type="text" id="inputEmail" name="inputEmail" placeholder="name@example.ch" value="<?php if
                    (isset ($_POST['inputEmail'])) {echo $_POST['inputEmail']; }; ?>" required />
                </div>
            </div>
            <div class="control-group span6">
                <label class="control-label" for="inputPhone">Phone</label>
                <div class="controls">
                    <input type="text" id="inputPhone" name="inputPhone" value="<?php if
                    (isset ($_POST['inputPhone'])) {echo $_POST['inputPhone']; }; ?>" required />
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <!-- Textarea -->
            <div class="control-group">
                <label class="control-label" for="inputComment2">specific description to your purpose</label>
                <div class="controls">
                    <textarea name="inputComment2" class="area span11" placeholder="you are allowed to write in French or German"  wrap="physical"><?php if
                        (isset($_POST['inputComment2'])) {echo $_POST['inputComment2']; }; ?></textarea>
                </div>
            </div>
        </div>

    </div>
</fieldset>