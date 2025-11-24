<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<base href="http://phytamp.pfba-lab-tun.org/" />
<meta http-equiv="PICS-Label" content='(PICS-1.1 "http://www.icra.org/ratingsv02.html" l gen true r (cz 1 lz 1 nz 1 oz 1 vz 1) "http://www.rsac.org/ratingsv01.html" l gen true r (n 0 s 0 v 0 l 0) "http://www.classify.org/safesurf/" l gen true r (SS~~000 1))' />
<link rel="schema.DC" href="http://purl.org/DC/elements/1.0/"/>
<link rel="SHORTCUT ICON" href="./images/favicon.ico"/>
<meta name="DC.Language" scheme="rfc1766" content="en-US" />
<meta name="security" content="public" />
<meta name="DC.Publisher" content="PFBA Laboratory, Tunisia" />
<meta name="owner" content="Riadh Hammami" />
<meta name="DC.Rights" content="© Copyright PhytAMP 2012" />
<meta name="author" content="Riadh HAMMAMI">
<meta name="description" content="PhytAMP database is a data repository of bacteriocin natural antimicrobial peptides developed by the Functional Proteomics and Alimentary Bio-preservation Research Unit at Institute of Applied Biological Sciences Tunis (ISSBAT), Tunisia in collaboration with Nutraceuticals and Functional Foods Institute (INAF), Laval University, Canada.">
<meta name="keywords" content="peptide, plant, database, phytamp, antimicrobial, peptide">
<meta name="robots" content="index, follow">
<title>PhytAMP Database</title>
<link rel="stylesheet" type="text/css" href="theme/menu.css"/>
<link rel="shortcut icon" href="theme/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" media="all" href="modules/aggregator/aggregator.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/book/book.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/node/node.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/poll/poll.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/system/defaults.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/system/system.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/system/system-menus.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/user/user.css" />
<link type="text/css" rel="stylesheet" media="all" href="modules/forum/forum.css" />
<link type="text/css" rel="stylesheet" media="all" href="theme/style.css" />
<link type="text/css" rel="stylesheet" media="all" href="theme/table_jui.css" />
<link type="text/css" rel="stylesheet" media="all" href="theme/smoothness/jquery-ui-1.8.17.custom.css" />
<link href="PhytAMP.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="theme/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="theme/build/animation/animation-min.js"></script>
<script type="text/javascript" src="theme/build/container/container_core-min.js"></script>
<script type="text/javascript" src="theme/build/menu/menu-min.js"></script>

