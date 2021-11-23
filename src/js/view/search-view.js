import View from './view';
import {state} from "../model";

class SearchView extends View {
    _searchContainer = document.querySelector('.search-container');
    _contentElement = document.querySelector('.search-container__results');
    _searchButton = document.querySelector('.menu__item--search');
    _closeButton = document.querySelector('.search-container__exit');
    _searchInput = this._searchContainer.querySelector('.search-container__input-text');
    _timeoutID= undefined;
    _delay= 2000;


    constructor() {
        super();
        this.addHandlerClick();
        this.addHandlerClose();
        this.addHandlerCloseEsc();
    }

    addHandlerClick() {
        this._searchButton.addEventListener('click', this._toggleContainer.bind(this));
    }

    addHandlerClose() {
        this._closeButton.addEventListener('click', this._toggleContainer.bind(this))
    }

    addHandlerKey(handler) {
        const that = this
        this._searchInput.addEventListener('keydown', function (e) {
            clearTimeout(that._timeoutID);
            that._timeoutID = setTimeout( function () {
                handler(that._searchInput.value);
            }, that._delay );

        })
    }


    addHandlerCloseEsc(){
        const that = this;
        document.addEventListener('keydown', function(e) {
            if (e.keyCode === 27)
                that._searchContainer.classList.remove('search-container--active');
        })
    }

    _toggleContainer(){
        this._searchContainer.classList.toggle('search-container--active');
    }

    _generateMarkup() {
    }

}

export default new SearchView();