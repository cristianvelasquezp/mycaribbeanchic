import * as model from "./model";
import SliderView from "./view/slider-view"
import {modelItemsPerSlider} from "./model";


export const controlSlider = function(data2) {
    const data = data2;
    model.modelSlider(data);
    SliderView.render(model.state.slider);
}

const controlChangeSlider = function (data) {
    model.modelSliderChange(data);
    SliderView.sliderChange(model.state.sliderGoTo.currentSlide);
}

const controlItemsPerSlider = function (data) {
    model.modelItemsPerSlider(data);
}

export const init = function () {
    SliderView.addHandlerClick(controlChangeSlider);
    SliderView.addHandlerLoad(controlSlider, controlItemsPerSlider);
    SliderView.addHandlerResize(controlItemsPerSlider);
}

