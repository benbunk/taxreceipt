var addthis_pub="thewhitehouse";
var addthis_options = 'email, favorites, delicious, digg, facebook, google, linkedin, live, myspace, reddit, stumbleupon, twitter';
var tst_url = 'http://www.whitehouse.gov/tax-receipt';
var tst_this_url = window.location.href.replace(/\?.*$/,'');
var tst_title = 'Your Federal Taxpayer Receipt';


function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function taxrShowAnswer(target, answer) {
	$(target).hide().html("$"+answer).fadeIn('slow');
}

function taxrShowPercent(target, percent, income) {
	if (income == 0) { 
		$(target).hide().html("n/a").fadeIn('slow');
	} else {
		var tmp = (percent / 100) * income;
		tmp = tmp.toFixed(2);
		if (tmp > 999) { tmp = addCommas(tmp); } 
		$(target).hide().html("$"+tmp).fadeIn('slow');
	} 
}

$(document).ready(function(){

	$("a[id^=taxr-info-]").bt({	
	    fill: '#FFF',
	    width: 150,
	    cornerRadius: 5,
	    strokeWidth: 0,
	    shadow: true,
	    shadowOffsetX: 3,
		shadowOffsetY: 3,
		shadowBlur: 8,
		hoverIntentOpts:  { interval: 300, timeout: 500 },		
		shadowColor: 'rgba(0,0,0,.9)',
		shadowOverlap: false,
		noShadowOpts: {strokeStyle: '#999', strokeWidth: 2},
		positions: ['most', 'left', 'right', 'top'],
		cssStyles: {padding: '15px'},
		hoverIntentOpts:  { interval: 150, timeout: 400 }
	});

	$("input[name^=taxr-input-]")
		.focus(function(event) 
		{
			if ($(this).val() === "Enter Dollar Amount") { $(this).val("") };  
		})
		.blur(function() 
		{
			if (!(isNumber($(this).val())) && ($(this).val()) || (parseInt($(this).val()) < 0)) {   
				$(this).css("border","2px solid red");
				$(this).css("margin-top","-1px");
				$(this).css("margin-left","-1px");
			} else {
				$(this).css("border","0px");
			}
		});
	$("#taxr-calculate-button")
		.bt({
			trigger: ['none'],
			fill: 'white',
			strokeStyle: "red",
			strokeWidth: "3",
			contentSelector: "$('#taxr-error-numeric').html()",
			positions: ['top'],
			width: '150px'
		})
		.click(function() 
		{

			$.each($("input[name^=taxr-input-]"), function() {
				if (($(this).val() == "Enter Dollar Amount") || ($(this).val() == "")) { $(this).val("0"); }
			});
			
			if (!(isNumber($("input[name=taxr-input-socsec]").val())) || (parseInt($("input[name=taxr-input-socsec]").val()) < 0)) {   
				$(this).btOn();					
			} else if (!(isNumber($("input[name=taxr-input-medicare]").val())) || (parseInt($("input[name=taxr-input-medicare]").val()) < 0)) {   
				$(this).btOn();
			} else if (!(isNumber($("input[name=taxr-input-income]").val())) || (parseInt($("input[name=taxr-input-income]").val()) < 0)) {   
				$(this).btOn();
			} else {
				var socsecAnswer = parseInt($("input[name=taxr-input-socsec]").val());
				var medicareAnswer = parseInt($("input[name=taxr-input-medicare]").val());
				var incomeAnswer = parseInt($("input[name=taxr-input-income]").val());
				if (incomeAnswer <= 0) { 
					incomeAnswer = 0; 
					$(".taxr-total-label").html("TOTAL PAYROLL TAXES YOU PAID");
				} else if ((socsecAnswer <=0) && (medicareAnswer <=0)) { 
					$(".taxr-total-label").html("TOTAL INCOME TAXES YOU PAID");
				} else {
					$(".taxr-total-label").html("TOTAL INCOME AND PAYROLL TAXES YOU PAID");
				}
				var totalTax = socsecAnswer + medicareAnswer + incomeAnswer;
				$("input[name^=taxr-input-]").css("border","0px");
				$.each($("div[id^=taxr-data-percent-]"), function() {
					taxrShowPercent($(this), $(this).attr("data-percent"), incomeAnswer);
				});
				socsecDisplay = socsecAnswer.toFixed(2);
				medicareDisplay = medicareAnswer.toFixed(2);
				incomeDisplay = incomeAnswer.toFixed(2);
				totalDisplay = totalTax.toFixed(2);
				$("div[id=data-socsec-tax]").hide().html("$"+addCommas(socsecDisplay)).fadeIn('slow');
				$("div[id=data-medicare-tax]").hide().html("$"+addCommas(medicareDisplay)).fadeIn('slow');
				$("div[id=data-socsec-sub]").hide().html("$"+addCommas(socsecDisplay)).fadeIn('slow');
				$("div[id=data-medicare-sub]").hide().html("$"+addCommas(medicareDisplay)).fadeIn('slow');
				$("div[id=data-income-tax]").hide().html("$"+addCommas(incomeDisplay)).fadeIn('slow');
				$("div[id=taxr-data-totaltax]").hide().html("$"+addCommas(totalDisplay)).fadeIn('slow');
			}
		});	

	//setup slide divs

	$("div[id^=taxr-cat-content-]").hide();
	$("div[id^=taxr-cat-head-]").click(function()
		{
			$(this).toggleClass("taxr-cat-head-expand");
			$(this).next($("div[id^=taxr-cat-content-]")).slideToggle(100);
		}
	);
	$("a[id=taxr-cat-collapse-all]").click(function() {
		$("div[id^=taxr-cat-content-]").slideUp(100);
		$("div[id^=taxr-cat-head-]").addClass("taxr-cat-head-expand").toggleClass("taxr-cat-head-expand");
		$("#taxr-cat-expand-all").toggle(); 
		$(this).toggle();
	});	

	$("a[id=taxr-cat-expand-all]").click(function() {
		$("div[id^=taxr-cat-content-]").slideDown(100);
		$("div[id^=taxr-cat-head-]").removeClass("taxr-cat-head-expand").toggleClass("taxr-cat-head-expand");
		$("#taxr-cat-collapse-all").toggle();
		$(this).toggle();
	});

	//setup tabset

	//When page loads...
	$(".taxr-tab").hide(); //Hide all content
	//$("div[id^=taxr-nav-]:first").addClass("taxr-tab-active").show(); //Activate first tab
	$(".taxr-tab:first").show(); //Show first tab content

	//On Click Event
	$("div[id^=taxr-nav-]").click(function() {

		$("div[id^=taxr-nav-]").removeClass("taxr-tab-active"); //Remove any "active" class
		$(this).addClass("taxr-tab-active"); //Add "active" class to selected tab
		$(".taxr-tab").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
	
	$("a.calculate-button").click(function(){
	  $("#taxr-numbers").hide();
	  $("#taxr-calculate").fadeIn();
	  return false;
	});
	
	$("a.calculate-button2").click(function(){
	  $("#taxr-numbers").hide();
	  $("#taxr-calculate").fadeIn();
	  return false;
	});
				
	$("#taxr-range-toggle").bt({
	    fill: '#FFF',
	    trigger: 'none',
	    cornerRadius: 5,
	    width: '420px', 
	    spikeGirth: 20,
	    spikeLength: 7,
	    strokeWidth: 0,
	    shadow: true,
	    shadowOffsetX: 3,
		shadowOffsetY: 3,
		shadowBlur: 8,
		shadowColor: 'rgba(0,0,0,.9)',
		shadowOverlap: false,
		noShadowOpts: {strokeStyle: '#999', strokeWidth: 2},
		positions: ['bottom'],
		cssStyles: {padding: '15px', color: '#444'}	,	
		hoverIntentOpts:  { interval: 300, timeout: 1000 },
		contentSelector: "$('#taxr-range-select').html()",
		postHide: function(box) { 
			$("a[id^=taxr-range-link-]").unbind();
		},
		preShow: function(box) {
			$("a[id^=taxr-range-link-]").click(function() {
				$("input[name=taxr-input-socsec]").val($(this).attr("data-socsec"));
				$("input[name=taxr-input-medicare]").val($(this).attr("data-medicare"));
				$("input[name=taxr-input-income]").val($(this).attr("data-income"));
				$("#taxr-calculate-button").click();
				$("#taxr-range-toggle").btOff();
			});
		}
	})
	.click(function() {
		$(this).btOn();
	});
	$("#taxr-embedbox-link").bt({
		contentSelector: "$(this).attr('data-embed')",
		fill: '#fff',
		trigger: ['click', 'click'],
		padding: 10,
		cornerRadius: 10,
		spikeLength: 10,
		spikeGirth: 5,
		positions: ['top']
	});
	
	$("#taxr-print-link")
        .click(function(event) {
		  $("a[id=taxr-cat-expand-all]").click();
       	  setTimeout(function() 
		  {  	event.preventDefault();
				window.print(); }, 1000);
        });

});