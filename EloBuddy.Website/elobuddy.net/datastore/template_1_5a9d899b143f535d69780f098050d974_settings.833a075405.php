<?php

return <<<'VALUE'
"namespace IPS\\Theme;\nclass class_core_admin_settings extends \\IPS\\Theme\\Template\n{\n\t\t\tfunction dataStoreChange( $downloadUrl, $checkUrl, $error=FALSE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class=\"ipsPad ipsType_center\">\n\t<p class=\"ipsType_large\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'datastore_change_blurb', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t<div class=\"ipsPad\">\n\t\t<a href=\"\nCONTENT;\n$return .= htmlspecialchars( $downloadUrl, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class=\"ipsButton ipsButton_primary\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'datastore_change_download', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a> <a href=\"\nCONTENT;\n$return .= htmlspecialchars( $checkUrl, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" class=\"ipsButton ipsButton_normal\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'continue', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t<\/div>\n\t\nCONTENT;\n\nif ( $error ):\n$return .= <<<CONTENT\n\n\t\t<p class=\"ipsType_warning\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'datastore_change_error', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/p>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n<\/div>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction reputationLike( $blurb ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class='ipsLikeRep'>\n\t<a class='ipsButton ipsButton_like ipsButton_alternate'><i class='fa fa-heart'><\/i> \nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'like', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a>\n\t<span class='ipsLike_contents'>{$blurb}<\/span>\n<\/div>\n<br>\n<span class=\"ipsType_light\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'rep_system_like', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/span>\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction reputationNormal( $pos,$neg ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n<div class='ipsLikeRep'>\n\t\nCONTENT;\n\nif ( $pos ):\n$return .= <<<CONTENT\n\n\t\t<a class='ipsButton ipsButton_rep ipsButton_repUp'><i class='fa fa-arrow-up'><\/i><\/a>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $neg ):\n$return .= <<<CONTENT\n\n\t\t<a class='ipsButton ipsButton_rep ipsButton_repDown'><i class='fa fa-arrow-down'><\/i><\/a>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $pos and $neg ):\n$return .= <<<CONTENT\n\n\t\t<span class='ipsReputation_count ipsType_blendLinks ipsType_neutral'><i class='fa fa-heart ipsType_small'><\/i> 0<\/span>\n\t\nCONTENT;\n\nelseif ( $pos ):\n$return .= <<<CONTENT\n\n\t\t<span class='ipsReputation_count ipsType_blendLinks ipsType_positive'><i class='fa fa-heart ipsType_small'><\/i> 5<\/span>\n\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t<span class='ipsReputation_count ipsType_blendLinks ipsType_negative'><i class='fa fa-heart ipsType_small'><\/i> -5<\/span>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n<\/div>\n<br>\n<span class=\"ipsType_light\">\n\t\nCONTENT;\n\nif ( $pos and $neg ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'rep_system_both', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nelseif ( $pos ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'rep_system_positive', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'rep_system_negative', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n<\/span>\nCONTENT;\n\n\t\treturn $return;\n}}"
VALUE;
