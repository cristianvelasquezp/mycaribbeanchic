export default class View {
    _data;

    render(data) {
        this._data = data;
        this._clear();

        this._contentElement.insertAdjacentHTML('beforeend', this._generateMarkup());

        this._beforeEndRender();
    }

    _clear() {
        this._contentElement.innerHTML = '';
    }

    _beforeEndRender() {

    }

}


