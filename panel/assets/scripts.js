// function removesucessmessage() {
//     let sucessMessage = document.getElementById("mensagem-sucesso")

//     if (sucessMessage != null) {
//         sucessMessage.remove()
//     }
// }


function removeElementById(idOfElement) {
    const element = document.getElementById(idOfElement)

    if (element != null) {
        element.remove()
    }
}


function excluirjogo(idjogo) {
    let excluirjogo = confirm("Realmente deseja excluir esse jogo?")

    if(excluirjogo == true) {
       window.open("excluir-jogo.php?id=" + idjogo, "_SELF")
    }
}

function excluiridioma(ididioma) {
    let excluiridioma = confirm("Realmente deseja excluir esse idioma?")

    if(excluiridioma == true) {
       window.open("excluir-idioma.php?id=" + ididioma, "_SELF")
    }
}

function excluirplataforma(idplataforma) {
    let excluirplataforma = confirm("Realmente deseja excluir essa plataforma?")

    if(excluirplataforma == true) {
       window.open("excluir-plataforma.php?id=" + idplataforma, "_SELF")
    }
}

function excluircategoria(idcategoria) {
    let excluircategoria = confirm("Realmente deseja excluir essa categoria?")

    if(excluircategoria == true) {
       window.open("excluir-categoria.php?id=" + idcategoria, "_SELF")
    }
}

function arquivarmensagem(idmensagem) {
    let arquivarmensagem = confirm("Realmente deseja arquivar essa mensagem?")

    if(arquivarmensagem == true) {
        window.open("arquivar.php?id=" + idmensagem, "_SELF")
    }
}

function obterDataHoraAtual() {
    const data = new Date()
    let horas = data.getHours()
    let minutos = data.getMinutes()
    let segundos = data.getSeconds()
    let dias = data.getDay()
    let mes = data.getMonth()+1
    let anos = data.getFullYear()
   
    
    
    if (dias <10) {
        dias = "0" + dias
    }

    if (mes <10) {
        mes = "0" + mes
    }

    if (horas <10) {
      hora = "0" + hora
    }
  
    if (minutos <10) {
      minutos = "0" + minutos
    }
  
    if (segundos <10) {
      segundos = "0" + segundos
    }
  
    let dataAtual = " - " + dias + "/" + mes + "/" + anos + " - " + horas + ":" + minutos + ":" + segundos
  
    return dataAtual
  }

  function atualizarRelogio() {
    const relogio = document.getElementById('relogio')
    relogio.innerHTML =obterDataHoraAtual()

    setInterval(function (){
        relogio.innerHTML = obterDataHoraAtual()
    }, 1000)
  }

// função para trocar as cores do texto no top menu, para ativar é preciso desabilitar a cor da class .nome do top-container no css 

//   function getRandomInt(min, max) {
//     min = Math.ceil(min);
//     max = Math.floor(max);
//     return Math.floor(Math.random() * (max - min) + min);
//   }

//   function getRandomColor() {
   
//     const min = 1
//     const max = 4 

//     let cor = getRandomInt(min,max)
//     const id = document.getElementById("top-container")
//     console.log(id)

//     if (cor == 1) {
//         id.style.color = 'red';
//     }

//     if (cor == 2) {
//         id.style.color = 'green';
//     }

//     if (cor == 3) {
//         id.style.color = 'blue';
//     }

   
// }
   
//   function atualizarCor() {
//     getRandomColor()

//     setInterval(function (){
//         getRandomColor()
//     }, 1000) 
//   }