<script type="text/javascript">
            //<![CDATA[
            // Initialize and render the menu bar when it is available in the DOM
            YAHOO.util.Event.onContentReady("productsandservices", function () {
            var oMenuBar = new YAHOO.widget.MenuBar("productsandservices", { 
                                                            autosubmenudisplay: true, 
                                                            hidedelay: 750, 
                                                            lazyload: true });

var oSubmenuData = [
         
{
id: "About",
	itemdata: [
	]},
{
id: "Search",
	itemdata: [
	{ text: "General data", url: "search.php?view=GeneralView" },
	{ text: "Physicochemical data", url: "search.php?view=PhysicoView" },
	{ text: "Structural data", url: "search.php?view=3DView" },
	{ text: "Literature", url: "referencessrch.php" },
	{ text: "Taxonomy", url: "search.php?view=Taxa" }
	]},

{
id: "Browse",
	itemdata: [
	{ text: "General data", url: "entrieslist.php?view=GeneralView" },
	{ text: "Physicochemical data", url: "entrieslist.php?view=PhysicoView" },
	{ text: "Structural data", url: "entrieslist.php?view=3DView" },
	{ text: "Literature", url: "referenceslist.php" },
	{ text: "Taxonomy", url: "taxonomy.php" }
	]},
{
id: "tools",
	itemdata: [
	{ text: "Similarity search",url: "blast",
		submenu: { id: "@q=Blog", itemdata: [
		{ text: "BLAST", url: "blast" },
		{ text: "FASTA", url: "fasta" },
		{ text: "SSEARCH", url: "ssearch" }
	]}},

	{ text: "Sequence Alignement", url: "clustal",
		submenu: { id: "@q=Blog", itemdata: [
		{ text: "CLUSTAL", url: "clustal" },
		{ text: "MUSCLE", url: "muscle" }
	]}},

	{ text: "Physicochemical Profile",url: "physicochem"},
	{ text: "Hidden Markov Models",url: "hmm"}
]},
{
id: "Statistics",
	itemdata: [
	]},
];

var ua = YAHOO.env.ua,
                    oAnim;  // Animation instance
                function onSubmenuBeforeShow(p_sType, p_sArgs) {
                    var oBody,
                        oElement,
                        oShadow,
                        oUL;
                    if (this.parent) {
                        oElement = this.element;
                        oShadow = oElement.lastChild;
                        oShadow.style.height = "0px";
                        if (oAnim && oAnim.isAnimated()) {
                            oAnim.stop();
                            oAnim = null;
                        }
                        oBody = this.body;
                        //  Check if the menu is a submenu of a submenu.
                        if (this.parent && 
                            !(this.parent instanceof YAHOO.widget.MenuBarItem)) {
                            if (ua.gecko) {
                                oBody.style.width = oBody.clientWidth + "px";
                            }
                            if (ua.ie == 7) {
                                oElement.style.width = oElement.clientWidth + "px";
                            }
                        }
                        oBody.style.overflow = "hidden";
                        oUL = oBody.getElementsByTagName("ul")[0];
                        oUL.style.marginTop = ("-" + oUL.offsetHeight + "px");
                    }
                }

               function onTween(p_sType, p_aArgs, p_oShadow) {
                    if (this.cfg.getProperty("iframe")) {
                        this.syncIframe();
                    }
                    if (p_oShadow) {
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    }
                }
                function onAnimationComplete(p_sType, p_aArgs, p_oShadow) {
                    var oBody = this.body,
                        oUL = oBody.getElementsByTagName("ul")[0];
                    if (p_oShadow) {
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    }
                    oUL.style.marginTop = "";
                    oBody.style.overflow = "";
                    //  Check if the menu is a submenu of a submenu.
                    if (this.parent && 
                        !(this.parent instanceof YAHOO.widget.MenuBarItem)) {
                        // Clear widths set by the "beforeshow" event handler
                        if (ua.gecko) {
                            oBody.style.width = "";
                        }
                        if (ua.ie == 7) {
                            this.element.style.width = "";
                        }
                    }
                }
                function onSubmenuShow(p_sType, p_sArgs) {
                    var oElement,
                        oShadow,
                        oUL;
                    if (this.parent) {
                        oElement = this.element;
                        oShadow = oElement.lastChild;
                        oUL = this.body.getElementsByTagName("ul")[0];
                        oAnim = new YAHOO.util.Anim(oUL, 
                            { marginTop: { to: 0 } },
                            .5, YAHOO.util.Easing.easeOut);
                        oAnim.onStart.subscribe(function () {
                            oShadow.style.height = "100%";
                        });
                        oAnim.animate();
                        if (YAHOO.env.ua.ie) {
                            oShadow.style.height = oElement.offsetHeight + "px";
                            oAnim.onTween.subscribe(onTween, oShadow, this);
                        }
                        oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);
                    }
                }

oMenuBar.subscribe("beforeRender", function () {
                    if (this.getRoot() == this) {
						this.getItem(1).cfg.setProperty("submenu", oSubmenuData[1]);
						this.getItem(2).cfg.setProperty("submenu", oSubmenuData[2]);
						this.getItem(3).cfg.setProperty("submenu", oSubmenuData[3]);
					}
			}); 
oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
                oMenuBar.subscribe("show", onSubmenuShow);
oMenuBar.render();            
            });
            //]]>
            </script>

<script type="text/javascript" src="theme/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="theme/js/jquery-ui-1.8.7.custom.min.js"></script>

<script type="text/javascript" src="theme/js/jquery.textarearesizer.compressed.js"></script>
<script type="text/javascript" src="theme/js/swfobject.js"></script>

<script type="text/javascript" src="theme/js/cufon-yui.js"></script>
<script type="text/javascript" src="theme/js/Swiss_721_5F400.font.js"></script>
<script type="text/javascript" src="theme/js/Swiss_721ligh.font.js"></script>
<script type="text/javascript" src="theme/js/cufon-replace.js"></script>

