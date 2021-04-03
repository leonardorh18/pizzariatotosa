var sizes = {
    'b': 1,
    'p': 2,
    'm': 2,
    'g': 3,
    'gg': 4,
}

function selectPizzaSize(){
    currentSize = document.getElementById("tamanho").value;
    if(currentSize == ""){
        document.getElementById("opcoes_pedido").style.display = "none";
    }
    else{
        document.getElementById("opcoes_pedido").style.display = "block";
    }
    document.getElementById("limiteSabores").innerText = sizes[currentSize];
    /* zerar todos os checkboxes */
    lista = document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < lista.length; i++)
        lista[i].checked = false;
    document.getElementById("numSabores").innerText = 0;    
}

function countSabores(){
    /* contar sabores selecionados */
    total = 0;
    lista = document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < lista.length; i++)
        if(lista[i].checked)   
          total++;      
    return total;      
}

function updateCount(){
    currentSize = document.getElementById("tamanho").value;
    countSelected = countSabores();
    document.getElementById("numSabores").innerText = countSelected;
    if(countSelected > sizes[currentSize])
      alert("Você ultrapassou o número de sabores permitido!");
}

function addToCart(){
    currentSize = document.getElementById("tamanho").value;
    countSelected = countSabores();
    if(countSelected > sizes[currentSize]){
      alert("Você ultrapassou o número de sabores permitido!");
      return false;
    }  
    else{
      if(countSelected == 0){
        alert("Selecione pelo menos 1 sabor") 
        return false;
      }
    }     
}