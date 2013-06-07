<?php require('inc/layout.php');

$Layout->title = 'Sellingform';

$Layout->start(); ?>


<section id="sellingform" class="span9">

    <div id="step1">
        <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Step 1</legend>
        <!-- Appended Input-->
        <div class="control-group">
          <label class="control-label">Add prduct name</label>
          <div class="controls">
            <div class="input-append">
              <input id="appendedtext" name="appendedtext" class="span4 " placeholder="placeholder" type="text">
              <span class="add-on">append</span>
            </div>
            
          </div>
        </div>
        

        <!-- CONTENT HERE -->
        <?php require('content/_home.php'); ?>

        </fieldset>
        </form>
    </div>

    <div id="step2">
  <form class="form-horizontal">
  <fieldset>

    <!-- Form Name -->
    <legend>Step 2</legend>

    <!-- Multiple Checkboxes -->
    <div class="control-group">
      <label class="control-label">Select Language</label>
      <div class="controls">
        <label class="checkbox">
          <input type="checkbox" checked="checked" name="checkboxes" value="German">
          German
        </label>
        <label class="checkbox">
          <input type="checkbox" name="checkboxes" value="French">
          French
        </label>
      </div>
    </div>

  <!-- Text input-->
  <div class="control-group">
    <label class="control-label">Title</label>
    <div class="controls">
      <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="input-xlarge span6">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="control-group">
    <label class="control-label">Subtitle</label>
    <div class="controls">
      <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="input-xlarge span6">
      
    </div>
  </div>

  <!-- Textarea -->
  <div class="control-group">
    <label class="control-label">Description</label>
    <div class="controls">                     
      <textarea id="textarea" class="span6" name="textarea">default text</textarea>
    </div>
  </div>


  <!-- Select Basic -->
  <div class="control-group">
    <div class="controls">
      <span>Quantity</span>
      <select id="selectbasic" name="selectbasic" class="span1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
      <div class="span3">
      <span>Quality</span>
      <select id="selectbasic" name="selectbasic" class="span2">
        <option>New</option>
        <option>like New</option>
        <option>Used</option>
      </select>
    </div>
  </div>
    </div>