<script type="text/javascript" src="theme/js/phytamp.min.js"></script>
<script type="text/javascript" src="phytamp.js"></script>
<script type="text/Javascript" src="autosuggest.js"></script>
<script type="text/javascript" src="mtmtrack.js"></script>
<script type="text/javascript" src="tabcontent.js"></script>

<script type="text/javascript">
<!--//--><![CDATA[//><!--
$(document).ready(function() { $('body').addClass('yui-skin-sam'); } );
//--><!]]>
</script>
	
	
	
	<script type="text/javascript">
		function preloadImages(imgs){
			var picArr = [];
			for (i = 0; i<imgs.length; i++){
				picArr[i]= new Image(100,100); 
				picArr[i].src=imgs[i]; 
			}
		}
	</script>
	
	<script type="text/javascript">
		preloadImages([
		'theme/logo.png',
		'theme/images/bot.png',
		'theme/images/top.png',
		'theme/images/menu-act.gif']);
	</script>
	
	<link href="theme/menu.css" rel="stylesheet" type="text/css"  />
	
</head>

<body id="body">

	<div class="main pages">
		<div class="main-bg">
			<div class="main-width">
				<div class="header">
					<div class="logo">
						<div class="indent">
						<h1><a href="main.php" title="Home"><img src="theme/logo.png" alt="Home" width="298" height="97" /></a></h1>
						</div>
					</div>
					<div class="wrapp">
						<div class="login">
							<a href="login.php">User login</a>
													</div>
						<div class="menu">
							<!-- YUI Menu div-->
							<div id="productsandservices" class="yuimenubar yuimenubarnav">
								<div class="bd">
									<ul  style="text-decoration:none" class="first-of-type">
										<li class="yuimenubaritem"><a href="about.php" class="yuimenubaritemlabel">About</a></li>
										<li class="yuimenubaritem"><a href="search.php" class="yuimenubaritemlabel">Search</a></li>
										<li class="yuimenubaritem"><a href="entrieslist.php" class="yuimenubaritemlabel">Browse</a></li>
										<li class="yuimenubaritem"><a href="tools.php" class="yuimenubaritemlabel">Tools</a></li>
										<li class="yuimenubaritem"><a href="statistics.php" class="yuimenubaritemlabel">Statistics</a></li>
									</ul>
								</div>
							</div>							
						</div>							
					</div>
				</div>
				
<!-- END OF HEADER -->								
								
				<div class="content">
						<div class="border-right">													
							<div class="column-center" style="width:738px;float:left;">
								<!-- start main content -->
<script type="text/javascript">
<!--
EW_LookupFn = "ewlookup.php"; // ewlookup file name
EW_AddOptFn = "ewaddopt.php"; // ewaddopt.php file name

//-->
</script>
<script type="text/javascript" src="ewp.js"></script>
<script type="text/javascript">
<!--
EW_dateSep = "/"; // set date separator
EW_UploadAllowedFileExt = "gif,jpg,jpeg,bmp,png,doc,xls,pdf,zip"; // allowed upload file extension

//-->
</script>
<script type="text/javascript">
<!--
function EW_checkMyForm(EW_this) {
if (EW_this.x_usr_email && !EW_hasValue(EW_this.x_usr_email, "TEXT")) {
	if (!EW_onError(EW_this, EW_this.x_usr_email, "TEXT", "Please enter required field - usr email"))
		return false;
}
if (EW_this.x_usr_email && !EW_checkemail(EW_this.x_usr_email.value)) {
	if (!EW_onError(EW_this, EW_this.x_usr_email, "TEXT", "Incorrect email - usr email"))
		return false; 
}
if (EW_this.x_Subject && !EW_hasValue(EW_this.x_Subject, "TEXT")) {
	if (!EW_onError(EW_this, EW_this.x_Subject, "TEXT", "Please enter required field - Subject"))
		return false;
}
if (EW_this.x_Comment && !EW_hasValue(EW_this.x_Comment, "TEXTAREA")) {
	if (!EW_onError(EW_this, EW_this.x_Comment, "TEXTAREA", "Please enter required field - Comment"))
		return false;
}
if (EW_this.x_date && !EW_checkdate(EW_this.x_date.value)) {
	if (!EW_onError(EW_this, EW_this.x_date, "TEXT", "Incorrect date, format = yyyy/mm/dd - date"))
		return false; 
}
return true;
}

