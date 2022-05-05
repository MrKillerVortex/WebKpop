

async function rechercherLeNom(nom){
    let divMain = document.getElementById("listeArtiste")
    divMain.innerHTML = ""
    let jsonArtiste = await fetch("./getArtistes.php")
    listeArtiste = await jsonArtiste.json()
    try{
        let a = await rechercheArtiste(listeArtiste,nom)
        if (typeof a === "string") {
            let resultat = document.createElement('p')
            resultat.innerText = a
            divMain.appendChild(resultat)
            return
        }
        for (const artiste of a) {
            let resultat = document.createElement('p')
            resultat.innerText = artiste
            divMain.appendChild(resultat)
        }
    } catch(erreur){
        console.log(erreur)
        
    }

}

async function rechercheArtiste(valeur,nom){
    let resultat = await new Recherche().trouverArtiste(valeur, nom)
    return resultat
}