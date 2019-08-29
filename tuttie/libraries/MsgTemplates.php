<?php

final class MsgTemplates {

    public static function getInfoTemplate($recipient, $title, $user_id, $subscribe, $data){
        $body = self::getHeader();
        $body .= self::getTitle($title);
        $body .= ' 
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td class="bg_white email-section">
                    <div class="heading-section">
                        <p>'.$recipient.'</p>';
        foreach ($data as $item) {
            $body .= $item;
        }
        $body .= '</div>
                </td>
            </tr>
        </table>';
        $body .= self::getFooter([Utils::getUserAgent(true), $user_id], $subscribe);
        return $body;
    }

    public function getTransactionTemplate($recipient, $title, $user_id, $data){
        $body = self::getHeader();
        $body .= self::getTitle($title);
        $body .= '';
        foreach ($data as $item) {
            $body .= "<p>$item</p>";
        }
        $body .= '';
        $body .= self::getFooter([Utils::getUserAgent(true), $user_id]);
        return $body;
    }

    private static function getHeader(){
        $css = file_get_contents(VIEW_PATH . "includes" . DS . "msg_style" . PHP_EXT);
//        $str_array = explode("\n", NoXSS::escape($css));
//        echo "<pre/>";
//        print_r($str_array);
//        exit();
        $header = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="x-apple-disable-message-reformatting">
                <title></title>
                '.$css.'
            </head>
            ';
        return $header;
    }

    private static function getTitle($p_title){
        $title = '<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
            <center style="width: 100%; background-color: #f1f1f1;">
                <div style="max-width: 600px; margin: 0 auto;" class="email-container">
                    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                        <tr>
                            <td valign="top" class="bg_white" style="padding: 1em 2.5em; text-align: center;">
                                <a href="https://www.myadminpal.com">
                                    <img src="' . CDN_URL . 'img/logos/icon_orange_full.png" alt="" 
                                    style="width: 100%; max-width: 400px; height: auto; margin: auto; display: block;">
                                </a>
                            </td>
                        </tr>
                    </table>
                    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                        <tr>
                            <td valign="middle" class="hero hero-2 bg_white" style="padding: 1em 0;">
                                <div class="text" style="padding: 0 0em; text-align: center;">
                                    <h2>'.$p_title.'</h2>
                                </div>
                            </td>
                        </tr>
                    </table>
        ';
        return $title;
    }

    private static function getFooter($data, $subscribe = true){
        $data = "https://www.myadminpal.com/subscription/unSubscript/{$data[0]}/{$data[1]}";
        $footer = '
              <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td valign="middle" class="hero hero-2 bg_white" style="padding: 1em 0;">
                        <div class="heading-section" style="text-align: center; margin-bottom: -20px;">
                          <h2>Thanks for using MyAdminPal</h2>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td valign="middle" class="bg_black footer email-section" style="text-align: center;">
                    <p style="font-size: 14px;">Copyright © 2018 MyAdminPal. All Rights Reserved.</p>
                    <p style="font-size: 14px;">
                        If you need help or would like to contact us, email<br/>
                        <a href="mailto:support@myadminpal.com" style="color: #fff;">support@myadminpal.com</a>
                    </p>
                    <p style="font-size: 14px;">
                      <a href="https://www.myadminpal.com/legal/terms" style="color: #fff;">Terms</a> |
                      <a href="https://www.myadminpal.com/legal/privacy" style="color: #fff;">Privacy</a>
                    </p>
                    <p style="font-size: 14px;">You are receiving this email because you signed up for a MyAdminPal account.</p>';
        if($subscribe) {
            $footer .= '<p style="font-size: 14px;">
              If you no longer wish to receive these emails, 
              <a href = "'.$data.'" style = "color: #fff;" > UnSubscribe.</a >
            </p>';
        }
                  $footer .= '</td>
                </tr>
              </table>
            </div>
          </center>
        </body>
        </html>
        ';
        return $footer;
    }
}