import View from './view';

class SliderView extends View {
    _containerSlider = document.querySelector('.slider');
    _contentElement = document.querySelector('.slider__items');
    _sliderItems;

    addHandlerClick( handler ) {
        if(this._containerSlider){
            this._containerSlider.addEventListener('click', function ( e) {
                const clicked = e.target.closest('.slider__arrow');
                if (!clicked) return;
                const goTo = +clicked.dataset.goto;
                handler(goTo);
            })
        }
    }

    addHandlerLoad(handlerData,handler) {
        const that = this;
        if(!this._containerSlider) return
        this._sliderItems = this._containerSlider.querySelectorAll('.slider__item');
        handlerData(this.getData())
        window.addEventListener('load', function () {
            handler(this.innerWidth);
            that._setHeightSliderItems();
            that._setHeightArrows();
        })
    }
    addHandlerResize(handler) {
        const that = this;
        window.addEventListener('resize', function () {
            handler(this.innerWidth);
            that._setHeightSliderItems();
            that._setHeightArrows();
        })
    }

    _generateMarkup() {
        const html = this._data.map((item, index) => {
            return `
                <div class="slider__item" style="transform: translateX(${(100) * index }%)">
                    ${this._generateItemMarkup(item)}
                </div>`
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

    sliderChange(goTo) {
        this._containerSlider.querySelectorAll('.slider__item').forEach((item, index) => {
            item.style.transform = `translateX(${100 * (index + goTo) }%)`;
        })
    }

    getData() {
        if (this._sliderItems) return this._sliderItems;
    }

    _setHeightSliderItems() {
        const height = this._containerSlider?.querySelector('.slider__item').getBoundingClientRect().height;
        this._containerSlider.querySelector('.slider__items').style.height = `${height + 20}px`;
    }

    _setHeightArrows() {
        const height = this._containerSlider?.querySelector('.item-container__image-box').getBoundingClientRect().height;
        this._containerSlider?.querySelectorAll('.slider__arrow').forEach( arrow => arrow.style.top = `${height / 2 - 20}px`);
    }

    _beforeEndRender() {
        this._setHeightSliderItems();
        this._setHeightArrows();
    }
}

export default new SliderView();