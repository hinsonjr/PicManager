import Vue from 'vue';
require('./bootstrap');

import AddPicForm from  './components/AddPicForm.vue';

const app = new Vue({
    el: '#app',
    components: { AddPicForm } // Note!!!
});

/*
 * 
 var addPicForm = Vue.component('addPicForm',{
	template: '#addPicForm',
	data: function() {
		return this.pics
	},
	props : ['pics']
});

new Vue({
	
	el:"#app",
	components: {
	 addPicForm: addPicForm
	},
	ready: function() {
	}
});
 * 
 * 
 */