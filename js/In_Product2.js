function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

$(document).ready(function(){
    $("ul.menu li:first").addClass("current");
    $("div.content").find("div.layout:first-child").show();
    $('div.content div.layout').attr("id",function() { return idName("itemtab")+$("div.content div.layout").index(this) });
    $("ul.menu li").click(function() {
        var tab = $("ul.menu li");
        var index = tab.index(this);
        var itemlist= idName("itemtab");
        show(tab,index,itemlist);
    
     });
    
    function show(tabmenu,num,prefix)
    {
        var content=prefix+num;
        $("#"+content).siblings().hide();
        $("#"+content).show();
        tabmenu.eq(num).addClass("current").siblings().removeClass("current");
    }
    
    function idName(prefix)
    {
        return prefix;
    }
});

var speed=30
var colee_left2=document.getElementById("colee_left2");
var colee_left1=document.getElementById("colee_left1");
var colee_left=document.getElementById("colee_left");
colee_left2.innerHTML=colee_left1.innerHTML
function Marquee3(){
if(colee_left2.offsetWidth-colee_left.scrollLeft<=0)
colee_left.scrollLeft-=colee_left1.offsetWidth
else{
colee_left.scrollLeft++
}
}
var MyMar3=setInterval(Marquee3,speed)
colee_left.onmouseover=function() {clearInterval(MyMar3)}
colee_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}

 $(function(){
        $.fn.snow({
            minSize:5,
            maxSize:20,
            newOn:100,
            flakeColor:"#fff"
            });     
        });

$(document).ready(function(){
    $("ul.menu li:first").addClass("current");
    $("div.content").find("div.layout:first-child").show();
    $('div.content div.layout').attr("id",function() { return idName("itemtab")+$("div.content div.layout").index(this) });
    $("ul.menu li").click(function() {
        var tab = $("ul.menu li");
        var index = tab.index(this);
        var itemlist= idName("itemtab");
        show(tab,index,itemlist);
    
     });
    
    function show(tabmenu,num,prefix)
    {
        var content=prefix+num;
        $("#"+content).siblings().hide();
        $("#"+content).show();
        tabmenu.eq(num).addClass("current").siblings().removeClass("current");
    }
    
    function idName(prefix)
    {
        return prefix;
    }
});