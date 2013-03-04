<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title></title>
    <style type="text/css">
    .object{
        position:absolute; width:89px; height:89px
    }
    </style>
</head>
<body>
</body>
<script type="text/javascript">
        function Move(x,y,a,b)//自定义移动类
        {
            this.uid="move_"+Math.random();
            this.uid = this.uid.replace(".","");
            eval(this.uid+"=this;");
            this._x=x;
            this._y=y;
            this._a=a;
            this._b=b;
            this.items=[];
            this.dxrad=0.05;
        }
        Move.prototype.setPostion=function(obj,rad)//设置对象位置
        {
            obj.style.left=this._a*Math.cos(rad)+this._x+"px";
            obj.style.top=this._b*Math.sin(rad)+this._y+"px";
            if(Math.sin(rad)>0) obj.style.zIndex=3; 
            else obj.style.zIndex=2;
        }
        Move.prototype.setAlpha=function(obj,rad){//设定透明度
            
            var p =(Math.sin(rad) < 0) ? 2*this._a-Math.abs(this._a*Math.cos(rad)) :this._a*Math.abs(Math.cos(rad)); 
            p =100-40*p/this._a+20;
            obj.style.filter='alpha(opacity='+p+')';
            obj.style.opacity=p/100;
        }
        Move.prototype.play=function(n)//根据轨迹运动
        {
            for(var i=0;i<this.items.length;i++){
                this.setPostion(this.items[i],2*Math.PI*i/n+this.dxrad);
                this.setAlpha(this.items[i],2*Math.PI*i/n+this.dxrad);
            }
            this.dxrad=this.dxrad+0.03;
            if(this.dxrad>=Math.PI) this.dxrad=this.dxrad-Math.PI;
           window.setTimeout(this.uid+".play("+n+")",120);
        }
        Move.prototype.init=function(n)
        {
            for(var i=1;i<=n;i++)
            {
                var img = new Image();
                img.src = "http://p.blog.csdn.net/images/p_blog_csdn_net/ghtyan/object.jpg";
                img.className="object";
                this.items[i-1]=img;
                this.setPostion(img,2*Math.PI*i/n);
                this.setAlpha(img,2*Math.PI*i/n);
                document.body.appendChild(img);
                //img.onclick=function(){alert(this.style.zIndex)};
            }
            this.play(n);
        }
        var move = new Move(450,300,300,80);
        move.init(8);
    </script>
</html>
