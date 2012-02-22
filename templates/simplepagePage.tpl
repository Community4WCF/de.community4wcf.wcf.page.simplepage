{include file="documentHeader"}
<head>
	<title>{lang}{SIMPLEPAGE_TITLE}{/lang} - {lang}{PAGE_TITLE}{/lang}</title>
	{include file='headInclude' sandbox=false}
</head>
<body{if $templateName|isset} id="tpl{$templateName|ucfirst}"{/if}>
{include file='header' sandbox=false}

<div id="main">
	<ul class="breadCrumbs">
		<li><a href="index.php?page=Index{@SID_ARG_2ND}"><img src="{icon}indexS.png{/icon}" alt="" /> <span>{lang}{PAGE_TITLE}{/lang}</span></a> &raquo;</li>
	</ul>

	<div class="mainHeadline">
		<img src="{icon}simplepageL.png{/icon}" alt="" />
		<div class="headlineContainer">
			<h2>{lang}{SIMPLEPAGE_TITLE}{/lang}</h2>
			<p>{lang}{SIMPLEPAGE_DESCRIPTION}{/lang}</p>
		</div>
	</div>
	
	{if $userMessages|isset}{@$userMessages}{/if}
	
	{if $additionalTopContents|isset}{@$additionalTopContents}{/if}
	
	<div class="border content">
		<div class="container-1">
			{lang}{@$simplepage}{/lang}
			{if $additionalContents|isset}{@$additionalContents}{/if}
		</div>
	</div>
	
	{if $additionalBottomContents|isset}{@$additionalBottomContents}{/if}
	
	{if $additionalBoxes|isset}{@$additionalBoxes}{/if}
	
	{if SIMPLEPAGE_BRANDINGFREE != 1}
	<div> 
		<div>
			<div style="text-align: center;">{lang}wcf.global.page.simplepage.copyright{/lang}</div>
		</div>
	</div>
	{/if}
</div>

{include file='footer' sandbox=false}
</body>
</html>