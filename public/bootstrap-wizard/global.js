// (function ($) {
//     'use strict';
//     /*[ Wizard Config ]
//         ===========================================================*/
    
//     try {
    
// 		const lenght = $('ul.nav-tab li').length
// 		console.log(lenght)
//         $("#js-wizard-form").bootstrapWizard({
//             'tabClass' : 'nav-tab',
//             'nextSelector': '.btn-next',
//             'previousSelector' : '.btn-back',
//             'lastSelector': '.btn-last',
//             'onNext': function(tab, navigation, index) {
//                 var progressBar = $('#js-progress').find('.progress-bar');
//                 var progressVal = $('#js-progress').find('.progress-val');
//                 var current = index + 1;
//                 if (current > 1) {
//                     var val = parseInt(progressBar.text());
//                     val += Math.ceil(100/lenght);
//                     progressBar.css('width', val+ '%');
//                     progressVal.text(val+'%');
//                 }
				
//             },
//             'onPrevious' : function(tab, navigation, index) {
//                 var progressBar = $('#js-progress').find('.progress-bar');
//                 var progressVal = $('#js-progress').find('.progress-val');
//                 var current = index - 1;
//                 if (current !== 1) {
//                     var val = parseInt(progressBar.text());
//                     val -= Math.ceil(100/lenght);
//                     progressBar.css('width', val+ '%');
//                     progressVal.text(val+'%');
//                 }
    
//             }
    
//         });
    
//     }
//     catch (e) {
//         console.log(e)
//     }

// })(jQuery);


