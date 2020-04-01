"use strict";

// Class definition

var KTBootstrapNotifyDemo = function () {
    
    // Private functions

    // basic demo
    var demo = function () {
        // init bootstrap switch
        $('[data-switch=true]').bootstrapSwitch();

        // handle the demo
        $('#kt_notify_btn').click(function() {
            var content = {};

            content.message = 'New order has been placed';
            if ($('#kt_notify_title').prop('checked')) {
                content.title = 'Notification Title';
            }
            if ($('#kt_notify_icon').val() != '') {
                content.icon = 'icon ' + $('#kt_notify_icon').val();
            }
            if ($('#kt_notify_url').prop('checked')) {
                content.url = 'www.keenthemes.com';
                content.target = '_blank';
            }

            var notify = $.notify(content, { 
                type: 'success',
                allow_dismiss: $('#kt_notify_dismiss').prop('checked'),
                newest_on_top: $('#kt_notify_top').prop('checked'),
                mouse_over:  $('#kt_notify_pause').prop('checked'),
                showProgressbar:  $('#kt_notify_progress').prop('checked'),
                spacing: $('#kt_notify_spacing').val(),                    
                timer:15000,
                placement: {
                    from: 'bottom', 
                    align:'center'
                },
                offset: {
                    x: $('#kt_notify_offset_x').val(), 
                    y: $('#kt_notify_offset_y').val()
                },
                delay: 15000,
                z_index: $('#kt_notify_zindex').val(),
                animate: {
                    enter: 'flash',
                    exit: 'animated fadeOutUp'
                }
            });

            if ($('#kt_notify_progress').prop('checked')) {
                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> Page Data.');
                    notify.update('type', 'primary');
                    notify.update('progress', 20);
                }, 1000);

                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> User Data.');
                    notify.update('type', 'warning');
                    notify.update('progress', 40);
                }, 2000);

                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> Profile Data.');
                    notify.update('type', 'danger');
                    notify.update('progress', 65);
                }, 3000);

                setTimeout(function() {
                    notify.update('message', '<strong>Checking</strong> for errors.');
                    notify.update('type', 'success');
                    notify.update('progress', 100);
                }, 4000);
            }
        });
    }

    return {
        // public functions
        init: function() {
            demo();
        }
    };
}();

jQuery(document).ready(function() {    
    KTBootstrapNotifyDemo.init();
});