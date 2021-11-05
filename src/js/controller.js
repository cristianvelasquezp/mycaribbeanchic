import View from './view';
import * as model from "./model";
import view from "./view";
import {modelItemsPerSlider} from "./model";

export const controlSlider = function() {
    const data = View.getData();
    model.modelSlider(data);
    view.render(model.state.slider);
}

const controlChangeSlider = function (data) {
    model.modelSliderChange(data);
    view.sliderChange(model.state.sliderGoTo.currentSlide);
}

const controlItemsPerSlider = function (data) {
    model.modelItemsPerSlider(data);
}

export const init = function () {
    View.addHandlerClick(controlChangeSlider);
    View.addHandlerLoad(controlItemsPerSlider);
    View.addHandlerResize(controlItemsPerSlider);
}

