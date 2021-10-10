
    function ajax(url, section){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(section).innerHTML = this.responseText;
                paginator();
            }
        };
        xhttp.open("GET", url, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhttp.send();
    }

    function paginator(){
        var paginator = document.getElementsByClassName('paginator');
        for(var i = 0; i < paginator.length; i++) {
            paginator[i].onclick = function(event){
                event.preventDefault();
                ajax(this.href, section);
            };
        }
    }

    window.addEventListener("load", function(event){ paginator(); });
