 ### css_styled_content ###

 # disable css_styled_content default styles
plugin.tx_cssstyledcontent {
	_CSS_DEFAULT_STYLE >
}

 # remove csc-header classes and "c<uid>" ids
tt_content.stdWrap.innerWrap.cObject >

 # remove csc-header classes
lib.stdheader {
	stdWrap.dataWrap >
	2.headerStyle >
	3.headerClass >
}
 # remove class="bodytext"
lib.parseFunc_RTE.nonTypoTagStdWrap.encapsLines.addAttributes.P.class >