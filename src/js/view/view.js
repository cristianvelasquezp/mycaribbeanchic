export default class View {
    _data;

    renderSpinner() {
        const spinner = `
            <div class='spinner'>
                <div class="lds-dual-ring"></div>
            </div>
        `;

        this._clear();
        this._contentElement.insertAdjacentHTML('beforeend', spinner);
    }

    render(data) {
        this._data = data;
        this._clear();

        this._contentElement.insertAdjacentHTML('beforeend', this._generateMarkup());

        this._beforeEndRender();
    }

    update(data) {
        this._data = data
        const newDom = document.createRange().createContextualFragment(this._generateMarkup());
        const newElements = Array.from(newDom.querySelectorAll('*'));
        const curElements = Array.from(this._contentElement.querySelectorAll('*'));
        newElements.forEach( (newE, index) => {
            const curE = curElements[index];

            if (!newE.isEqualNode(curE) && newE.firstChild?.nodeValue.trim() !== ''){
                curE.textContent = newE.textContent;
            }
            if (!newE.isEqualNode(curE)) {
                Array.from(newE.attributes).forEach( attr => {
                    curE.setAttribute(attr.name, attr.value)
                });
            }

        })
    }

    _clear() {
        this._contentElement.innerHTML = '';
    }

    _beforeEndRender() {

    }

}


