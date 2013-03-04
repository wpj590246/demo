var mineArray,  //��������  
    lastNum,  //ʣ������  
    countNum,  //δ���ҿ��ķ�����  
    inGame = 0,  //��Ϸ״̬��0Ϊ������1Ϊ�����У�2Ϊ��ʼ����ϵ�δ��ʼ  
    startTime;  //��ʼʱ��  
    //���²���1��ʾ�ҿ�һ�����飬����2��ʾ���һ��С�죬����3��ʾ���һ���ʺţ�����4��ʾ��ĳ��������Χ�ĵ���ȫ������꣬������Χʣ�µķ����ڿ�  
$(function(){  
    $('#main').mouseup(function(e) {  
        var clicked = $(e.target),  
            id = clicked.attr('id'),  
            cX = parseInt(id.substring(1, id.indexOf('-'))),  //����������X����  
            cY = parseInt(id.substring(id.indexOf('-') + 1));  //����������Y����  
        if(inGame == 1) {  
            if(e.which == 1) {  
                if(clicked.hasClass('hidden') && !clicked.hasClass('flag')) {  
                    openBlock(cX,cY);  //������δ�ҿ���δ���췽�鼴ִ�в���1  
                } else if(!clicked.hasClass('hidden')) {  
                    openNearBlock(cX,cY);  //����ͬʱ������Ҽ�ʵ�������Ƚ��鷳�����Ըĳ��õ�����ʵ�ֲ���4  
                }  
            } else if(e.which == 3 && clicked.hasClass('hidden')) {  //�Ҽ��������2���������ʹ���ʺű�ǣ����ִ�в���3  
                if(clicked.hasClass('flag')) {  
                    clicked.removeClass('flag');  
                    if($('#check').attr('checked')) clicked.addClass('check');  
                    lastNum ++;  
                    countNum ++;  
                } else if(clicked.hasClass('check')) {  
                    clicked.removeClass('check');  
                } else {  
                    clicked.addClass('flag');  
                    lastNum --;  
                    countNum --;  
                }  
                $('#lastnum').text(lastNum);  
            }  
            if(lastNum == countNum) endGame(1);  //��Ϊ���ʣ�µķ����Ϊ��ʱӦֱ�ӽ�����Ϸ���������Ϊʣ��������δ���ҿ��ķ�������ȵ�ʱ�������Ϸ  
        } else if(inGame == 2) {  
            if(e.which == 1) {  //��ʼ����Ϻ�ֻ�����������ʼ��Ϸ  
                openBlock(cX,cY);  
                inGame = 1;  
                var now = new Date();  
                startTime = now.getTime();  
                timer();  
            }  
        }  
    });  
    $('#main').bind('contextmenu', function(){ return false; });  //��ֹĬ���һ��¼�  
});  
//��ʼ��  
function init(x, y, mine) {  
    countNum = x * y;  
    inGame = 2;  
    lastNum = mine;  
    mineArray = new Array(y + 2);  
    $.each(mineArray, function(key) {  
        mineArray[key] = new Array(x + 2);  
    });  
    for(var i = 1; i <= y; i ++) {  
        for(var j = 1; j <= x; j ++) {  
            mineArray[i][j] = 0;  
        }  
    }  
    while(mine > 0) {  //������ף�-1Ϊ����  
        var i = Math.ceil(Math.random() * y);  
        var j = Math.ceil(Math.random() * x);  
        if(mineArray[i][j] != -1) {  
            mineArray[i][j] = -1;  
            mine --;  
        }  
    }  
    for(var i = 1; i <= y; i ++) {  //�����������飬ͳ��ÿ���������ܵ��׵�����  
        for(var j = 1; j <= x; j ++) {  
            if(mineArray[i][j] != -1) {  
                if(i > 1 && j > 1 && mineArray[i - 1][j - 1] == -1) mineArray[i][j] ++;  
                if(i > 1 && mineArray[i - 1][j] == -1) mineArray[i][j] ++;  
                if(i > 1 && j < x && mineArray[i - 1][j + 1] == -1) mineArray[i][j] ++;  
                if(j < x && mineArray[i][j + 1] == -1) mineArray[i][j] ++;  
                if(i < y && j < x && mineArray[i + 1][j + 1] == -1) mineArray[i][j] ++;  
                if(i < y && mineArray[i + 1][j] == -1) mineArray[i][j] ++;  
                if(i < y && j > 1 && mineArray[i + 1][j - 1] == -1) mineArray[i][j] ++;  
                if(j > 1 && mineArray[i][j - 1] == -1) mineArray[i][j] ++;  
            }  
        }  
    }  
    var block = '';  
    for(var i = 1, row = mineArray.length - 1; i < row; i ++) {  
        for(var j = 1, col = mineArray[0].length - 1; j < col; j ++) {  
            block += '<div id="b' + i + '-' + j + '" style="left:' + (j - 1) * 20 + 'px;top:' + (i - 1) * 20 + 'px;" class="hidden"></div>';  
        }  
    }  
    $('#main').html(block).width(x * 20 + 1).height(y * 20 + 1).show();  //��ͼ  
    $('#warning').html('');  
    $('#submenu').show();  
    $('#lastnum').text(lastNum);  
}  
//�ҿ�����  
function openBlock(x, y) {  
    var current = $('#b' + x + '-' + y);  
    if(mineArray[x][y] == -1) {  
        if(inGame == 1) {  //����ʱ����Ϸ�����У���ʧ�ܽ�����Ϸ  
            current.addClass('cbomb');  
            endGame();  
        } else if(inGame == 2) {  //����Ϸ��ʼ����δ��ʼ�������³�ʼ���������ٽҿ��˷��飬�Ա�֤��һ�ε��������  
            init(mineArray[0].length - 2, mineArray.length - 2, lastNum);  
            openBlock(x, y);  
        } else {  //��Ϸ����ʱ��ҿ�ȫ�����飬��ǵ���λ��  
            if(!current.hasClass('flag')) current.addClass('bomb');  
        }  
    } else if(mineArray[x][y] > 0) {  
        if(current.hasClass('flag')) {  //�������׵ķ����ϱ����С�죬�����Χ�Ĺ㳡ִ�в���4ʱ�������˷��飬�򴥷�ʧ�ܽ�����Ϸ  
            current.addClass('wrong');  
            if(inGame) endGame();  
        } else {  
            current.html(mineArray[x][y]).addClass('num' + mineArray[x][y]).removeClass('hidden');  //��ʾ�ܱߵĵ�������  
            if(current.hasClass('check')) current.removeClass('check');  
            if(inGame) countNum --;  
        }  
    } else {  
        if(current.hasClass('flag')) {  //ͬ��  
            current.addClass('wrong');  
            if(inGame) endGame();  
        } else {  
            current.removeClass('hidden');  
            if(current.hasClass('check')) current.removeClass('check');  
            if(inGame) {  //������ܱ����׵ķ���ʱ���Զ��ҿ���Χ����  
                countNum --;  
                var row = mineArray.length - 2, col = mineArray[0].length - 2;  
                if(x > 1 && y > 1 && $('#b' + (x - 1) + '-' + (y - 1)).hasClass('hidden')) openBlock(x - 1, y - 1);  
                if(x > 1 && $('#b' + (x - 1) + '-' + y).hasClass('hidden')) openBlock(x - 1, y);  
                if(x > 1 && y < col && $('#b' + (x - 1) + '-' + (y + 1)).hasClass('hidden')) openBlock(x - 1, y + 1);  
                if(y < col && $('#b' + x + '-' + (y + 1)).hasClass('hidden')) openBlock(x, y + 1);  
                if(x < row && y < col && $('#b' + (x + 1) + '-' + (y + 1)).hasClass('hidden')) openBlock(x + 1, y + 1);  
                if(x < row && $('#b' + (x + 1) + '-' + y).hasClass('hidden')) openBlock(x + 1, y);  
                if(x < row && y > 1 && $('#b' + (x + 1) + '-' + (y - 1)).hasClass('hidden')) openBlock(x + 1, y - 1);  
                if(y > 1 && $('#b' + x + '-' + (y - 1)).hasClass('hidden')) openBlock(x, y - 1);  
            }  
        }  
    }  
}  
//�ҿ������ڽ�ȷ�����׵ķ���  
function openNearBlock(x, y) {  
    var flagNum = 0, hiddenNum = 0;  
    for(i = x - 1; i < x + 2; i ++) {  
        for(j = y - 1; j < y + 2; j ++) {  
            if(mineArray[i][j] != undefined) {  
                if($('#b' + i + '-' + j).hasClass('flag')) flagNum ++;  //ͳ�Ʒ�����Χ����������δ�ҿ��ķ�����  
                if($('#b' + i + '-' + j).hasClass('hidden')) hiddenNum ++;  
            }  
        }  
    }  
    if(flagNum == mineArray[x][y] && hiddenNum > flagNum) {  //�������������������δ�ҿ�������δ����ķ���ʱ����ҿ���  
        for(i = x - 1; i < x + 2; i ++) {  
            for(j = y - 1; j < y + 2; j ++) {  
                if(mineArray[i][j] >= 0 && $('#b' + i + '-' + j).hasClass('hidden')) openBlock(i, j);  
            }  
        }  
    }  
}  
//��ʱ  
function timer(){  
    if(inGame == 1) {  //ֻ����Ϸ�����м�ʱ  
        var now = new Date(),  
            ms = now.getTime();  
        $('#time').text(Math.ceil((ms - startTime) / 1000));  
        if(inGame == 1) setTimeout(function() { timer(); }, 500);  
    } else if(inGame == 2) {  
        $('#time').text('0');  
    }  
}  
//������Ϸ  
function endGame(isWin) {  
    inGame = 0;  
    for(var i = 1, row = mineArray.length - 1; i < row; i ++) {  
        for(var j = 1, col = mineArray[0].length - 1; j < col; j ++) {  
            if(isWin) {  
                if($('#b' + i + '-' + j).hasClass('hidden') && !$('#b' + i + '-' + j).hasClass('flag')) $('#b' + i + '-' + j).addClass('flag');  
                lastNum = 0;  
                $('#lastnum').text(lastNum);  
            } else {  
                openBlock(i, j);  
            }  
        }  
    }  
    $('#warning').text(isWin ? 'You Win!' : 'You Lose!'); 
}