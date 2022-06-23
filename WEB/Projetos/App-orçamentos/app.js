class Despesa{
    constructor(ano,mes,dia,tipo,valor,descricao){
       this.ano       = ano
       this.mes       = mes
       this.dia       = dia 
       this.tipo      = tipo
       this.descricao = descricao
       this.valor     = valor
    }
}
class Bd {
    constructor(){
        let id = localStorage.getItem('id')
        id === null ? localStorage.setItem('id',0) : ''
        console.log(id)
    }
    getProximoId(){
        let proximoId = localStorage.getItem('id')
        console.log(parseInt(proximoId +1))
    }
    gravar(d){
        // localStorage.setItem('despesa',JSON.stringify(d))
        this.getProximoId()
        console.log(d)
    }
}
let bd = new Bd()

function capturar_despesas () {
    let ano       = document.getElementById('ano')
    let mes       = document.getElementById('mes')
    let dia       = document.getElementById('dia')
    let tipo      = document.getElementById('tipo')
    let valor     = document.getElementById('valor')
    let descricao = document.getElementById('descricao')

    let despesa = new Despesa(ano.value,mes.value,dia.value,tipo.value,valor.value,descricao.value)
    bd.gravar(despesa)
}
