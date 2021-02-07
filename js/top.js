window.onload=function(){
	var obtn=document.getElementById('btn');
	var clientHeight=document.documentElement.clientHeight;//获取可视页面高度
	var timer=null;//定义一个空的定时器变量
	var isTop=true;//定义变量默认值为true
	window.onscroll=function(){//执行触发事件，判断变量istop是false执行下列代码。
		var soTop=document.documentElement.scrollTop || document.body.scrollTop;
		if(soTop>=clientHeight){
			obtn.style.display='block';
		}else{
			obtn.style.display='none';
		}
		if(!isTop){
			clearInterval(timer);
		}
		isTop=false;
	}

	obtn.onclick=function(){
		timer=setInterval(function(){
			var soTop=document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed=Math.floor(-soTop/5);
			document.documentElement.scrollTop=document.body.scrollTop=soTop+ispeed;
			isTop=true;
			console.log(soTop-ispeed);
			if(soTop==0){
				clearInterval(timer);//当滚动条满足条件，则销毁定时器。
			}
		},30);//定时器以30毫秒执行一次，
	}
}