@include('adh')

<div class="content" data-scrollview="true">
<div class="container" data-animation="true" data-animation-type="fadeInDown">
<h2 class="content-title">Contact</h2>
<p class="text-center">Do you need to contact us? Fill the form below or email us directly: <b><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="066569687267657246766368687f6367746863742865696b">[email&#160;protected]</a></b></p>
<div class="row">
<div class="col-md-12">
<br />
<div class="TitanViewElement">
<h3>
Contact form</h3>
<div class="row">
<div class="col-md-12">
<div id="ctl00_MainContent_ctl00_SendMessageValidationSummary" class="alert alert-danger" style="display:none;">
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<div class="form-horizontal">
<div class="form-group">
<label class="control-label col-md-2">
<div id="ctl00_MainContent_ctl00_Option1SecondPanel" class="m-b-15">
Email:
<span id="ctl00_MainContent_ctl00_EmailRequired" class="text-danger" style="display:none;">*</span>
<span id="ctl00_MainContent_ctl00_CorrectEmailRequired" class="text-danger" style="display:none;">*</span>
</div>
</label>
<div class="col-md-6">
<div id="ctl00_MainContent_ctl00_Option1Panel" class="m-b-15">
<input name="ctl00$MainContent$ctl00$Email" type="text" id="ctl00_MainContent_ctl00_Email" class="form-control" placeholder="Email" />
</div>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2">
Text:
<span id="ctl00_MainContent_ctl00_TextRequired" class="text-danger" style="display:none;">*</span>
</label>
<div class="col-md-6">
<textarea name="ctl00$MainContent$ctl00$MessageText" rows="5" cols="20" id="ctl00_MainContent_ctl00_MessageText" class="form-control" placeholder="Message"></textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2">
File:
<span id="ctl00_MainContent_ctl00_File_BannerUploadValidCustomValidator" class="text-danger" style="display:none;">*</span>
</label>
<div class="col-md-6">
<span class="btn btn-success fileinput-button">
<i class="fa fa-plus"></i>
<span>Add image</span>
<input type="file" name="ctl00$MainContent$ctl00$File_BannerUpload" id="ctl00_MainContent_ctl00_File_BannerUpload" />
</span>
<input type="submit" name="ctl00$MainContent$ctl00$Verification_BannerUploadSubmit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$ctl00$Verification_BannerUploadSubmit&quot;, &quot;&quot;, true, &quot;Verification_OnSubmitValidationGroup&quot;, &quot;&quot;, false, false))" id="ctl00_MainContent_ctl00_Verification_BannerUploadSubmit" class="btn btn-primary" />
<br />
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2">
Verification:
</label>
<div class="col-md-6">


<style>
        .captcha-status {
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            -ms-border-radius: 7px;
            -o-border-radius: 7px;
            border-radius: 7px;
            background-color: #fbb6a9;
            padding: 10px;
            text-align: center;
            font-family: 'Oxygen', sans-serif;
            font-size: 18px;
            color: #b41c1c;
            font-weight: 100;
            margin: 20px 0 24px;
        }

        @media only screen and (max-width: 360px) {
            .captcha-status {
                font-size: 16px;
            }
        }

        .captcha-status p {
            margin: 0;
        }
    </style>
<link rel="stylesheet" href="../Plugins/VisualCaptcha/visualcaptcha.css" media="all" />
<link rel="stylesheet" href="../Scripts/default/assets/css/captcha-customize.css" media="all" />
<link rel="stylesheet" href='../index.html' />
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../Plugins/VisualCaptcha/visualcaptcha.jquery5e1f.js?v=2"></script>
<input type="hidden" name="captcha-value" id="captcha-value" />
<div id="captcha-status-message" style="display: none">
<div id="captcha-status" class="captcha-status">
<div id="captcha-status-icon"></div>
<p id="captcha-status-text"></p>
</div>
</div>
<div id="sample-captcha"></div>
<span id="CaptchaCheckedCustomValidator" style="display:none;"></span>
<script>

            var Main = (function () {
                function Main() {
                    this.$captchaContainer = $('#sample-captcha');
                    this.$form = $("form");
                    this.$statusContainer = $("#captcha-status");
                    this.$statusIcon = $("#captcha-status-icon");
                    this.$statusText = $("#captcha-status-text");
                    this.$statusMessage = $("#captcha-status-message");
                    this.initializeCaptcha();
                    this.bindHandlers();
                }
                Main.prototype.initializeCaptcha = function () {
                    this.captcha = this.$captchaContainer.visualCaptcha({
                        imgPath: '/../Plugins/VisualCaptcha/img/',
                        captcha: {
                            numberOfImages: 4,
                            routes: {
                                start: '/../Plugins/VisualCaptcha/Handler.ashx/start',
                                image: '/../Plugins/VisualCaptcha/Handler.ashx/image',
                                audio: '/../Plugins/VisualCaptcha/Handler.ashx/audio'
                            },
                            namespace: '8b6a603488870f4c5a584bc4b240772c'
                        },
                        language: {
                            accessibilityAlt: 'Sound icon',
                            accessibilityTitle: 'Accessibility option: listen to a question and answer it!',
                            accessibilityDescription: 'Type below the <strong>answer</strong> to what you hear. Numbers or words:',
                            explanation: 'Click or touch the <strong>ANSWER</strong>',
                            refreshAlt: 'Refresh/reload icon',
                            refreshTitle: 'Refresh/reload: get new images and accessibility option!'
                        }

                    }).data("captcha");
                };

                Main.prototype.bindHandlers = function () {
                    var _this = this;
                    // Bind form submission behavior
                    this.$form.submit(function () {
                        if (_this.captcha.getCaptchaData().valid) {
                            $('#captcha-value').val(_this.captcha.getCaptchaData().value);
                        }
                    });


                    WebForm_OnSubmit = function () {
                        if (typeof (ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;

                        try {
                            if (_this.captcha.getCaptchaData().valid) {
                                $('#captcha-value').val(_this.captcha.getCaptchaData().value);
                            }
                        } catch (Exception) { }

                        return true;
                    }

                };

                Main.prototype.setStatus = function (result) {
                    if (result.success) {
                        this.$statusContainer.addClass("valid");
                    } else {
                        this.$statusContainer.removeClass("valid");
                    }

                    this.$statusIcon.removeClass().addClass(result.success ? "icon-yes" : "icon-no");
                    this.$statusText.text(result.message);
                    this.$statusMessage.show();
                };

                return Main;
            })();


            var captchaObject = new Main();

            function checkCaptchaCompleted(source, arguments) {
                ShowValidationSummaries();
                arguments.IsValid = true;
                if (captchaObject.captcha.getCaptchaData().valid == false) {
                    captchaObject.setStatus({ success: false, message: "Please select an option." });
                    arguments.IsValid = false;
                    HideValidationSummaries();
                }
            }

            function HideValidationSummaries() {
                if (typeof (Page_ValidationSummaries) != "undefined") {
                    for (sums = 0; sums < Page_ValidationSummaries.length; sums++) {
                        summary = Page_ValidationSummaries[sums];
                        summary.className += " displaynone";
                    }
                }
            }

            function ShowValidationSummaries() {
                if (typeof (Page_ValidationSummaries) != "undefined") {
                    for (sums = 0; sums < Page_ValidationSummaries.length; sums++) {
                        summary = Page_ValidationSummaries[sums];
                        summary.className = summary.className.replace(/(?:^|\s)displaynone(?!\S)/g, '');
                    }
                }
            }

        </script>



</div>
</div>
<div class="form-group">
<label class="control-label col-md-2">
</label>
<div class="col-md-4">
<input type="submit" name="ctl00$MainContent$ctl00$SendMessageButton" value="Send" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$MainContent$ctl00$SendMessageButton&quot;, &quot;&quot;, true, &quot;SendMessageValidationGroup&quot;, &quot;&quot;, false, false))" id="ctl00_MainContent_ctl00_SendMessageButton" class="btn btn-inverse" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@include('adf')