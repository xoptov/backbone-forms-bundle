$(function() {
    var Advert = Backbone.Model.extend({
        urlRoot: "https://www.linbo.ru/api/advert"
    });

    var advert = new Advert();
    var form = null;
    var $formArea = $("#form-area");

    $("select[name=category]").on("change", function(e) {
        var $target = $(e.target);
        var categoryId = parseInt($target.val());

        if (categoryId) {
            advert.set("category", categoryId);
            switchForm(categoryId);
        }
    });

    function switchForm(categoryId)
    {
        $.ajax({
            url: "/api/form/" + categoryId + "/advert",
            success: successHandler,
            error: errorHandler
        });
    }

    function successHandler(resp) {
        // remove previous form correct!
        if (form) {
            form.commit();
            form.remove();
        }

        form = new Backbone.Form({
            model: advert,
            submitButton: "submit",
            idPrefix: "advert-",
            schema: resp
        });

        form.on("submit", function(e) {
            e.preventDefault();
            debugger;
        });

        form.render();
        makeSelectable(form);

        $formArea.html(form.el);
    }

    function errorHandler(xhr) {
        debugger;
    }

    function makeSelectable(form) {
        form.$el.find("input.selectable").each(_.bind(function(i, el){
            var $el = $(el);
            var parent = $el.data("parent");

            if (_.isUndefined(parent)) {
                $el.selectize({
                    preload: true,
                    options: [
                        {text: "one", value: 1},
                        {text: "two", value: 2}
                    ],
                    load: function(query, callback) {
                        if (!query) return callback();

                    }
                });
            } else {
                $el.selectize({
                    preload: false,
                    options: [
                        {text: "one", value: 1},
                        {text: "two", value: 2}
                    ],
                    load: _.bind(function(query, callback) {
                        if (!query) return callback();
                    }, this)
                });
            }
        }, form));
    }
});