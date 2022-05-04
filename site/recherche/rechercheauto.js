class Recherche{
    async trouverArtiste(artiste){
        let jsonArtiste = await fetch('./getArtistes.php')

        this.zoneRecherche = await jsonArtiste.json()

        this.motClef = artiste
        var regexp = new RegExp(this.motClef,'gi')

        this.resultat = this.zoneRecherche.find(artiste => artiste.match(regexp))
        if (this.resultat === undefined) this.resultat = "Aucun artiste correspondant"

        console.log(this.resultat)
        return this.resultat
    }
}