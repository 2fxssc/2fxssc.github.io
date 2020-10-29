function login(){
  var x = document.getElementById("uid");
  var y = document.getElementById("pid");
  if (x.value == "huangxixi"){
    if (y.value == "20200223"){
      localStorage.setItem("userName", x.value);
      localStorage.setItem("isLogin", true);
    }
  }
  else {
    if (x.value == "shuzhouliu"){
     if (y.value == "20200207"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
      }
    }
    else {
    if (x.value == "xuan"){
     if (y.value == "20200222"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
      }
    }
      else {
    if (x.value == "jimmymeng"){
     if (y.value == "20200208"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
      }
    }
        else {
    if (x.value == "yzy"){
     if (y.value == "20200236"){
        localStorage.setItem("userName", x.value);
        localStorage.setItem("isLogin", true);
      }
    }
  }
  }
  }
  }
}
