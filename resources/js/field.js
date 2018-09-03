Nova.booting((Vue, router) => {
    Vue.component('index-toggle', require('./components/IndexField'));
    Vue.component('detail-toggle', require('./components/DetailField'));
    Vue.component('form-toggle', require('./components/FormField'));
})
