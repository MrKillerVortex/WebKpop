async function rechercherLeNom(valeur){

    for (let index = 0; index < 10; index++) {
        try{
            let d = await rechercheArtiste(valeur,index)

            let divMain = document.getElementById("main")
            let resultat = document.createElement('p')
            resultat.innerText = d
            divMain.appendChild(resultat)
        } catch(erreur){
            console.log(erreur)
            
        }
        
    }
}

async function rechercheArtiste(valeur,index){
    let resultat = await new Recherche().trouverArtiste(valeur)
    return `${index} : ${resultat}`
}