page = PAGE
page {
	typeNum = 0

		### NOTE: Make sure you know what you're doing here:
		### By disabling the creation of the header, Extensions can't register their custom styles / scripts anymore.
		### You'll have to include all required assets in the Fluid template or create a ViewHelper that renders those.
	config.disableAllHeaderCode = 1

	10 = FLUIDTEMPLATE
	10 {
		file = EXT:my_website_com/Resources/Private/Templates/Site.html

			### set the extension name (UpperCamelCase version of the Extension key) in order to be able to specify
			### resource/locallang paths relatively
		extbase.controllerExtensionName = MyWebsiteCom

		variables {
			mainContent < styles.content.get
			secondaryContent < styles.content.getLeft

				### the placeholder {layout} will be set to "Default" by default.
				### If the backend layout with uid #2 is selected, it is "Wide" instead.
				### Feel free to rename and/or add additional cases
			layout = CASE
			layout {
				key.data = levelfield:-1,backend_layout_next_level,slide
				key.override.field = backend_layout

				default = TEXT
				default.value = Default

				2 = TEXT
				2.value = Wide
			}
		}
	}
}
