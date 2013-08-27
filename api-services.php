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
                            <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/N_Ricardo_Contracts.htm" target="_blank">SecurityService</a></td>
                            <td><a href="https://ws.betaqxl.com/ricardoapi/SecurityService.Soap.svc" target="_blank">SOAP</a></td>
                            <td><a href="https://ws.betaqxl.com/ricardoapi/SecurityService.Json.svc" target="_blank">JSON</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="span6">
                <h3>Other Services</h3>
                <p>These services require to be identified with a token credential, that can be obtained by using the
                    SecurityService (cf. <a href="http://ticket:8080/display/CORE/Authentication">Authentication</a>).</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Service Name</th>
                        <th colspan="2">wsdl</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISystemService.htm" target="_blank">SystemService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="" target="_blank">SearchService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="" target="_blank">SellerAccountService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="" target="_blank">SellService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="" target="_blank">CustomerService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    <tr>
                        <td><a href="" target="_blank">BrandingService</a></td>
                        <td><a href="" target="_blank">SOAP</a></td>
                        <td><a href="" target="_blank">JSON</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISystemService.htm" target="_blank">SystemService</a></h4>
                <p>This service exposes referential data about the ricardo's system, for example <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISystemService_GetLanguages.htm" rel="nofollow">available languages</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISystemService_GetCategories.htm" rel="nofollow">list of categories</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISystemService_GetListingPackages.htm" rel="nofollow">list of possible packages</a> ...</p>
                <p>This service is supposed to be used only by developers and can be used with an anonymous token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISearchService.htm" target="_blank">SearchService</a></h4>
                <p>This service exposes all the methods that have to be used to perform a search within our data, for example getting the information about an auction, get all the articles from a specified seller ...</p>
                <p>This service can be used with an anonymous token</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ISellerAccountService.htm" target="_blank">SellerAccountService</a></h4>
                <p>This service is to be used for everything that refers to your account <strong>as a seller</strong>: <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetOpenArticles.htm" rel="nofollow">get all your open articles</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetSoldArticles.htm" rel="nofollow">get your sold articles</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetUnsoldArticles.htm" rel="nofollow">get your articles that haven't been sold</a> ...</p>
                <p>To use this service, you need an identified token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBuyerAccountService.htm" target="_blank">BuyerAccountService</a></h4>
                <p>This service is to be used for everything that refers to your account&nbsp;<strong>as a buyer</strong>: get the bid you have placed, get the auctions you have won, get your prefered sellers&nbsp;...</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ICustomerService.htm" target="_blank">SellService</a></h4>
                <p>This service is to be used to manage your articles <strong>as a seller</strong>: you can <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellService_InsertArticle.htm" rel="nofollow">list</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellService_RelistArticle.htm" rel="nofollow">relist</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellService_UpdateArticle.htm" rel="nofollow">modify</a>, <a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellService_CloseArticle.htm" rel="nofollow">close</a> an article ...</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_ICustomerService.htm" target="_blank">CustomerService</a></h4>
                <p>This service is to be used to manage all the generic data about your account: modify your addresses, get your messages, get your preferences ...</p>
                <p>To use this service, you need an identified&nbsp;token.</p>
            </div>
            <div class="span12 boxed">
                <h4><a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/T_Ricardo_Contracts_IBrandingService.htm" target="_blank">BrandingService</a></h4>
                <p>This service is to be used to retreive all the information specific to a Cars&amp;Bike article.</p>
                <p>This service can be used with an anonymous token</p>
            </div>

        </div>
	</div>
</div><!-- close content -->

<?php $Layout->end(); ?>