//-->
</script>
<script type="text/javascript">
<!--
	var EW_DHTMLEditors = [];

//-->
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').TextAreaResizer();
	});
</script>

<p><span class="phpmaker">
<div class="column-center">				
<h2>Contact</h2>							
	<form name="fbac_feedbackadd" id="contact-mail-page" action="contacts.php" accept-charset="UTF-8" method="post" onSubmit="return EW_checkMyForm(this);">
		<div>You can leave a message using the contact form below.
			<div class="form-item" id="edit-name-wrapper">
			 <label for="edit-name">Your name: <span class="form-required" title="This field is required.">*</span></label>
			 <input type="text" maxlength="255" name="name" id="name" size="60" value="" class="form-text required">
			</div>
			<div class="form-item" id="edit-mail-wrapper">
			 <label for="x_usr_email">Your e-mail address: <span class="form-required" title="This field is required.">*</span></label>
			 <input type="text" maxlength="255" name="x_usr_email" id="x_usr_email" size="60" value="" class="form-text required">
			</div>
			<div class="form-item" id="edit-subject-wrapper">
			 <label for="x_Subject">Subject: <span class="form-required" title="This field is required.">*</span></label>
			 <input type="text" maxlength="255" name="x_Subject" id="x_Subject" size="60" value="" class="form-text required">
			</div>
			<div class="form-item" id="edit-message-wrapper">
			 <label for="x_Comment">Message: <span class="form-required" title="This field is required.">*</span></label>
			 <div class="resizable-textarea"><span><textarea cols="140" rows="5" name="x_Comment" id="x_Comment" class="form-textarea"></textarea></span></div>
			</div>
			<input type="submit" name="btnAction" id="btnAction" value="Send e-mail" class="form-submit">
			<input type="hidden" name="a_add" value="A">
		</div>
	</form>
</div>

							</div>
						<div class="border-right">
							<div class="column-right">

								<div class="block block-user" id="block-user">
									<div class="block block-search" id="block-search">
										<div class="title">
											<h3>Search :</h3>
										</div>

										<div class="indent">
											<form id="fentrieslistsrch" name="fentrieslistsrch" action="entrieslist.php" >
												<p>
													<input class="text" name="psearch" type="text" style="width:120px" value="Enter your keywords:" onfocus="if(this.value=='Enter your keywords:')this.value=''" onblur="if(this.value=='')this.value='Enter your keywords:'">
													<input class="but" name="" type="submit" value="Go">
												</p>
											</form>
										</div>

									</div>
									<div class="block-bg" id="right-menu">
																			</div>
									
								</div>

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
			<div class="footer-bg">
				<div class="width">
					<div class="indent">
						<div class="logo">
							<a href="main.php">PhytAMP</a>
						</div>
						<div class="wrapp">
							<div class="menu">
									<ul class="">
										<li class="first menu-228"><a href="submit_sequence.php"><span  title="" class="menu-228"><span>Submit a sequence</span></span></a></li>
										<li class="menu-215"><a href="links.php"><span  title="" class="menu-215"><span>Links</span></span></a></li>
										<li class="menu-215"><a href="faq.php"><span  title="" class="menu-215"><span>FAQs</span></span></a></li>
										<li class="menu-210"><a href="contacts.php"><span  title="" class="menu-210"><span>Contact</span></span></a></li>
										<li class="menu-211"><a href="terms.php"><span  title="" class="menu-211"><span>Terms of use</span></span></a></li>
										<li class="last menu-243"><a href="sitemap.php"><span  title="" class="menu-243"><span>Site Map</span></span></a></li>
									</ul>
								</div>					
							<div class="copyright">PhytAMP  © 2012 : <a href="about.php">About</a> &nbsp;<!--{%FOOTER_LINK} -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">Cufon.now();</script>		
<script type="text/javascript">
$(document).ready( function () {
	$('.button').button();
});
</script>
</body>
</html>
