class Recherche{
    async trouverArtiste(listeArtiste, nom){
        let result = []
        var regexp = new RegExp(nom,'gi')

        for (const artiste of listeArtiste) {
            if (artiste.match(regexp)) {
                result.push(artiste)
            }
        }
        if (result.length === 0) return "Aucun artiste correspondant"
        return result
    }
}