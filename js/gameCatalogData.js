//Search-bar function

const titleData =[
    {
    titlename : "Warzone",
    titleimg : "assets/gamecovers/warzone.jpg",
    titletags : ["Warzone "]
    },

    {
    titlename : "Grand Theft Auto V",
    titleimg : "assets/gamecovers/gtav.jpg",
    titletags : ["GTAV ", "GTA5 ","Grand Theft Auto V "]
    },

    {
    titlename : "Fortnite",
    titleimg : "assets/gamecovers/fortnite.jpg",
    titletags : ["Fortnite "]
    },    

    {
    titlename : "Hello Neighbor",
    titleimg : "assets/gamecovers/hneighbor.jpg",
    titletags : ["Hello Neighbor "]
    },

    {
    titlename : "Overwatch",
    titleimg : "assets/gamecovers/overwatch.jpg",
    titletags : ["Overwatch 1"]
    },

    {
    titlename : "UFC 4",
    titleimg : "assets/gamecovers/ufc4.png",
    titletags : ["UFC 4"]
    },

    {
    titlename : "Roblox",
    titleimg : "assets/gamecovers/roblox.jpg",
    titletags : ["Roblox"]
    },

    {
    titlename : "Player Unknown Battlegrounds",
    titleimg : "assets/gamecovers/pubg.jpg",
    titletags : ["Player Unkown Battlegrounds", "PUBG"]
    },

    {
    titlename : "Cyberpunk",
    titleimg : "assets/gamecovers/cyberpunk.jpg",
    titletags : ["Cyberpunk 2077"]
    },

    {
    titlename : "Valorant",
    titleimg : "assets/gamecovers/valorant.jpg",
    titletags : ["Valorant"]
    },

    {
    titlename : "Rust",
    titleimg : "assets/gamecovers/rust.jpg",
    titletags : ["Rust"]
    }
]


document.getElementById("game-categories").innerHTML = `${titleData.map(function(title) {
    return `
   	<div class="gamecard">
    <h2 class="title-name">${title.titlename}</h2>
    <p class="title-tags">${title.titletags}</p>
	<a class="title-page" href="game.php?title=${title.titlename}" ">
   	<img class="title-img" src="${title.titleimg}">	
   	</a>
    </div>`
    
}).join('')}`

const search = () =>{
    
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const titlesel = document.querySelectorAll(".gamecard");
    const tname = document.getElementsByTagName("p");


    for(var i=0; i < tname.length; i++){
        let match = titlesel[i].getElementsByTagName('p')[0];

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



