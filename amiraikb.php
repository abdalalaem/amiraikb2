<?php
#ملف كتابتي كامله
# + غير مسموح بالتغير الحقوق ونشر بدون مصدري
#ولا للبيع
#dev - @d666d6  
#وربكم تعبان ع ملف
#سسيو
$token = "5638691808:AAGKsLTWnfeHIAJ736E2eoxVUIR55NFtf6E";
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$photo = $message->photo;
$video = $message->video;
$sticmkar = $message->sticmkar;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticmkar_id = $message->sticmkar->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$hmo = json_decode(file_get_contents("data.json"),1);
$hmode = json_decode(file_get_contents("hmo.json"),1);
$all = count($hmo['id'])-1;
if ($message && !in_array($from_id,$hmo['id'])){
file_put_contents("data.json");
$hmo['id'][] = "$from_id";
file_put_contents("data.json",json_encode($hmo));
}
$start = $hmode['start'];
if($start==null){
$start="
نص الاستارت
";
}
$a1 = 5214682327;
$admin = array(5214682327,$a1,$hmo['admin']);
$chhhhh = $hmo['inlinech1'];
$chhh = $hmo['inlinech2'];
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hmo['ch1']."&user_id=".$from_id);
$getch1 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=".$hmo['inlinech1']))->result;
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=".$hmo['inlinech2']))->result;
$Namech1 = $getch1->title;
$Namech2 = $getch2->title;
$telegram = $chhhhh;
$telegram2 = $telegram;
$telegram3 = str_replace("@","",$telegram2);
$telegram4 = $chhh;
$telegram5 = $telegram4;
$telegram6 = str_replace("@","",$telegram5);
#////////////{hmo}////////////#
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicmkad"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'• عذرا عزيزي عليك الاشتراك بقناة البوت ليتم تشغيل 
'.$hmo['ch1'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$Namech1" ,'url'=>"t.me//$telegram3"],['text'=>"$Namech2" ,'url'=>"t.me//$telegram6"]],
]])
]);return false;
}
#////////////{hmo}////////////#
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hmo['ch2']."&user_id=".$from_id);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicmkad"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'• عذرا عزيزي عليك الاشتراك بقناة البوت ليتم تشغيل 
'.$hmo['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$Namech1" ,'url'=>"t.me//$telegram3"],['text'=>"$Namech2" ,'url'=>"t.me//$telegram6"]],
]])
]);return false;
}
$bot = $hmo['bot'];
$o1 = $hmo['o1'];
$o2 = $hmo['o2'];
#////////////{hmo}////////////#
if($text == "/start" and in_array($from_id,$admin)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~ 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• عمل البوت : '.$i4.' •' ,'callback_data'=>"bot"],['text'=>'اشعارات الدخول '.$o1.'' ,'callback_data'=>"o1"]],
[['text'=>'اشعارات الاستخدام '.$o2.'','callback_data'=>"o2"]],
[['text'=>'تغيير الاستارت','callback_data'=>"start"]],
[['text'=>"• الاشتراك •" ,'callback_data'=>"ch"],['text'=>"• رفع ادمن •" ,'callback_data'=>"3"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"],['text'=>"• الاحصائيات •" ,'callback_data'=>"2"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{start}////////////#
if($data == "start" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>'
• مرحبا بك في قسم رساله الترحيب (/start) 🌾
- ستظهر هذه الرساله عند ارسال (/start) الى البوت الخاص بك 

- ارساله الحاليه : `'.$hmo['start'].'`
- - - - - - - - - - - - ',
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• تغيير الرسالة •" ,'callback_data'=>"offstart"],['text'=>"• مسح الرسالة •" ,'callback_data'=>"dstart"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "offstart" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>'
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الstart من خلال استخدام الاهاشتاكات التاليه :

1. `#name_user` : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
3. `#name` : لوضع اسم الشخص
4. `#id` : لوضع ايدي الشخص 

يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
- - - - - - - - - - - - ',
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •" ,'callback_data'=>"start"]],
]])
]);
$hmo['data'] = "st";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($text and $hmo['data'] == "st" and in_array($from_id,$admin)){
$no2 = str_replace('#name_user','[$name](tg://openmessage?user_id=$from_id)',$text);
	$no2 = str_replace('#username','@'.$username,$no2);
	$no2 = str_replace('#name',$name,$no2);
	$no2 = str_replace('#id',$from_id,$no2);
$text = $no2;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم حفظ كليشة الاستارت",
]);
$hmo['st'] = "❌";
$hmo['start'] = "$text";
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($text and $hmo['st'] == "❌" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>''.$hmo['start'].'',
 'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
#////////////{هنا خلي الازرار}////////////#
]])
]);
exit();
}
#////////////{hmo}////////////#
if($data == "dstart" and $hmo['st'] == "❌" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• تم مسح رساله start والرجوع الى الرساله الاصلية !",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['st'] = "✅";
$hmo['data'] = "stop";
$hmo['start'] ="
نص الاستارت
";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "HMO" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~ ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'• عمل البوت : '.$i4.' •' ,'callback_data'=>"bot"],['text'=>'اشعارات الدخول '.$o1.'' ,'callback_data'=>"o1"]],
[['text'=>'اشعارات الاستخدام '.$o2.'','callback_data'=>"o2"]],
[['text'=>'تغيير الاستارت','callback_data'=>"start"]],
[['text'=>"• الاشتراك •" ,'callback_data'=>"ch"],['text'=>"• رفع ادمن •" ,'callback_data'=>"3"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"],['text'=>"• الاحصائيات •" ,'callback_data'=>"2"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
$hmoinline = $hmo['hmoinline'];
$alch1 = $hmo['ch1'];
$alch2 = $hmo['ch2'];
if($data == "ch" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"• اهلا عزيزي مطور 
• اليك قائمه الاشتراك اجباري 
- - - - - - - - - - - - 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$alch1" ,'callback_data'=>"alch1"]],
[['text'=>"$alch2" ,'callback_data'=>"alch2"]],
[['text'=>"• اضف قناة اولا •" ,'callback_data'=>"ch1"],['text'=>"• اضف قناة ثانية •" ,'callback_data'=>"ch2"]],
[['text'=>"• ازرار شفافة $hmoinline •" ,'callback_data'=>"hmoinline"]],
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "ch1" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• الآن قم بارسال معرف قناتك بدون @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['c'] = "ch2";
file_put_contents("data.json",json_encode($hmo));
}
if($text and $hmo['c'] == "ch2" and in_array($from_id,$admin)){
$no2 = str_replace('@','',$text);
	$no2 = str_replace('t.me//','',$no2);
	$no2 = str_replace('telegram','',$no2);
	$no2 = str_replace('.me','',$no2);
	$no2 = str_replace('//','',$no2);
	$no2 = str_replace('https://','',$no2);
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم اضافه القناة [@$no2]
• قم برفع البوت ادمن في القناة
",
]);
$hmo['ch1'] = "@$text";
$hmo['data'] = "stop";
$hmo['c'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "ch2" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• الآن قم بارسال معرف قناتك بدون @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "ch2";
file_put_contents("data.json",json_encode($hmo));
}
if($text and $hmo['data'] == "ch2" and in_array($from_id,$admin)){
	$no2 = str_replace('@','',$text);
	$no2 = str_replace('t.me//','',$no2);
	$no2 = str_replace('telegram','',$no2);
	$no2 = str_replace('.me','',$no2);
	$no2 = str_replace('//','',$no2);
	$no2 = str_replace('https://','',$no2);
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم اضافه القناة [@$no2]
• قم برفع البوت ادمن في القناة
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['ch2'] = "@$no2";
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "alch1" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• تم حذف القناة '.$hmo['ch1'].' من الإشتراك الإجباري ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
unset($hmo['ch1']);
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "alch2" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• تم حذف القناة '.$hmo['ch2'].' من الإشتراك الإجباري ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
unset($hmo['ch2']);
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "hmoinline" and in_array($from_id2,$admin)){
if($hmo['hmoinline']!="✅"){
$i3 = "✅";
}else{
$i3 = "❌";
}
$hmo['hmoinline'] = $i3;
file_put_contents("data.json",json_encode($hmo));
$hmoinline = $hmo['hmoinline'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$alch1" ,'callback_data'=>"alch1"]],
[['text'=>"$alch2" ,'callback_data'=>"alch2"]],
[['text'=>"• اضف قناة اولا •" ,'callback_data'=>"ch1"],['text'=>"• اضف قناة ثانية •" ,'callback_data'=>"ch2"]],
[['text'=>"• ازرار شفافة $hmoinline •" ,'callback_data'=>"hmoinline2"]],
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
$hmo['inlinech1'] = $hmo['ch1'];
$hmo['inlinech2'] = $hmo['ch2'];
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "hmoinline2" and in_array($from_id2,$admin)){
if($hmo['hmoinline']!="✅"){
$i3 = "✅";
}else{
$i3 = "❌";
}
$hmo['hmoinline'] = $i3;
file_put_contents("data.json",json_encode($hmo));
$hmoinline = $hmo['hmoinline'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$alch1" ,'callback_data'=>"alch1"]],
[['text'=>"$alch2" ,'callback_data'=>"alch2"]],
[['text'=>"• اضف قناة اولا •" ,'callback_data'=>"ch1"],['text'=>"• اضف قناة ثانية •" ,'callback_data'=>"ch2"]],
[['text'=>"• ازرار شفافة $hmoinline •" ,'callback_data'=>"hmoinline"]],
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
unset($hmo['inlinech1']);
unset($hmo['inlinech2']);
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "1" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'*• مرحبا بك في قسم الاذاعه 🔥*

- عدد الخاص : '.$hmo['id'].'

- عدد المحظورين : '.$hmo['ban']
,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه للخاص",'callback_data'=>"msg"],['text'=>"اذاعه توجية",'callback_data'=>"to"]],
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "msg" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• ارسال الان الكليشه ( نص او جميع الميديا ) 
• يمكنك استخدام كود جاهز في الاذاعه او يمكنك استخدام الماركداون
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• الغاء •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "send";
file_put_contents("data.json",json_encode($hmo));
}
if(!$data and $hmo['data'] == 'send' and in_array($from_id,$admin)){
foreach($hmo['id'] as $all){
if($text)
bot('sendMessage', [
'chat_id'=>$all,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$all,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$all,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$all,
'video_note'=>$video_note_id,
]);
if($sticmkar)
bot('Sendsticmkar',[
'chat_id'=>$all,
'sticmkar'=>$sticmkar_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$all,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$all,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$all,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
}
	     for($i=0;$i<count($hmo['id']); $i++){
$ok = bot('sendChatAction' , ['chat_id' =>$hmo['id'][$i],
'action' => 'typing' ,])->ok;
if($hmo['id'][$i] != "" and $ok != 1){
file_put_contents("hmo.txt",$hmo['id'][$i]
,FILE_APPEND);
}}
$ooo = explode("\n",file_get_contents("hmo.txt"));
$iii = count($ooo) - 1;
$mmm = $count - $iii;
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {$mmm} عضو حقيقي
• الاعضاء الذين قامو بحظر البوت {$iii}

• عدد العضاء الكلي : {".$hmo['id']."}
",
'parse_mode'=>"Markdown",
	'reply_to_meesage_id'=>$message_id,
]);
$hmo['data'] = "step";
unlink("hmo.txt");
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "2" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'مرحبا بك في قسم الاحصائيات 📊

- عدد المستخدمين في الخاص : '.$hmh['id'].'

- عدد المحظورين : '.$hmo['ban']
,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• مسح المحضورين •" ,'callback_data'=>"de1"]],
[['text'=>"• حظر شخص •" ,'callback_data'=>"de2"],['text'=>"• الغاء حظر الشخص •" ,'callback_data'=>"de3"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"]],
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "3" and in_array($from_id2,$admin)){
$mkay=[];
foreach ($hmo['admin'] as $ad){
$mkay[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$mkay[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$mkay[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"HMO"]];
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع ادمنيه في البوت او حذفهم 

- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة .
- - - - - - - - - - - - 
",
reply_markup=>json_encode($mkay)
]);
}
$ex = explode("#", $data);
if($ex[0] == "del"){
$ser = array_search($ex[1],$hmo["admin"]);
unset($hmo["admin"][$ser]);
file_put_contents("data.json",json_encode($hmo));
$mkay=[];
foreach ($hmo['admin'] as $ad){
$mkay[inline_keyboard][]=[[text=>"$ad",callback_data=>"del#$ad"]];
}
$mkay[inline_keyboard][]=[[text=>"اضف ادمن ➕",callback_data=>"add_admin"]];
$mkay[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"HMO"]];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
reply_markup=>json_encode($mkay)
]);
}
#////////////{hmo}////////////#
if($data == "add_admin" and $from_id2 == $a1 ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الان ارسل ايدي الشخص •",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• الغاء •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "go";
file_put_contents("data.json",json_encode($hmo));
}
if($text  and $from_id == $a1 and $hmo['data'] == "go" and !in_array($text,$hmo['id'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text ليس عضو بالبوت •",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
}
$test = $hmo['admin'];
if($text and $from_id == $a1 and $hmo['data'] == "go" and in_array($text,$test)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو مرفوع ادمن •",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •" ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
exit();
}
if($text and $from_id == $a1 and $hmo['data'] == "go" and in_array($text,$hmo['id'])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافه $text ادمن ✅
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['admin'][] = $text;
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
if($data == "to" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• ارسال الان الكليشه !",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "to";
file_put_contents("data.json",json_encode($hmo));
}
if($message and $hmo['data'] == "to" and in_array($from_id,$admin)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'جاري التوجية',
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"HMO"]],
]])
]);
for($i=0;$i<count($hmo['id']); $i++){
bot('forwardMessage', [
'chat_id'=>$hmo['id'][$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
$ok = bot('sendChatAction' , ['chat_id' =>$hmo['id'][$i],
'action' => 'typing' ,])->ok;
if($hmo['id'][$i] != "" and $ok != 1){
file_put_contents("A5.txt",$hmo['id'][$i]
,FILE_APPEND);
}
$ooo = $hmo['id'];
$iii = count($ooo) - 1;
$mmm = $count - $iii;
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {$mmm} عضو حقيقي
• الاعضاء الذين قامو بحظر البوت {$iii}

• عدد العضاء الكلي : {".$hmo['id']."}
",
'parse_mode'=>"Markdown",
	'reply_to_meesage_id'=>$message_id,
]);
$hmo['data'] = "stop";
unlink("hmo.txt");
file_put_contents("data.json",json_encode($hmo));
}
if($data == "o1" and in_array($from_id2,$admin)){
if($hmo['o1']!="✅"){
$i1 = "✅";
}else{
$i1 ="❌";
}
$hmo['o1'] = $i1;
file_put_contents("data.json",json_encode($hmo));
$o1 = $hmo['o1'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• عمل البوت : '.$i4.' •' ,'callback_data'=>"bot"],
['text'=>'اشعارات الدخول '.$o1.'' ,'callback_data'=>"o1"]],
[['text'=>'اشعارات الاستخدام '.$o2.'' ,'callback_data'=>"o2"]],
[['text'=>"• الاشتراك •" ,'callback_data'=>"ch"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"],['text'=>"• الاحصائيات •" ,'callback_data'=>"2"]],
]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($user != null){
$med = "@$user";
}elseif($user == null){
$med = "لا يملك معرف";
}
if($text == "/start" and $from_id != $admin and $o1 == "✅" and !in_array($from_id,$hmo['id'])){
bot('sendmessage',[
'chat_id'=>$a1,
'text'=>'
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
    -----------------------
• معلومات العضو الجديد .

• الاسم : '.$name.'
• المعرف : '.$med.'
• الايدي : '.$from_id.'
    -----------------------
• عدد الاعضاء الكلي : '.$hmo['id'].'
',
'parse_mode'=>"Markdown",
]);
}
#////////////{hmo}////////////#
if($data == "o2" and in_array($from_id2,$admin)){
if($hmo['o2']!="✅"){
$i2 = "✅";
}else{
$i2 ="❌";
}
$hmo['o2'] = $i2;
file_put_contents("data.json",json_encode($hmo));
$o2 = $hmo['o2'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'• عمل البوت : '.$i4.' •' ,'callback_data'=>"bot"],['text'=>'اشعارات الدخول '.$o1.'' ,'callback_data'=>"o1"]],
[['text'=>'اشعارات الاستخدام '.$o2.'','callback_data'=>"o2"]],
[['text'=>'تغيير الاستارت','callback_data'=>"start"]],
[['text'=>"• الاشتراك •" ,'callback_data'=>"ch"],['text'=>"• رفع ادمن •" ,'callback_data'=>"3"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"],['text'=>"• الاحصائيات •" ,'callback_data'=>"2"]],

]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}

if($message and $text != "/start" and $from_id != $a1 and $o2 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$a1,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
#////////////{hmo}////////////#
if($data == "bot" and in_array($from_id2,$admin)){
if($hmo['bot']!="✅" ){
$i4 = "✅";
}else{
$i4 = "❌";
}

$hmo['bot'] = $i4;
file_put_contents("data.json",json_encode($hmo));
$i4 = $hmo['bot'];
bot('editMessageReplyMarkup',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[

[['text'=>'• عمل البوت : '.$i4.' •' ,'callback_data'=>"bot"],['text'=>'اشعارات الدخول '.$o1.'' ,'callback_data'=>"o1"]],
[['text'=>'اشعارات الاستخدام '.$o2.'','callback_data'=>"o2"]],
[['text'=>'تغيير الاستارت','callback_data'=>"start"]],
[['text'=>"• الاشتراك •" ,'callback_data'=>"ch"],['text'=>"• رفع ادمن •" ,'callback_data'=>"3"]],
[['text'=>"• اذاعة •" ,'callback_data'=>"1"],['text'=>"• الاحصائيات •" ,'callback_data'=>"2"]],

]])
]);
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
if($data == "bot" and $hmo['bot'] == "❌" and in_array($from_id2,$admin)){
bot("EditMessageText",[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"ارسل كليشه تعطيل البوت",
]);
$hmo['data'] = "bo22";
file_put_contents("data.json",json_encode($hmo));
} 
if($text and $hmo['data'] == "bo22" and in_array($from_id,$admin)){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"• تم حفظ رساله",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['botst'] = "$text";
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data =="de1" and $hmo['ban'] == null){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"لا يوجد محضورين ⚠️",
'show_alert'=>true
]);
}
if($data =="de1" and in_array($from_id,$admin)){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"تم مسح المحضورين ⚠️",
'show_alert'=>true
]);
$hmo['ban'] = null;
file_put_contents("data.json",json_encode($hmo));
}
#////////////{hmo}////////////#
if($data == "de2" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• ارسل ايدي شخص للحظر',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "de2";
file_put_contents("data.json",json_encode($hmo));
}
if($text and $hmo['data'] == "de2" and in_array($from_id,$admin)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*تم حظر الشخص من البوت ⛔️*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot("sendmessage",[
'chat_id'=>$text,
"text"=>"*تم حظرك من البوت ⛔️*",
]);
$hmo['ban'][] = "$text";
$hmo['data'] = "stop";
file_put_contents("data.json",json_encode($hmo));
}
if($data == "de3" and in_array($from_id2,$admin)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'• ارسل ايدي شخص لالغاء حظر',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رجوع •' ,'callback_data'=>"HMO"]],
]])
]);
$hmo['data'] = "de3";
file_put_contents("data.json",json_encode($hmo));
}
if($text and $hmo['data'] == "de3" and in_array($from_id,$admin)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الغاء حظر الشخص من البوت ✅",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
bot("sendmessage",[
'chat_id'=>$text,
"text"=>"*تم الغاء حظرك من البوت ✅*",
]);
$mkay = array_search($text,$hmo["ban"]);
unset($hmo["ban"][$mkay]);
$hmo["ban"] = array_values($hmo["ban"]); 
$hmo = json_encode($hmo,true);
$hmo['data'] = "stop";
file_put_contents("data.json",$hmo);
} 
if($message and $hmo['bot'] =="❌"  and !in_array($from_id,$hmo['ban']) and !in_array($from_id,$admin)){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>$hmo['botst']
 ]);
 return false;
}
if($message and in_array($from_id,$hmo['ban'])){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>""
 ]);
 return false;
}
if ($text == '/start') {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$start."",
'parse_mode'=>"MarkDown",
]);
}
//////////////(hmo)/////////#
