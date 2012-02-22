{include file="documentHeader"}
<head>
	<title>{if REGISTER_ENABLE_DISCLAIMER}{lang}wcf.user.register.disclaimer.title{/lang}{else}{lang}{SIMPLEPAGE_TITLE}{/lang}{/if} - {lang}{PAGE_TITLE}{/lang}</title>
	{include file='headInclude' sandbox=false}
</head>
<body{if $templateName|isset} id="tpl{$templateName|ucfirst}"{/if}>
{include file='header' sandbox=false}

<div id="main">

	<ul class="breadCrumbs">
		<li><a href="index.php?page=Index{@SID_ARG_2ND}"><img src="{icon}indexS.png{/icon}" alt="" /> <span>{lang}{PAGE_TITLE}{/lang}</span></a> &raquo;</li>
	</ul>
	
	<div class="mainHeadline">
		<img src="{icon}registerL.png{/icon}" alt="" />
		<div class="headlineContainer">
			{if REGISTER_ENABLE_DISCLAIMER}
				<h2>{lang}wcf.user.register.disclaimer.title{/lang}</h2>
			{else}
				<h2>{lang}{SIMPLEPAGE_TITLE}{/lang}</h2>
				<p>{lang}{SIMPLEPAGE_DESCRIPTION}{/lang}</p>
			{/if}
		</div>
	</div>
	
	{if $userMessages|isset}{@$userMessages}{/if}
	
	<form method="get" action="index.php">
		<div class="border content">
			<div class="container-1 contentStyler">
				{if REGISTER_ENABLE_DISCLAIMER}
					<h3 class="subHeadline">{lang}wcf.user.register.disclaimer.title{/lang}</h3>
					{lang}wcf.user.register.disclaimer{/lang}
					<h3 class="subHeadline">{lang}{SIMPLEPAGE_TITLE}{/lang}</h3>
				{/if}
					{lang}{@$simplepage}{/lang}
			</div>
		</div>
	
		<div class="formSubmit">
			<input type="submit" accesskey="a" value="{lang}wcf.user.register.disclaimer.button.accept{/lang}" />
			<input type="submit" name="decline" accesskey="d" value="{lang}wcf.user.register.disclaimer.button.decline{/lang}" />
		</div>
	
		<input type="hidden" name="page" value="Register" />
		<input type="hidden" name="action" value="register" />
		{@SID_INPUT_TAG}
	</form>

</div>

{include file='footer' sandbox=false}
</body>
</html>