<div class="profileContent">
	<h1>{_Share and interact}</h1>
	<form name="social_form" id="social_form">
		<p style="display:none">
			<label for="newsletter">{_Subscribe to a newsletter}</label>
			<select id="newsletter">
			<!-- BEGIN newsletter.option -->
				<option value="{$news.value}" {$news.selected}>{$news.text}</option>
			<!-- END newsletter.option -->
			</select>
		</p>
		<p>
			<label for="twitter">{_Share on Twitter}</label>
			<input type="checkbox" id="twitter" {$checked.twitter}>
		</p>
		<p>
			<label for="google">{_Share on Google+}</label>
			<input type="checkbox" id="google" {$checked.google}>
		</p>
		<p>
			<label for="shaarli">{_Share on Shaarli}</label>
			<input type="checkbox" id="shaarli" {$checked.shaarli}>
		</p>
		<p>
			<label for="shaarli_instance">{_Shaarli instance}</label>
			<input type="text" id="shaarli-instance" value="{$shaarli_instance}"><br/>
			<span class="description">{_(eg. http://website.tld/shaarli}</span>
		</p>
		<p>
			<label for="statusnet">{_Share on StatusNet}</label>
			<input type="checkbox" id="statusnet" {$checked.statusnet}>
		</p>
		<p>
			<label for="statusnet_account">{_StatusNet account}</label>
			<input type="text" id="statusnet-account" value="{$statusnet_account}"><br/>
			<span class="description">{_(eg. http://identi.ca/myaccount or http://statusnet.example.com)}</span>
		</p>
		<p>
			<input type="submit" id="apply" class="button" value="{_Update}">
		</p>
	</form>
</div>
<script type="text/javascript" src="{$planet.url}/user/tpl/js/social.js" ></script>
