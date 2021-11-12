import View from './view';

class VariationView extends View {
    _contentVariation = document.querySelector('.product__variation-value');
    _contentElement = document.querySelector('.product__variation-items--color');
    _items;


    addHandlerLoad(handler) {
        const that = this;
        if (!this._contentElement) return;
        this._items = this._contentElement.querySelectorAll('.product__variation-item--color');
        window.addEventListener('load', function () {
            handler(that.getData());
        })
    }

    addHandlerClick(handler) {
        if (!this._contentVariation) return;
        this._contentVariation.addEventListener("click", function (e) {
            const clicked = e.target.closest('.product__variation-item--color');
            const colorSelected = clicked.dataset.colorName;
            handler(colorSelected);
        });
    }

    colorSelected(color){
        const element = this._contentElement.querySelectorAll('.product__variation-item--color');
        const selectFormElement = this._contentVariation.querySelector('#pa_color');
        element.forEach( (item, index) => {
            item.classList.remove('item__color--selected');
            item.style.backgroundColor = "transparent";
            if (item.dataset.colorName === color) {
                item.classList.add('item__color--selected');
                item.style.backgroundColor = item.dataset.colorHex;
                selectFormElement.selectedIndex = index + 1;
                const newEvent = new Event("change", {bubbles: true});
                const element = selectFormElement.item(index + 1);
                element.dispatchEvent(newEvent);
            }
        })
    }

    _generateMarkup() {
        const html = this._data.map( item => this._generateItemMarkup(item));
        return html.join('');
    }

    _generateItemMarkup(item) {
        return `
            <li class="product__variation-item--color" style="border-color: ${item.hex}" data-color-name="${item.name}" data-color-hex="${item.hex}" tabindex="0" role="button">
                <span class="product__color-box" style="background-color: ${item.hex}"></span>
            </li>`
    }



    getData() {
        if (this._items) return this._items;
    }

    _beforeEndRender() {

    }
}

export default new VariationView();