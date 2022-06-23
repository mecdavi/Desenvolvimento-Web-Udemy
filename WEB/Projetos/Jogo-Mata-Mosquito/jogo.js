    var larguraPagina = 0
    var alturaPagina  = 0
    var mosca         = ''
    var vidas         = 1 
    var tempo         = 10

    function ajustarTamanhoTela(){
        larguraPagina = (window.innerWidth-90 <0 ? '0'   : window.innerWidth-90)
        alturaPagina  = (window.innerHeight -90 <0 ? '0' : window.innerHeight-90)
    }   
    ajustarTamanhoTela()

    var contador =  setInterval(function(){
        document.getElementById('contador').innerHTML = tempo            
        tempo    == 0 ? location.href ='tela_vencer.html' : ''
        tempo    -= 1
    },1000)

    function moverMosca(){
        if(document.getElementById('mosca')){
            document.getElementById('mosca').remove()

            if(vidas >3){
                location.href = 'game_over.html'
            }else{
                document.getElementById('vida' + vidas).src = 'imagens/coracao_vazio.png'
                vidas ++
            }
        } 

        mosca            = document.createElement('img')
        mosca.src        = 'imagens/mosca.png'
        mosca.className  = orientacao() + ' ' + 'moscaImagem'
        mosca.id         = 'mosca'
        let largura      = Math.floor(Math.random()*larguraPagina) + 'px'
        let altura       = Math.floor(Math.random()*alturaPagina) + 'px'
        
        tamanho()        
        mosca.style.left = largura  
        mosca.style.top  = altura

        document.body.appendChild(mosca)

        mosca.onclick    = function(){
            this.remove()
        }
    }

    function orientacao(){
       let moscalado = Math.floor(Math.random()*2)
       moscalado     == 0 ? moscalado = 'ladoA' : moscalado = 'ladoB' 
       return moscalado
    }

    function tamanho(){
        let moscaTamanho  = Math.floor(Math.random()*3)
        moscaTamanho      == 0 ? moscaTamanho = '50px' : moscaTamanho == 1 ? moscaTamanho = '70px' : moscaTamanho = '90px' 
        mosca.style.width = moscaTamanho
    }