<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{$config.url}css/ethna.css" type="text/css" />
</head>
<body>

<div id="header">
    <h1>Myproject</h1>
</div>

<div id="main">
    <h2>Index Page</h2>
    <p>hello, world!</p>

{if count($errors) > 0}
  入力内容にエラーがあります。
  {message name="name"}<br>
  {message name="comment"}
{/if}

        {form name="form_comment" ethna_action="menu"}
  メニュー:
  {form_input name="name"}<br>
  投稿内容:
  {form_input name="comment"}

  {form_submit}
{/form}

{$form.comment}

</div>

<ul>
　{foreach from=$app.greetingWord item=item key=key}
　<li>{$key}:{$item}</li>
　{/foreach}
</ul>
<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
</div>

</body>
</html>
