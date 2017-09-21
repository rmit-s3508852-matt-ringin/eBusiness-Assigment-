    <script>

    function navSelect(category) {
        var x = document.getElementsByClassName('storeItem');
        for (i = 0; i < x.length; i++) {
                x[i].style.display = 'none';
        }    

        var x = document.getElementsByClassName(category);
        for (i = 0; i < x.length; i++) {
            if (x[i].style.display === 'none') {
                x[i].style.display = 'block';
            } else {
                x[i].style.display = 'none';
            }
        }    
    }
    

    </script>