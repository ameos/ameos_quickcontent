define(['jquery', 'TYPO3/CMS/Gridelements/GridElementsDragInWizard'], function ($, DragInWizard) {
    
    var QuickContent = {};
        
    QuickContent.toggleWizard = function () {
		var $wizard = $('#' + DragInWizard.wizardIdentifier);
		if ($wizard.length) {
			$wizard.toggle();
		} else {
			$wizard = $('<div id="' + DragInWizard.wizardIdentifier + '"></div>');
			$('.t3js-module-docheader').append($wizard);
			$wizard.load(DragInWizard.wizardUrl + ' .t3js-module-body div[role=\'tabpanel\']:first', function () {
				DragInWizard.makeItemsSortable();
				DragInWizard.rearrangeItems();
			});
			$wizard.css('visibility', 'visible');
		}
	};
    
	$(QuickContent.toggleWizard);
    return QuickContent;
});
