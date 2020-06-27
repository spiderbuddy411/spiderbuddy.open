<?php

return <<<'VALUE'
"namespace IPS\\Theme;\nclass class_core_admin_licensekey extends \\IPS\\Theme\\Template\n{\n\t\t\tfunction overview( $licenseData ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsPad ipsAreaBackground_light\">\n\t\nCONTENT;\n\nif ( $licenseData['expires'] ):\n$return .= <<<CONTENT\n\n\t\t<span class=\"ipsBadge ipsBadge_medium ipsBadge_\nCONTENT;\n\nif ( strtotime( $licenseData['expires'] ) > time() ):\n$return .= <<<CONTENT\npositive\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\nnegative\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n ipsPos_right\">\n\t\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_expires', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\nCONTENT;\n\n$val = ( strtotime( $licenseData['expires'] ) instanceof \\IPS\\DateTime ) ? strtotime( $licenseData['expires'] ) : \\IPS\\DateTime::ts( strtotime( $licenseData['expires'] ) );$return .= $val->html();\n$return .= <<<CONTENT\n\n\t\t<\/span>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\n\t<h3 class='ipsType_sectionHead'>\n\t\t\nCONTENT;\n\nif ( $licenseData['cloud'] ):\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_name_cloud', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_name_license', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<br>\n\t\t\nCONTENT;\n\n$return .= htmlspecialchars( substr_replace( $licenseData['key'], '**********', -10 ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\n\t<\/h3>\n\t\n\t<p class='ipsType_light'>\n\t\t\nCONTENT;\n\n$sprintf = array($licenseData['url']); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_url', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( $licenseData['test_url'] ):\n$return .= <<<CONTENT\n\n\t\t\t<br>\n\t\t\t\nCONTENT;\n\n$sprintf = array($licenseData['test_url']); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_test_url', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t<\/p>\n<\/div>\n<br>\n<div class=\"ipsPad ipsAreaBackground_light\">\n\t<h3 class=\"ipsType_sectionHead\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'licensekey_benefits_head', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h3><br>\n\t<br>\n\t<ul class=\"ipsDataList ipsDataList_reducedSpacing\">\n\t\t\nCONTENT;\n\nforeach ( array( 'forums', 'calendar', 'blog', 'gallery', 'downloads', 'cms', 'nexus', 'spam', 'copyright' ) as $k ):\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nif ( $k !== 'copyright' or ( isset( $licenseData['products'][ $k ] ) and $licenseData['products'][ $k ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t\t<li class=\"ipsDataItem\">\n\t\t\t\t\t<div class=\"ipsDataItem_icon\">\n\t\t\t\t\t\t\nCONTENT;\n\nif ( isset( $licenseData['products'][ $k ] ) and $licenseData['products'][ $k ] ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\nCONTENT;\n\nif ( $k == 'spam' and strtotime( $licenseData['expires'] ) < time() ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t<i class=\"ipsType_large fa fa-exclamation-triangle\"><\/i>\n\t\t\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t\t<i class=\"ipsType_large fa fa-check\"><\/i>\n\t\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t\t<i class=\"ipsType_large fa fa-times\"><\/i>\n\t\t\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\t\t<\/div>\n\t\t\t\t\t<div class=\"ipsDataItem_main\">\n\t\t\t\t\t\t<h4 class=\"ipsDataItem_title\">\nCONTENT;\n\n$val = \"license_benefit_$k\"; $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( $val, \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/h4>\n\t\t\t\t\t<\/div>\n\t\t\t\t<\/li>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\n\t\t<li class=\"ipsDataItem\">\n\t\t\t<div class=\"ipsDataItem_icon\">\n\t\t\t\t\nCONTENT;\n\nif ( strtotime( $licenseData['expires'] ) > time() ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<i class=\"ipsType_large fa fa-check\"><\/i>\n\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t<i class=\"ipsType_large fa fa-exclamation-triangle\"><\/i>\n\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t<\/div>\n\t\t\t<div class=\"ipsDataItem_main\">\n\t\t\t\t<h4 class=\"ipsDataItem_title\">\nCONTENT;\n\n$sprintf = array($licenseData['chat_limit']); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_benefit_chat', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n<\/h4>\n\t\t\t<\/div>\n\t\t<\/li>\n\t\t<li class=\"ipsDataItem\">\n\t\t\t<div class=\"ipsDataItem_icon\">\n\t\t\t\t\nCONTENT;\n\nif ( strtotime( $licenseData['expires'] ) > time() ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<i class=\"ipsType_large fa fa-check\"><\/i>\n\t\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t\t<i class=\"ipsType_large fa fa-exclamation-triangle\"><\/i>\n\t\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t<\/div>\n\t\t\t<div class=\"ipsDataItem_main\">\n\t\t\t\t<h4 class=\"ipsDataItem_title\">\nCONTENT;\n\n$sprintf = array($licenseData['support']); $return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'license_benefit_support', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), FALSE, array( 'sprintf' => $sprintf ) );\n$return .= <<<CONTENT\n<\/h4>\n\t\t\t<\/div>\n\t\t<\/li>\n\t<\/ul>\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}}"
VALUE;
