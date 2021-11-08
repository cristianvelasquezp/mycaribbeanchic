import {data} from "autoprefixer";

export const state = {
    products: [],
    slider: [],
    sliderGoTo:{
        sliderLength: 0,
        currentSlide: 0,
        itemsPerSlider: 3,
    },
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
        state.products.push(product);
    })
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