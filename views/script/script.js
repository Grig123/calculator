$(document).ready(function () {
    calcManager.init();
});

var calcManager = {
    init: function () {

        this.calcBtn = $(".f_calc");
        this.expression = $(".f_expression");
        this.result = $(".f_result");

        this.calculate();
    },
    calculate: function () {
        var self = this;

        self.calcBtn.on("click", function () {
            self.showLoader();

            var _expression = self.expression.val().trim();
            var _url = $(this).data("action");
            
            $.ajax({
                url: _url,
                data: {
                    expression: _expression
                },
                success: function (response) {
                    self.result.val(response);
                    self.hideLoader();
                }
            });
        });
    },
    showLoader: function () {
        $(".main_loader").fadeIn(300);
    },
    hideLoader: function () {
        $(".main_loader").fadeOut(300);
    }
};