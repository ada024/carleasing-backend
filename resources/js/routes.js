
let home = require('./components/Home.vue').default;
let page2 = require('./components/page2').default;


export const routes = [
    { path: '/', component: home, name: '/' },
    { path: '/page2', component: page2, name: 'page2' }
]
