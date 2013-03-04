/******************************************
 * jq.contentShown.js
 *
 * @author          Ethan.zhu（zhuyidong）
 * @version         Version 2.0
 * @copyright       Copyright (c) 2012 Ethan.Zhu
 * @license         This contentShown jQuery plug-in is dual licensed under the MIT and GPL licenses.
 * @docs            http://ethanzhu.github.com/jq.contentShown/
 * @demo            http://ethanzhu.github.com/jq.contentShown/img-demo.html;
 * 					http://ethanzhu.github.com/jq.contentShown/cont-demo.html
 * @email			pig.whose@gmail.com; 12377166@qq.com
 * 
 *
 ******************************************/

Introduction:

English： please visit http://ethanzhu.github.com/jq.contentShown/

插件使用了较多的外部链接和图片，如果你认为放在这里不合适请来信告知，我将尽快删除或者更换。
jquery contentShown 的前身是 jquery imageShown,
新版的content shown 插件很多方法都被重写或者被合并，以提供更高的性能，特别是在loop设置为true的状态下，性能提升较大。
同时提供多个接口供开发者外部使用,回调函数的执行逻辑更加合理，现在的回调函数执行时，
你可以通过插件提供的api来暂停正在进行的当前动画，当回调函数执行完毕之后你需要重新启动动画的继续执行。
在这个暂停和重新开始之间，通过插件的返回值，你可以处理任意的自定义事件。

插件开发的初衷是用来展示图片性的内容，在编码的过程中，加入了对任意形式的html内容的处理，
你只要告诉插件你需要处理的是内容类型为 content，那么所有传入的主要数据都会被当做html内容来处理。
这样就提供了非常灵活的使用方式。例如新闻信息的轮显，tab页的切换等，都非常容易能够展示出来。

主要参数介绍：
插件提供了非常丰富的参数设置。
		
			/*
			 * 参数为 数字，或者 css、pyramid。
			 * 当参数为纯数字的时候是表示当前可见导航区域显示的内容。
			 * css 交予样式表处理，具体请参考示例
			 * pyramid 显示金字塔状的立体导航 （需要使用扩展文件。这个方法的版权归原作者所有）
			 * 当你设置为非数字的情况下，无法使用loop 背景动画，navPlace也会被重置为null。
			 * 所有设置都将交予样式表处理。
			 *
			 */
			navNum : 4, 
			id : null,				// 用来在getter时获取ID值，无需设置
			navSpace : 47,			// 导航区域每个独立导航之间的间隔。
			pWidth : 0,				// 播放区域的大小，当你没有在样式表中设置时，这里必须提供
			pHeight : 0,			// 否则在有些情况下插件会不正常显示。
			navPlace : null,		// 导航位置，默认null表示显示在上或者下，左右请设置为 "lr" (left or right) 
			autoPlay : true,		// 是否自动播放
			autoTime : 4000,		// 自动佛放时间间隔
			events : 'mouseenter',	// 导航触发事件，建议mouseenter
			tbgAnimate : true,		// 显示导航背景动画，需要相关样式表内容配合
			tbgSpeed : 'fast',		// speed
			addtional : false,		// 当你需要显示一些特殊样式时，请将此设置为true，然后通过样式表自由控制。
			step : 1,				// 每次鼠标点击导航按钮，或者自动播放内容不再可见区域内每次滑动的导航数量。
									// 如果设置不合理会被插件重置。
			navSpeed : 'fast',		// speed
			opacity : 0.6,
			data : null,			// 主要数据，如果没有提供主要数据，插件在初始化之后将不会继续工作。
			loop : true,			// 导航内容是否循环，具体请参考sohu演示
			player : true,			// 是否显示播放区域。false不显示，false情况下，只处理data中的导航内容，其它都会被忽略。
			animate : 'fade',		// 播放区域的动画形式 参数： fade,left,right,top,bottom，none
			showTips : true,		// 是否显示提示信息。
			tipsAnimate : 'fade',	// 提示信息的动画播放形式：fade, slide,none
			selected : 1,			// 当前选择第几个数据，在插件初始化之后这个数据会被提前至第一个位置。
			callback : null,		// 回调函数，具体使用请参考相关事例
			preLoad : true,			// 是否预加载图片，每次触发当前导航才会向服务器请求播放的图片，这种方式可以减少一次性的http请求数量，总数不会改变的。
			target : '_blank',		// 全局链接打开方式。当你在data中提供其它方式时，你所提供的打开方式只对data数据中你所关联的链接起作用。
			pSpeed : 500,			// speed
			pType : false,			// 插件允许设置播放区域的类别，具体请参考sohu演示的右上角内容。
			nContent : 'image',		// 导航内容的类型： num,none,image,content
			pContent : 'image',		// 播放内容的类型 : image, content
			listPlace : null,		// 此参数用来处理导航居中的情况，如果需要居中，设置为center
			tipsBtn : false,		// 用设置提示信息中的按钮，例如播放按钮，购买按钮等。
			loadClass : 'cs-player-loading',	// 预加载情况下等待的样式
			missing : 'cs-load-missing',		// 加载图片错误或者请求的文件不存在时使用。具体参考示例
			//playNav : false,
			playBtn : false,		// 显示播放区域的上一张下一张按钮
			playBtnShow : null  	// 播放区域按钮是否一直显示。设置为always是一直显示，其它任意参数都将会由鼠标动作触发。


callback函数回传参数的说明：

id: //当前Dom的ID，在你页面未设置ID的情况下这个ID会是插件自动生成的唯一值。

total//轮显内容的数量

selected//当前选择的第一个内容区域，当你loop设置为false时此内容就是页面Dom中的index值，当loop为true时导航区域需要根据 attr('data-index')来获取当前的index。player区域不受loop限制，永远为当前内容的index值

curNav//当前导航，可以通过 attr('data-missing')来确认内容是否正常加载。

curPlay//当前显示的主要内容，可以通过 attr('data-missing')来确认内容是否正常加载。

curData//你传入数据data的当前值。
