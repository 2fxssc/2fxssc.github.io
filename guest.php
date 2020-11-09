<!doctype html>
<html lang="zh_CN">
	<head>
		<title>提交诉状-复旦大学第二附属学校2024届2班申诉处</title>
		<script>
			function setCookie(cname,cvalue,exdays){
				var d = new Date();
				d.setTime(d.getTime()+(exdays*24*60*60*1000));
				var expires = "expires="+d.toGMTString();
				document.cookie = cname+"="+cvalue+"; "+expires;
			}
			function getCookie(cname){
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i=0; i<ca.length; i++) {
					var c = ca[i].trim();
					if (c.indexOf(name)==0) { return c.substring(name.length,c.length); }
				}
				return "";
			}
			function bool(i){
				if (i) return "true";
				else return "false";
			}
			function submit(){
				let name=document.getElementById("name");
				let whom=document.getElementById("whom");
				let address=document.getElementById("address");
				let isecret=document.getElementById("checked");
				let	tchknow=document.getElementById("tchknow");
				let public=document.getElementById("public");
				let body=document.getElementById("body");
				var stuff="name="+name.value+",whom="+whom.value+",address="+address.value+",body="+body.value+",issecret="+bool(isecret.checked)+",tchknow="+bool(tchknow.checked)+",ispublic="+bool(public.checked);
				setCookie("SSC INFO",stuff,1);
			}
			function submitvm(){
				let name=document.getElementById("name");
				let whom=document.getElementById("whom");
				let address=document.getElementById("address");
				let isecret=document.getElementById("checked");
				let	tchknow=document.getElementById("tchknow");
				let public=document.getElementById("public");
				let body=document.getElementById("body");
				var stuff="name="+name.value+",whom="+whom.value+",address="+address.value+",body="+body.value+",issecret="+bool(isecret.checked)+",tchknow="+bool(tchknow.checked)+",ispublic="+bool(public.checked);
				setCookie("SSC INFO",stuff,1);
				window.location.href="mailto:2fx_shensuchu@sina.cn?subject=申诉处诉状-"+name.value+"&body="+getCookie("SSC INFO");
			}
			function generatehref(){
				window.location.href="mailto:2fx_shensuchu@sina.cn?subject=申诉处诉状-"+name.value+"?body="+getCookie("SSC INFO");
			}
		</script>
	</head>
	<body>
		<fieldset>
			<legend>申诉详细信息填写</legend>
			<input type="text" id="name" placeholder="原告（本人）姓名"/><br>
			<input type="text" id="whom" placeholder="被告姓名"/><br>
			<input type="text" id="body" placeholder="诉状详细信息（不少于100字）"/><br>
			<input type="text" id="address" placeholder="原告联系方式"/><br>
			<input type="checkbox" id="checked"/>保密原告个人信息<br>
			<input type="checkbox" id="tchknow"/>令老师知道该诉状<br>
			<input type="checkbox" id="public"/>公开审判<br>
			<input type="submit" value="保存（使用Cookie，有效期1天）" onclick="submit"/><br>
			<input type="submit" value="查询上次信息" onclick="gc()"/><br>
			<script>function gc(){alert(getCookie("SSC INFO"));}</script>
			<input type="submit" value="递交上次信息" onclick="generatehref()"/><br>
			<input type="submit" value="提交本次诉状" onclick="submitvm()"/>
		</fieldset>
		<footer>
			<center>
				<span>&copy;2020 复旦大学第二附属学校2024届2班申诉处&nbsp;&nbsp;&nbsp;&nbsp;版权所有</span>
			</center>
		</footer>
	</body>
</html>
			
			
