$(function(){

	/* Ротатор изображений */
	(function(){

		if($("#rotator").length){

			var timer,
				rotator = $("#rotator"),
				counImg = rotator.find("a").length;

			rotator.wrapInner("<div class='stage'></div>")
				   .find(".stage a:first-child")
				   .addClass("active")
				   .parent()
				   .after("<div class='nav'></div>")
				   .next(".nav")
				   .append(function(){

				   		var html = "";
				   		for(var i = 0; i < counImg; i++){

				   			if(i == 0){

								html += "<div class='active'><span></span></div>";
				   			}else{

				   				html += "<div><span></span></div>";
				   			};
				   		};

						return html;
				   });

			var stages = rotator.find(".stage a"),
				navs   = rotator.find(".nav div");

			function animateStage(index){

				stages.filter(".active")
					  .removeClass("active")
					  .removeAttr("style")
					  .prev("a")
					  .removeClass("prev");
				stages.eq(index)
					  .addClass("active")
					  .css("opacity", 0)
					  .animate({
					  	"opacity": 1
					  }, 1000)
					  .prev("a")
					  .addClass("prev");

				navs.filter(".active").removeClass("active");
				navs.eq(index).addClass("active");

				return false;
			};

			var autoChanges = (function(){

				timer = setInterval(function(){

					var current = navs.filter(".active").index();

					current++;

					if(current >= counImg){

						current = 0;
					};

					animateStage(current);

				}, 9000);

				return false;
			});
			autoChanges();

			navs.on("click", function(){

				animateStage($(this).index());

				return false;
			});

			rotator.on({

				mouseenter: function(){

					window.clearInterval(timer);
					timer = null;

					return false;
				},
				mouseleave: function(){

					autoChanges();
					return false;
				}
			});
		};
	})();
});