/**
 * Created by nguyenhoang on 07/05/2017.
 */

require(['jquery', 'jquery/ui'], function($){
    jQuery(".title_open_chatbox").click(function() {
        jQuery('.frm_chatbox').fadeIn();
        jQuery('.title_open_chatbox').hide();
    });
    jQuery(".title_close_chatbox").click(function() {
        jQuery('.title_open_chatbox').fadeIn();
        jQuery('.frm_chatbox').hide();
    });
});