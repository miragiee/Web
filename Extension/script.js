let title = document.querySelector("#appHubAppName");
let buttonContainer = document.querySelector('.btn_addtocart')
let gameName = title.innerHTML.replaceAll(' ', '_')

buttonContainer.innerHTML += "<a href='" + 'https://thelastgame.ru/' + " role = 'button' class='btn_green_steamui btn_medium'><span>Бесплатно</span><a/>"

console.log(buttonContainer)