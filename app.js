var urlen = "http://localhost:8080/mello/api.php";

window.onload = function() {
    visaAllaDeltavlingar();
};

function visaAllaDeltavlingar() {
    document.getElementById("rubrik").innerHTML = "Välj en deltävling";
    document.getElementById("grid").innerHTML = "";
    
    fetch(urlen)
        .then(function(svar) {
            return svar.json();
        })
        .then(function(data) {
            var listaDiv = document.getElementById("deltavlinglista");
            listaDiv.innerHTML = ""; 
            
            for (var i = 0; i < data.deltavlingar.length; i++) {
                var stad = data.deltavlingar[i];
                
                listaDiv.innerHTML += "<button onclick='visaEnDeltavling(" + stad.id + ", \"" + stad.namn + "\")'>" + stad.namn + "</button>";
            }
        });
}

function visaEnDeltavling(stadId, stadNamn) {
    document.getElementById("rubrik").innerHTML = stadNamn;
    
    document.getElementById("deltavlinglista").innerHTML = "<button onclick='visaAllaDeltavlingar()'>Tillbaka</button>";

    fetch(urlen)
        .then(function(svar) {
            return svar.json();
        })
        .then(function(data) {
            var gridDiv = document.getElementById("grid");
            gridDiv.innerHTML = ""; 
            
            var nummer = 1;

            for (var i = 0; i < data.bidrag.length; i++) {
                var bidrag = data.bidrag[i];
                
                if (bidrag.deltavling_id == stadId) {

                    gridDiv.innerHTML += "<div class='kort'>" +
                        "<img src='" + bidrag.bild + "'>" +
                        "<h3>Bidrag " + nummer + "</h3>" +
                        "<p><b>" + bidrag.artist + "</b></p>" +
                        "<p><i>" + bidrag.titel + "</i></p>" +
                    "</div>";
                    
                    nummer = nummer + 1;
                }
            }
        });
}
function visaAllaArtister() {
    document.getElementById("rubrik").innerHTML = "Alla årets artister";
    document.getElementById("deltavlinglista").innerHTML = "";
    
    fetch(urlen)
        .then(function(svar) {
            return svar.json();
        })
        .then(function(data) {
            var gridDiv = document.getElementById("grid");
            gridDiv.innerHTML = ""; 
            
            for (var i = 0; i < data.bidrag.length; i++) {
                var bidrag = data.bidrag[i];
                
                gridDiv.innerHTML += "<div class='kort'>" +
                    "<img src='" + bidrag.bild + "'>" +
                    "<p><b>" + bidrag.artist + "</b></p>" +
                "</div>";
            }
        });
}