/* ejecutar funcion en el evento click */
document.getElementById("btn_open").addEventListener("click", open_close_menu);

/* declaracion de variables  */
var side_menu= document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var body = document.getElementById("body");

/* evento para mostrar y ocultar menu */

function open_close_menu(){
    body.classList.toggle("body_move");
    side_menu.classList.toggle("menu_side_move");

}
/* si el ancho de la pagina es menor a 160px, ocultara el menu al recargar la pagina */
if(window.innerWidth < 760){
    body.classList.add("body_move")
    side_menu.classList.add("menu_side_move");
}
/*  menu responsive */
window.addEventListener("resize" , function(){
    if (this.window.innerWidth>760){
        body.classList.remove("body_move");
        side_menu.classList.remove("menu_side_move");
    }
    if (this.window.innerWidth < 760){
        body.classList.add("body_move");
        side_menu.classList.add("menu_side_move");
    }
})
