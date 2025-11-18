function enviar(){
    fetch("backend/salvar_denuncia.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "texto=" + encodeURIComponent(document.getElementById("texto").value)
    }).then(()=>{
        carregar();
        document.getElementById("texto").value = "";
    });
}

function carregar(){
    fetch("backend/listar_denuncias.php")
    .then(r=>r.json())
    .then(data=>{
        lista.innerHTML = data.map(d=>`<li>${d.texto}</li>`).join("");
    });
}

carregar();
