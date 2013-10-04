<?define("NOT_CHECK_PERMISSIONS", true);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
if(defined('BX_UTF') && BX_UTF == TRUE){

	$msg = array(
		'charset' => 'UTF-8',
		'userChngScs' => 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ ÑƒÑÐ¿ÐµÑˆÐ½Ð¾ Ð¸Ð·Ð¼ÐµÐ½Ñ‘Ð½.',
		'userAddScs' => 'ÐŸÐ¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ ÑƒÑÐ¿ÐµÑˆÐ½Ð¾ Ð´Ð¾Ð±Ð°Ð²Ð»ÐµÐ½.',
		'delScript' => 'Ð£Ð´Ð°Ð»Ð¸Ñ‚ÑŒ ÑÐºÑ€Ð¸Ð¿Ñ‚',
		'delScriptMsg' => 'Ð’ Ñ†ÐµÐ»ÑÑ… Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑ‚Ð¸ Ñ€ÐµÐºÐ¾Ð¼ÐµÐ½Ð´ÑƒÐµÑ‚ÑÑ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ð´Ð°Ð½Ð½Ñ‹Ð¹ ÑÐºÑ€Ð¸Ð¿Ñ‚ Ð¸Ð· ÑÐ¸ÑÑ‚ÐµÐ¼Ñ‹.',
		'title' => 'Ð’Ð¾ÑÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð¸Ðµ Ð¿Ð°Ñ€Ð¾Ð»Ñ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¾Ñ€Ð°',
		'go2admin' => 'ÐŸÐµÑ€ÐµÐ¹Ñ‚Ð¸ Ð² Ð°Ð´Ð¼Ð¸Ð¸Ð½ÐºÑƒ',
		'subTitle' => 'Ð’Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð¸Ð¼Ñ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ',
		'note' => 'Ð•ÑÐ»Ð¸ Ñ‚Ð°ÐºÐ¾Ð¹ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚, Ñ‚Ð¾ ÐµÐ³Ð¾ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ Ð±ÑƒÐ´ÐµÑ‚ Ð¿ÐµÑ€ÐµÐ·Ð°Ð¿Ð¸ÑÐ°Ð½, Ð° Ñ‡Ð»ÐµÐ½ÑÑ‚Ð²Ð¾ Ð² Ð³Ñ€ÑƒÐ¿Ð¿Ðµ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¾Ñ€Ð¾Ð² &mdash; Ð²Ð¾ÑÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð¾. Ð•ÑÐ»Ð¸ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð½ÐµÑ‚, Ñ‚Ð¾ Ð¾Ð½ Ð±ÑƒÐ´ÐµÑ‚ ÑÐ¾Ð·Ð´Ð°Ð½.',
		'login' => 'Ð›Ð¾Ð³Ð¸Ð½',
		'pswd' => 'ÐŸÐ°Ñ€Ð¾Ð»ÑŒ',
		'pswdRep' => 'ÐŸÐ¾Ð²Ñ‚Ð¾Ñ€ Ð¿Ð°Ñ€Ð¾Ð»Ñ',
		'email' => 'E-mail',
		'send' => 'ÐžÑ‚Ð¿Ñ€Ð°Ð²Ð¸Ñ‚ÑŒ',
	);

}
else{

	$msg = array(
		'charset' => 'windows-1251',
		'userChngScs' => 'Ïîëüçîâàòåëü óñïåøíî èçìåí¸í.',
		'userAddScs' => 'Ïîëüçîâàòåëü óñïåøíî äîáàâëåí.',
		'delScript' => 'Óäàëèòü ñêðèïò',
		'delScriptMsg' => 'Â öåëÿõ áåçîïàñíîñòè ðåêîìåíäóåòñÿ óäàëèòü äàííûé ñêðèïò èç ñèñòåìû.',
		'title' => 'Âîññòàíîâëåíèå ïàðîëÿ àäìèíèñòðàòîðà',
		'go2admin' => 'Ïåðåéòè â àäìèèíêó',
		'subTitle' => 'Ââåäèòå èìÿ ïîëüçîâàòåëÿ è ïàðîëü',
		'note' => 'Åñëè òàêîé ïîëüçîâàòåëü ñóùåñòâóåò, òî åãî ïàðîëü áóäåò ïåðåçàïèñàí, à ÷ëåíñòâî â ãðóïïå àäìèíèñòðàòîðîâ &mdash; âîññòàíîâëåíî. Åñëè ïîëüçîâàòåëÿ íåò, òî îí áóäåò ñîçäàí.',
		'login' => 'Ëîãèí',
		'pswd' => 'Ïàðîëü',
		'pswdRep' => 'Ïîâòîð ïàðîëÿ',
		'email' => 'E-mail',
		'send' => 'Îòïðàâèòü',
	);

}

