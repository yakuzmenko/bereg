/* JCE Editor - 2.3.2.4 | 27 March 2013 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2013 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
(function($){Joomla.submitbutton=submitbutton=function(button){try{Joomla.submitform(button);}catch(e){submitform(button);}};$.jce.Installer={init:function(options){$(":file").upload(options);if($('body').hasClass('ui-jquery')){$('button#upload_button').button({icons:{primary:'icon-install'}});$('#upload_button_container button').button({icons:{primary:'icon-browse'}});}
var n=$('#tabs-plugins, #tabs-extensions, #tabs-languages, #tabs-related').find('input[type="checkbox"]');$(n).click(function(){$('input[name="boxchecked"]').val($(n).filter(':checked').length);});$('#upload_button').click(function(e){$(this).addClass('loading');$('input[name="task"]').val('install');$('form[name="adminForm"]').submit();e.preventDefault();});$('button.install_uninstall').click(function(e){if($('div#tabs input:checkbox:checked').length){$(this).addClass('ui-state-loading');$('input[name="task"]').val('remove');$('form[name="adminForm"]').submit();}
e.preventDefault();});}};})(jQuery);