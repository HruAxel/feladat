if(document.querySelector('.update')  ) {
    document.querySelectorAll('.update')
        .forEach(el => {
            el.onclick = e => {
                if(!confirm('Biztosan módosítod a cikket?')) {
                    e.preventDefault();
                }
            }
        })
}