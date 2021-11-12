import View from './view';

class PaginationView extends View {
    _contentElement = document.querySelector('.product-pagination');
    _items;

    addHandlerClick(handler) {
        if (this._contentElement) {
            this._contentElement.addEventListener('click', function (e) {
                e.preventDefault();
                const btn = e.target.closest('.btn__pagination');
                handler(btn.dataset.index);
            })
        }
    }

    _generateMarkup() {
        const totalPages = Math.ceil(this._data.itemsTotal / this._data.itemsPerPage);
        const currentPage = +this._data.currentPage;
        console.log(currentPage);

        let html = '';
        for (let i = 1; i <= totalPages; i++ ) {
            html += `<button class="btn__pagination ${ currentPage === i ? 'btn__pagination--active' : ''}" data-index="${i}">${i}</button>`;
        }
        return html;
    }
}

export default new PaginationView();