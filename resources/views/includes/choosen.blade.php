
    document.getElementById("choose").addEventListener("click", function(event){
        event.preventDefault();
        var choosen = document.querySelectorAll('input[type=checkbox]:checked');
        var url     = '/students?';
        for (var i = 0; i < choosen.length; i++) {
            if(i < choosen.length - 1) {
                url += 'choosen[]='+choosen[i].value+'&';
            } else {
                url += 'choosen[]='+choosen[i].value;
            }
        }
        ajax(url, section);
    });
