if(document.querySelector('a[href= "../feladat/process/admin_logout.php"]')  ) {
    document.querySelectorAll('a[href= "../feladat/process/admin_logout.php"]')
        .forEach(el => {
            el.onclick = e => {
                if(!confirm('Biztosan ki szeretnél lépni?')) {
                    e.preventDefault();
                }
            }
        })
}