(function(window) {
    'use strict';

    if (!!window.siteActions)
        return;

    window.siteActions = function(params)
    {
        this.sessId = BX.bitrix_sessid();
        this.initEvents();
        this.initConfigs();
    };

    window.siteActions.prototype = {

        initEvents: function()
        {
            //console.log('initEvents()');
        },

        initConfigs: function()
        {
            //console.log('initConfigs()');
        },


        /**
         * Функция склонения
		 * @param number
         * @param one
         * @param two
         * @param five
         * @param none
         * @returns {*}
         */
        declOfNum: function(number, one, two, five, none)
        {
            var isNum;
            if(number == 0){
                return none;
            }
            isNum = number;
            number = Math.abs(number);
            number %= 100;
            if (number >= 5 && number <= 20) {
                return isNum+five;
            }
            number %= 10;
            if (number == 1) {
                return isNum+one;
            }
            if (number >= 2 && number <= 4) {
                return isNum+two;
            }
            return isNum+five;
        },



    }
})(window);