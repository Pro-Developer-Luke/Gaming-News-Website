//Search-bar function

const titleData =[
    {
    titlename : "Warzone",
    titleimg : "assets/gamecovers/warzone.jpg"
    },

    {
    titlename : "Grand Theft Auto V | GTAV",
    titleimg : "assets/gamecovers/gtav.jpg"
    },

    {
    titlename : "Fortnite",
    titleimg : "assets/gamecovers/fortnite.jpg"
    },    

    {
    titlename : "Hello Neighbor",
    titlepage : "hneighbor.html",
    titleimg : "assets/gamecovers/hneighbor.jpg"
    },

    {
    titlename : "Overwatch",
    titleimg : "assets/gamecovers/overwatch.jpg"
    },

    {
    titlename : "UFC 4",
    titleimg : "assets/gamecovers/ufc4.png"
    },

    {
    titlename : "roblox",
    titleimg : "assets/gamecovers/roblox.jpg"
    },

    {
    titlename : "Player Unknown Battlegrounds | PUBG",
    titleimg : "assets/gamecovers/pubg.jpg"
    },

    {
    titlename : "Cyberpunk",
    titleimg : "assets/gamecovers/cyberpunk.jpg"
    },

    {
    titlename : "valorant",
    titleimg : "assets/gamecovers/valorant.jpg"
    },

    {
    titlename : "rust",
    titleimg : "assets/gamecovers/rust.jpg"
    }
]


document.getElementById("game-categories").innerHTML = `${titleData.map(function(title) {
    return `
   	<div class="gamecard">
    <h2 class="title-name">${title.titlename}</h2>
	<a class="title-page" href="game.php?${title.titlename}" ">
   	<img class="title-img" src="${title.titleimg}">	
   	</a>
    </div>`
    
}).join('')}`

const search = () =>{
    
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const titleitems = document.getElementById("game-categories")
    const titlesel = document.querySelectorAll(".gamecard");
    const tname = document.getElementsByTagName("h2");


    for(var i=0; i < tname.length; i++){
        let match = titlesel[i].getElementsByTagName('h2')[0];

        if(match){
           let textvalue = match.textContent || match.innerHTML

           if(textvalue.toUpperCase().indexOf(searchbox) > -1){
            titlesel[i].style.display = "";
           }
           else{
            titlesel[i].style.display = "none";
           }
        }
    }
}





