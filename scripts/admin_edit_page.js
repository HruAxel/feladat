if (document.querySelector('.delete')) {
    document.querySelectorAll('.delete')
        .forEach(el => {
            el.onclick = e => {
                if (!confirm('Biztosan törölni szeretnéd a cikket? Ha törlöd végleg elveszik!')) {
                    e.preventDefault();
                }
            }
        })
}