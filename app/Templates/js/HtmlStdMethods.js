var HtmlStdMethods = (function(){
    var HtmlStdMethods = function()
    {
        _registerStdMethods();
    }

    var _registerStdMethods = function()
    {
        _registerAjaxAction();
        _registerFormSubmitDisable();
    }

    var _registerAjaxAction = function()
    {
        var objs = $('[data-method="ajax-action"]');
        objs.off('click');
        objs.click(function(e) {

            var target = $(this).data('target');
            var targetMode = $(this).data('target-mode');
            var loading = $(this).data('loading');
            var doDefault = $(this).data('default');
            var url = $(this).attr('href');

            if (!doDefault) {
                e.preventDefault();
            }

            if (!url) {
                return false;
            }

            if ($(this).attr('data-confirm')) {
                var x = confirm($(this).attr('data-confirm'));
                if (!x) {
                    return x;
                }
            }

            /*
            if (loading) {
                var btn = $(this);
                if (btn.button) {
                    btn.button('loading');
                }
            }*/

            $.ajax({
                url: url,
                type: 'GET',
                complete: function(xhr, textStatus) {
                },
                success: function(data, textStatus, xhr) {
                    if (targetMode == 'append') {
                        $('#' + target).append(data);
                    } else {
                        $('#' + target).html(data);
                    }
                    _registerStdMethods();
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Ajax error');
                },
                complete: function () {
                    /*
                    if (btn.button) {
                        btn.button('reset');
                    }
                    */
                }
            });
            return false;
        });
    }

    var _registerFormSubmitDisable = function()
    {
        var objs = $('form.form-submit-disable');
        objs.submit(function(event) {
            var self = $(this);
            var button = $("[type='submit']", this);
            if (button) {
                var msg = button.data('disable');
                if (!msg) {
                    msg = '<i class="fa fa-spinner fa-pulse fa-fw"></i> Sending...'
                }
                button.attr('disabled', 'disabled');
                button.html(msg);
            }
        });
    };

    return HtmlStdMethods;
})();
