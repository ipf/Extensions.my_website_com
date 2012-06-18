 ### New page permissions ###

TCEMAIN {
	permissions.groupid = 1
	permissions.group = show,edit,delete,new,editcontent
	table {
		pages {
			disablePrependAtCopy = 1
		}
		tt_content {
			disablePrependAtCopy = 1
		}
	}
}


 ### RTE ###

RTE.default {
	contentCSS = EXT:my_website_com/Resources/Public/Css/rte.css
	hidePStyleItems = H5,H6,pre,address,div,blockquote
	showButtons = class, blockstylelabel, blockstyle, textstylelabel, textstyle, formatblock, bold, italic, unorderedlist, link, undo, redo
	showTagFreeClasses = 1
	classesParagraph =
	allowedClasses =
	classesCharacter =
	classesAnchor := addToList(btn, btn btn-primary, btn btn-info, btn btn-success, btn btn-warning, btn btn-danger, btn btn-inverse, external)
	classesAnchor := removeFromList(internal-link, internal-link-new-window, external-link, external-link-new-window)
	classesAnchor.default {
		page =
		url = external
		file = download
		mail = mail
	}
	proc {
		allowedClasses < RTE.default.allowedClasses
		allowTags = a, b, br, div, em, h1, h2, h3, h4, h5, h6, hr, i, li, link, ol, p, span, strong, u, ul
		keepPDIVattribs = class
		HTMLparser_db.xhtml_cleaning = 1
		entryHTMLparser_db {
			allowTags < RTE.default.proc.allowTags
			tags {
				span.fixAttrib >
				span.allowedAttribs = title, lang, xml:lang, class
				p.allowedAttribs < .span.allowedAttribs
				hr.allowedAttribs = class
				b.allowedAttribs < .span.allowedAttribs
				em.allowedAttribs < .span.allowedAttribs
				i.allowedAttribs < .span.allowedAttribs
				u.allowedAttribs < .span.allowedAttribs
				div.allowedAttribs < .span.allowedAttribs
			}
		}
	}
	FE {
		proc  {
			allowedClasses < RTE.default.allowedClasses
		}
	}
	buttons.link.targetSelector.disabled = 1
}
RTE
	classesAnchor {
		externalLink.class = external
		externalLinkInNewWindow >
		internalLink.class =
		internalLinkInNewWindow >
	}
}