	// ambil elemen yang dibutuhkan
		let keyword = document.getElementById('keyword');
		let container = document.getElementById('container');

		// buat event ketika diklik
		keyword.addEventListener('keyup', function() {
			//object ajax

			let ajax = new XMLHttpRequest();

			//cek kesiapan ajax
			ajax.onreadystatechange = function() {
				if(ajax.readyState == 4 && ajax.status == 200){
					container.innerHTML = ajax.responseText;
				}
			}

			//eksekusi ajax
			ajax.open('get', 'ajax1.php?keyword='+ keyword.value);
			ajax.send();

					
		});