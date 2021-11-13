import View from './view';

class VariationView extends View {
    _contentVariation = document.querySelector('.product__variation-content');
    _contentVariationItems = document.querySelector('.product__variation-value');
    _contentElement = document.querySelector('.product__variation-items');
    _selectFormElement = this._contentElement.closest('.product__variation-value').querySelector('select');
    _items;


    addHandlerLoad(handler) {
        const that = this;
        if (!this._contentElement) return;
        this._items = this._contentElement.querySelectorAll('.product__variation-item--default');
        window.addEventListener('load', function () {
            handler(that.getData());
        })
    }

    addHandlerClick(handler) {
        if (!this._contentVariation) return;
        this._contentVariation.addEventListener("click", function (e) {
            const clicked = e.target.closest('.product__variation-item--default');
            if (!clicked) return
            const Selected = clicked.dataset.name;
            handler(Selected);
        });
    }

    selected(title){
        const element = this._contentElement.querySelectorAll('.product__variation-item--default');
        const selectFormElement = this._selectFormElement;
        element.forEach( (item, index) => {
            item.classList.remove('item__default--selected');
            if (item.dataset.name === title) {
                item.classList.add('item__default--selected');
                selectFormElement.selectedIndex = index + 1;
                const newEvent = new Event("change", {bubbles: true});
                const element = selectFormElement.item(index + 1);
                element.dispatchEvent(newEvent);
            }
        })
    }

    updateSelected() {
        const options = Array.from(this._selectFormElement.options);
        //1) recorer options
        console.log(options)
        options.forEach( item => {
            console.log( item );
        })

        //2) verficar que las options concuerdan con algun item

        //3) si no concuenda ninguno alguno de los items con la option desactivar este item.
    }

    _generateMarkup() {
        const html = this._data.map( item => this._generateItemMarkup(item));
        return html.join('');
    }

    _generateItemMarkup(item) {
        return `
            <li class="product__variation-item product__variation-item--default" data-name="${item.name}" tabindex="0" role="button">
                <span class="product__variation-box">${item.name}</span>
            </li>`
    }



    getData() {
        if (this._items) return this._items;
    }

    _beforeEndRender() {

    }
}

export default new VariationView();