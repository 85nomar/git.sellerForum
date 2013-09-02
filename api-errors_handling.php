<?php require('inc/layout.php');

$Layout->title = 'API | Errors Handling';

$Layout->start(); ?>


<div id="content" class="container-fluid">
    <div class="container">
        <h1>Errors Handling</h1>
        <div class="row">
            <div class="span6">
                <p><strong>You can receive two type of error while calling the API methods:</strong></p>
                <ul>
                    <li>technical error : an internal error has occurred, you can retry your call later and it <em>should</em> work.</li>
                    <li>business error : there is an error (or many&nbsp;!) with the parameters you provided. Retrying your call without modification will not work.</li>
                </ul>
            </div>
            <div class="span6">
                <p><strong>If you receive a businessFault, this object contains the following elements:</strong></p>
                <ul>
                    <li>ErrorType : the exception name, for server-side use only.</li>
                    <li>ErrorCodesType : references the Enum that contains the error(s) you generated. <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/N_Ricardo_Enums.htm" rel="nofollow">Cf. here for details.</a></li>
                    <li>ErrorCodes : the list of value describing the error(s). Refer to the appropriate Enum in the documentation above for more details.</li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>