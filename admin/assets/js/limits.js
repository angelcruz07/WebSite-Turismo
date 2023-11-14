function initCharacterCounter(inputId, limit) {
  const input = document.getElementById(inputId);
  const count = document.createElement("span");
  count.textContent = `0/${limit}`;
  input.parentNode.appendChild(count);

  input.addEventListener("input", function () {
    const countCharacters = input.value.length;
    count.textContent = `${countCharacters}/${limit}`;
  });
}

//Form event
//Sustituir los parametros por el que se desea limitar
initCharacterCounter("title", 30);
initCharacterCounter("description", 255);
