function showSuggestion(str) {
    if(str.length == 0) {
        document.querySelector('#output').innerHTML = '';
    } else {
        // AJAX REQUEST
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                document.querySelector('#output').innerHTML = this.responseText;
            }
        }
        xmlhttp.open('GET', 'suggest.php?q='+str, true);
        xmlhttp.send();
    }
}