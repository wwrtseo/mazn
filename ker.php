<?php
ob_start();
$API_KEY = '7135374772:AAFIMhMg7bYXUrRQXYzpInEY4nsjU1jJM7A';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $rembo = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
        $h4ck3riraq = file_get_contents($url);
        return json_decode($h4ck3riraq);
}
$bot_id = "7135374772"; // ايدي بوتك
$admmm = "6180797120";
$tbbots = "Ado_Abdulsalam"; 
$Dev = array("$admmm","6180797120");// حط ايدي مطور ثاني بدل الاصفار
@$channel = "Ado_Abdulsalam";
@$token = API_KEY;
$buyy = "@$tbbots";

@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$from_ud = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
$name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$texxt = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$re = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$hj = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$you = $hj['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$yyou = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$can_change_info_rply = $statjsonrt['result']['can_change_info'];
$can_delete_messages_rply =  $statjsonrt['result']['can_delete_messages'];
$can_restrict_members_rply = $statjsonrt['result']['can_restrict_members'];
$can_invite_users_rply = $statjsonrt['result']['can_invite_users'];
$can_pin_messages_rply = $statjsonrt['result']['can_pin_messages'];
$can_promote_members_rply = $statjsonrt['result']['can_promote_members'];
$new = $message->new_chat_member;
$idBot = $bot_id;
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");


if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🥇¦› *رتــبتڪ* ›› *$info* 👨‍🏭

🎗┇› [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}

// fosh 
if ($settings["lock"]["fosh"] == "مقفول"){
if (strstr($text ,"كس") == true  or strstr($text ,"زب") == true or strstr($text ,"اير") == true  or  strstr($text ,"شرموطة") == true   or strstr($text ,"طيز") == true or strstr($text ,"كسمك") == true or strstr($text ,"كسختك") == true or strstr($text ,"مشتهيه") == true or strstr($text ,"مشتهية") == true  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الممنوعات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الممنوعات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$lockfosh = $settings["lock"]["fosh"];
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
}
}
}
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة بنجاح ✓
👨🏽‍🏭❉ تم رفع المنشئ ✓
👮🏽‍♂❉ ارسل رفع الادمنيه ليتم رفع جميع ادمنيه الجروب بالبوت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  

$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
				"fosh": "مفتوح",
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة من قبل ✓
• بواسطة ‹ $from_id ›
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == null) {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
}
}
}
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة بنجاح ✓
👨🏽‍🏭❉ تم رفع المنشئ ✓
👮🏽‍♂❉ ارسل رفع الادمنيه ليتم رفع جميع ادمنيه الجروب بالبوت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
❉ اهلا مطوري ؛ كيف حالك 
🧜‍♂❉ تم تفعيلي في مجموعة جديدة
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📛❉ اسم الجروب « $namegroup »
📛❉ ايدي الجروب « `$chat_id` »
📛❉ رابط الجروب « $getlinkde »
📛❉ عدد الاعضاء « $MEMH »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🚸❉ بواسطة « [$first_name](t.me/$username)
🚸❉ ايديه « $from_id »
🚸❉ معرفه « @$username »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
				"fosh": "مفتوح",
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة من قبل ✓
• بواسطة ‹ $from_id ›
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🛑❉ عذرا !!
⚜❉ لايمكنني تفعيل هاذه المجموعة لانها قليله جدا ❌
🔱❉ يجب ان يكون عدد اعضاء المجموعة { $kocke } عضو ليتم التفعيل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if(!in_array($from_id,$Dev)){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
👨‍✈️✣ للمطور الاساسي فقط ✓
📌✣ معرفه $buyy",
]);
}
}
elseif ($text  == "قفل الكل"  or $text  == "automatic" or $text  == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮❉ تم بنجاح قفل الكل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="مقفول";
		$settings["lock"]["username"]="مقفول";
		$settings["lock"]["bot"]="مقفول";
		$settings["lock"]["forward"]="مقفول";
		$settings["lock"]["tgservices"]="مقفول";
		$settings["lock"]["contact"]="مقفول";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

elseif( $text =="unmute all" or $text =="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الكل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="البوت" || $text =="بوت"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
ماذا تريذ 
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>'','url'=>"https://telegram.me/lardodBOT?start"]
              ] 
              ],
        ])
            ]);
        }

  