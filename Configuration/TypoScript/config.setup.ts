### These are just some global defaults that make sense to me
### Some of the settings can be ignored if you set disableAllHeaderCode to 1

config {
	 # adminPanel
	admPanel = 0

	 # global settings
	disableImgBorderAttr = 1
	disablePrefixComment = 1
	inlineStyle2TempFile = 1
	removeDefaultJS = 1
	noPageTitle = 1

	 # Encoding, HTML
	doctype = html5
	renderCharset = utf-8
	extTarget >

	 # Spam Protection for Email
	spamProtectEmailAddresses = ascii

	 # RealURL
	baseURL = {$baseUrl}
	simulateStaticDocuments = 0
	tx_realurl_enable = 1
	prefixLocalAnchors = all
	typolinkCheckRootline = 1
	typolinkEnableLinksAcrossDomains = 1
	uniqueLinkVars = 1
}