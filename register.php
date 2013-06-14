<?php require('inc/layout.php');

$Layout->title = 'registration';

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

        <h1>API Registration</h1>

          <form class="form-horizontal" name="FormVerif">
            <div class="row-fluid">
              <fieldset class="boxed">
                  <!-- Form Name -->
                  <h4>What is your purpose?</h4>

                  <!-- Multiple Radios -->
                  <div class="control-group">
                    <label class="control-label" for="radios">Choose your purpose</label>
                    <div class="controls">
                      <label class="radio"><input id="rdb1" type="radio" name="toggler" value="1"   checked="checked" />I need access to the API for my own ricardo.ch account</label>
                      <label class="radio"><input id="rdb2" type="radio" name="toggler" value="2" />I need access to the API to build a tool/app</label>
                      <label class="radio"><input id="rdb3" type="radio" name="toggler" value="3" />I need access to the API for a client</label>
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

            <div class="row-fluid">
              <?php include_once "inc/form-1.php"; ?>
              <?php include_once "inc/form-2.php"; ?>
            </div>



          </form>




    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>