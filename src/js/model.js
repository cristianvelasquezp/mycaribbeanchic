import {data} from "autoprefixer";

export const state = {
    results: {
        products: [],
        itemsPerPage: 12,
        currentPage: 1,
        itemsTotal: 0,
    },

    slider: [],
    sliderGoTo:{
        sliderLength: 0,
        currentSlide: 0,
        itemsPerSlider: 3,
    },
    pagination: {
    },
    variationColor: {
        color:[],
        colorSelected: null,
    },
    variations: {
        //Crear objetos por cada vairacion ejemplo color:{ items: [red, green, black], selected{red}}
    },
    productSearched: {
        url: 'http://localhost:8888/mycaribbeanchic/wp-json/cc/v1/search?term=',
    }
}

export const modelSlider =  function (data) {
    data.forEach( function (item) {
        const product = {
            id: item.dataset.id,
            link: item.dataset.link,
            name: item.dataset.name,
            imageUrl: item.dataset.image,
            price: item.dataset.price,
            brand: item.dataset.brand,
            brandLink: item.dataset.brandLink,
        }
        state.slider.push(product);
        state.sliderGoTo.sliderLength = data.length;
    })
}

export const modelProductList =  function (data) {
    data.forEach( function (item) {
        const product = {
            id: item.dataset.id,
            link: item.dataset.link,
            name: item.dataset.name,
            imageUrl: item.dataset.image,
            price: item.dataset.price,
            brand: item.dataset.brand,
            brandLink: item.dataset.brandLink,
        }
        state.results.products.push(product);
    })

    this.state.results.itemsTotal = data.length;
}

export const modelSliderChange = function (goTo) {

    state.sliderGoTo.currentSlide += goTo;
    if (state.sliderGoTo.currentSlide > 0 )
        state.sliderGoTo.currentSlide = state.sliderGoTo.sliderLength * -1 + state.sliderGoTo.itemsPerSlider;

    if ( state.sliderGoTo.currentSlide < (state.sliderGoTo.sliderLength * -1 + state.sliderGoTo.itemsPerSlider))
        state.sliderGoTo.currentSlide = 0;
}

export const modelItemsPerSlider = function (windowSize) {
    if (windowSize <= 600){
        state.sliderGoTo.itemsPerSlider = 1;
    }else {
        state.sliderGoTo.itemsPerSlider = 3;
    }
}

export const modelItemsLoadMore = function () {

}

export const modelVariationColor = function (data) {
    data.forEach(item => {
        const color = {
            name: item.dataset.colorName,
            hex: item.dataset.colorHex,
        }
        state.variationColor.color.push(color);
    });
}

//this function is going to set the variations object
export const modelSetVariation = function (data) {
    const variations = Array.from(data);
    variations.forEach(variation => {
        const id = variation.dataset.variation;
        state.variations[id] = {
            items: [],
            selected: null,
        };
        _modelSetVariationItems(variation, id)
    });
}

export const modelResetVariation = function(id) {
    //const items = state.variations[id].items;
    //items.forEach( (item, index) => {
        //item.disabled = false;
        //item.index = index + 1;
        modelUpdateVariation(id);
    //});//
    //state.variations[id].selected = null;
}

const _modelSetVariationItems = function (variation, id) {
    const items = variation.querySelectorAll('li');
    items.forEach( (item, index) => {
        const newItem = {
            name: item.dataset.name,
            value: item.dataset.value,
            disabled: false,
            index: index + 1,
        }
        state.variations[id].items.push(newItem);
    })
}

export const modelUpdateVariation = function (element){
    const id = element.attributes.id.value;
    const options = Array.from(element.options);
    const enabledOption = {}
    for( let i = 0; i < options.length; i++) {
        const option = options[i];
        const name = option.attributes.value.value;
        if (name !== '')
            enabledOption[name] = i;
    }
    for (const item of state.variations[id].items) {
        if(item.name in enabledOption) {
           item.index = enabledOption[item.name];
            item.disabled = false;
        } else {
            item.index = null;
            item.disabled = true;
        }
    }
    state.variations[id].selected = +element.selectedIndex;

}

export const modelUpdateIndexSelected = function(data) {
    if ( !(data.id && data.index) ) return
    state.variations[data.id].selected = data.index;
}

export const modelVariationColorSelected = function(color) {
    state.variationColor.colorSelected = color;
}


export const getResults = function ( page = 1) {
    state.results.currentPage = page;
    const start = (state.results.currentPage - 1) * state.results.itemsPerPage;
    const end = start + state.results.itemsPerPage;

    return state.results.products.slice(start,end);
}


export const modelSearchProduct =  function (product){

    const request = "holasss"

    console.log(request)

}