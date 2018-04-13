function backToTop() {
	var obtn = document.getElementById('btn');
	var clientHeight = document.documentElement.clientHeight || document.body.clientHeight;
	var timer = null;
	isTop = true;

	window.onscroll = function(){
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
		if (osTop >= clientHeight) {
			obtn.style.display = 'block';
		}else{
			obtn.style.display = 'none';
		}

		if (!isTop) {
			clearInterval(timer);
		}
		isTop = false;
	}

	obtn.onclick = function(){
		timer = setInterval(function(){
			var osTop = document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed = Math.floor(-osTop/8);
			isTop = true;

			document.documentElement.scrollTop = document.body.scrollTop = osTop+ispeed;
			if (osTop == 0) {
				clearInterval(timer);
			}
		},30);	
	} 
}
