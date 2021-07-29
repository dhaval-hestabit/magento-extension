define(
    [
        'ko',
        'uiComponent'
    ],
    function (ko, Component) {
        "use strict";

        return Component.extend({
            defaults: {
                template: 'Learning_Js/newsletter'
            },
            isRegisterNewsletter: true
        });
    }
);
