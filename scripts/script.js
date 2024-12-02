const button = document.getElementById('menu-button')

const dropdown = document.getElementById('dropdown')


button.addEventListener('click', () =>{
    dropdown.classList.toggle('hidden')
})


function redirect(){
    location.href('index.html')
}