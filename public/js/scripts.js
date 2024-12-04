// Link avaliar filme.
function avaliarFilme(){ 
   document.getElementById("avaliacao").classList.remove("hidden");
   document.getElementById("avaliacao").classList.add("flex");
   document.getElementById("fundoBlur").classList.add("blur-sm");
   document.getElementById("fundoBlur2").classList.add("blur-sm");
   document.getElementById("fundoBlur3").classList.add("blur-sm");
}

function fecharAvaliacao(){
   document.getElementById("avaliacao").classList.remove("flex");
   document.getElementById("avaliacao").classList.add("hidden");
   document.getElementById("fundoBlur").classList.remove("blur-sm");
   document.getElementById("fundoBlur2").classList.remove("blur-sm");
   document.getElementById("fundoBlur3").classList.remove("blur-sm");
}

function publicar(){
   document.getElementById("fundoBlur").classList.remove("blur-sm");
   document.getElementById("fundoBlur2").classList.remove("blur-sm");
   document.getElementById("fundoBlur3").classList.remove("blur-sm");
}

// Abilitar o botão do input ao digitar alguma coisa.
document.getElementById("input").addEventListener("input", () => {
   const conteudo = document.getElementById("input").value;

   if (conteudo !== null && conteudo !== ''){
      document.getElementById("reset").classList.remove("hidden");
   } else {
      document.getElementById("reset").classList.add("hidden");
   }

   document.getElementById("reset").addEventListener("click", () => {
      document.getElementById("reset").classList.add("hidden");
   });
});