function adicionarItem(){

    let nova_tarefa      = document.getElementById("nova_tarefa").value
    let lista_tarefas_id = document.getElementById('listaTarefas')

    document.getElementById('nova_tarefa').value = ''

    if (nova_tarefa!=''){
        const item      = document.createElement('li')
        const feito     = document.createElement('input')
        const tirar     = document.createElement('input')

        feito.value     = 'Feito'
        feito.type      = 'button'
        feito.className = 'botao_feito'
        feito.onclick   = function(){
            (item.style.textDecoration == '') ? item.style.textDecoration = 'line-through': item.style.textDecoration = ''
        }

        tirar.type      ='button'
        tirar.value     = 'X'
        tirar.className ='botao_tirar'
        tirar.onclick   = function(){
            item.remove()
            feito.remove()
            tirar.remove()
        }

        item.className ='item_estilo'
        item.innerHTML = nova_tarefa
        
        lista_tarefas_id.appendChild(item)
        lista_tarefas_id.appendChild(feito)
        lista_tarefas_id.appendChild(tirar)
    }
    
}
