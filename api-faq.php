<?php require('inc/layout.php');

$Layout->title = 'API | FAQ';

$Layout->start(); ?>


    <div id="content" class="container-fluid">
        <div class="container">
            <h1>FAQ</h1>
            <div class="row-fluid">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapseOne">
                                The message with Action 'http://schemas.xmlsoap.org/ws/2005/02/trust/RST/SCT' cannot be processed at the receiver, due to a ContractFilter mismatch at the EndpointDispatcher. This may be because of either a contract mismatch (mismatched Actions between sender and receiver) or a binding/security mismatch between the sender and the receiver. Check that sender and receiver have the same contract and the same binding (including security requirements, e.g. Message, Transport, None).
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>You need to modify the configuration file in which you reference the service.</p>
                                <p>For example :</p>
                                <pre class="prettyprint"><xmp>
<system.serviceModel>
    <bindings>
        <wsHttpBinding>
            <binding name="WSHttpBinding_ISecurityService" maxReceivedMessageSize="20971520">
                <readerQuotas maxStringContentLength="5242880" maxArrayLength="20971520"/>
                <security mode="TransportWithMessageCredential">
                    <transport clientCredentialType="None" />
                    <message establishSecurityContext="False" clientCredentialType="UserName" />
                </security>
            </binding>
        </wsHttpBinding>
    </bindings>
    <client>
        <endpoint address="https://ws.betaqxl.com/RicardoApi/SecurityService.Soap.svc"
                  binding="wsHttpBinding" bindingConfiguration="WSHttpBinding_ISecurityService"
                  contract="SecurityServiceSoapReference.ISecurityService" name="WSHttpBinding_ISecurityService" />
    </client>
</system.serviceModel>
                                </xmp></pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                I always get an error while calling a Service using JSON
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>...and the JSON string received looks like that:</p>
                                <pre class="prettyprint"><xmp>
{
    "ErrorCodes": null,
    "ErrorCodesType": "Technical",
    "ErrorType": "System.NullReferenceException"
}
                                </xmp></pre>

                                <p>It's probably due to the fact that you are omitting the "parent" parameter of the method you are trying to call.<br />For example, with the Login method (in SecurityService), the following JSON content is incorrect:</p>
                                <pre class="prettyprint"><xmp>
{"Login":"YOUR_LOGIN","Password":"YOUR_PASSWORD"}
                                </xmp></pre>

                                <p>The correct syntax is :</p>
                                <pre class="prettyprint"><xmp>
{"loginParameter":{"Login":"YOUR_LOGIN","Password":"YOUR_PASSWORD"}}
                                </xmp></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- close content -->

<?php $Layout->end(); ?>