$arError = array();
$arMess = array();
if(isset($_POST['action']) && $_POST['action'] == 'submit'){

  $rsUser = CUser::GetByLogin($_POST['login']);
  $arUser = $rsUser->Fetch();

  $user = new CUser;
  $arFields = Array(
    'LOGIN'             => $_POST['login'],
    'ACTIVE'            => 'Y',
    'GROUP_ID'          => array(1, 2),
    'PASSWORD'          => $_POST['pwd1'],
    'CONFIRM_PASSWORD'  => $_POST['pwd2'],
  );
	if(!empty($_POST['email']))
		$arFields['EMAIL'] = $_POST['email'];
  
  $userId = 0;

  if($arUser){

    $result = $user->Update($arUser['ID'], $arFields);
    if(intval($result) > 0){
      $arMess[] = $msg['userChngScs'];
      $userId = $arUser['ID'];
    }
    else{
      $arError[] = $user->LAST_ERROR;
    }

  }
  else{

    $result = $user->Add($arFields);
    if(intval($result) > 0){
      $arMess[] = $msg['userAddScs'];
      $userId = $result;
    }
    else{
      $arError[] = $user->LAST_ERROR;
    }

  }

  global $USER;
  
  if($userId > 0 && !$USER->IsAuthorized())
    $USER->Authorize($userId);

}
elseif(isset($_POST['action']) && $_POST['action'] == 'success' && isset($_POST['success'])){

  if($_POST['success'] == $msg['delScript'])
    @unlink(__FILE__);

  LocalRedirect('/bitrix/admin/');

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?=$msg['charset']?>" />
  <title><?=$msg['title']?></title>
  <style type="text/css">
    html {height: 100%; min-height: 100%;}
    body {background:#4A507B; font-family:Verdana;font-size:9pt; height: 100%; min-height: 100%;  margin: 0;}
    td {text-align:left;vertical-align:top;}
    h1 {font-size:14pt;font-weight:normal;color:#E11537;padding: 15px 25px;margin:0; border-bottom: 1px solid #D6D6D6;}
    h4 {margin: 0 0 10px;}
  </style>
</head>
<body>
<table style="width:100%;height:100%"><tr><td style="text-align:center;vertical-align:middle;">
<table cellspacing="0" cellpadding="0" border="0" style="width: 640px; background: #FFF; margin: 0 auto;">
  <tr>
    <td style="width: 11px"><img src="http://www.1c-bitrix.ru/images/bitrix_setup/corner_top_left.gif" style="width: 11px; height: 57px;" alt=""/></td>
    <td style="vertical-align: middle; height: 57px;"><h1><?=$msg['title']?></h1></td>
    <td style="width: 11px"><img src="http://www.1c-bitrix.ru/images/bitrix_setup/corner_top_right.gif" style="width: 11px; height: 57px;" alt=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="padding:20px;font-size:10pt" valign="top">
<?if(sizeof($arMess)){?>
      <p style="color: green"><?=implode('<br/>', $arMess)?></p>
      <form method="post" action="">
        <p><?=$msg['delScriptMsg']?></p>
        <table cellspacing="0" cellpadding="2" border="0">
          <tr>
            <td><input name="success" value="<?=$msg['delScript']?>" type="submit" /><input type="hidden" name="action" value="success" /></td> 
            <td><input name="success" value="<?=$msg['go2admin']?>" type="submit" /></td>
          </tr>
        </table>
      </form>
<?}else{?>
      <h4><?=$msg['subTitle']?></h4>
      <p><?=$msg['note']?></p>
      <?=(sizeof($arError) ? '<p style="color: red">'.implode('<br/>', $arError).'</p>' : '')?>
      <form method="post" action="">
        <table cellspacing="0" cellpadding="2" border="0">
          <tr>
            <td style="padding-left:10px;"><label for="login"><?=$msg['login']?>:</label></td>
            <td><input name="login" id="login" value="<?=(isset($_POST['login']) ? $_POST['login'] : '')?>"/></td>
          </tr>
          <tr>
            <td style="padding-left:10px;"><label for="pwd1"><?=$msg['pswd']?>:</label></td>
            <td><input name="pwd1" id="pwd1" type="password"/></td> 
          </tr>
          <tr>
            <td style="padding-left:10px;"><label for="pwd2"><?=$msg['pswdRep']?>:</label></td>
            <td><input name="pwd2" id="pwd2" type="password"/></td> 
          </tr>
          <tr>
            <td style="padding-left:10px;"><label for="email"><?=$msg['email']?>:</label></td>
            <td><input name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '')?>"/></td> 
          </tr>
          <tr>
            <td style="padding-left:10px;">&nbsp;</td>
            <td><input type="submit" value="<?=$msg['send']?>"/><input type="hidden" name="action" value="submit"/></td>
          </tr>
        </table>
      </form>
<?}?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><img src="http://www.1c-bitrix.ru/images/bitrix_setup/corner_bottom_left.gif" style="width: 11px; height: 23px;" alt=""/></td>
    <td style="height: 23px; background: url('http://www.1c-bitrix.ru/images/bitrix_setup/bottom_fill.gif')"></td>
    <td><img src="http://www.1c-bitrix.ru/images/bitrix_setup/corner_bottom_right.gif" style="width: 11px; height: 23px;" alt=""/></td>
  </tr>
</table>
</td></tr></table>
</body>
</html>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>