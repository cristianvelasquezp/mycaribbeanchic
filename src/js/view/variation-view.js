import View from './view';

class VariationView extends View {
    _contentVariations = document.querySelector(".product__variation-content");
    _contentVariationValues = document.querySelectorAll(".product__variation-value");
    _contentVariationItems = document.querySelectorAll('.product__variation-items');

    addHandlerLoad(handler){
        const that = this;
        window.addEventListener('load', function () {
            handler(that._contentVariationItems);
        })

    }

    addHandlerClick(handler){
        const that = this;
        this._contentVariations.addEventListener('click', function (e) {
            const clicked = e.target.closest('.product__variation-item');
            if (!clicked) return;

            const index = +clicked?.dataset.index;
            const id = clicked?.closest('.product__variation-items').dataset.variation;
            if ( !(id && index) ) return
            handler({id:id, index: index});
        })
    }

    addHandlerReset(handler) {
        const that = this;
        this._contentVariations.addEventListener('click', function (e) {
            const clicked = e.target.closest('.reset_variations');
            if (!clicked) return
            const items = that._contentVariations.querySelectorAll('select');

            let ids = [];
            items.forEach(item => {
                ids.push(item.attributes.id.value);
            })
            setTimeout(function () {
                handler(items);
            }, 0)

        })
    }

    addHandlerChange(handler){
        const that = this;
        const selects = that._contentVariations.querySelectorAll('select');
        selects.forEach( select => {
            select.addEventListener('change', function (e) {
                handler();
            })
        })
    }

    _generateMarkup() {
        const html = this._data.items.map( item => {
            return this._generateItemMarkup(item);
        })

        return html.join('');
    }

    _generateItemMarkup(item) {
        const value = (item.value === '#ffffff') ? '#000000' : item.value;
        return `
            <li class="product__variation-item ${this._id === 'pa_color' ? 'product__variation-item--color' : 'product__variation-item--default'} ${(this._data.selected === item.index && this._id !== 'pa_color') ? 'item__default--selected' : ''} ${(this._data.selected === item.index) ? 'item__active' : ''} ${item.disabled ? 'item__disabled ' : ''}" 
                data-name="${item.name}" 
                data-value="${item.value}"
                data-index="${item.index}"
                tabindex="0" 
                role="button"
                style="${this._id === 'pa_color' ? 'border-color:' + value + ';' : ''}
                ${(this._data.selected === item.index && this._id === 'pa_color') ? 'background-color:' + value + ';' : ''}"
                >
                <span ${this._id === 'pa_color' ? 'class="product__color-box" style="background-color:' + item.value + '"' : ''}>
                ${this._id !== 'pa_color' ?  item.name  : ''}
                </span>
            </li>
        `;
    }

    updateVariationOption(id, optionIndex){
        const selectElement = document.getElementById(id);
        selectElement.selectedIndex = optionIndex;
        const newEvent = new Event('change', {bubbles: true} );
        selectElement.dispatchEvent(newEvent);
    }

    setContentElement(variationType){
        this._contentElement = this._contentVariations.querySelector(`[data-variation='${variationType}' ]`);
    }

    setVariationId(id) {
        this._id = id;
    }

    getSelectData(){
        return this._contentElement.closest('.product__variation-value').querySelector('select');
    }

}

export default new VariationView();