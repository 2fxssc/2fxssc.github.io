function login(){
  var x = document.getElementById("uid");
  var y = document.getElementById("pid");
  if (x.value == "huangxixi"){
    if (y.value == "20200223"){
      localStorage.setItem("userName", x.value);
      localStorage.setItem("isLogin", true);
      window.location.href="https://2fxssc.github.io/member/center/";
    }
    else alert("对不起，您的密码有误，请再次输入！");
  }
  else {
    if (x.value == "shuzhouliu"){
     if (y.value == "20200207"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
       window.location.href="https://2fxssc.github.io/member/center/";
        
      }else alert("对不起，您的密码有误，请再次输入！");
    }
    else {
    if (x.value == "xuan"){
     if (y.value == "20200222"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
       window.location.href="https://2fxssc.github.io/member/center/";
      }
       else alert("对不起，您的密码有误，请再次输入！");
    }
      else {
    if (x.value == "jimmymeng"){
     if (y.value == "20200208"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
       window.location.href="https://2fxssc.github.io/member/center/";
      }
       else alert("对不起，您的密码有误，请再次输入！");
    }
        else {
    if (x.value == "yzy"){
     if (y.value == "20200236"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
       window.location.href="https://2fxssc.github.io/member/center/";
      }
       else alert("对不起，您的密码有误，请再次输入！");
    }
  }
        else {
         if (x.value == "huazihao"){
          if (y.value== "20200204"){
            localStorage.setItem("userName", x.value);
          localStorage.setItem("isLogin", true);
            window.location.href="https://2fxssc.github.io/member/center/";
          }
         }
          else alert("对不起，您的密码有误，请再次输入！");
        }
  }
  }
  }
  else{
   alert("对不起，您的用户名有误，很可能你不是申诉处成员，谢谢！"); 
  }
