$(function(){

	/*菜单切换*/
	function menu(){
		$('.menu a').click(function(){
			$(this).addClass('cur-menu').siblings().removeClass('cur-menu');
		})
	}
	menu();

	/*顶部banner*/
	function banner(){
		var owidth;
		var img_h;
		var auto_w=function(){
			owidth=$(window).width();
			img_h=$('.banner-inner ul li img').height();
			$('.banner-inner').css('height',img_h);
			if(owidth<=1100){
				owidth=1100;
			}
			$('.banner-inner ul li').width(owidth);
		}
		
		$(window).load(function(){
			auto_w();
		});
        $(window).resize(function(){
        	auto_w();
        });
        /*banner圆点自动生成*/
        var oli=$('.banner-inner li');
        for(var i=0;i<oli.length;i++){
        	$('.banner-point').append('<span></span>');
        }
        $('.banner-point span:first').addClass('cur-point');
        /*banner轮播*/
		var num=0;
		var timer=null;
		function change(){
			oli.eq(num).stop().siblings().animate({'opacity':0,'z-index':-1},400).end().stop().animate({'opacity':'1','z-index':'1'},400);
			$('.banner-point span').eq(num).addClass('cur-point').siblings().removeClass();
		}
		timer=setInterval(function(){
			if(num==oli.length-1){
				num=0;
			}else{
				num++;
			}
			change();
		},4500)
		$('.banner-point span').click(function(){
			var index=$(this).index();
			num=index;
			change();
		})
	}
	banner();

	function news_banner(){
		 /*banner圆点自动生成*/
        var oli=$('.news-banner li');
        for(var i=0;i<oli.length;i++){
        	$('.news-banner-point').append('<span></span>');
        }
        $('.news-banner-point span:first').addClass('cur-news-point');
        /*banner轮播*/
		var num=0;
		var timer=null;
		function change(){
			oli.eq(num).stop().siblings().animate({'opacity':0,'z-index':-1},400).end().stop().animate({'opacity':'1','z-index':'1'},400);
			$('.news-banner-point span').eq(num).addClass('cur-news-point').siblings().removeClass();
		}
		timer=setInterval(function(){
			if(num==oli.length-1){
				num=0;
			}else{
				num++;
			}
			change();
		},4500)
		$('.news-banner-point span').click(function(){
			var index=$(this).index();
			num=index;
			change();
		})
	}
	news_banner();

	/*查询方式切换*/
	function inquiry_tab(){
		$('.inquiry-tab span').click(function(){
			$(this).addClass('cur-inquiry').siblings().removeClass('cur-inquiry');
			var index=$(this).index();
			$('.inquiry-search').eq(index).show().siblings('.inquiry-search').hide();
		})
	}
	inquiry_tab();

	function expert(){
		$('.pro-right li:even').css("background","#e3e2e2");
	}
	expert();

	/*placeholder属性兼容*/
	function placeholder(){
		var support_placeholder = ('placeholder' in document.createElement('input'));		//判断浏览器是否支持placeholder属性
		if(!support_placeholder){
			$("[placeholder]").not('input[type=password]').focus(function (){
				if($(this).val() == $(this).attr("placeholder")) {
					$(this).val("");
				}
			}).blur(function (){
				if($(this).val() == "") {
					$(this).val($(this).attr("placeholder"));
				}
			}).blur();

			/*提交时候，placeholder文字清空，不提交*/
			$("[placeholder]").parents("form").submit(function (){
				$(this).find('[placeholder]').each(function (){
					if ($(this).val() == $(this).attr("placeholder")) {
						$(this).val("");
					}
				});
			});
		};
	}
	placeholder();

	/*悬浮窗
	function pop(){
		$('.hide').click(function(){
			$('.pop').slideUp(300);
		})
	}
	pop();
	*/
})