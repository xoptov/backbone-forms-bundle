$.mockjax({
    url: /^\/api\/form\/([\d]+)\/advert$/,
    urlParams: ["category"],
    contentType: "application/json",
    response: function(settings) {
        var category = parseInt(settings.urlParams.category);
        switch(category) {
            case 1:
                this.responseText = {
                    category: { type: "Hidden" },
                    title: { type: "Text", title: "Заголовок" },
                    description: { type: "TextArea", title: "Описание" },
                    price: { type: "Number", title: "Цена" },
                    auction: { type: "Select", title: "Возможен торг", options: {"1": "Да", "2": "Нет"} },
                    address: {
                        type: "Object",
                        subSchema: {
                            fiasId: { type: "Hidden" },
                            kladrId: { type: "Hidden" },
                            value: { type: "Text", title: "Адрес" }
                        }
                    }
                };
                break;
            case 2:
                this.responseText = {
                    category: { type: "Hidden" },
                    title: { type: "Text", title: "Заголовок" },
                    description: { type: "TextArea", title: "Описание" },
                    price: { type: "Number", title: "Цена" },
                    auction: { type: "Select", title: "Возможен торг", options: {"1": "Да", "2": "Нет"} },
                    address: {
                        type: "Object",
                        subSchema: {
                            fiasId: { type: "Hidden" },
                            kladrId: { type: "Hidden" },
                            value: { type: "Text", title: "Адрес" }
                        }
                    },
                    params: {
                        type: "Object",
                        subSchema: {
                            mark: { type: "Text", title: "Марка", editorClass: "selectable" },
                            model: { type: "Text", title: "Модель", editorClass: "selectable", editorAttrs: {"data-parent": "mark"}},
                            transmission: { type: "Text", title: "Коробка передач", editorClass: "selectable" }
                        }
                    }
                };
                break;
            case 3:
                this.responseText = {
                    category: { type: "Hidden" },
                    title: { type: "Text", title: "Заголовок" },
                    description: { type: "TextArea", title: "Описание" },
                    price: { type: "Number", title: "Цена" },
                    auction: { type: "Select", title: "Возможен торг", options: {"1": "Да", "2": "Нет"} },
                    address: {
                        type: "Object",
                        subSchema: {
                            fiasId: { type: "Hidden" },
                            kladrId: { type: "Hidden" },
                            value: { type: "Text", title: "Адрес" }
                        }
                    },
                    params: {
                        type: "Object",
                        subSchema: {
                            area: { type: "Text", title: "Площадь" },
                            action: { type: "Text", title: "Действие", editorClass: "selectable" },
                            construction: { type: "Text", title: "Технология строительства", editorClass: "selectable" },
                            rooms: { type: "Text", title: "Количество комнат" },
                            floor: { type: "Text", title: "Этаж" },
                            nos: { type: "Text", title: "Этажность дома"}
                        }
                    }
                };
                break;
        }
    }
});