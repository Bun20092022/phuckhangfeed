function testAnim(n){$("#animationSandbox").removeClass().addClass(n+" animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass()})}$(document).ready(function(){$(".js--triggerAnimation").click(function(n){n.preventDefault(),testAnim($(".js--animations").val())}),$(".js--animations").change(function(){testAnim($(this).val())})}),$(".btn-animation").on("click",function(n){$(".animationSandbox").attr("class","animationSandbox  "+$(this).data("animation")+"  animated")});