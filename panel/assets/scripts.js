function removeErrorMessage() {
    let errorMessage = document.getElementById("error-message-index")

    if (errorMessage != null) {
        errorMessage.remove()
    }
}


function gameDelete(gameId) {
    let gameDelete = confirm("You really want to delete this Game?")

    if (gameDelete == true) {
        window.open("game_delete.php?id=" + gameId, "_SELF")
    }
}

function idiomDelete(idiomId) {
    let idiomDelete = confirm("You really want to delete this Idiom?")

    if (idiomDelete == true) {
        window.open("idiom_delete.php?id=" + idiomId, "_SELF")
    }
}

function platformDelete(platformId) {
    let platformDelete = confirm("You really want to delete this Platform?")

    if (platformDelete == true) {
        window.open("platform_delete.php?id=" + platformId, "_SELF")
    }
}

function categoryDelete(categoryId) {
    let categoryDelete = confirm("You really want to delete this Category?")

    if (categoryDelete == true) {
        window.open("category_delete.php?id=" + categoryId, "_SELF")
    }
}

function messageArchive(messageId) {
    let messageArchive = confirm("You really want to archive this Message?")

    if (messageArchive == true) {
        window.open("message_archive.php?id=" + messageId, "_SELF")
    }
}

// FUNÇÃO PARA MOSTRAR O RELOGIO

function obterDataHoraAtual() {
    const data = new Date()
    let hour = data.getHours()
    let minute = data.getMinutes()
    let second = data.getSeconds()
    let day = data.getDate()
    let month = data.getMonth() + 1
    let year = data.getFullYear()

    if (hour <= 9) {
        hour = "0" + hour
    }

    if (minute <= 9) {
        minute = "0" + minute
    }

    if (second <= 9) {
        second = "0" + second
    }
    if (day <= 9) {
        day = "0" + day
    }

    if (month <= 9) {
        month = "0" + month
    }



    let real_date = day + "/" + month + "/" + year + " - " + hour + ":" + minute + ":" + second;


    return real_date
}

function updateClock() {

    const clock = document.getElementById('clock')
    clock.innerHTML = obterDataHoraAtual()

    setInterval(function () {
        clock.innerHTML = obterDataHoraAtual()
        1000
    })

}


//FUNÇÃO PARA MUDAR AS CORES

function random_color() {
    const color_r = Math.floor(Math.random() * 256)
    const color_g = Math.floor(Math.random() * 256)
    const color_b = Math.floor(Math.random() * 256)
    const cor = "rgb(" + color_r + "," + color_g + "," + color_b + ")"

    document.getElementById("admin_name").style.color = cor
}
function updateColor() {
    setInterval(random_color, 1000)
}

function text_uppercase(element) {
    let value_line = element.value
    element.value = (value_line.toUpperCase())
}