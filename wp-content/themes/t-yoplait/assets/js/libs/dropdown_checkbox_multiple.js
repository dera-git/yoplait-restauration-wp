(function($) {
    var CheckboxDropdown = function(el) {
      var _this = this;
      this.isOpen = false;
      this.areAllChecked = false;
      this.$el = $(el);
      this.$label = this.$el.find('.custom-dropdown-label');
      this.$labelText = this.$label.text();
      this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
      this.$inputs = this.$el.find('[type="checkbox"]');
      
      this.onCheckBox();
      
      this.$label.on('click', function(e) {
        let not_this_label = $('.custom-dropdown-label').not(this);
        let not_this_label_active = $('.custom-dropdown.on').find(not_this_label);
        e.preventDefault();
        not_this_label_active.trigger("click");
        _this.toggleOpen();
      });
      
      this.$checkAll.on('click', function(e) {
        e.preventDefault();
        _this.onCheckAll();
      });
      
      this.$inputs.on('change', function(e) {
        _this.onCheckBox();
      });
    };
    
    CheckboxDropdown.prototype.onCheckBox = function() {
      this.updateStatus();
    };
    
    CheckboxDropdown.prototype.updateStatus = function() {
      var checked = this.$el.find(':checked');
      
      this.areAllChecked = false;
      this.$checkAll.html('Sélectionner tout');
      
      if(checked.length <= 0) {
        this.$label.html(this.$labelText);
        this.$label.removeClass('has-value');
      }
      else if(checked.length === 1) {
        this.$label.html(checked.siblings('label').text());
        this.$label.addClass('has-value');
      }
      else if(checked.length === this.$inputs.length) {
        this.$label.html('Tout sélectionné');
        this.areAllChecked = true;
        this.$checkAll.html('Désélectionner tout');
        this.$label.addClass('has-value');
      }
      else {
        this.$label.html(checked.length + ' Sélectionnés');
        this.$label.addClass('has-value');
      }
    };
    
    CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
      if(!this.areAllChecked || checkAll) {
        this.areAllChecked = true;
        this.$checkAll.html('Désélectionner tout');
        this.$inputs.prop('checked', true);
      }
      else {
        this.areAllChecked = false;
        this.$checkAll.html('Sélectionner tout');
        this.$inputs.prop('checked', false);
      }
      
      this.updateStatus();
    };
    
    CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
      var _this = this;
      
      if(!this.isOpen || forceOpen) {
         this.isOpen = true;
         this.$el.addClass('on');
        $(document).on('click', function(e) {
          if(!$(e.target).closest('[data-control]').length) {
           _this.toggleOpen();
          }
        });
      }
      else {
        this.isOpen = false;
        this.$el.removeClass('on');
        $(document).off('click');
      }
    };
    
    var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
    for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
      new CheckboxDropdown(checkboxesDropdowns[i]);
    }
})(jQuery);