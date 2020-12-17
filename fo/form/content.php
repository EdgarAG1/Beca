<?php
$htmlContent = "<!DOCTYPE html>
<html>
<head>
    
<style type='text/css'>
    #outlook a {
        padding: 0;
    }

    .ReadMsgBody {
        width: 100%;
    }

    .ExternalClass {
        width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
        line-height: 100%;
    }

    img {
        -ms-interpolation-mode: bicubic;
    }

    table,
    td {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
    }

    body,
    table,
    td,
    p,
    a,
    li,
    blockquote {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        font-synthesis: none;
    }
</style>
<style type='text/css'>
    body {
        margin: 0;
        padding: 0;
    }

    img {
        border: 0;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    table {
        border-collapse: collapse !important;
    }

    body,
    #lego-body-table,
    #lego-body-td {
        height: 100% !important;
        width: 100% !important;
        min-width: 100% !important;
        margin: 0;
        padding: 0;
    }

    body,
    #lego-body-background-color {
        background-color: #ffffff;
    }

    .section-wrapper {
        width: 100%;
        min-width: 100%;
    }

    .section-background {
        width: 630px;
        min-width: 630px;
    }

    .section-background.full-width {
        width: 100%;
        min-width: 100%;
    }

    .section-content {
        width: 630px;
        min-width: 630px;
    }

    .section-border {
        table-layout: fixed;
        width: 630px;
        min-width: 630px;
    }

    .section-background.full-width .section-border {
        width: 100%;
        min-width: 100%;
    }

    .column .section-content {
        width: 100%;
        min-width: 100%;
    }

    .column-gutter {
        width: 18px;
        min-width: 18px;
        line-height: 0px;
        font-size: 0px;
    }

    .column.half {
        width: 315px;
        min-width: 315px;
    }

    .column.half.with-gutter {
        width: 306px;
        min-width: 306px;
    }

    .column.third {
        width: 210px;
        min-width: 210px;
    }

    .column.third.with-gutter {
        width: 201px;
        min-width: 201px;
    }

    .column.third.with-gutter.two-gutters {
        width: 198px;
        min-width: 198px;
    }

    .column.two-third {
        width: 420px;
        min-width: 420px;
    }

    .column.two-third.with-gutter {
        width: 411px;
        min-width: 411px;
    }

    .mobile-only {
        display: none;
    }

    .desktop-only {
        display: table;
    }

    @media only screen and (max-width:480px) {
        .section-background {
            max-width: 630px !important;
            width: 100% !important;
            min-width: 100% !important;
        }
    }

    .section-content,
    .section-border {
        max-width: 630px !important;
        width: 100% !important;
        min-width: 100% !important;
    }

    .column {
        display: block !important;
    }

    .column-flow-bottom {
        display: table-footer-group !important;
    }

    .column-flow-top {
        display: table-header-group !important;
    }

    .column.half,
    .column.half.with-gutter,
    .column.third,
    .column.third.with-gutter,
    .column.two-third,
    .column.two-third.with-gutter {
        width: 100% !important;
        min-width: 100% !important;
    }

    .column-gutter {
        display: none !important;
        width: 0 !important;
        min-width: 0 !important;
    }

    .column.column-flow-normal.with-gutter.not-last-column>table,
    .column.column-flow-top>table {
        margin-bottom: 18px !important;
    }

    .mobile-only {
        display: table !important;
    }

    .desktop-only {
        display: none !important;
    }

    .dm-image-block img {
        max-width: 100%;
        height: auto;
        display: block;
    }

    .dm-image-block {
        table-layout: fixed;
    }

    .dm-share-block-icon-label a {
        text-decoration: none;
    }

    blockquote {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 18.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.5;
        letter-spacing: normal;
        margin-top: 18px;
        margin-bottom: 18px;
    }

    h2 {
        font-family: Ruda-Bold, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: bold;
        font-style: normal;
        color: #000000;
        line-height: 1.4;
        letter-spacing: normal;
        margin-top: 16px;
        margin-bottom: 16px;
    }

    p {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 16.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.6;
        letter-spacing: normal;
        margin-top: 16px;
        margin-bottom: 16px;
    }

    td.dm-share-block-label {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.5;
        letter-spacing: normal;
    }

    p.dm-header-footer {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.5;
        letter-spacing: normal;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    h3 {
        font-family: Ruda-Bold, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 20.0px;
        font-weight: bold;
        font-style: normal;
        color: #000000;
        line-height: 1.4;
        letter-spacing: normal;
        margin-top: 8px;
        margin-bottom: 8px;
    }

    li {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 16.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.6;
        letter-spacing: normal;
    }

    h1 {
        font-family: Ruda-Bold, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 29.0px;
        font-weight: bold;
        font-style: normal;
        color: #000000;
        line-height: 1.2;
        letter-spacing: normal;
        margin-top: 21px;
        margin-bottom: 21px;
    }

    p.dm-caption {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.5;
        letter-spacing: normal;
        margin-top: 9px;
        margin-bottom: 9px;
    }

    td.dm-follow-block-label {
        font-family: Ruda-Regular, Ruda, 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12.0px;
        font-weight: normal;
        font-style: normal;
        color: #000000;
        line-height: 1.5;
        letter-spacing: normal;
    }

    blockquote {
        margin-left: 18px;
        margin-right: 18px;
    }

    .dm-text-block.no-paragraph-spacing h1,
    .dm-text-block.no-paragraph-spacing h2,
    .dm-text-block.no-paragraph-spacing h3,
    .dm-text-block.no-paragraph-spacing p,
    .dm-text-block.no-paragraph-spacing blockquote {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    a {
        color: #cb323b;
    }
</style>
        <meta name='x-apple-disable-message-reformatting' />
        <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
        <title></title>
        <!--[if !mso]><!-- -->
        <link href='https://fonts.googleapis.com/css?family=Ruda:400,700' rel='stylesheet' type='text/css' />
        <!--<![endif]-->
        </head>
        <body
            style='margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;height:100%;width:100%;min-width:100%;background-color:rgb(255, 255, 255);font-family:Helvetica,Arial,sans-serif;font-size:13px;'>
            <div id='lego-body-background-color' style='background-color:rgb(255, 255, 255);'>
                <center>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'
                        id='lego-body-table'
                        style='border-collapse:collapse;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;height:100%;width:100%;min-width:100%;'>
                        <tbody>
                            <tr>
                                <td align='center' valign='top' id='lego-body-td'
                                    style='margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;height:100%;width:100%;min-width:100%;'>
                                    <table border='0' cellpadding='0' cellspacing='0' class='section-wrapper'
                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                        <tbody>
                                            <tr>
                                                <td align='center' valign='top'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='section-background full-width'
                                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' valign='top' bgcolor='#4c4d4e'
                                                                    style='background-color:rgb(76, 77, 78);'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='section-content'
                                                                        style='border-collapse:collapse;width:630px;min-width:630px;'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='top'>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='middle'
                                                                                                    align='center' height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'>
                                                                                                    </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border='0' cellpadding='0' cellspacing='0' class='section-wrapper'
                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                        <tbody>
                                            <tr>
                                                <td align='center' valign='top'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='section-background full-width'
                                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' valign='top' bgcolor='#cb323b'
                                                                    style='background-color:rgb(203, 50, 59);'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='section-content'
                                                                        style='border-collapse:collapse;width:630px;min-width:630px;'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='top'>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        class='dm-image-block'
                                                                                        style='border-collapse:collapse;table-layout:fixed;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='top' align='center'>
                                                                                                    <table border='0'
                                                                                                        cellpadding='0'
                                                                                                        cellspacing='0'
                                                                                                        width='100%'
                                                                                                        style='border-collapse:collapse;'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td height='20'
                                                                                                                    style='height:20px;line-height:20px;font-size:20px;'>
                                                                                                                    </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <!--[if !mso]><!-- --><img
                                                                                                        src='http://files.coacalco.gob.mx/logo_vertical-coacalco.png'
                                                                                                        border='0' width='168'
                                                                                                        alt=''
                                                                                                        style='border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-top-style:initial;border-right-style:initial;border-bottom-style:initial;border-left-style:initial;border-top-color:initial;border-right-color:initial;border-bottom-color:initial;border-left-color:initial;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;line-height:100%;outline-color:initial;outline-style:none;outline-width:initial;text-decoration:none;max-width:100%;height:auto;display:block;' />
                                                                                                    <!--<![endif]-->
                                                                                                    <!--[if mso]><img src='http://files.coacalco.gob.mx/logo_vertical-coacalco.png' border='0' alt='' data-dm-src-width-hint='168' width='168' height='163'/><![endif]-->
                                                                                                </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border='0' cellpadding='0' cellspacing='0' class='section-wrapper'
                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                        <tbody>
                                            <tr>
                                                <td align='center' valign='top'>
                                                    <table border='0' cellpadding='0' cellspacing='0' class='section-background'
                                                        style='border-collapse:collapse;width:630px;min-width:630px;'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' valign='top' bgcolor='#ffffff'
                                                                    style='background-color:rgb(255, 255, 255);'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='section-content'
                                                                        style='border-collapse:collapse;width:630px;min-width:630px;'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='top'>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        class='dm-text-block'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='top' align='left'>
                                                                                                    <h1
                                                                                                        style='font-family:Ruda-Bold, Ruda, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:29px;font-weight:bold;font-style:normal;color:rgb(0, 0, 0);line-height:1.2;letter-spacing:normal;margin-top:21px;margin-bottom:21px;text-align:center;'>
                                                                                                        Hola $nombre,</h1>
                                                                                                </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        class='dm-image-block'
                                                                                        style='border-collapse:collapse;table-layout:fixed;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td valign='top' align='center'>
                                                                                                    <!--[if !mso]><!-- --><img
                                                                                                        src='http://coacalco.gob.mx/wp-content/uploads/2019/03/img_becasbanner-01.png'
                                                                                                        border='0' width='882'
                                                                                                        alt=''
                                                                                                        style='border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-top-style:initial;border-right-style:initial;border-bottom-style:initial;border-left-style:initial;border-top-color:initial;border-right-color:initial;border-bottom-color:initial;border-left-color:initial;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;line-height:100%;outline-color:initial;outline-style:none;outline-width:initial;text-decoration:none;max-width:100%;height:auto;display:block;' />

                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        class='dm-text-block'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='top' align='left'>
                                                                                                    <h2
                                                                                                        style='font-family:Ruda-Bold, Ruda, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;font-style:normal;color:rgb(0, 0, 0);line-height:1.4;letter-spacing:normal;margin-top:16px;margin-bottom:16px;text-align:center;'>
                                                                                                        !Felicidades haz solicitado tu beca¡</h2>
                                                                                                </br> </br>
                                                                                                <h2 style='font-family:Ruda-Bold, Ruda, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;font-style:normal;color:rgb(0, 0, 0);line-height:1.4;letter-spacing:normal;margin-top:10px;margin-bottom:16px;text-align:center;'> 
                                                                                                    $mensaje</h2>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td width='20'>
                                                                                                                </td>
                                                                                                            <td valign='middle'
                                                                                                                align='left'>
                                                                                                                <table border='0'
                                                                                                                    cellpadding='0'
                                                                                                                    cellspacing='0'
                                                                                                                    style='border-collapse:collapse;'>
                                                                                                                    <tbody>
                                                                                                                        <tr>

                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                    <br>
                                                                                                </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height='40' style='line-height:0px;font-size:0px;'></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table border='0' cellpadding='0' cellspacing='0' class='section-wrapper'
                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                        <tbody>
                                            <tr>
                                                <td align='center' valign='top'>
                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                        class='section-background full-width'
                                                        style='border-collapse:collapse;width:100%;min-width:100%;'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' valign='top' bgcolor='#dddee1'
                                                                    style='background-color:rgb(221, 222, 225);'>
                                                                    <table border='0' cellpadding='0' cellspacing='0'
                                                                        class='section-content'
                                                                        style='border-collapse:collapse;width:630px;min-width:630px;'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='top'>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='middle'
                                                                                                    align='center' height='35'
                                                                                                    style='height:35px;line-height:35px;font-size:35px;'>
                                                                                                    </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='top' align='center'>
                                                                                                    <table border='0'
                                                                                                        cellpadding='0'
                                                                                                        cellspacing='0'
                                                                                                        style='border-collapse:collapse;'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>
                                                                                                                    <!--[if gte mso 9]><table border='0' cellpadding='0' cellspacing='0'><tr><![endif]-->
                                                                                                                    <!--[if gte mso 9]><td><![endif]-->
                                                                                                                    <table
                                                                                                                        border='0'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        align='left'
                                                                                                                        style='border-collapse:collapse;'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td
                                                                                                                                    valign='middle'>
                                                                                                                                    <a href='https://coacalco.gob.mx'
                                                                                                                                        style='color:rgb(203, 50, 59);'
                                                                                                                                        data-dm-link-id='2'><img
                                                                                                                                            src='http://files.coacalco.gob.mx/icono-safari.png'
                                                                                                                                            width='24'
                                                                                                                                            height='24'
                                                                                                                                            alt='Sitio web'
                                                                                                                                            style='border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-top-style:initial;border-right-style:initial;border-bottom-style:initial;border-left-style:initial;border-top-color:initial;border-right-color:initial;border-bottom-color:initial;border-left-color:initial;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;line-height:100%;outline-color:initial;outline-style:none;outline-width:initial;text-decoration:none;' /></a>
                                                                                                                                </td>
                                                                                                                                <td width='10'
                                                                                                                                    style='width:10px;line-height:0px;font-size:0px;'>
                                                                               
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td height='10'
                                                                                                                                    style='height:10px;line-height:10px;font-size:10px;'>                                      </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!--[if gte mso 9]></td><![endif]-->
                                                                                                                    <!--[if gte mso 9]><td><![endif]-->
                                                                                                                    <table
                                                                                                                        border='0'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        align='left'
                                                                                                                        style='border-collapse:collapse;'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td
                                                                                                                                    valign='middle'>
                                                                                                                                    <a href='https://www.facebook.com/CoacalcoGobMx/'
                                                                                                                                        style='color:rgb(203, 50, 59);'
                                                                                                                                        data-dm-link-id='3'><img
                                                                                                                                            src='http://files.coacalco.gob.mx/icono-facebook.png'
                                                                                                                                            width='24'
                                                                                                                                            height='24'
                                                                                                                                            alt='Facebook'
                                                                                                                                            style='border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-top-style:initial;border-right-style:initial;border-bottom-style:initial;border-left-style:initial;border-top-color:initial;border-right-color:initial;border-bottom-color:initial;border-left-color:initial;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;line-height:100%;outline-color:initial;outline-style:none;outline-width:initial;text-decoration:none;' /></a>
                                                                                                                                </td>
                                                                                                                                <td width='10'
                                                                                                                                    style='width:10px;line-height:0px;font-size:0px;'>                                          </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td height='10'
                                                                                                                                    style='height:10px;line-height:10px;font-size:10px;'>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!--[if gte mso 9]></td><![endif]-->
                                                                                                                    <!--[if gte mso 9]><td><![endif]-->
                                                                                                                    <table
                                                                                                                        border='0'
                                                                                                                        cellpadding='0'
                                                                                                                        cellspacing='0'
                                                                                                                        align='left'
                                                                                                                        style='border-collapse:collapse;'>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td
                                                                                                                                    valign='middle'>
                                                                                                                                    <a href='https://twitter.com/CoacalcoGobMx'
                                                                                                                                        style='color:rgb(203, 50, 59);'
                                                                                                                                        data-dm-link-id='4'><img
                                                                                                                                            src='http://files.coacalco.gob.mx/icono-twitter.png'
                                                                                                                                            width='24'
                                                                                                                                            height='24'
                                                                                                                                            alt='Twitter'
                                                                                                                                            style='border-top-width:0px;border-right-width:0px;border-bottom-width:0px;border-left-width:0px;border-top-style:initial;border-right-style:initial;border-bottom-style:initial;border-left-style:initial;border-top-color:initial;border-right-color:initial;border-bottom-color:initial;border-left-color:initial;border-image-source:initial;border-image-slice:initial;border-image-width:initial;border-image-outset:initial;border-image-repeat:initial;line-height:100%;outline-color:initial;outline-style:none;outline-width:initial;text-decoration:none;' /></a>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td height='10'
                                                                                                                                    style='height:10px;line-height:10px;font-size:10px;'>
                                                                      
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                    <!--[if gte mso 9]></td><![endif]-->
                                                                                                                    <!--[if gte mso 9]></tr></table><![endif]-->
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='10'
                                                                                                    style='height:10px;line-height:10px;font-size:10px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                    <table border='0' cellpadding='0'
                                                                                        cellspacing='0' width='100%'
                                                                                        class='dm-text-block'
                                                                                        style='border-collapse:collapse;'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                                <td valign='top' align='left'>
                                                                                                    <p class='dm-header-footer'
                                                                                                        style='font-family:Ruda-Regular, Ruda, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;font-weight:normal;font-style:normal;color:rgb(0, 0, 0);line-height:1.5;letter-spacing:normal;margin-top:5px;margin-bottom:5px;text-align:center;'>
                                                                                                        © Copyright 2020
                                                                                                        Gobierno de Coacalco.
                                                                                                        Severiano Reyes s/n
                                                                                                        Cabecera Municipal
                                                                                                        55700.</p>
                                                                                                    <p class='dm-header-footer'
                                                                                                        style='font-family:Ruda-Regular, Ruda, Helvetica Neue, Helvetica, Arial, sans-serif;font-size:12px;font-weight:normal;font-style:normal;color:rgb(0, 0, 0);line-height:1.5;letter-spacing:normal;margin-top:5px;margin-bottom:5px;text-align:center;'>
                                                                                                        Si tienes alguna duda
                                                                                                        contáctanos en <a
                                                                                                            href='mailto:tesoreria@coacalco.gob.mx'
                                                                                                            data-dm-link-id='5'>tesoreria@coacalco.gob.mx</a>
                                                                                                    </p>
                                                                                                </td>
                                                                                                <td width='20'
                                                                                                    style='width:20px;line-height:0px;font-size:0px;'>
                                                                                                    </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20'
                                                                                                    style='height:20px;line-height:20px;font-size:20px;'
                                                                                                    colspan='3'></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
            <table width='100%' border='0' cellspacing='0' cellpadding='0'
                style='min-width:100%;background-color:#ffffff;background-color:rgba(255, 255, 255, 0.6);-webkit-backdrop-filter:blur(20px);'
                bgcolor='#ffffff'>
                <tr height='20px' style='height:20px;'>
                    <td height='20px' style='height:20px;line-height:20px;font-size:20px;'></td>
                </tr>
                <tr>
		<td align='center'>
			<table cellpadding='0' cellspacing='0' align='center' border='0' style='border-spacing:0px 0px;padding:0px;vertical-align:middle'>
                <tr style='top:0px;height:20px;'>
					
					
				</tr>
			</table>
		</td>
	</tr>
    <tr height='20px' style='height:20px;'>
        <td height='20px' style='height:20px;line-height:20px;font-size:20px'> </td>
    </tr>
</table></body></html>";
?>