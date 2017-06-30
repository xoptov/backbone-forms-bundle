;(function(Form){

    Form.template = _.template("\
        <div data-fieldsets></div>\
            <% if (submitButton) { %>\
                <button type=\"submit\" class=\"btn\"><%= submitButton %></button>\
            <% } %>\
        ");

    var defaultTemplate = _.template("\
        <div class=\"form-group\ field-<%= key %>\">\
            <label class=\"col-sm-2 control-label\" for=\"<%= editorId %>\"><%= title %></label>\
            <div class=\"col-sm-10\">\
                <span data-editor></span>\
                <div data-error></div>\
                <% if (help) { %>\
                    <div><%= help %></div>\
                <% } %>\
            </div>\
        </div>\
    ");

    Form.Field.prototype.template = function(data) {
        if (this.editor instanceof Form.editors.Object) {
            return _.template("<div><span data-editor></span></div>")(data);
        }

        return defaultTemplate(data);

    };

    Form.NestedField.prototype.template = defaultTemplate;

})(Backbone.Form);