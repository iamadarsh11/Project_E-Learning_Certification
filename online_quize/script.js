const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const downloadBtn = document.getElementById('download-btn')

const image = new Image()
image.src = '../images/certificate.jpg'
image.onload = function () {
	drawImage()
	}

	function drawImage(){
		ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
		ctx.font = '30px content regular'
		ctx.fillStyle ='#fff'
		ctx.fillText(nameInput.value, 245, 242)
	}

	nameInput.addEventListener('input', function(){
		const name = nameInput.value
		drawImage()
	})

	downloadBtn.addEventListener('click', function(){
		downloadBtn.href = canvas.toDataURL('image/jpg')
		downloadBtn.download = 'JustASSK Certificate-' + nameInput.value
	
	})