import View from './view';

class ListView extends View {
    _contentElement = document.querySelector('.product-list');
    _items;


    addHandlerLoad(handler) {
        const that = this;
        if (!this._contentElement) return;
        this._items = this._contentElement.querySelectorAll('.product__item');
        window.addEventListener('load', function () {
            handler(that.getData());
        })
    }

    _generateMarkup() {
        const html = this._data.map((item, index) => {

            console.log()
            return `${ (index === 0) ? "<div class='\"list-row\"'>" : ""}
                <div class="col-1-of-3" >
                    ${this._generateItemMarkup(item)}
                </div>
                ${((index + 1) % 3 === 0) && index !== 0 ? "</div><div class='\"list-row\"'>" : ""}`
        } )

        return html.join('');
    }

    _generateItemMarkup(item) {
        return `<div class="item-container">
                    <div class="item-container__image-box">
                        <figure>
                            <a href="${item.link}">
                                <img class="img item-container__image" src="${item.imageUrl}" alt="category img">
                            </a>
                        </figure>
                    </div>
                    <div class="item-container__content-box ">
                        <h3 class="item-container__brand"><a class="item-container__link btn-text link--item" href="${item.brandLink}">${item.brand}</a></h3>
                        <p class="paragraph">
                            <span class="item-container__title">
                                <a class="btn-text link--item" href="${item.link}">${item.name}</a>
                            </span><br>
                            <span class="item-container__price">$${item.price}</span>
                        </p>
                    </div>
                </div>`
    }


    getData() {
        if (this._items) return this._items;
    }

    _beforeEndRender() {

    }
}

export default new ListView();