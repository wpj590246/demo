/******************************************
 * jq.contentShown.js
 *
 * @author          Ethan.Zhu（zhuyidong）
 * @version         Version 2.0
 * @copyright       Copyright (c) 2012 Ethan.Zhu
 * @license         This contentShown jQuery plug-in is dual licensed under the MIT and GPL licenses.
 * 
 * @docs            http://ethanzhu.github.com/jq.contentShown/
 * @demo            http://ethanzhu.github.com/jq.contentShown/img-demo.html;
 * 					http://ethanzhu.github.com/jq.contentShown/cont-demo.html
 * @email			pig.whose@gmail.com; 12377166@qq.com
 * 
 *
 ******************************************/

	/*
	* extendPyramid
	* 
	* jQuery Slide 1.0
	* Copyright (c) 2010 陆宏鸣
	* http://www.cnblogs.com/homeLu
	*/

$.fn.extend($.contentShown,{
	_buildContentShown: function(target, name, value){
		var self = this,
			inst = self._getInst(target),
			func = self.func,
			nCont = self._g(inst,'nContent'),
			pCont = self._g(inst,'pContent'),
			player = self._g(inst,'player'),
			ptype = self._g(inst,'pType'),
			showTip = self._g(inst,'showTips'),
			tipsBtn = self._g(inst,'tipsBtn'),
			item = self._g(inst,'_item'),
			pitem = self._g(inst,'_pitem'),
			preLoad = self._g(inst,'preLoad'),
			mainData=[], mainLength,
			$navList, navList,
			$playList, playList,
			thisCont, $content, content,
			$thisNav, thisNav,
			$thisPlay, thisPlay,
			$navCont, navCont,
			$playCont, playCont,
			$thisData, $gLink, thisLink,
			build,
			$buildCont, buildCont,
			$buildLink, buildLink, buildHref,
			$h2, $h3,
			i, j, m, n, k;
		inst.build = true;
		
		$navList = inst.$elem.find('li.' + item);
		navList = $navList[0];
		$playList = inst.$elem.find('li.' + pitem);
		playList = $playList[0];
		
		if(typeof navList=='undefined' && typeof playList=='undefined') return;//nothing to shown;
		self._optionContentShown(target, name, value);
		preLoad ? self._extendRemove(inst.settings,{'preLoad':false}) : func;
		typeof playList!='undefined'? mainLength = $playList.length: (player? (player = false, self._extendRemove(inst.settings,{'player':false})): func);
		typeof navList!='undefined'? mainLength = $navList.length: (nCont=='image'? self._extendRemove(inst.settings,{'nContent':'none'}):func);
		if (typeof navList == 'undefined' && !player) return;//nothing to shown;
		
		var foramtLink = function(link){
			link.charAt(link.length - 1)!='/'? link +='/' : func;
			return link;
		}
		var buildData = function($cont, type, $link, where){
			$content = $cont;
			build = [];
			thisLink = typeof $link[0]!='undefined'? foramtLink($link.html()) : '';
			if(type!='btns' && type!='hgroup' && type!='other'){
				if(type=='content'){
					build.push('"'+ $content.html().replace(/"/g,'\\"') +'"');
				}
				else{
					$buildLink = $content.find('a:first');
					buildLink = $buildLink[0];
					$buildCont = $content.find('img');
					buildCont = $buildCont[0];
					if(typeof buildLink!='undefined'){
						buildHref = foramtLink(buildLink.href);
						if(buildHref == thisLink){
							build.push('"'+ buildCont.src +'"');
						}
						else{
							build.push('{');
							build.push('"t":"'+ buildCont.src +'"');
							build.push('"l":"'+ buildLink.href +'"');
							buildLink.target ? build.push('"g":'+'"'+ buildLink.target +'"') : func;
							buildCont.alt ? build.push('"a":"'+ buildCont.alt +'"'):func;
							where !='play' ? (
								buildCont.width? build.push('"w":"'+ buildCont.width +'"') : func, 
								buildCont.height? build.push('"h":'+'"'+ buildCont.height +'"') : func
							) : func ;
							build.push('}');
						}
					}
				}
			}
			if(type =='hgroup'){
				$buildLink = $content.find('a:first'), buildLink = $buildLink[0];
				if(typeof buildLink !='undefined'){
					buildCont = $buildLink.html();
					buildHref = foramtLink(buildLink.href);
					buildHref != thisLink ? (
						build.push('{'),
						build.push('"t":"'+ buildCont +'"'),
						build.push('"l":"'+ buildLink.href +'"'), 
						buildLink.target? build.push('"g":'+'"'+ buildLink.target+'"') : func,
						build.push('}')
					) : build.push('"'+ buildCont +'"');
				}
				else build.push('"'+ buildCont +'"');
			}
			if(type == 'btns'){
				$buildCont = $content.find('a');
				if(typeof $buildCont[0] !='undefined'){
					m = $buildCont.length;
					m==1? func : build.push('[');
					for (n=0; n<m; n++){
						build.push('{');
						$buildLink = $buildCont.eq(n);
						buildLink = $buildLink[0];
						buildHref = foramtLink(buildLink.href);
						buildLink.className!=''? build.push('"c":"'+buildLink.className+'"'):func;
						buildHref != thisLink ? (build.push('"l":"'+ buildLink.href +'"'), buildLink.target? build.push('"g":'+'"'+ buildLink.target+'"'):func, buildLink.title? build.push('"t":'+'"'+ buildLink.title+'"'):''):func;
						$buildLink.html()!=''? build.push('"t_":"'+ $buildLink.html()+'"'):func;
						build.push('}')
					}
					m==1? func : build.push(']');
				}
				else{
					buildCont = $content.html();
					buildCont !='' ? build.push('"'+ buildCont +'"'):''
				}
			}
			if(type == 'other'){
				m = $content.length;
				m==1? func : build.push('[');
				for(n=0; n<m; n++){
					$buildCont = $content.eq(n);
					$buildCont = $buildCont.find('span'), buildCont= typeof $buildCont[0]!='undefined'? $buildCont.html() : '';
					build.push('{');
					build.push('"n":"'+ buildCont +'"');
					$buildCont = $content.eq(n).find('a');
					if(typeof $buildCont[0]!='undefined'){
						build.push('"list":');
						j = $buildCont.length;
						j ==1 ? func : build.push('[');
						for(k=0; k<j; k++){
							build.push('{');
							$buildLink = $buildCont.eq(k), buildLink = $buildLink[0];
							buildHref = foramtLink(buildLink.href);
							$buildLink.html()!=''? (
								build.push('"t":"'+ $buildLink.html() +'"'),
								buildHref != thisLink ? (
										build.push('"l":"'+buildLink.href+'"'), 
										buildLink.target? build.push('"g":'+'"'+ buildLink.target +'"'):func
								):func
							):func;
							build.push('}');
						}
						j ==1 ? func : build.push(']');
					}
					build.push('}');
				}
				m==1? func : build.push(']');
			}
			return build.join(",");
		};
		
		for(i=0; i<mainLength;i++){
			$gLink = null;
			typeof navList != 'undefined'? $thisNav = $navList.eq(i) : func;
			typeof playList != 'undefined'? $thisPlay = $playList.eq(i) : func;
			//thisCont = [];
			mainData.push('{');
			if($thisNav){
				$gLink = $thisNav.find('p.global-link');
				typeof $gLink[0]!='undefined' ? mainData.push('"l":'+'"'+$gLink.html()+'"') : func;
				$content = $thisNav.find('.this-content');
				content = typeof $content[0]!='undefined'? buildData($content, nCont, $gLink):'""';
				mainData.push('"s":'+ content);
			}
			if($thisPlay && player){
				!$gLink||typeof $gLink[0]=='undefined'? (
					$gLink = $thisPlay.find('p.global-link'),
					typeof $gLink[0]!='undefined' ? mainData.push('"l":'+'"'+ $gLink.html() +'"'):func
				):func;
				$content = $thisPlay.find('.this-content');
				content = typeof $content[0]!='undefined' ? buildData($content, pCont, $gLink, 'play') : '""';
				mainData.push('"b":'+ content);
				if(showTip){
					$tips = $thisPlay.find('label'); $h2 = $content.find('h2'), $content = $tips.find('h3');
					typeof $thisPlay[0]!='undefined' ? (
						$content = $tips.find('h2'),
						content = typeof $content[0]!='undefined' ? buildData($content, 'hgroup', $gLink):'',
						content!=''? mainData.push('"t":'+content): func,
						$content = $tips.find('h3'),
						content = typeof $content[0]!='undefined' ? buildData($content, 'hgroup', $gLink):'',
						content!=''? mainData.push('"t1":'+content): func
					) : func;
					
					$content = $tips.find('.tip-message'),
					typeof $content[0]!='undefined'? mainData.push('"m":"'+$content.html()+'"'):'',
					
					ptype?(
							$content = $tips.find('.play-type'),
							typeof $content[0]!='undefined' ? mainData.push('"tp":"'+ $content.html() +'"') : func
						):func;
					
					tipsBtn ? (
							$content = $tips.find('.tip-btns'),
							content = typeof $content[0]!='undefined' ? buildData($content, 'btns', $gLink):'',
							content!=''? mainData.push('"b_":'+ content):''
						):func;
					
					$content = $tips.find('.other-titles');
					content = typeof $content[0]!='undefined' ? buildData($content, 'other', $gLink):'';
					content!=''? mainData.push('"ot":'+content) : func;
				}
			}
			mainData.push('}');
		}
		mainData = '[' + mainData.join(',').replace(/([{\[:]),/g,'$1').replace(/,([}\]])/g,'$1') + ']';
		self.log(mainData);
		mainData = eval(mainData);
		//console.log(mainData);
		inst.data = [];
		mainLength = mainData.length;
		for(i=0; i<mainLength; i++){
			$content = mainData[i];
			if(!$.isEmptyObject($content)) inst.data.push($content)
		}
		inst.data?	self._instData(inst) : func;
	},
	_extendPyramid: function(inst){
		var self = this, preLoad = self._g(inst,'preLoad'), navSpace = self._g(inst,'navSpace'), $this, nContent = self._g(inst,'nContent'),
			$navList = inst.$navList, $items = $navList.find('li.'+self._g(inst,'_item')), $image, func = self.func, thisWidth, thisHeight,
			total = inst.total, leftNum, rightEnd, leftEnd, i, prevIndex, prevNav, prevPos, prevSize, $thisNav, thisNav, thisPos, totalWidth = 0, totalHeight;
		
		inst.$extend = [];
		
		leftNum = Math.floor((total - 1) / 2);
		rightEnd = total- 1 - leftNum;
		leftEnd = total - leftNum;
		$items.each(function(index){
			$this = $(this);
			inst.$extend.push({$nav:$this, position:null, size:null,zIndex:total})
			$this.css("position",'absolute').css('left', index * navSpace);
		});
		$thisNav = inst.$extend[0].$nav;
		inst.$extend[0].size = {
           	width: $thisNav.width(),
           	height: $thisNav.height()
        };
        inst.$extend[0].zIndex = total;
 		/*
         * 	   0
         *   4   1
         * 3       2
         *            
         */
		//right
		for (i = 1; i <= rightEnd; i++) {
			prevIndex = i - 1;
			prevNav = inst.$extend[prevIndex];
			prevSize = prevNav.size;
			inst.$extend[i].size = {
            	width: Math.ceil(prevSize.width * 0.75),
                height: Math.ceil(prevSize.height * 0.75)
            };
            totalWidth += inst.$extend[i].size.width - parseInt(inst.$extend[i].size.width * 0.25);
            inst.$extend[i].zIndex = prevNav.zIndex - 1;
		}
		totalWidth = totalWidth*2 + inst.$extend[0].size.width;
		inst.$navList.css('width',totalWidth);
		inst.$extend[0].position = {
            top: 0,
            left: parseInt(inst.$navList.width() / 2 - $thisNav.width() / 2)
        };
        //右侧
		for (i = 1; i <= rightEnd; i++) {
			prevIndex = i - 1;
			prevNav = inst.$extend[prevIndex];
			prevPos = prevNav.position;
			prevSize = prevNav.size;
            inst.$extend[i].position = {
               	top: prevPos.top + 20,
               	left: prevPos.left + parseInt(prevSize.width - inst.$extend[i].size.width * 0.25)
            };
            if(i==rightEnd) totalHeight = inst.$extend[i].size.height + inst.$extend[i].position.top;
		}
		inst.$navList.css('height',totalHeight);
		
		//left
		for (i = total - 1; i >= leftEnd; i--) {
			prevIndex = (i + 1) % total;
			prevNav = inst.$extend[prevIndex];
			prevPos = prevNav.position;
			prevSize = prevNav.size;
			inst.$extend[i].size = {
               	width: Math.ceil(prevSize.width * 0.75),
               	height: Math.ceil(prevSize.height * 0.75)
           	};
            inst.$extend[i].zIndex = prevNav.zIndex - 1;
           	inst.$extend[i].position = {
              	top: prevPos.top + 20,
               	left: prevPos.left - parseInt(inst.$extend[i].size.width * 0.75)
            };
		}
		for (i = 0; i < total; i++) {
           	thisNav = inst.$extend[i];
           	$thisNav = inst.$extend[i].$nav;
           	thisPos = inst.$extend[i].position;
           	thisWidth = thisNav.size.width;
           	thisHeight = thisNav.size.height;
           	nContent === 'image' ? $thisNav.find('img').css({'width':thisWidth, 'height':thisHeight}): func;
           	$thisNav.attr('data-pyramid',$thisNav.attr('data-index')).css({
               	"left": thisPos.left,
               	"top": thisPos.top,
                "width": thisWidth,
                "height": thisHeight,
                "z-index": thisNav.zIndex
        	});
		}
	},
	_extendNav: function(inst){
		var navNum = this._g(inst,'navNum');
		if(navNum==='pyramid') this._extendPyramid(inst);
		else return;
	},
	_pyramidStyle: function(inst){
		var self = this, selected = inst.selected, $list = inst.$navList.find('li'), total = inst.total, leftEnd, 
			idx, curIdx = inst.extend_, items = inst.$extend, isLeft, curEndToInitEnd
			
		leftEnd = total - Math.floor((total - 1) / 2);
		
		idx = $list.eq(selected).attr('data-pyramid');
		curEndToInitEnd = (total + (idx - curIdx)) % total;//点击的当前位置的图片对应在初始状态时的哪个索引
		isLeft = idx >= leftEnd ? true: false;
		if(inst.btnClick){
			inst.btnClick = false;
			inst.$navList.undelegate();
			//要移动图片的索引距离
			var dis, stepPercent, step = 0;
			dis = (total + (isLeft ? -1 : 1) * (idx - curIdx)) % total;
			stepPercent = new Array(15);    //固定走15步，每步走至百分之多少的一个数列。 表示经过时间一定，速度不固定
            stepPercent[0] = 0.2;               //起始20%
            stepPercent[1] = 0.2 + 0.2 * 0.81;   //第二步
            for (var i = 2, total_ = stepPercent[1]; i < stepPercent.length; i++) {
            	stepPercent[i] = total_ + (total_ - stepPercent[i - 2]) * 0.81;  //初始化数列。
                total_ = stepPercent[i];
                if (i == stepPercent.length - 1) stepPercent[i] = 1;
            }
            var count, toIdx, toItem, toPos, toWidth, toHeight, fItem, fPos, fWidth, fHeight, fZIndex, i, timerMove, toIdx, item, $curNav;
            var moveAll = function(){
            	count = total;
            	 for (var i = 0; i < count; i++) {
                 	//移动至此的位置
                 	toIdx = (count + i + dis * (isLeft ? 1 : -1)) % count;
                    toItem = items[toIdx];
                    toPos = toItem.position;
                    toWidth = toItem.size.width;
                    toHeight = toItem.size.height;
                    toZIndex = toItem.zIndex;
                    //当前处理
                    fItem = items[i];
                    fPos = fItem.position;
                    fWidth = fItem.size.width;
                    fHeight = fItem.size.height;
                    fZIndex = fItem.zIndex;
                    
                    $curNav = fItem.$nav
                    //设置尺寸与目标位置
                    $curNav.find('img').css({
                      	'width':(fWidth + (toWidth - fWidth) * stepPercent[step]),
                      	"height": (fHeight + (toHeight - fHeight) * stepPercent[step])
                    });
                    $curNav.css({
                        "left": fPos.left + (toPos.left - fPos.left) * stepPercent[step],
                        "top": fPos.top + (toPos.top - fPos.top) * stepPercent[step],
                        "width": (fWidth + (toWidth - fWidth) * stepPercent[step]) + "px",
                        "height": (fHeight + (toHeight - fHeight) * stepPercent[step]) + "px",
                        "z-index": toZIndex
                    });
                 }
                 step++;
                 if (step < stepPercent.length){
                 	setTimeout(moveAll, 30);
                 }
                 else{
                 	step = 0;
                    for (i = 0; i < count; i++) {
                        //移动至此位置
                    	toIdx = (count + i + dis * (isLeft ? 1 : -1)) % count;
                        item = items[i];
                        $curNav = item.$nav;
                        item.position.left = $curNav.position().left;
                        item.position.top = $curNav.position().top;
                        item.size.width = $curNav.width();
                        item.size.height = $curNav.height();
                        item.zIndex = $curNav.css("z-index");
                    }
                    inst.btnClick = true;
                    self._navItem(inst);
                    // console.log(inst.btnClick);
                    clearTimeout(timerMove);
                }
            };
            timerMove = setTimeout(function() {moveAll();}, 50);
            inst.extend_ = idx;
		}
	},
	_extendStyle: function(inst){
		var navNum = this._g(inst,'navNum');
		if(navNum==='pyramid') this._pyramidStyle(inst);
		else return;	
	}
})