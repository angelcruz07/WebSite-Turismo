export function initCharacterCounter(className, limit) {
  const inputs = document.getElementsByClassName(className);

  for (const input of inputs) {
    const count = document.createElement("span");
    count.textContent = `0/${limit}`;
    input.parentNode.appendChild(count);

    input.addEventListener("input", function () {
      const countCharacters = input.value.length;
      count.textContent = `${countCharacters}/${limit}`;
    });
  }
}
