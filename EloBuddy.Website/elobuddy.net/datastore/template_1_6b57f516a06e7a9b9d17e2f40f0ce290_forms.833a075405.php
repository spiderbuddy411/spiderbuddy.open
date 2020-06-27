<?php

return <<<'VALUE'
"namespace IPS\\Theme;\nclass class_core_admin_forms extends \\IPS\\Theme\\Template\n{\n\t\t\tfunction blurb( $lang, $parse=TRUE, $background=FALSE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsPad ipsType_normal \nCONTENT;\n\nif ( $background ):\n$return .= <<<CONTENT\nipsAreaBackground_light\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\">\n\t\nCONTENT;\n\nif ( $parse ):\n$return .= <<<CONTENT\n\nCONTENT;\n\n$val = \"{$lang}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n{$lang}\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction checkbox( $name, $value=FALSE, $disabled=FALSE, $togglesOn=array(), $togglesOff=array(), $label='', $hiddenName='' ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $hiddenName, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"0\" \/>\n<span class='ipsCustomInput'>\n\t<input\n\t\ttype='checkbox'\n\t\trole='checkbox'\n\t\tname='\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'\n\t\tvalue='1'\n\t\tid='check_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'\n\t\t\nCONTENT;\n\nif ( $value ):\n$return .= <<<CONTENT\nchecked aria-checked='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( $disabled ):\n$return .= <<<CONTENT\ndisabled aria-disabled='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( !empty($togglesOn) OR !empty($togglesOff) ):\n$return .= <<<CONTENT\ndata-control=\"toggle\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( !empty($togglesOn) ):\n$return .= <<<CONTENT\n data-togglesOn=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $togglesOn ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-controls=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $togglesOn ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( !empty($togglesOff) ):\n$return .= <<<CONTENT\n data-togglesOff=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $togglesOff ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-controls=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $togglesOff ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t>\n\t<span><\/span>\n<\/span>\n<label for='check_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'>\nCONTENT;\n\n$val = \"{$label}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction dateinterval( $name, $value ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'every', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n<br>\n<ul class=\"ipsField_fieldList\">\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[y]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->y, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'years', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[m]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->m, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'months', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[d]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->d, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'days', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[h]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->h, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'hours', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[i]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->i, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'minutes', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t<li><input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[s]\" class=\"ipsField_short\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $value->s, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" min=\"0\" \/> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'seconds', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n<\/ul>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction emptyRow( $contents, $id=NULL ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<li class='ipsFieldRow ipsPad_half ipsClearfix' \nCONTENT;\n\nif ( $id ):\n$return .= <<<CONTENT\nid=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t{$contents}\n<\/li>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction header( $lang, $id=NULL ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<li \nCONTENT;\n\nif ( $id !== NULL ):\n$return .= <<<CONTENT\n id=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t<h2 class='ipsFieldRow_section'>\nCONTENT;\n\n$val = \"{$lang}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h2>\n<\/li>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction radio( $name, $value, $required, $options, $disabled=FALSE, $toggles=array(), $descriptions=array(), $warnings=array(), $userSuppliedInput='' ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<ul class=\"ipsField_fieldList\" role=\"radiogroup\">\n\nCONTENT;\n\nforeach ( $options as $k => $v ):\n$return .= <<<CONTENT\n\n\t<li>\n\t\t<span class='ipsCustomInput'>\n\t\t\t<input type=\"radio\" role=\"radio\" id='elField_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nif ( (string) $value == (string) $k or ( isset( $userSuppliedInput ) and !in_array( $value, array_keys( $options ) ) and $k == $userSuppliedInput ) ):\n$return .= <<<CONTENT\nchecked aria-checked='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $required === TRUE ):\n$return .= <<<CONTENT\nrequired aria-required='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $disabled ):\n$return .= <<<CONTENT\ndisabled aria-disabled='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( isset( $toggles[ $k ] ) and !empty( $toggles[ $k ] ) ):\n$return .= <<<CONTENT\ndata-control=\"toggle\" data-toggles=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $toggles[ $k ] ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-controls=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $toggles[ $k ] ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n aria-labelledby='elField_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_label'>\n\t\t\t<span><\/span>\n\t\t<\/span>\n\t\t\n\t\t<div class='ipsField_fieldList_content'>\n\t\t\t<label for='elField_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' id='elField_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_label'>{$v}<\/label>\n\t\t\t\nCONTENT;\n\nif ( isset( $descriptions[ $k ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t<br>\n\t\t\t\t<span class='ipsFieldRow_desc'>\n\t\t\t\t\t{$descriptions[ $k ]}\n\t\t\t\t<\/span>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nif ( isset( $warnings[ $k ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t<div id=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_warning\">\n\t\t\t\t\t<br>\n\t\t\t\t\t<p class='ipsMessage ipsMessage_warning'>{$warnings[ $k ]}<\/p>\n\t\t\t\t<\/div>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nif ( !empty( $userSuppliedInput ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t<input type='text' name='\nCONTENT;\n$return .= htmlspecialchars( $userSuppliedInput, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' value=\"\nCONTENT;\n\nif ( !in_array( $value, array_keys( $options ) ) ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $value, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" id='\nCONTENT;\n$return .= htmlspecialchars( $userSuppliedInput, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n\n$return .= htmlspecialchars( preg_replace('\/[^a-zA-Z0-9\\-_]\/', '_', $name), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<\/label>\n\t<\/li>\n\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n<\/ul>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction row( $langKey, $element, $desc, $warning, $required=FALSE, $error=NULL, $prefix=NULL, $suffix=NULL, $id=NULL, $object=NULL, $form=NULL ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<li class='ipsFieldRow ipsPad_half \nCONTENT;\n\nif ( $object instanceof \\IPS\\Helpers\\Form\\YesNo ):\n$return .= <<<CONTENT\nipsFieldRow_yesNo\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n ipsClearfix \nCONTENT;\n\nif ( $object and isset( \\IPS\\Request::i()->searchResult ) and ( \\IPS\\Request::i()->searchResult === $object->name ) ):\n$return .= <<<CONTENT\nipsFieldRow_searchResult\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n' \nCONTENT;\n\nif ( $id !== NULL ):\n$return .= <<<CONTENT\nid=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t<div class='ipsFieldRow_title \nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\nipsFieldRow_error\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n'>\n\t\t{$langKey}\n\t\t\nCONTENT;\n\nif ( $required ):\n$return .= <<<CONTENT\n<span class='ipsFieldRow_required'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'required', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/span>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( \\IPS\\IN_DEV and $form and $object ):\n$return .= <<<CONTENT\n\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->getTemplate( \"global\", \"core\" )->searchKeywords( $form->action->setQueryString( array( 'do' => ( isset( $form->action->queryString['do'] ) and $form->action->queryString['do'] != 'form' ) ? $form->action->queryString['do'] : NULL, 'id' => NULL, 'searchResult' => $id ) )->acpQueryString(), $object->name );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<\/div>\n\t<div class='ipsFieldRow_content \nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\nipsFieldRow_error\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n'>\n\t\t\nCONTENT;\n\nif ( $object and !( $object instanceof \\IPS\\Helpers\\Form\\Translatable ) and !( $object instanceof \\IPS\\Helpers\\Form\\Upload ) and $form->copyButton and ( !isset( $object->options['disableCopy'] ) or !$object->options['disableCopy'] ) ):\n$return .= <<<CONTENT\n\n\t\t<a href=\"#\" data-baseLink=\"\nCONTENT;\n$return .= htmlspecialchars( $form->copyButton->setQueryString( array( 'key' => $object->name ) ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" data-controller=\"core.admin.core.nodeCopySetting\" data-field=\"\nCONTENT;\n$return .= htmlspecialchars( $object->name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class='ipsJS_show ipsButton ipsButton_verySmall ipsButton_light ipsButton_narrow ipsFaded ipsFaded_more ipsFaded_withHover ipsPos_right cCopyNode' title='\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'copy_value', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n' data-ipsTooltip tabindex=\"999\"><i class=\"fa fa-cog\"><\/i> <i class='fa fa-caret-right'><\/i><\/a>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t{$prefix}\n\t\t{$element}\n\t\t{$suffix}\n\t\t{$desc}\n\t\t{$warning}\n\t\t<br>\n\t\t\nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\n\n\t\t\t<span class='ipsType_warning'><i class='fa fa-exclamation-circle'><\/i> \nCONTENT;\n\n$val = \"{$error}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/span>\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t<span class='ipsType_warning'><\/span>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<\/div>\n<\/li>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction select( $name, $value, $required, $options, $multiple=FALSE, $class='', $disabled=FALSE, $toggles=array(), $id=NULL, $unlimited=NULL, $unlimitedLang='all', $unlimitedToggles=array(), $toggleOn=TRUE, $userSuppliedInput='', $sort=FALSE, $parse=NULL ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( $multiple ):\n$return .= <<<CONTENT\n\n\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"__EMPTY\">\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n<select name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class=\"\nCONTENT;\n$return .= htmlspecialchars( $class, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nif ( $multiple ):\n$return .= <<<CONTENT\nmultiple\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $required === TRUE ):\n$return .= <<<CONTENT\nrequired aria-required='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $disabled === TRUE ):\n$return .= <<<CONTENT\ndisabled aria-disabled='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $id !== NULL ):\n$return .= <<<CONTENT\nid=\"elSelect_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $sort ):\n$return .= <<<CONTENT\ndata-sort\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t\nCONTENT;\n\nforeach ( $options as $k => $v ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( is_array( $v ) ):\n$return .= <<<CONTENT\n\n\t\t\t<optgroup label=\"\nCONTENT;\n\nif ( $parse === 'raw' ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\nCONTENT;\n\n$val = \"{$k}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\">\n\t\t\t\t\nCONTENT;\n\nforeach ( $v as $_k => $_v ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<option value='\nCONTENT;\n$return .= htmlspecialchars( $_k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' \nCONTENT;\n\nif ( ( $value === 0 and $_k === 0 ) or ( !is_array( $value ) AND $value === $_k or ( is_numeric( $value ) and $value == $k ) ) or ( is_array( $value ) and in_array( $_k, $value ) ) ):\n$return .= <<<CONTENT\nselected\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( isset( $toggles[ $_k ] ) ):\n$return .= <<<CONTENT\ndata-control=\"toggle\" data-toggles=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $toggles[ $_k ] ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-controls=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $toggles[ $_k ] ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( is_array($disabled) and in_array( $_k, $disabled ) ):\n$return .= <<<CONTENT\ndisabled\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>{$_v}<\/option>\n\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t<\/optgroup>\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t<option value='\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' \nCONTENT;\n\nif ( ( $value === 0 and $k === 0 ) or ( !is_array( $value ) AND ( $value === $k or ( is_numeric( $value ) and $value == $k ) ) ) or ( is_array( $value ) and in_array( $k, $value ) ) or ( !empty( $userSuppliedInput ) and !in_array( $value, array_keys( $options ) ) and $k == $userSuppliedInput ) ):\n$return .= <<<CONTENT\nselected\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( isset( $toggles[ $k ] ) ):\n$return .= <<<CONTENT\ndata-control=\"toggle\" data-toggles=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $toggles[ $k ] ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( is_array($disabled) and in_array( $k, $disabled ) ):\n$return .= <<<CONTENT\ndisabled\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>{$v}<\/option>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n<\/select>\n\nCONTENT;\n\nif ( !empty( $userSuppliedInput ) ):\n$return .= <<<CONTENT\n\n\t<input type='text' name='\nCONTENT;\n$return .= htmlspecialchars( $userSuppliedInput, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' value=\"\nCONTENT;\n\nif ( !in_array( $value, array_keys( $options ) ) ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $value, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" id='\nCONTENT;\n$return .= htmlspecialchars( $userSuppliedInput, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'>\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( $unlimited !== NULL ):\n$return .= <<<CONTENT\n\n\t<br><br>\n\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'or', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t&nbsp;\n\t<span class='ipsCustomInput'>\n\t\t<input type=\"checkbox\" role='checkbox' data-control=\"unlimited\nCONTENT;\n\nif ( count($unlimitedToggles) ):\n$return .= <<<CONTENT\n toggle\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" name=\"\nCONTENT;\n\n$return .= htmlspecialchars( trim( $name, '[]' ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited\" id='\nCONTENT;\n\n$return .= htmlspecialchars( trim( $id ?: $name, '[]' ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited' value=\"\nCONTENT;\n$return .= htmlspecialchars( $unlimited, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nif ( $unlimited === $value ):\n$return .= <<<CONTENT\nchecked aria-checked='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( $disabled ):\n$return .= <<<CONTENT\ndisabled aria-disabled='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( count( $unlimitedToggles ) ):\n$return .= <<<CONTENT\n\nCONTENT;\n\nif ( $toggleOn === FALSE ):\n$return .= <<<CONTENT\ndata-togglesOff\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\ndata-togglesOn\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $unlimitedToggles ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-controls=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $unlimitedToggles ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n aria-labelledby='\nCONTENT;\n\n$return .= htmlspecialchars( trim( $id ?: $name, '[]' ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited_label'>\n\t\t<span><\/span>\n\t<\/span>\n\t<label for='\nCONTENT;\n\n$return .= htmlspecialchars( trim( $id ?: $name, '[]' ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited' id='\nCONTENT;\n\n$return .= htmlspecialchars( trim( $id ?: $name, '[]' ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited_label' class='ipsField_unlimited'>\nCONTENT;\n\n$val = \"{$unlimitedLang}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction tags( $name, $value ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<input type='text' name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"\nCONTENT;\n\n$return .= htmlspecialchars( implode( ',', $value ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" data-ipsAutocomplete>\n<noscript>\n\t<br>\n\t<span class=\"ipsFieldRow_desc\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'tags_no_js', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/span>\n<\/noscript>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction template( $id, $action, $tabs, $activeTab, $error, $errorTabs, $hiddenValues, $actionButtons, $uploadField, $sidebar, $tabClasses=array(), $formClass='', $attributes=array(), $tabArray=array(), $usingIcons=FALSE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<form accept-charset='utf-8' action=\"\nCONTENT;\n$return .= htmlspecialchars( $action, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" method=\"post\" \nCONTENT;\n\nif ( $uploadField ):\n$return .= <<<CONTENT\nenctype=\"multipart\/form-data\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n data-ipsForm class=\"\nCONTENT;\n$return .= htmlspecialchars( $formClass, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nforeach ( $attributes as $k => $v ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n=\"\nCONTENT;\n$return .= htmlspecialchars( $v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\"\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( count($tabArray) > 1 ):\n$return .= <<<CONTENT\nnovalidate=\"true\"\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_submitted\" value=\"1\">\n\t\nCONTENT;\n\nforeach ( $hiddenValues as $k => $v ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( is_array($v) ):\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nforeach ( $v as $_v ):\n$return .= <<<CONTENT\n\n\t\t\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[]\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $_v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t<input type=\"hidden\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $k, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $v, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $uploadField ):\n$return .= <<<CONTENT\n\n\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $uploadField, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\n\n\t\t<div class=\"ipsMessage ipsMessage_error\">\n\t\t\t\nCONTENT;\n$return .= htmlspecialchars( $error, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\n\t\t<\/div>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( count( $tabs ) === 1 ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( !empty( $sidebar ) ):\n$return .= <<<CONTENT\n\n\t\t\t<div class='ipsColumns'>\n\t\t\t\t<div class='ipsColumn ipsColumn_fluid'>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t<ul class='ipsForm'>\n\t\t\t\t\t\t\nCONTENT;\n\n$return .= array_pop( $tabs );\n$return .= <<<CONTENT\n\n\t\t\t\t\t<\/ul>\n\t\t\nCONTENT;\n\nif ( !empty( $sidebar ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t<\/div>\n\t\t\t\t<div class='ipsColumn ipsColumn_wide'>\n\t\t\t\t\t\nCONTENT;\n\n$return .= array_pop( $sidebar );\n$return .= <<<CONTENT\n\n\t\t\t\t<\/div>\n\t\t\t<\/div>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( !empty( $errorTabs ) ):\n$return .= <<<CONTENT\n\n\t\t\t<p class=\"ipsMessage ipsMessage_error ipsJS_show\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'tab_error', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<div class='ipsTabs ipsClearfix ipsJS_show acpFormTabBar\nCONTENT;\n\nif ( $usingIcons ):\n$return .= <<<CONTENT\n ipsTabs_withIcons\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n' id='tabs_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' data-ipsTabBar data-ipsTabBar-contentArea='#ipsTabs_content_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'>\n\t\t\t<a href='#tabs_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' data-action='expandTabs'><i class='fa fa-caret-down'><\/i><\/a>\n\t\t\t<ul role='tablist'>\n\t\t\t\t\nCONTENT;\n\nforeach ( $tabs as $name => $content ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href='#ipsTabs_tabs_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_tab_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_panel' id='\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_tab_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' class=\"ipsTabs_item \nCONTENT;\n\nif ( $name == $activeTab ):\n$return .= <<<CONTENT\nipsTabs_activeItem\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( in_array( $name, $errorTabs ) ):\n$return .= <<<CONTENT\nipsTabs_error\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" role=\"tab\" aria-selected=\"\nCONTENT;\n\nif ( $activeTab == $name ):\n$return .= <<<CONTENT\ntrue\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\nfalse\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\">\n\t\t\t\t\t\t\t\nCONTENT;\n\nif ( in_array( $name, $errorTabs ) ):\n$return .= <<<CONTENT\n<i class=\"fa fa-exclamation-circle\"><\/i> \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\nif ( isset($tabArray[$name]['icon']) ):\n$return .= <<<CONTENT\n<i class='fa fa-\nCONTENT;\n$return .= htmlspecialchars( $tabArray[$name]['icon'], ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n'><\/i> \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n$val = \"{$name}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<\/a>\n\t\t\t\t\t<\/li>\n\t\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t\t<\/ul>\n\t\t<\/div>\n\t\t<div id='ipsTabs_content_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' class='acpFormTabContent'>\n\t\t\t\nCONTENT;\n\nforeach ( $tabs as $name => $contents ):\n$return .= <<<CONTENT\n\n\t\t\t\t<div id='ipsTabs_tabs_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_tab_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_panel' class=\"ipsTabs_panel\" aria-labelledby=\"\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_tab_\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-hidden=\"false\">\n\t\t\t\t\t\nCONTENT;\n\nif ( isset( $sidebar[ $name ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<div class='ipsColumns ipsColumns_collapsePhone'>\n\t\t\t\t\t\t\t<div class='ipsColumn ipsColumn_fluid'>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t<ul class='ipsForm \nCONTENT;\n$return .= htmlspecialchars( $formClass, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n \nCONTENT;\n\nif ( isset( $tabClasses[ $name ] ) ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $tabClasses[ $name ], ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n'>\n\t\t\t\t\t\t\t\t\t<li class='ipsTabs_dummyItem ipsPad ipsType_normal ipsJS_hide'>\nCONTENT;\n\n$val = \"{$name}\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/li>\n\t\t\t\t\t\t\t\t\t{$contents}\n\t\t\t\t\t\t\t\t<\/ul>\n\t\t\t\t\t\nCONTENT;\n\nif ( isset( $sidebar[ $name ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<\/div>\n\t\t\t\t\t\t\t<div class='ipsColumn ipsColumn_wide'>\n\t\t\t\t\t\t\t\t{$sidebar[ $name ]}\n\t\t\t\t\t\t\t<\/div>\n\t\t\t\t\t\t<\/div>\n\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t<\/div>\n\t\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t<\/div>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<div class=\"ipsAreaBackground_light ipsClearfix ipsPad ipsType_center\">\n\t\t\nCONTENT;\n\n$return .= implode( '', $actionButtons);\n$return .= <<<CONTENT\n\n\t<\/div>\n<\/form>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction widthheight( $name, $width, $height, $unlimited, $image=NULL, $resizableDiv=TRUE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsWidthHeight_container\">\n\t\nCONTENT;\n\nif ( $image !== NULL ):\n$return .= <<<CONTENT\n\n\t\t<img class=\"ipsJS_show ipsWidthHeight\" data-control=\"dimensions\" src=\"\nCONTENT;\n$return .= htmlspecialchars( $image->url, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" style=\"width:\nCONTENT;\n$return .= htmlspecialchars( $width, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\npx; height:\nCONTENT;\n$return .= htmlspecialchars( $height, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\npx\">\n\t\nCONTENT;\n\nelseif ( $image === NULL AND $resizableDiv === TRUE ):\n$return .= <<<CONTENT\n\n\t\t<div class=\"ipsJS_show ipsWidthHeight\" data-control=\"dimensions\" style=\"width:\nCONTENT;\n$return .= htmlspecialchars( $width, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\npx; height:\nCONTENT;\n$return .= htmlspecialchars( $height, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\npx\"><\/div>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<div class=\"ipsWidthHeight_controls\">\n\t\t<input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[0]\" class=\"ipsField_short ipsWidthHeight_width\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $width, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-label='\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'width', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n'> &times; <input type=\"number\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[1]\" class=\"ipsField_short ipsWidthHeight_height\" value=\"\nCONTENT;\n$return .= htmlspecialchars( $height, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" aria-label='\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'height', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n'> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'px', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( $unlimited !== NULL ):\n$return .= <<<CONTENT\n\n\t\t\t&nbsp; \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'or', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n &nbsp;\n\t\t\t<span class='ipsCustomInput'>\n\t\t\t\t<input type=\"checkbox\" role='checkbox' class=\"ipsWidthHeight_unlimited\" data-control=\"dimensionsUnlimited\" name=\"\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n[unlimited]\" id='\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited' \nCONTENT;\n\nif ( $unlimited == array( $width, $height ) ):\n$return .= <<<CONTENT\nchecked aria-checked='true'\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n aria-labelledby='\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited_label'>\n\t\t\t\t<span><\/span>\n\t\t\t<\/span> <label for='\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited' id='\nCONTENT;\n$return .= htmlspecialchars( $name, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_unlimited_label' class='ipsField_unlimited'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'unlimited', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/label>\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<\/div>\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}}"
VALUE;
