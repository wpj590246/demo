$(function() {


    
    $('body').coffee({  
        click: {  
            '.one': function(){  
                //do something  
                console.log(1);
            },  
            //这是是支持jQuery的':last / [attr] / :eq(0)'等方法的   
            '.two': function(){  
                //do something  
                console.log(2);
            }  
        },  
        mouseenter: {  
            '.three': function(){  
                //do something  
                console.log(3);
            }  
        }  
    }); 
})