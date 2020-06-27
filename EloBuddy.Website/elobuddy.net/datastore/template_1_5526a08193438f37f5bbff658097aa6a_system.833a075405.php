<?php

return <<<'VALUE'
"namespace IPS\\Theme;\nclass class_core_admin_system extends \\IPS\\Theme\\Template\n{\n\t\t\tfunction backgroundProcessesRunNow(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\n<div class='acpBlock'>\n\t<div class=\"ipsPad\">\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'background_process_run_content', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\t<p>\n\t\t\t<a href='\nCONTENT;\n\n$return .= str_replace( '&', '&amp;', \\IPS\\Http\\Url::internal( \"app=core&module=system&controller=background&do=process\", null, \"\", array(), 0 ) );\n$return .= <<<CONTENT\n' class=\"ipsButton ipsButton_primary\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'background_process_run_button', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t<\/p>\n\t<\/div>\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction login( $forms, $activeTab, $error, $icons, $upgradeError=FALSE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<!DOCTYPE html>\n<html lang=\"\nCONTENT;\n\n$return .= htmlspecialchars( \\IPS\\Member::loggedIn()->language()->bcp47(), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" dir=\"\nCONTENT;\n\nif ( \\IPS\\Member::loggedIn()->language()->isrtl ):\n$return .= <<<CONTENT\nrtl\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\nltr\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\">\n\t<head>\n\t\t<meta charset=\"utf-8\">\n\t\t<title>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'login', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/title>\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->getTemplate( \"global\", \"core\", 'global' )->includeCSS(  );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->getTemplate( \"global\", \"core\", 'global' )->includeJS(  );\n$return .= <<<CONTENT\n\n\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">\n\t<\/head>\n\t<body class='ipsApp ipsApp_admin' id='elLogin' data-controller=\"core.admin.core.app\">\n\t\t<div id='elLogin_box' data-controller=\"core.admin.system.login\"\nCONTENT;\n\nif ( count($forms) == 1 ):\n$return .= <<<CONTENT\n class='elLogin_single'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t\t\t\nCONTENT;\n\nif ( $upgradeError ):\n$return .= <<<CONTENT\n\n\t\t\t\t<div class='cAcpLoginBox ipsPad' data-role=\"upgradeWarning\">\n\t\t\t\t\t<h1 class='ipsType_pageTitle'><i class='fa fa-lock'><\/i> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'acp_login', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h1>\n\t\t\t\t\t<p class=\"ipsType_warning\"><strong>\nCONTENT;\n\n$sprintf = array($upgradeError); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'acp_login_upgrade_warning', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n<\/strong><\/p>\n\t\t\t\t\t<div class=\"ipsSpacer_top\">\n\t\t\t\t\t\t<a href=\"upgrade\" class=\"cAcpLoginBox_button ipsButton ipsButton_primary ipsButton_large ipsButton_fullWidth\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'upgrade_now', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t\t\t\t\t<a data-action=\"upgradeWarningContinue\" href=\"\nCONTENT;\n\n$return .= htmlspecialchars( \\IPS\\Request::i()->url()->setQueryString('noWarning', 1), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class=\"cAcpLoginBox_button ipsButton ipsButton_light ipsButton_small ipsButton_fullWidth\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'acp_login_ignore_warning', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t\t\t\t<\/div>\n\t\t\t\t<\/div>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t<div class='ipsColumns \nCONTENT;\n\nif ( $upgradeError ):\n$return .= <<<CONTENT\nipsHide\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n' data-role=\"loginForms\">\n\t\t\t\t<div class='cAcpLoginBox ipsColumn ipsColumn_fluid'>\n\t\t\t\t\t<div class='ipsPad'>\n\t\t\t\t\t\t<h1 class='ipsType_pageTitle'><i class='fa fa-lock'><\/i> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'acp_login', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h1>\n\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<div class='ipsMessage ipsMessage_error'>\nCONTENT;\n\n$val = \"{$error}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/div>\n\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<div id='elTabContent'>\n\t\t\t\t\t\t\t\nCONTENT;\n\nforeach ( $forms as $key => $form ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t<div id='ipsTabs_elLogin_tabs_handler_\nCONTENT;\n$return .= htmlspecialchars( $key, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_panel' class=\" ipsTabs_panel \nCONTENT;\n\nif ( $key != $activeTab ):\n$return .= <<<CONTENT\nipsHide\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\">\n\n\t\t\t\t\t\t\t\t\t\nCONTENT;\n\nif ( is_object( $form ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t\t\t{$form->customTemplate( array( \\IPS\\Theme::i()->getTemplate( 'system' ), 'loginForm' ) )}\n\t\t\t\t\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t\t\t{$form}\n\t\t\t\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\n\t\t\t\t\t\t\t\t<\/div>\n\t\t\t\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<\/div>\n\t\t\t\t\t<\/div>\n\t\t\t\t<\/div>\n\t\t\t\t\nCONTENT;\n\nif ( count( $forms ) > 1 ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<div class='ipsColumn ipsColumn_veryNarrow' id='elLogin_tabs' data-ipsTabBar data-ipsTabBar-contentArea='#elTabContent' data-ipsTabBar-itemSelector=\".elLogin_tabsItem\" data-ipsTabBar-activeClass=\"elLogin_tabsActive\" role=\"tabbar\">\n\t\t\t\t\t\t<ul class='ipsList_reset'>\n\t\t\t\t\t\t\t\nCONTENT;\n\nforeach ( $forms as $key => $form ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t<li role=\"presentation\">\n\t\t\t\t\t\t\t\t\t<a href='\nCONTENT;\n\n$return .= str_replace( '&', '&amp;', \\IPS\\Http\\Url::internal( \"app=core&module=system&controller=login&tab=\", null, \"\", array(), 0 ) );\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $key, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' role=\"tab\" aria-label=\"\nCONTENT;\n\n$val = \"login_{$key}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\" class='elLogin_tabsItem \nCONTENT;\n\nif ( $key == $activeTab ):\n$return .= <<<CONTENT\nelLogin_tabsActive\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n' id='handler_\nCONTENT;\n$return .= htmlspecialchars( $key, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'><i class='fa fa-\nCONTENT;\n\nif ( isset ( $icons[ $key ] ) ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $icons[ $key ], ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\nlock\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n'><\/i><\/a>\n\t\t\t\t\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<\/ul>\n\t\t\t\t\t<\/div>\n\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t<\/div>\n\t\t<\/div>\n\t<\/body>\n<\/html>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction loginForm( $id, $action, $tabs, $hiddenValues, $actionButtons, $uploadField ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<form accept-charset='utf-8' action=\"\nCONTENT;\n$return .= htmlspecialchars( $action, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" method=\"post\" \nCONTENT;\n\nif ( $uploadField ):\n$return .= <<<CONTENT\nenctype=\"multipart\/form-data\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_submitted\" value=\"1\">\n\t\nCONTENT;\n\nforeach ( $hiddenValues as $k => $v ):\n$return .= <<<CONTENT\n\n\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $uploadField ):\n$return .= <<<CONTENT\n\n\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $uploadField, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t<input type=\"hidden\" name=\"plupload\" value=\"\nCONTENT;\n\n$return .= htmlspecialchars( md5( uniqid() ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<ul class='ipsForm ipsForm_vertical'>\n\t\t\nCONTENT;\n\nforeach ( $tabs as $elements ):\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nforeach ( $elements as $element ):\n$return .= <<<CONTENT\n\n\t\t\t\t<li class='ipsFieldRow ipsFieldRow_primary ipsFieldRow_fullWidth'>\n\t\t\t\t\t\nCONTENT;\n\nif ( $element->name === 'auth' ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\nCONTENT;\n\nif ( $element->options['_loginType'] === \\IPS\\Login::AUTH_TYPE_USERNAME + \\IPS\\Login::AUTH_TYPE_EMAIL ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<label class='ipsFieldRow_label'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'username_or_email', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\t\t\t\t\t\t\nCONTENT;\n\nelseif ( $element->options['_loginType'] === \\IPS\\Login::AUTH_TYPE_USERNAME ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<label class='ipsFieldRow_label'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'username', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\t\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<label class='ipsFieldRow_label'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'email_address', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<label class='ipsFieldRow_label'>\nCONTENT;\n\n$val = \"{$element->name}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t<div class='ipsFieldRow_content'>\n\t\t\t\t\t\t{$element->html()}\n\t\t\t\t\t\t\nCONTENT;\n\nif ( $element->error ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<p><span class=\"error\">\nCONTENT;\n\n$val = \"{$element->error}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/span><\/p>\n\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t<\/div>\n\t\t\t\t<\/li>\n\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t<\/ul>\n\t<br><br>\n\t\n\t<div class='ipsFieldRow_fullWidth'>\n\t\t<button type='submit' class='ipsButton ipsButton_primary ipsButton_large'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'login', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/button>\n\t<\/div>\n\t\n<\/form>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction systemLogView( $title, $content ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\n<div class='acpBlock'>\n\t<h2 class='acpBlock_title'>$title<\/h2>\n\t<br>\n\t<div class=\"ipsAreaBackground_light ipsPad\">\n\t\t<pre class='logview'>\nCONTENT;\n$return .= htmlspecialchars( $content, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n<\/pre>\n\t<\/div>\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction upgradeDeltaFailed( $error, $deltaDownloadUrl ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsPad\">\n\t<div class=\"ipsSpacer_bottom\">\n\t\t<h2 class='ipsType_sectionHead'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'download_upgrade_error', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h2>\n\t<\/div>\n\t<div class=\"ipsSpacer_bottom\">\n\t\t\nCONTENT;\n\nif ( $error == 'ftp' ):\n$return .= <<<CONTENT\n\n\t\t\t<p>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_manual_ftp', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t<p>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_manual', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<div class=\"ipsType_center\">\n\t\t\t\nCONTENT;\n\nif ( $deltaDownloadUrl ):\n$return .= <<<CONTENT\n\n\t\t\t\t<a href=\"\nCONTENT;\n$return .= htmlspecialchars( $deltaDownloadUrl, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class=\"ipsButton ipsButton_important ipsButton_large\"><i class=\"fa fa-cloud-download\"><\/i> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_download', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t\t\t<p><a href=\"\nCONTENT;\n\n$return .= \\IPS\\Http\\Url::ips( \"docs\/client_area\" );\n$return .= <<<CONTENT\n\" target=\"_blank\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_download_full', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a><\/p>\n\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t<a href=\"\nCONTENT;\n\n$return .= \\IPS\\Http\\Url::ips( \"docs\/client_area\" );\n$return .= <<<CONTENT\n\" class=\"ipsButton ipsButton_important ipsButton_large\" target=\"_blank\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_go_to_clientarea', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<\/div>\n\t\t<p>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_manual_footer', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t<\/div>\n\t<div class=\"ipsSpacer_bottom ipsType_light ipsType_small\">\n\t\t\nCONTENT;\n\nif ( is_array( $error ) ):\n$return .= <<<CONTENT\n\n\t\t\t<p>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_md5_fail', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t\t\t<ul>\n\t\t\t\t\nCONTENT;\n\nforeach ( $error as $file ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<li>\nCONTENT;\n$return .= htmlspecialchars( $file, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n<\/li>\n\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t<\/ul>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<\/div>\n<\/div>\n<div class=\"ipsAreaBackground_light ipsClearfix ipsPad ipsType_center\">\n\t<a href=\"\nCONTENT;\n\n$return .= str_replace( '&', '&amp;', \\IPS\\Http\\Url::internal( \"app=core&module=system&controller=upgrade&check=1\", null, \"\", array(), 0 ) );\n$return .= <<<CONTENT\n\" class=\"ipsButton ipsButton_primary\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'continue', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n<\/div>\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction upgradeDeltaFtp( $form ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsPad\">\nCONTENT;\n\n$sprintf = array(\\IPS\\Http\\Url::internal('app=core&module=system&controller=upgrade&manual=1')); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'delta_upgrade_ftp_instructions', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n<\/div>\n{$form}\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction upgradeSelectVersion( $id, $action, $elements, $hiddenValues, $actionButtons, $uploadField, $class='', $attributes=array(), $sidebar, $form=NULL ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nforeach ( $elements as $collection ):\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nforeach ( $collection as $input ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nforeach ( $input->options['options'] as $longVersion => $humanVersion ):\n$return .= <<<CONTENT\n\n\t\t\t<form accept-charset='utf-8' action=\"\nCONTENT;\n$return .= htmlspecialchars( $action, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" method=\"post\">\n\t\t\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_submitted\" value=\"1\">\n\t\t\t\t\nCONTENT;\n\nforeach ( $hiddenValues as $k => $v ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\nCONTENT;\n\nif ( is_array($v) ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\nCONTENT;\n\nforeach ( $v as $_k => $_v ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[\nCONTENT;\n$return .= htmlspecialchars( $_k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n]\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $_v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t\t<input type=\"hidden\" name=\"version\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $longVersion, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\t\t<div class=\"ipsAreaBackground_reset ipsPad\">\n\t\t\t\t\t<h2 class='ipsType_sectionHead'>\nCONTENT;\n\n$sprintf = array($humanVersion); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'dashboard_version_info', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n<\/h2>\n\t\t\t\t\t\nCONTENT;\n\nif ( $input->options['_details'][ $longVersion ]['security'] ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<p><strong class=\"ipsType_warning\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'this_is_a_security_update', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/strong><\/p>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\nCONTENT;\n\nif ( $input->options['_details'][ $longVersion ]['releasenotes'] ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<div>{$input->options['_details'][ $longVersion ]['releasenotes']}<\/div>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t<\/div>\n\t\t\t\t<div class=\"ipsAreaBackground_light ipsClearfix ipsPad ipsType_center\">\n\t\t\t\t\t<input type=\"submit\" class=\"ipsButton ipsButton_primary\" value=\"\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'continue', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\">\n\t\t\t\t\t\nCONTENT;\n\nif ( $input->options['_details'][ $longVersion ]['updateurl'] ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<a href='\nCONTENT;\n$return .= htmlspecialchars( $input->options['_details'][ $longVersion ]['updateurl'], ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' target=\"_blank\" class='ipsButton ipsButton_alternate ipsButton_small'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'dashboard_version_moreinfo', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t<\/div>\n\t\t\t<\/form>\n\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\n\t\treturn $return;\n}}"
VALUE;
