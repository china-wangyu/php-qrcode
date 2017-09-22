<?php
/**
 * Created by PhpStorm.
 * User: zhns_
 * Date: 2017/9/22
 * Time: 9:27
 */

include __DIR__.'/phpqrcode/qrlib.php';

//生成二维码
//QRcode::png('code data text', 'abc.jpg',QR_ECLEVEL_L,5,2,True);



//生成电子名片

$content = 'BEGIN:VCARD'."\n";
$content .= 'VERSION:3.0'."\n";
$content .= 'FN:任侠'."\n";
$content .= 'TEL;CELL;VOICE:15201280000'."\n";
$content .= 'TEL;WORK;VOICE:010-62100000'."\n";
$content .= 'TEL;WORK;FAX:010-62100001'."\n";
$content .= 'EMAIL;PREF;INTERNET:lzw#lzw.me'."\n";
$content .= 'URL:http://lzw.me'."\n";
$content .= 'orG:志文工作室'."\n";
$content .= 'ROLE:产品部'."\n";
$content .= 'TITLE:CTO'."\n";
$content .= 'ADR;WORK;POSTAL:北京市朝阳区北四环中路35号;100101'."\n";
$content .= 'REV:2012-12-27T08:30:02Z'."\n";
$content .= 'END:VCARD'."\n";
QRcode::png($content);