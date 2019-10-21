define([
    'uiComponent',
    'Magento_Customer/js/customer-data'
], function (Component, customerData) {
    'use strict';

    return Component.extend({
        initialize: function () {
            this._super();
            // di: likipe_privatecontent
            this.likipe_privatecontentok = customerData.get('likipe_privatecontent');
            console.log(this.likipe_privatecontentok());
        }
    });
});