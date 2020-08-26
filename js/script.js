

var keyword = document.getElementById('keyword');

var tombolCari = document.getElementById('tombol-cari');

var container = document.getElementById('container');

keyword.addEventListener('keyup', function() {
	

	//buat objek ajax

	var ajax = new XMLHttpRequest();




	// CEK KESIAPAN AJAX

	ajax.onreadystatechange = function () {
			
			if ( ajax.readyState == 4 && ajax.status ==  200 ) {

				container.innerHTML = ajax.responseText;
		}

	}

	// eksekudi ajax

	ajax.open('GET', 'ajax/search_sw.php?keyword=' + keyword.value, true);
	ajax.send();




});
