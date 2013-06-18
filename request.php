 <?php require('inc/layout.php');


$Layout->title = 'request';

$Layout->start(); ?>




<script language=javascript>
var count = "500"; 
function limiter(){
var tex = document.FormVerif.vorschlag.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.FormVerif.vorschlag.value =tex;
        return false;
}
document.FormVerif.limit.value = count-len;
}

</script>

    <div id="content" class="container-fluid">
      <div class="container">

        <h1>API Request</h1>
          <?php  require('inc/validation.php'); ?>
          <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formVerif" method="post">
            <div class="row-fluid">
              <fieldset class="boxed">
                  <!-- Form Name -->
                  <h4>What is your purpose?</h4>

                  <!-- Multiple Radios -->
                  <div class="control-group">
                    <label class="control-label" for="radios">Choose your purpose</label>
                    <div class="controls">
                      <label class="radio radioToggle"><input id="rdb1" type="radio" name="toggler" value="1" checked="checked" />I need access to the API for my own ricardo.ch account</label>
                      <label class="radio radioToggle"><input id="rdb2" type="radio" name="toggler" value="2" />I need access to the API to build a tool/app</label>
                      <label class="radio radioToggle"><input id="rdb3" type="radio" name="toggler" value="3" />I need access to the API for a client</label>
                    </div>
                  </div>

                  <!-- Textarea -->
                  <div class="control-group">
                    <label class="control-label" for="textarea">specific description to your purpose</label>
                    <div class="controls">                     
                      <textarea name="vorschlag" class="area span9" wrap="physical" onkeyup="limiter()" ><?php if (isset($_POST['vorschlag'])) {echo $_POST['vorschlag']; }; ?></textarea>
                      <p><script language=javascript>document.write("<input class='area-limiter' type=text name=limit readonly value="+count+">");</script></p>
                    </div>
                  </div>

              </fieldset>
            </div>

            <div id="formBox" class="row-fluid">
                <?php include_once "inc/form-1.php"; ?>
            </div>

          <div class="row-fluid">
              <div class="form-btns span12 text-right">
                  <input type="hidden" name="submittedForm" value="1" />
                  <button type="reset" class="btn">Cancel</button>
                  <button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>
              </div>
          </div>
        </fieldset>

      </form>


    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>