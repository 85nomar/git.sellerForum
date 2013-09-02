<?php require('inc/layout.php');

$Layout->title = 'API | Services';

$Layout->start(); ?>


<div id="content" class="container-fluid">
	<div class="container">
        <h1>Services</h1>
        <div class="row">
            <div class="span6">
                <h3>SecurityService</h3>
                <p>To use this service, you'll need a Partnership credential. If you don't have one, please contact <a class="external-link" href="mailto:api_contact@qxlricardo.com" rel="nofollow">api_contact@qxlricardo.com</a></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Service Name</th>
                            <th colspan="2">wsdl</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/N_Ricardo_Contracts.htm" target="_blank">SecurityService</a></td>
                            <td><a href="https://ws.betaqxl.com/ricardoapi/SecurityService.Soap.svc" target="_blank">SOAP</a></td>
                            <td><a href="https://ws.betaqxl.com/ricardoapi/SecurityService.Json.svc" target="_blank">JSON</a></td>
                        </tr>
                    </tbody>
                </table>

                <p>This service has to be used to get a token credential, required to call the other services (cf. <a href="http://ticket:8080/display/CORE/Authentication">Authentication</a>).</p>

            </div>

            <div class="span6">
                <h3>Other Services</h3>
                <p>These services require to be identified with a token credential, that can be obtained by using the
                    SecurityService (cf. <a href="http://api.ricardo.ch/api-authentication.html">Authentication</a>).</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Service Name</th>
                        <th colspan="2">wsdl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_ISystemService.htm" target="_blank">SystemService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SystemService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SystemService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IArticleService.htm" target="_blank">ArticleService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/ArticleService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/ArticleService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ICustomerService.htm" target="_blank">CustomerService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/CustomerService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/CustomerService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISellerAccountService.htm" target="_blank">SellerAccountService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SellerAccountService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SellerAccountService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISellService.htm" target="_blank">SellService</a></td>

                        <td><a href="https://ws.betaqxl.com/ricardoapi/SellService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SellService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBuyerAccountService.htm" target="_blank">BuyerAccountService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BuyerAccountService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BuyerAccountService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBuyService.htm" target="_blank">BuyService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BuyService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BuyService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IRatingService.htm" target="_blank">RatingService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/RatingService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/RatingService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_INotifyService.htm" target="_blank">NotifyService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/NotifyService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/NotifyService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISearchService.htm" target="_blank">SearchService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SearchService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/SearchService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBrandingService.htm" target="_blank">BrandingService</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BrandingService.Soap.svc" target="_blank">SOAP</a></td>
                        <td><a href="https://ws.betaqxl.com/ricardoapi/BrandingService.Json.svc" target="_blank">JSON</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISystemService.htm" target="_blank">SystemService</a></h4>
                <p>This service exposes referential data about the ricardo's system, for example <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISystemService_GetLanguages.htm" rel="nofollow">available languages</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISystemService_GetCategories.htm" rel="nofollow">list of categories</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISystemService_GetListingPackages.htm" rel="nofollow">list of possible packages</a> ...</p>
                <p>This service is supposed to be used only by developers and can be used with an anonymous token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IArticleService.htm" target="_blank">ArticleService</a></h4>
                <p>This service exposes methods related to the articles, for example <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IArticleService_GetDisplayArticle.htm" class="external-link" rel="nofollow">the informations needed to display an article</a>.</p>
                <p>This service can be used with an anonymous token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ICustomerService.htm" target="_blank">CustomerService</a></h4>
                <p>This service is to be used to manage all the <strong>generic data</strong> about your account: <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ICustomerService_UpdatePassword.htm" class="external-link" rel="nofollow">modify your password</a>, <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ICustomerService_ArchiveMessage.htm" class="external-link" rel="nofollow">archive your messages</a>, <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ICustomerService_GetPreferences.htm" class="external-link" rel="nofollow">get your preferences</a> ...</p>
                <p>To use this service, you need an identified token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_ISellerAccountService.htm" target="_blank">SellerAccountService</a></h4>
                <p>This service is to be used for everything that refers to your account <strong>as a seller</strong>: <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetOpenArticles.htm" rel="nofollow">get all your open articles</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetSoldArticles.htm" rel="nofollow">get your sold articles</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetUnsoldArticles.htm" rel="nofollow">get your articles that haven't been sold</a> ...</p>
                <p>To use this service, you need an identified token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_ICustomerService.htm" target="_blank">SellService</a></h4>
                <p>This service is to be used to manage your articles <strong>as a seller</strong>: you can <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellService_InsertArticle.htm" rel="nofollow">list</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellService_RelistArticle.htm" rel="nofollow">relist</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellService_UpdateArticle.htm" rel="nofollow">modify</a>, <a class="external-link" href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/M_Ricardo_Contracts_ISellService_CloseArticle.htm" rel="nofollow">close</a> an article ...</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_IBuyerAccountService.htm" target="_blank">BuyerAccountService</a></h4>
                <p>This service is to be used for everything that refers to your account&nbsp;<strong>as a buyer</strong>: get the bid you have placed, get the auctions you have won, get your prefered sellers&nbsp;...</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBuyService.htm" target="_blank">BuyService</a></h4>
                <p>This service is to be used to handle your activity&nbsp;<strong>as a buyer</strong>: you can <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IBuyService_PlaceBid.htm" class="external-link" rel="nofollow">place a bid</a>, or <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IBuyService_BuyNow.htm" class="external-link" rel="nofollow">immediately buy an article</a>.</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IRatingService.htm" target="_blank">RatingService</a></h4>
                <p>This service is to be used for everything related to the ratings: get different kind of ratings (<a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IRatingService_GetRatingsToGive.htm">to give</a>, <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IRatingService_GetRatingsToReceive.htm">to receive</a> , ...), <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_IRatingService_InsertRating.htm" rel="nofollow">insert a new rating</a>...</p>
                <p>To use this service, you need an identified token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_INotifyService.htm" target="_blank">NotifyService</a></h4>
                <p>This service is to be used only for mobile purpose: you can <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_INotifyService_RegisterDeviceIdentifier.htm" class="external-link" rel="nofollow">register a device identifier</a>, <a href="http://ws.devqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_INotifyService_InsertDevicePreferences.htm" class="external-link" rel="nofollow">store the device preferences</a>...</p>
                <p>To use this service, you need an identified token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_ISearchService.htm" target="_blank">SearchService</a></h4>
                <p>This service exposes all the methods that have to be used to perform a search within our data, for example getting the information about an auction, get all the articles from a specified seller ...</p>
                <p>This service can be used with an anonymous token</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="https://ws.ricardo.ch/ricardoApi/documentation/technical//?topic=html/T_Ricardo_Contracts_IBrandingService.htm" target="_blank">BrandingService</a></h4>
                <p>This service is to be used to retreive all the information specific to a Cars&amp;Bike article.</p>
                <p>This service can be used with an anonymous token</p>
            </div>








        </div>
	</div>
</div><!-- close content -->

<?php $Layout->end(); ?>
