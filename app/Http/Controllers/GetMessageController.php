<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
//use LINE\LINEBot\Event;
//use LINE\LINEBot\Event\BaseEvent;
//use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder ;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;
// define('LINE_MESSAGE_CHANNEL_ID','กรอก ค่า Channel ID');
// define('LINE_MESSAGE_CHANNEL_SECRET','f571a88a60d19bb28d06383cdd7af631');
// define('LINE_MESSAGE_ACCESS_TOKEN','omL/jl2l8TFJaYFsOI2FaZipCYhBl6fnCf3da/PEvFG1e5ADvMJaILasgLY7jhcwrR2qOr2ClpTLmveDOrTBuHNPAIz2fzbNMGr7Wwrvkz08+ZQKyQ3lUfI5RK/NVozfMhLLAgcUPY7m4UtwVwqQKwdB04t89/1O/w1cDnyilFU=');
define('LINE_MESSAGE_CHANNEL_SECRET','858e9bbe3d1b82a913b39c2a061e740a');
define('LINE_MESSAGE_ACCESS_TOKEN','xx9TqE3ZcdDHH5dhwV9hQvvAh2uTCJaULFCKwW4ISmfzKv52ZKMgZ40qSaR9ZlYNO8vQspK8wn2dSA2l189D/PxOTxOz9UlgwnDwePri3wJiu52Ilkx9Qgawh5MW90lsQaHxZbp2grVa4Tgzrj7y1AdB04t89/1O/w1cDnyilFU=');

class GetMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getmessage()
    {
            
        $httpClient = new CurlHTTPClient(LINE_MESSAGE_ACCESS_TOKEN);
        $bot = new LINEBot($httpClient, array('channelSecret' => LINE_MESSAGE_CHANNEL_SECRET));
         
        // คำสั่งรอรับการส่งค่ามาของ LINE Messaging API
        $content = file_get_contents('php://input');
         
        // แปลงข้อความรูปแบบ JSON  ให้อยู่ในโครงสร้างตัวแปร array
       // แปลงข้อความรูปแบบ JSON  ให้อยู่ในโครงสร้างตัวแปร array
$events = json_decode($content, true);
if(!is_null($events)){
    // ถ้ามีค่า สร้างตัวแปรเก็บ replyToken ไว้ใช้งาน
    $replyToken = $events['events'][0]['replyToken'];
    $typeMessage = $events['events'][0]['message']['type'];
    $userMessage = $events['events'][0]['message']['text'];
    $userMessage = strtolower($userMessage);
    switch ($typeMessage){
        case 'text':
            switch ($userMessage) {
                case "สมัครเข้าร่วมสถาบัน":
                    $textReplyMessage = "สอบถามข้อมูล";
                    $replyData = new TextMessageBuilder($textReplyMessage);
                    break;
                case "เกี่ยวกับ":
                    // กำหนด action 4 ปุ่ม 4 ประเภท
                    $actionBuilder = array(
                        new MessageTemplateActionBuilder(
                            'หลักการ',// ข้อความแสดงในปุ่ม
                            'หลักการพลังประชารัฐ' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                        ),
                        new MessageTemplateActionBuilder(
                            'ฟันเฟือง',// ข้อความแสดงในปุ่ม
                            'ฟันเฟืองขับเคลื่อนประชารัฐ' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                        ),
                        new MessageTemplateActionBuilder(
                            'ภารกิจสถาบัน',// ข้อความแสดงในปุ่ม
                            'ภารกิจสถาบันปัญญาประชารัฐ' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                        ),
                    );
                    $imageUrl = NULL;
                    $replyData = new TemplateMessageBuilder('เกี่ยวกับพลังประชารัฐ',
                        new ButtonTemplateBuilder(
                                'ข้อมูลเกี่ยวกับพลังประชารัฐ', // กำหนดหัวเรื่อง
                                'Please select', // กำหนดรายละเอียด
                                $imageUrl, // กำหนด url รุปภาพ
                                $actionBuilder  // กำหนด action object
                        )
                    );              
                    break;  
                             
                case "หลักสูตร":
                      $actionBuilder = array(
                        new MessageTemplateActionBuilder(
                            'ชื่อหลักสูตร',// ข้อความแสดงในปุ่ม
                            'ชื่อหลักสูตร' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                        ),
                        new MessageTemplateActionBuilder(
                            'กิจกรรมของหลักสูตร',// ข้อความแสดงในปุ่ม
                            'กิจกรรมของหลักสูตร' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                        ),
                    );
                    $imageUrl = NULL;
                    $replyData = new TemplateMessageBuilder('เกี่ยวกับหลักสูตร',
                        new ButtonTemplateBuilder(
                                'เกี่ยวกับหลักสูตร', // กำหนดหัวเรื่อง
                                'Please select', // กำหนดรายละเอียด
                                $imageUrl, // กำหนด url รุปภาพ
                                $actionBuilder  // กำหนด action object
                        )
                    );              
                    break;
                case "ข่าวสาร":
                    $audioUrl = "https://www.mywebsite.com/simpleaudio.mp3";
                    $replyData = new AudioMessageBuilder($audioUrl,27000);
                    break;
                case "คำถามที่พบบ่อย":
                    $placeName = "ที่ตั้งร้าน";
                    $placeAddress = "แขวง พลับพลา เขต วังทองหลาง กรุงเทพมหานคร ประเทศไทย";
                    $latitude = 13.780401863217657;
                    $longitude = 100.61141967773438;
                    $replyData = new LocationMessageBuilder($placeName, $placeAddress, $latitude ,$longitude);              
                    break;   
//////////////////////////////
                case "หลักการพลังประชารัฐ":
                    $picFullSize = 'https://panya.herokuapp.com/img/1.png';
                    $picThumbnail = 'https://panya.herokuapp.com/img/1.png';
                    $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                    break;
                case "ฟันเฟืองขับเคลื่อนประชารัฐ":
                    $picFullSize = 'https://panya.herokuapp.com/img/2.png';
                    $picThumbnail = 'https://panya.herokuapp.com/img/2.png';
                    $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                    break;
                case "ภารกิจสถาบันปัญญาประชารัฐ":
                    $picFullSize = 'https://panya.herokuapp.com/img/3.png';
                    $picThumbnail = 'https://panya.herokuapp.com/img/3.png';
                    $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                    break;
//////////////////////////////
                case "ชื่อหลักสูตร":
                    $picFullSize = 'https://panya.herokuapp.com/img/course.png';
                    $picThumbnail = 'https://panya.herokuapp.com/img/course.png';
                    $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                    break;
                case "กิจกรรมของหลักสูตร":
                    $picFullSize = 'https://panya.herokuapp.com/img/activity.png';
                    $picThumbnail = 'https://panya.herokuapp.com/img/activity.png';
                    $replyData = new ImageMessageBuilder($picFullSize,$picThumbnail);
                    break;

                default:
                    $textReplyMessage = " คุณไม่ได้พิมพ์ ค่า ตามที่กำหนด";
                    $replyData = new TextMessageBuilder($textReplyMessage);         
                    break;                                      
            }
            break;

        default:
            $textReplyMessage = json_encode($events);
            $replyData = new TextMessageBuilder($textReplyMessage);         
            break;  
    }
}
//l ส่วนของคำสั่งตอบกลับข้อความ
$response = $bot->replyMessage($replyToken,$replyData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
