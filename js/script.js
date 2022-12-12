"use strict";

const {createApp} = Vue;

const app = createApp({
    data() {
        return {
            message: 'funziona'
        }
    },
}).mount('#app');