<label>Images</label>
<ul class="thumbnails">
  <li class="span2">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAAELklEQVR4Xu3YzUtiUQCG8WNiUdGusF1I29wEYfTvtyoh2kXrcKurgrCP4Rw4cubOvY4zCo90n1kVk77y3B/3w850Ov0O/rMAVKAjQKi8s6mAAIWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWqA1AL++vsLd3V14e3sLNzc3YX9/P4X/+PgIt7e34fPzM/3e7/fDcDhMP0+n0/D4+Bjia+O/i4uLcHp6utIBa9p7eXkJz8/Pi/cYDAbh/Px87b2VPtQW/lErAJbIOp3OAmBGsrOzE0ajUXh4eEjoIrTj4+ME8+DgYPF/EW/8u16vt/RQNu1l0CcnJwn509NTmEwma+9toauVP9KPB1g9w5UAM4izs7PFWSiXy2eqfIbKv0ecu7u76cx4eHiYQNZBymfUcq96VMqN+J7xzFi3t+pZd+WjvkV/2AqA4/E4XF5epjNceQnOAPb29sL7+3s6LFUATb/H95rNZuH6+jrc398vzpQRfNNe9biXcOfzeS3A8hK9RW429lF+PMBcqu6eLAPI933lJTjiipfHJoBNl9lle+VRy/iPjo5+O4s27W3siG/ZG7UaYNNlNiJouiSWZ6QMtnxwWQVgvvTHjXxPueyz5IeULbOzkY/TaoDVe8B/uSfLr40PJPHyXX1C/ttTd3xd+UCz7J7Te8CNWGffpA5E3VNwvPTGr2kikKan4G63m77SiQ8aV1dX6d4y/lyCWrb3+vr6B9h8Sf+fp2627HrrrT4DxnTVp+TyTNb0PWC+d6zer5WX4jqA1e8A86HL77PO947rMeBe3RqAXGKXlxUQoD7QAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFvgFNNYD7Zg81vEAAAAASUVORK5CYII=">
    </a>
  </li>
  <li class="span2">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/260x120" alt="260x120" style="width: 260px; height: 120px;" src="data:image/png;base64,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">
    </a>
  </li>
  <li class="span2">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAAELklEQVR4Xu3YzUtiUQCG8WNiUdGusF1I29wEYfTvtyoh2kXrcKurgrCP4Rw4cubOvY4zCo90n1kVk77y3B/3w850Ov0O/rMAVKAjQKi8s6mAAIWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWqA1AL++vsLd3V14e3sLNzc3YX9/P4X/+PgIt7e34fPzM/3e7/fDcDhMP0+n0/D4+Bjia+O/i4uLcHp6utIBa9p7eXkJz8/Pi/cYDAbh/Px87b2VPtQW/lErAJbIOp3OAmBGsrOzE0ajUXh4eEjoIrTj4+ME8+DgYPF/EW/8u16vt/RQNu1l0CcnJwn509NTmEwma+9toauVP9KPB1g9w5UAM4izs7PFWSiXy2eqfIbKv0ecu7u76cx4eHiYQNZBymfUcq96VMqN+J7xzFi3t+pZd+WjvkV/2AqA4/E4XF5epjNceQnOAPb29sL7+3s6LFUATb/H95rNZuH6+jrc398vzpQRfNNe9biXcOfzeS3A8hK9RW429lF+PMBcqu6eLAPI933lJTjiipfHJoBNl9lle+VRy/iPjo5+O4s27W3siG/ZG7UaYNNlNiJouiSWZ6QMtnxwWQVgvvTHjXxPueyz5IeULbOzkY/TaoDVe8B/uSfLr40PJPHyXX1C/ttTd3xd+UCz7J7Te8CNWGffpA5E3VNwvPTGr2kikKan4G63m77SiQ8aV1dX6d4y/lyCWrb3+vr6B9h8Sf+fp2627HrrrT4DxnTVp+TyTNb0PWC+d6zer5WX4jqA1e8A86HL77PO947rMeBe3RqAXGKXlxUQoD7QAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFvgFNNYD7Zg81vEAAAAASUVORK5CYII=">
    </a>
  </li>
  <li class="span2">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAAELklEQVR4Xu3YzUtiUQCG8WNiUdGusF1I29wEYfTvtyoh2kXrcKurgrCP4Rw4cubOvY4zCo90n1kVk77y3B/3w850Ov0O/rMAVKAjQKi8s6mAAIWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWqA1AL++vsLd3V14e3sLNzc3YX9/P4X/+PgIt7e34fPzM/3e7/fDcDhMP0+n0/D4+Bjia+O/i4uLcHp6utIBa9p7eXkJz8/Pi/cYDAbh/Px87b2VPtQW/lErAJbIOp3OAmBGsrOzE0ajUXh4eEjoIrTj4+ME8+DgYPF/EW/8u16vt/RQNu1l0CcnJwn509NTmEwma+9toauVP9KPB1g9w5UAM4izs7PFWSiXy2eqfIbKv0ecu7u76cx4eHiYQNZBymfUcq96VMqN+J7xzFi3t+pZd+WjvkV/2AqA4/E4XF5epjNceQnOAPb29sL7+3s6LFUATb/H95rNZuH6+jrc398vzpQRfNNe9biXcOfzeS3A8hK9RW429lF+PMBcqu6eLAPI933lJTjiipfHJoBNl9lle+VRy/iPjo5+O4s27W3siG/ZG7UaYNNlNiJouiSWZ6QMtnxwWQVgvvTHjXxPueyz5IeULbOzkY/TaoDVe8B/uSfLr40PJPHyXX1C/ttTd3xd+UCz7J7Te8CNWGffpA5E3VNwvPTGr2kikKan4G63m77SiQ8aV1dX6d4y/lyCWrb3+vr6B9h8Sf+fp2627HrrrT4DxnTVp+TyTNb0PWC+d6zer5WX4jqA1e8A86HL77PO947rMeBe3RqAXGKXlxUQoD7QAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFhAgmt9xAWoALSBANL/jAtQAWkCAaH7HBagBtIAA0fyOC1ADaAEBovkdF6AG0AICRPM7LkANoAUEiOZ3XIAaQAsIEM3vuAA1gBYQIJrfcQFqAC0gQDS/4wLUAFpAgGh+xwWoAbSAANH8jgtQA2gBAaL5HRegBtACAkTzOy5ADaAFBIjmd1yAGkALCBDN77gANYAWECCa33EBagAtIEA0v+MC1ABaQIBofscFqAG0gADR/I4LUANoAQGi+R0XoAbQAgJE8zsuQA2gBQSI5ndcgBpACwgQze+4ADWAFvgFNNYD7Zg81vEAAAAASUVORK5CYII=">
    </a>
  </li>  
</ul>

  </div>

  </fieldset>
  </form>

    <div id="step3">
      <form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->
      <legend>step 3</legend>

      <!-- Appended Input-->
      <div class="control-group">
        <label class="control-label">start date</label>
        <div class="controls">
          <div id="datetimepicker1" class="input-append date">
            <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
            <span class="add-on">
              <i data-time-icon="icon-time" data-date-icon="icon-calendar">
              </i>
            </span>
          </div>
        </div>
        <script type="text/javascript">
          $(function() {
            $('#datetimepicker1').datetimepicker({
              language: 'pt-BR'
            });
          });
        </script>
        </div>
      </div>

      </fieldset>
      </form>
    </div>






</section>

<?php $Layout->end(); ?>