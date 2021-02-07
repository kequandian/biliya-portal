// JavaScript Document
//定义全局变量
var title=new Array();
title[0]="中国洗协应邀参加国际洗涤用品协会信息交流会议";
title[1]="洗涤用品行业六家企业入选2016中国轻工业行业百强";
title[2]="关于举办洗涤用品行业标准化工作培训班及企业新闻";
title[3]="中马油脂化工国际会议揽业内精英广州论剑";
title[4]="广州十美日化有限公司";
var NowFrame = 1;   //最先显示第一张图片
var MaxFrame = 5;   //一共五张图片
function show(d1) {
	if(Number(d1)){
		clearTimeout(theTimer);  //当触动按扭时，清除计时器
		NowFrame=d1;                //设当前显示图片
		}
	for(var i=1;i<(MaxFrame+1);i++){
		if(i==NowFrame){
			
			document.getElementById("Rotator").src ="http://image.10mup.com/adRotator_"+i+".jpg";   //显示当前图片
			document.getElementById("fig_"+i).innerHTML=title[i-1];       //显示当前图片对应的标题
			document.getElementById("fig_"+i).className="numberOver";    //设置当前标题的CSS样式
         }
		 else{
		 document.getElementById("fig_"+i).innerHTML=i;
		 document.getElementById("fig_"+i).className="number";
		 }
	}
	if(NowFrame == MaxFrame){   //设置下一个显示的图片
		NowFrame = 1;
		}
	else{
		NowFrame++;
		}
}
var theTimer=setInterval('show()', 3000);   //设置定时器，显示下一张图片
window.onload=show;    //页面加载时运行函数show()