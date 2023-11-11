const input = document.getElementById('title');
const count = document.getElementById('count');
input.addEventListener('input',function() {

  let countCharacters = input.value.length;
  count.textContent = countCharacters + '/300';
});
