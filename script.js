function redirect(jogo){
    location.href = './games_template/index.php?jogo=' + jogo;
}

//SWITCH CATEGORY

function categoria(valor) {
    if (valor == 'terror') {
        window.location.href = "category.php?category=terror"
    }else if (valor == 'todos') {
        window.location.href = "category.php?category=all"
    }else if (valor == 'aventura') {
        window.location.href = "category.php?category=aventura"
    }else if (valor == 'rpg') {
        window.location.href = "category.php?category=rpg"
    }else if(valor == 'all'){
        window.location.href = "category.php?category=all"
    }
}

