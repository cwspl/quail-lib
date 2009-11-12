<?php 

class Wcag2aaaGuideline extends quailGuideline{
	
	var $tests = array(
		'imgHasAlt',
		'imgAltIsDifferent',
		'imgAltIsTooLong',
		'imgAltNotPlaceHolder',
		'imgAltNotEmptyInAnchor',
		'imgHasLongDesc',
		'imgAltIsSameInText',
		'imgAltEmptyForDecorativeImages',
		'appletContainsTextEquivalentInAlt',
		'appletContainsTextEquivalent',
		'inputImageHasAlt',
		'inputImageAltIdentifiesPurpose',
		'inputImageAltIsShort',
		'inputImageAltIsNotPlaceholder',
		'areaHasAltValue',
		'areaAltIdentifiesDestination',
		'objectMustContainText',
		'embedHasAssociatedNoEmbed',
		'inputImageNotDecorative',
		'inputElementsDontHaveAlt',
		'aLinksToSoundFilesNeedTranscripts',
		'aLinksToMultiMediaRequireTranscript',
		'objectShouldHaveLongDescription',
		'inputTextHasLabel',
		'pNotUsedAsHeader',
		'selectHasAssociatedLabel',
		'textareaHasAssociatedLabel',
		'textareaLabelPositionedClose',
		'tableComplexHasSummary',
		'tableSummaryIsEmpty',
		'tableLayoutHasNoSummary',
		'tableLayoutHasNoCaption',
		'passwordHasLabel',
		'checkboxHasLabel',
		'fileHasLabel',
		'radioHasLabel',
		'passwordLabelIsNearby',
		'checkboxLabelIsNearby',
		'fileLabelIsNearby',
		'radioLabelIsNearby',
		'tableDataShouldHaveTh',
		'tableLayoutDataShouldNotHaveTh',
		'tableUsesCaption',
		'preShouldNotBeUsedForTabularLayout',
		'radioMarkedWithFieldgroupAndLegend',
		'tableSummaryDescribesTable',
		'tableIsGrouped',
		'tableUseColGroup',
		'tabularDataIsInTable',
		'tableCaptionIdentifiesTable',
		'tableSummaryDoesNotDuplicateCaption',
		'tableWithBothHeadersUseScope',
		'tableWithMoreHeadersUseID',
		'inputCheckboxRequiresFieldset',
		'documentVisualListsAreMarkedUp',
		'documentReadingDirection',
		'tableLayoutMakesSenseLinearized',
		'boldIsNotUsed',
		'iIsNotUsed',
		'basefontIsNotUsed',
		'fontIsNotUsed',
		'inputDoesNotUseColorAlone',
		'objectDoesNotUseColorAlone',
		'scriptsDoNotUseColorAlone',
		'bodyColorContrast',
		'bodyLinkColorContrast',
		'bodyActiveLinkColorContrast',
		'bodyVisitedLinkColorContrast',
		'documentAllColorsAreSet',
		'bodyColorContrast',
		'bodyLinkColorContrast',
		'bodyActiveLinkColorContrast',
		'bodyVisitedLinkColorContrast',
		'objectInterfaceIsAccessible',
		'scriptUIMustBeAccessible',
		'scriptOndblclickRequiresOnKeypress',
		'scriptOnmousedownRequiresOnKeypress',
		'scriptOnmousemove',
		'scriptOnmouseoutHasOnmouseblur',
		'scriptOnmouseoverHasOnfocus',
		'scriptOnmouseupHasOnkeyup',
		'appletProvidesMechanismToReturnToParent',
		'objectProvidesMechanismToReturnToParent',
		'embedProvidesMechanismToReturnToParent',
		'documentMetaNotUsedWithTimeout',
		'blinkIsNotUsed',
		'marqueeIsNotUsed',
		'documentAutoRedirectNotUsed',
		'imgGifNoFlicker',
		'appletsDoNotFlicker',
		'objectDoesNotFlicker',
		'scriptsDoNotFlicker',
		'skipToContentLinkProvided',
		'framesHaveATitle',
		'frameTitlesDescribeFunction',
		'documentHasTitleElement',
		'documentTitleNotEmpty',
		'documentTitleIsShort',
		'documentTitleIsNotPlaceholder',
		'documentTitleDescribesDocument',
		'aMustContainText',
		'siteMap',
		'headerH1',
		'headerH2',
		'headerH3',
		'headerH4',
		'headerH4',
		'headerH1Format',
		'headerH2Format',
		'headerH3Format',
		'headerH4Format',
		'headerH5Format',
		'headerH6Format',
		'headersUseToMarkSections',
		'documentLangNotIdentified',
		'documentLangIsISO639Standard',
		'documentWordsNotInLanguageAreMarked',
		'selectDoesNotChangeContext',
		'tabIndexFollowsLogicalOrder',
		'listNotUsedForFormatting',
		'blockquoteNotUsedForIndentation',
		'blockquoteUseForQuotations',
		'aLinksDontOpenNewWindow',
		'documentIDsMustBeUnique',
		'imgAltIsSameInText',
		'documentAbbrIsUsed',
		'documentAcronymsHaveElement',
		'labelMustBeUnique',
		'labelMustNotBeEmpty',
		'formWithRequiredLabel',
		'formHasGoodErrorMessage',
		'formErrorMessageHelpsUser',
		'formDeleteIsReversable',
		'formErrorMessageHelpsUser',
		'formDeleteIsReversable',
	);
}