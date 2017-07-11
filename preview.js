function listPreview(temp)
{
var preview =document.querySelectorAll('.preview');

var cards = [];
for(let i=0;i<preview.length;i++){
	cards.push(preview[i].children[0].children[0].dataset.section);
}
console.log(sessionStorage.setItem('cards',cards));
}
