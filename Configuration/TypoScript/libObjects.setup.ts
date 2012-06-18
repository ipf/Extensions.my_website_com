
 ### mainNavigation ###

lib.mainNavigation = HMENU
lib.mainNavigation {
	entryLevel = 0
	1 = TMENU
	1 {
		expAll = 0
		noBlur = 1
		NO = 1
		NO {
			wrapItemAndSub = <li> | </li>
			stdWrap.htmlSpecialChars = 1
		}
		ACT < .NO
		ACT.wrapItemAndSub = <li class="active"> | </li>

		wrap = <ul class="nav"> | </ul>
	}
}