(function($) {
    "use strict";
    $(document).ready(function(){
       
        //kl-dropdown-select
        $("#id-select-temps").select2({
            placeholder: "Temps de préparation",
            minimumResultsForSearch: Infinity,
            selectionCssClass: 'kl-select2-selection--single',
            dropdownParent: $('#id-select-temps-dropdown'),
            allowClear: true,
            width: "100%",
        });
        
        $("#id-select-ingredients").select2({
            placeholder: "Ingrédients",
            minimumResultsForSearch: Infinity,
            selectionCssClass: 'kl-select2-selection--single',
            dropdownParent: $('#id-select-ingredients-dropdown'),
            allowClear: true,
            width: "100%",
        });
        
    });

})(jQuery);