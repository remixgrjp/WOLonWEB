<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>



{if $app.info}<p style="color:blue;">{$app.info}</p>{/if}
{if $app.warn}<p style="color:red;">{$app.warn}</p>{/if}



<form method="post" action="./">
<table>
	<tr>
		<td style="text-align:right">MacAddress :</td>
		<td>
			{form_input name="mac" placeholder="例 FF-FF-FF-FF-FF-FF"}
			{if is_error('mac')}<span style="color:red;">{message name="mac"}</span>{/if}
		</td>
	</tr>
	<tr>
		<td style="text-align:right">BroadcastAddress :</td>
		<td>
			{form_input name="bcast" placeholder="例 192.168.0.255"}
			{if is_error('bcast')}<span style="color:red;">{message name="bcast"}</span>{/if}
		</td>
	</tr>
	<tr>
		<td style="text-align:right">Port :</td>
		<td>
			{form_input name="port" placeholder="例 1"}
			{if is_error('port')}<span style="color:red;">{message name="port"}</span>{/if}
		</td>
	</tr>
	<tr>
		<td style="text-align:right">LicenceKey :</td>
		<td>
			{form_input name="key" placeholder="例 XXXXXXX"}
			{if is_error('key')}<span style="color:red;">{message name="key"}</span>{/if}
		</td>
	</tr>
	<tr>
		<td>{$smarty.now|date_format:"'%y-%m-%d %H:%M:%S"}</td>
		<td>
			<input type="submit" name="action_Send" value="Wake On LAN" />
		</td>
	</tr>
<table>
{if $app.cmd}<p style="color:blue;">{$app.cmd}</p>{/if}
</form>



</body>
</html>
