<?php require('inc/layout.php');

$Layout->title = 'API | Authentication';

$Layout->start(); ?>


<div id="content" class="container-fluid">
    <div class="container">
        <h1>Authentication</h1>
        <div class="row-fluid">
            <div class="span6">
                <h2>Partnership Credentials</h2>
                <ul>
                    <li>it is a couple "username/password" that identify our partnership on our platform.</li>
                    <li><strong>never be transmitted to third people</strong>.If we detect that a partnership credential is used by more than one application, we can easily revoke it.</li>
                    <li>it must be transmitted every time you call a method of the SecurityService (otherwise you'll receive an error message).</li>
                    <li>it must be unique by application: for example if you provide an application on iPhone, iPad and Android, you must have three <strong>different</strong> Partnership credentials.</span></li>
                </ul>
            </div>
            <div class="span6">
                <h2>Token Credentials</h2>
                <ul>
                    <li>it represents at the same time a Ricardo customer (or an anonymous user) and a partnership.</li>
                    <li>it is only composed of a <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/P_Ricardo_Contracts_Models_Security_Result_TokenCredentialResult_TokenCredentialKey.htm" rel="nofollow">key</a> (there is no associated password).</li>
                    <li>there are two elements associated with it:&nbsp;<br>
                        <ul>
                            <li>(short) <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/P_Ricardo_Contracts_Models_Security_Result_TokenCredentialResult_SessionDuration.htm" rel="nofollow">SessionDuration</a>: it is the duration (in minutes) during which the token will be usable. Every time you use this token, the SessionDuration is reinitialized to its default value. If you try to use the token after the SessionDuration has expired, you'll receive an error message stating that your token has expired, and must be refreshed. You can do that by using the&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISecurityService_RefreshTokenCredential.htm" rel="nofollow">RefreshTokenCredential</a> method of the SecurityService</li>
                            <li>(DateTime) <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/P_Ricardo_Contracts_Models_Security_Result_TokenCredentialResult_TokenExpirationDate.htm" rel="nofollow">TokenExpirationDate</a>: it's the date after which the token will not be usable any more (and trying to Refresh it will also fail). To use the API again, you'll have to ask for a new token.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <h2>How to obtain a Token?</h2>
            <p>All the methods you need are in the <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISecurityService.htm" target="_blank">SecurityService</a> (<a class="external-link" href="https://ws.betaqxl.com/ricardoapi/SecurityService.Soap.svc" rel="nofollow">SOAP</a>,
                <a class="external-link" href="https://ws.betaqxl.com/ricardoapi/SecurityService.Json.svc" rel="nofollow">JSON</a>). You have to identify all your calls to this service with your Partnership
                credentials:</p>

            <div class="row">
                <div class="span12">
                    <h4>Using SOAP</h4>
                    <pre class="prettyprint"><xmp>
client = new SecurityServiceSoapReference.SecurityServiceClient("WSHttpBinding_ISecurityService");
((SecurityServiceSoapReference.SecurityServiceClient)client).ClientCredentials.UserName.UserName = "Your Partnership credential Username";
((SecurityServiceSoapReference.SecurityServiceClient)client).ClientCredentials.UserName.Password = "Your Partnership credential Password";
                    </xmp></pre>
                </div>
                <div class="span12">
                    <h4>Using JSON</h4>
                    <pre class="prettyprint"><xmp>
//you have to insert your Partnership Credentials into the HTTP Header:
httpWebRequest.Headers.Add("Ricardo-Username: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXX");
httpWebRequest.Headers.Add("Ricardo-Password: Password");
                    </xmp></pre>
                </div>
            </div>

            <div class="row-fluid">
                <h3>There are two type of token you can get: anonymous or registered</h3>

                <h4>Anonymous Token</h4>
                <div class="accordion" id="accordion1">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                               href="#tokenAnonymous">
                                Ask for an Anonymous token
                            </a>
                        </div>
                        <div id="tokenAnonymous" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISecurityService_GetAnonymousTokenCredential.htm" rel="nofollow">GetAnonymousTokenCredential()</a>
                                <p>That's all!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Registered Token</h4>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#TokenCredential">
                                Ask for a Temp Credential
                            </a>
                        </div>
                        <div id="TokenCredential" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>First of all, you will have to ask for a Temp Credential, using the method:</p>
                                <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISecurityService_CreateTemporaryCredential.htm" rel="nofollow">CreateTemporaryCredential()</a>
                                <p>You will get a TempCredentialD to object that contains:</p>
                                <ul>
                                    <li><strong>TemporaryCredentialKey</strong>: The Temp Credential key needed to obtain the Consumer Token</li><li><strong>ValidationUrl</strong>: The link to the authorization page</li>
                                    <li><strong>ExpirationDate</strong>: The limit date to use the temp credential</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#tokenRedirect">
                                Redirect the customer
                            </a>
                        </div>
                        <div id="tokenRedirect" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>The customer has to validate the temp credential. You will have to redirect him using the ValidationUrl.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#tokenCostumer">
                                Get the Consumer Token
                            </a>
                        </div>
                        <div id="tokenCostumer" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Once the customer has validated your temp credential, you will have to call the method:</p>
                                <a class="external-link" href="https://ws.betaqxl.com/ricardoApiSecurity/documentation/technical/html/M_Ricardo_Api_Security_Contracts_IPartnershipService_CreateTokenCredential.htm" rel="nofollow">CreateTokenCredential</a>
                                <p>And give the temp credential key. If the temp credential has been authorized, you will retrieve a Consumer Token object that contains:</p>
                                <ul>
                                    <li><strong>TokenCredentialKey</strong>: Represents the username for Consumer Services Authentication</li>
                                    <li><strong>TokenExpirationDate</strong>: Limit date of use for this access. When expired, you will have to ask again for a temp credential.</li>
                                    <li><strong>SessionDuration</strong>: after this duration of unactivity, the Consumer Token will need to be refreshed.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#tokenRefresh">
                                Refresh the Token
                            </a>
                        </div>
                        <div id="tokenRefresh" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>When using the Consumer Token, if you retrieve a MessageSecurityException with a FaultException message “Invalid username!” it means that the Session for this Token has expired. You can refresh it using the method:</p>
                                <a class="external-link" href="https://ws.betaqxl.com/ricardoApiSecurity/documentation/technical/html/M_Ricardo_Api_Security_Contracts_IPartnershipService_RefreshTokenCredential.htm" rel="nofollow">RefreshTokenCredential</a>
                                <p>And give the Consumer Token key.</p>
                                <p>If the Consumer Token ExpirationDate has been reached, you will get a BusinessFault message “Invalid ToenCredential”. In this case, you will need to ask for a new temp credential and do the whole Consumer Token process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#tokenAntiforgery">
                                Antiforgery Tokens
                            </a>
                        </div>
                        <div id="tokenAntiforgery" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Some critical methods are protected by an antiforgery token. It prevents a man-in-the-middle to replay the calls and impact fraudulently the platform.</p>
                                <p>To obtain an Antiforgery Token, you have to call the method:</p>
                                <a class="external-link" href="https://ws.betaqxl.com/ricardoApiSecurity/documentation/technical/html/M_Ricardo_Api_Security_Contracts_IPartnershipService_CreateAntiforgeryToken.htm" rel="nofollow">CreateAntiforgeryToken</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>