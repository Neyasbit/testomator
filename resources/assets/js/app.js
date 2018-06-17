require('./bootstrap');

window.Vue = require('vue');

Vue.component('question-edit-form', require('./components/QuestionEditForm'));

new Vue({
    el: '#vue-app'
});
